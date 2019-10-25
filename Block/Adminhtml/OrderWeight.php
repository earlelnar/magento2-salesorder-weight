<?php
/**
 * @author: Earl Augustine Elnar
 * @email: acenplify@gmail.com
 */
namespace MageTim\OrderWeight\Block\Adminhtml;
use Magento\Backend\Block\Template;

class OrderWeight extends Template
{
    protected $_OrderInterface;

    protected $_ScopeConfigInterface;

    public function __construct(
        \Magento\Sales\Api\Data\OrderInterface $OrderInterface,
        \Magento\Framework\App\Config\ScopeConfigInterface $ScopeConfigInterface,
        Template\Context $context,
        array $data = []
    ){
        $this->_OrderInterface = $OrderInterface;
        $this->_ScopeConfigInterface = $ScopeConfigInterface;
        parent::__construct($context, $data);
    }

    public function getOrderWeight(){
        $orderid = $this->getRequest()->getParam('order_id');
        return $this->_OrderInterface->load($orderid)->getWeight();
    }

    public function getWeightUnit() {
        return $this->_ScopeConfigInterface->getValue('general/locale/weight_unit', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function numberFormat() {

    }

}