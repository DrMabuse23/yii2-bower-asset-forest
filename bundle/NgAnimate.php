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
 * Class NgAnimate
 * @package drmabuse\assetforest\bundle
 * @author Pascal Brewing <drmabuse@posteo.de>
 */
class NgAnimate extends PackageAsset{

    /**
     * @var array
     */
    public $js = [
        'angular-animate/angular-animate.js'
    ];
    
    /**
     * @var array
     */
    public $depends = [
        'drmabuse\assetforest\bundle\AngularAsset'
    ];
} 