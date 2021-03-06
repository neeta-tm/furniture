<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @author     bhavi.techmitraa.@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\NotFoundException;
use TechMitraa\StoreInfo\Block\StoreInfoView;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_storeinfoview;

	public function __construct(
        Context $context,
        StoreInfoView $storeinfoview
    ) {
        $this->_storeinfoview = $storeinfoview;
        parent::__construct($context);
    }

	public function execute()
    {
    	if(!$this->_storeinfoview->getSingleData()){
    		throw new NotFoundException(__('Parameter is incorrect.'));
    	}
    	
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
