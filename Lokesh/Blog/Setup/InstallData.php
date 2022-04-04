<?php

namespace Lokesh\Blog\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

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
        $conn = $setup->getConnection(); 
        $tableName = $setup->getTable('lokesh_blog');

            $data = [
                [
                    'title' => 'How to create table in Magento2',
                    'description' => 'Content of the first post.',
                    'status' => 1,
                ],
                [
                    'title' => 'How to insert data in table of Magento2',
                    'description' => 'Content of the second post.',
                    'status' => 0,
                ],
            ];
           $conn->insertMultiple($tableName, $data);
        $setup->endSetup();
    }
}