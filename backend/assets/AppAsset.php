<?php
/**
 * @link http://php.itcast.cn/
 * @copyright Copyright (c) 2015 itcast
 * @license all rights reserved
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author 苏小林 <suxiaolin@mail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'backend\assets\ScaleAsset',
    ];
}
