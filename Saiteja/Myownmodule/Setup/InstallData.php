<?php

namespace Saiteja\Myownmodule\Setup;

use \Magento\Framework\Setup\InstallDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 *
 * @package Thecoachsmb\Mymodule\Setup
 */
class InstallData implements InstallDataInterface
{

    /**
     * Creates sample articles
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($context->getVersion()
            && version_compare($context->getVersion(), '1.0.1') < 0
        ) {
            $tableName = $setup->getTable('thecoachsmb_article');

            $data = [
                
                    'title' => 'How to create table in Magento2',
                    'content' => 'Content of the first post.'
                
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}