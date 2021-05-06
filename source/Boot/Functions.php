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
            return CONFIG_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONFIG_URL_TEST;
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
        return CONFIG_URL_TEST . "/{$uri}";
    }

    return CONFIG_URL_TEST;
}


