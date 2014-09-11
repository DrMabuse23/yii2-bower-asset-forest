<?php
/**
 * @link http://pascal-brewing.de 2014
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace drmabuse\assetforest\bundle;

use drmabuse\assetforest\PackageAsset;


/**
 * Class NgSanitize
 * @package drmabuse\assetforest\bundle
 * @author Pascal Brewing <drmabuse@posteo.de>
 */
class NgSanitize extends PackageAsset{

    /**
     * @var array
     */
    public $js = [
        'angular-sanitize/angular-sanitize.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        'drmabuse\assetforest\bundle\AngularAsset'
    ];
} 