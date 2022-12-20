<?php
namespace MageMastery\Blog\Model;
use MageMastery\Blog\Model\ResourceModel\Post as PostResource;
class post extends \Magento\Framework\Model\AbstractModel 
{
    public function __construct()
    {
        $this->_init(PostResource::class);
        parent::_construct();
    }
}
