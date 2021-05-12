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
function url(string $path = null): string
{
    if($path) {
            return CONFIG_URL . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
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


