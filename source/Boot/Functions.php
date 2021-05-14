<?php

/**
 * ###############
 * ###   URL   ###
 * ###############
 */

/**
 * @param string $path
 * @return string
 */
function url($path = null)
{
    if($path) {
        return CONFIG_URL . "/{$path}";
    }

    return CONFIG_URL;
}

/**
 * @return string
 */
function url_back(): string
{
    return ($_SERVER['HTTP_REFERER'] ?? url());
}

function uri($uri = null)
{
    if($uri) {
        return CONFIG_URL_THEME . "/{$uri}";
    }

    return CONFIG_URL_THEME;
}


