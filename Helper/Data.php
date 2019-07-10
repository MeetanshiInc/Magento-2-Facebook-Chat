<?php

namespace Meetanshi\FacebookChat\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_FB_MESSENGER_ENABLE = 'messenger/general/enable';
    const XML_FB_APP_ID = 'messenger/general/app_id';
    const XML_FB_PAGE_ID = 'messenger/general/page_id';
    const XML_FB_COLOR = 'messenger/general/color_option';
    const XML_FB_LOGIN_TEXT = 'messenger/general/login_message';
    const XML_FB_LOGOUT_TEXT = 'messenger/general/logout_message';

    public function isEnable($storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FB_MESSENGER_ENABLE,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getFBAppId($storeId = null){
        return $this->scopeConfig->getValue(
            self::XML_FB_APP_ID,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    public function getFBPageId($storeId = null){
        return $this->scopeConfig->getValue(
            self::XML_FB_PAGE_ID,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    public function getFBColor($storeId = null){
        return $this->scopeConfig->getValue(
            self::XML_FB_COLOR,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    public function getFBLoginText($storeId = null){
        return $this->scopeConfig->getValue(
            self::XML_FB_LOGIN_TEXT,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    public function getFBLogoutText($storeId = null){
        return $this->scopeConfig->getValue(
            self::XML_FB_LOGOUT_TEXT,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
