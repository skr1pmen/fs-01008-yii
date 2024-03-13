<?php

namespace app\assets;

use yii\web\AssetBundle;

class BasicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/LineIcons.css',
        'css/style.css'
    ];
    public $js = [
    ];
}
