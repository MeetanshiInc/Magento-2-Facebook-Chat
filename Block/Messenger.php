<?php

namespace Meetanshi\FacebookChat\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Meetanshi\FacebookChat\Helper\Data;

class Messenger extends Template
{
    protected $helperData;
    public function __construct(
        Context $context,
        Data $helperData
    )
    {
        parent::__construct($context);
        $this->helperData = $helperData;
    }
}
