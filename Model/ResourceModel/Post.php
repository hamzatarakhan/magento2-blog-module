<?php
namespace MageMastery\Blog\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    private const TABLE_NAME = 'magemastery_blog_post';
    private const PRIMARY_KEY= 'post_id';
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init(self::TABLE_NAME,self::PRIMARY_KEY');
    }
}
