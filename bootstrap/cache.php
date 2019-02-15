<?php

/**
 * ECTouch - A Modern E-Commerce Platform
 *
 * @package  ECTouch
 * @homepage https://www.ectouch.cn
 */

if (version_compare(PHP_VERSION, '7.1.3', '<')) {
    die('require PHP > 7.1.3 !');
}

/*
|--------------------------------------------------------------------------
| 应用名称
|--------------------------------------------------------------------------
*/

define('APPNAME', 'ECTouch');

/*
|--------------------------------------------------------------------------
| 应用版本
|--------------------------------------------------------------------------
*/

define('VERSION', 'v3.0.0');

/*
|--------------------------------------------------------------------------
| 发布时间
|--------------------------------------------------------------------------
*/

define('RELEASE', '20181101');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('EC_CHARSET', 'utf-8');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('ADMIN_PATH', 'seller');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('AUTH_KEY', 'this is a key');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('OLD_AUTH_KEY', '');

/*
|--------------------------------------------------------------------------
| API时间
|--------------------------------------------------------------------------
*/

define('API_TIME', '2019-02-15 05:44:57');
