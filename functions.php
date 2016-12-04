<?php
/**
 * Functions.php
 *
 */

/**
 * Theme URI
 *
 * Alias for  get_stylesheet_directory_uri()
 *
 * @return string
 */
function theme_uri()
{
    $path = get_stylesheet_directory_uri();
    $start = strpos($path, '//');
    if ($start !== false) {
        return substr($path, $start);
    }
    return $path;
}

/**
 * Theme Path
 *
 * Alias for  get_stylesheet_directory()
 *
 * @return string
 */
function theme_path()
{
    return get_stylesheet_directory();
}

register_nav_menu('main-nav');

