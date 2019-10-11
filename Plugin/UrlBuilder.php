<?php

namespace VT\Links\Plugin;

/**
 * Class UrlBuilder
 * @package VT\Links\Plugin
 */
class UrlBuilder
{
    /**
     * Remove trailing slash for all links output via getUrl
     * @param $subject
     * @param $result
     * @return string
     */
    public function afterGetUrl($subject, $result)
    {
        return rtrim($result, '/');
    }
}
