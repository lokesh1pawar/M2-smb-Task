<?php

namespace Lokesh\Firstmodule\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Lokesh\Firstmodule\Model\ResourceModel\View\Collection as ViewCollection;
use \Lokesh\Firstmodule\Model\ResourceModel\View\CollectionFactory as ViewCollectionFactory;
use \Lokesh\Firstmodule\Model\View;

class Article extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_viewCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        ViewCollectionFactory $viewCollectionFactory,
        array $data = []
    ) {
        $this->_viewCollectionFactory  = $viewCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Post[]
     */
    public function getCollection()
    {
        /** @var ViewCollection $viewCollection */
        $viewCollection = $this->_viewCollectionFactory ->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getArticleUrl(
        View $view
    ) {
        return '/mymodule/index/index/' . $view->getId();
    }

}