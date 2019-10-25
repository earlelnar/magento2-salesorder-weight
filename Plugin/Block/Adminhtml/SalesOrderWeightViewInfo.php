<?php
namespace MageTim\OrderWeight\Plugin\Block\Adminhtml;

class SalesOrderWeightViewInfo
{
    /**
     * @param \Magento\Sales\Block\Adminhtml\Order\View\Info $subject
     * @param string $result
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterToHtml(
        \Magento\Sales\Block\Adminhtml\Order\View\Info $subject,
        $result
    ) {
        $locatorBlock = $subject->getLayout()->getBlock('weight_status');
        if ($locatorBlock !== false && $subject->getNameInLayout() == 'order_info') {
            $result = $result . $locatorBlock->toHtml();
        }

        return $result;
    }
}
