<?php
namespace drmabuse\assetwood\bundle;

use drmabuse\assetwood\PackageAsset;

/**
 * Class DropZoneAsset
 * @package drmabuse\assetwood\bundle
 * @author Pascal Brewing
 */
class DropZoneAsset extends PackageAsset {


    public $js  = [
        'dropzone/downloads/dropzone.js',

    ];

    public $css = [
        'dropzone/downloads/css/basic.css',
        'dropzone/downloads/css/dropzone.css'
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
} 