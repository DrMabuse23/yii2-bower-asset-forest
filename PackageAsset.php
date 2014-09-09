<?php
namespace drmabuse\assetwood;

use yii\web\AssetBundle;


/**
 * Class PackageAsset
 * @package drmabuse\assetwood
 * @author Pascal Brewing
 */
class PackageAsset extends AssetBundle {

    public $sourcePath = '@vendor/drmabuse/yii2-bower-asset-wood/web';
    public $depends = [];
    public $forceCopy = true;
} 