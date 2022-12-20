<?php
namespace MageMastery\Blog\Model\ResourceModel\Post;
use MageMastery\Blog\Model\ResourceModel\Post as PostResource;
use MageMastery\Blog\Model\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}
