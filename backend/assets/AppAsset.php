<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/metisMenu/metisMenu.min.css',
        'dist/css/sb-admin-2.css',
        'vendor/font-awesome/css/font-awesome.min.css',
        'font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'vendor/metisMenu/metisMenu.min.js',
        'dist/js/sb-admin-2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
