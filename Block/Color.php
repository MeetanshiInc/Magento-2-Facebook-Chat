<?php

/**
 * Provider: Meetanshi.
 * Package: Meetanshi Messenger
 * Support: support@meetanshi.com (https://meetanshi.com/)
 */

namespace Meetanshi\FacebookChat\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Registry;

/**
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 */
class Color extends Field
{
    /**
     * @var mixed
     */
    protected $_coreRegistry;

    /**
     * Color constructor.
     *
     * @param Context $context
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    /**
     * Get element HTML with color picker.
     *
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     *
     * @param AbstractElement $element
     *
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = $element->getElementHtml();
        $cpPath = $this->getViewFileUrl('Meetanshi_FacebookChat::js');
        if (!$this->_coreRegistry->registry('colorpicker_loaded')) {
            $html .= '<script type="text/javascript" src="' . $cpPath.'/'.'jscolor.js"></script>';
            $this->_coreRegistry->registry('colorpicker_loaded', 1);
        }
        $html .= '<script type="text/javascript">
                var el = document.getElementById("' . $element->getHtmlId() . '");
                el.className = el.className + " jscolor{hash:true}";
            </script>';
        return $html;
    }
}
