<?php

namespace Meetanshi\FacebookChat\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    public const XML_FB_MESSENGER_ENABLE = 'messenger/general/enable';
    public const XML_FB_APP_ID = 'messenger/general/app_id';
    public const XML_FB_PAGE_ID = 'messenger/general/page_id';
    public const XML_FB_COLOR = 'messenger/general/color_option';
    public const XML_FB_LOGIN_TEXT = 'messenger/general/login_message';
    public const XML_FB_LOGOUT_TEXT = 'messenger/general/logout_message';

    /**
     * Check if module is enabled.
     *
     * @param mixed $storeId
     *
     * @return mixed
     */
    public function isEnable(mixed $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FB_MESSENGER_ENABLE,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Get Facebook App ID.
     *
     * @param mixed $storeId
     *
     * @return mixed
     */
    public function getFBAppId(mixed $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FB_APP_ID,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Get Facebook Page ID.
     *
     * @param mixed $storeId
     *
     * @return mixed
     */
    public function getFBPageId(mixed $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FB_PAGE_ID,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Get Facebook chat color.
     *
     * @param mixed $storeId
     *
     * @return mixed
     */
    public function getFBColor(mixed $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FB_COLOR,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Get Facebook login text.
     *
     * @param mixed $storeId
     *
     * @return mixed
     */
    public function getFBLoginText(mixed $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FB_LOGIN_TEXT,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Get Facebook logout text.
     *
     * @param mixed $storeId
     *
     * @return mixed
     */
    public function getFBLogoutText(mixed $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_FB_LOGOUT_TEXT,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
