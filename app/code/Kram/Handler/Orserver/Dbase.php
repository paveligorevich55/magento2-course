<?php
namespace Kram\Handler\Observer;
class Dbase implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $displayText = $observer->getData('product');
		$displayText->setText('Execute event successfully.');

		return $this;
    }
}
