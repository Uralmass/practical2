<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'markup/assets/css/font-awesome.min.css',
        'markup/assets/css/animate.min.css',
        'markup/assets/css/owl.carousel.css',
        'markup/assets/css/owl.theme.css',
        'markup/assets/css/owl.transition.css',
        'markup/assets/css/style.css',
        'markup/assets/css/responsive.min.css',

    ];
    public $js = [
        'markup/assets/js/jquery-1.11.3.min.js',
        'markup/assets/js/bootstrap.min.js',
        'markup/assets/js/owl.carousel.min.js',
        'markup/assets/js/jquery/stickit.min.js',
        'markup/assets/js/menu.js',
        'markup/assets/js/scripts.js',

    ];
    public $depends = [

    ];
}
