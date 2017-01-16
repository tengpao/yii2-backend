<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/3/14
 * Time: 8:16 PM
 */

namespace common\assets;

use yii\web\AssetBundle;

class Html5shiv extends AssetBundle
{

    public $js = [
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
        'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'
    ];

    public $jsOptions = [
        'condition'=>'lt IE 9'
    ];
}
