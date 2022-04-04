<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Thecoachsmb\Mymodule\Controller\Index;

use Magento\Framework\App\Action\Action as Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * Show Contact Us page
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
