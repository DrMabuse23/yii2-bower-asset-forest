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
 * Class NgRoute
 * @package drmabuse\assetforest\bundle
 * @author Pascal Brewing <drmabuse@posteo.de>
 */
class NgRoute extends PackageAsset {

    public $js = [
        'angular-route/angular-route.js'
    ];

    public $depends = [
        'drmabuse\assetforest\bundle\AngularAsset'
    ];
} 