<?php
namespace Lokesh\Blog\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Lokesh\Blog\Model\View::class, \Lokesh\Blog\Model\ResourceModel\View::class);
    }
}