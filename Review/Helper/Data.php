<?php

namespace I95dev\Review\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Review\Model\RatingFactory;
use Magento\Review\Model\ResourceModel\Review\CollectionFactory;
use Magento\Review\Model\Review;

class Data extends AbstractHelper
{

    protected $ratingobj;
    protected $productobj;
    protected $reviewobj;

    public function __construct(
        StoreManagerInterface $storeManager,
        ProductFactory $productobj,
        RatingFactory $ratingFactory,
        CollectionFactory $reviewFactory)
    {
            $this->_storeManager = $storeManager;
            $this->productobj = $productobj;
            $this->ratingobj = $ratingFactory;
            $this->reviewobj = $reviewFactory;
     }

     public function getProductReview($productId)
     {
            $collection = $this->reviewobj->create()
            ->addStatusFilter(Review::STATUS_APPROVED)
            ->addEntityFilter('product',$productId)
            ->setDateOrder();
     }

     public function getCollectionOfRatting()
     {
             return $this->ratingobj->create()
             ->getResourceCollection()
             ->addEntityFilter('product')
             ->setPositionOrder()
             ->setStoreFilter($this->_storeManager->getStore()->getId())
             ->addRatingPerStoreName($this->_storeManager->getStore()->getId())
             ->load();
      }
}
