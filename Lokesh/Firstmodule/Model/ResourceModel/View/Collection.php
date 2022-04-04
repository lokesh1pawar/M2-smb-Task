<?php
namespace Lokesh\Firstmodule\Model\ResourceModel\View;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
 
    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Lokesh\Firstmodule\Model\View::class, \Lokesh\Firstmodule\Model\ResourceModel\View::class);
        // $this->_init(\Saiteja\Myownmodule\Model\View::class, \Saiteja\Myownmodule\Model\ResourceModel\View::class);

    }
}
