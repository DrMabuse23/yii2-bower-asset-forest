<?php
namespace drmabuse\assetforest;

use yii\web\AssetBundle;


/**
 * Class PackageAsset
 * @package drmabuse\assetforest
 * @author Pascal Brewing
 */
class PackageAsset extends AssetBundle {

    public $sourcePath = '@vendor/drmabuse/yii2-bower-asset-forest/web/bower_components';
    public $depends = [];
    public $forceCopy = true;
} 