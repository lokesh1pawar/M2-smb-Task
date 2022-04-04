<?php

namespace Lokesh\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Lokesh\Blog\Model\ResourceModel\View\Collection as ViewCollection;
use \Lokesh\Blog\Model\ResourceModel\View\CollectionFactory as ViewCollectionFactory;
// use \Lokesh\Blog\Model\View;
use \Lokesh\Blog\Model\ViewFactory as ViewFactory ;

class Mydata extends Template
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
        ViewFactory $viewFactory,
        array $data = []
    ) {
        $this->_viewCollectionFactory  = $viewCollectionFactory;
        $this->_viewFactory  = $viewFactory;
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

    public function getDataId()
	{
		$id = $this->getRequest()->getParam('id');
		$singleData = $this->_viewFactory->create()->load($id);
		// print_r($singleData); exit;
		return $singleData;
	}

    public function getcustomData()
	{
		// $id = $this->getRequest()->getParam('id');
		// $CData = $this->_viewFactory->create()->load($id);
		// print_r($singleData); exit;
        $vari = "Variable";
		return $vari;
	}

    public function getCars()
    {
        
        $cars = array("Volvo", "BMW", "Toyota");
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        
        return $cars;
        
    }
    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getArticleUrl(
         $view
    ) {
        // return '/blog/index/index/' . $view->getId();
        return $this->getUrl('blog/index/view/id/'.$view , ['_secure' => true]);
    }

}