<?php
/**
 * Craft Instruction Links plugin for Craft CMS 3.x
 *
 * Makes links in instruction fields open in new tabs/windows.
 *
 * @link      https://mildlygeeky.com
 * @copyright Copyright (c) 2017 Mildly Geeky, Inc.
 */

namespace mildlygeeky\craftinstructionlinks;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 *
 * @author    Mildly Geeky, Inc.
 * @package   CraftInstructionLinks
 * @since     1.0.0
 *
 */
class Bundle extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = '@mildlygeeky/craftinstructionlinks/resources';
        $this->depends = [
            CpAsset::class
        ];
        $this->js = [
            'script.js'
        ];
        parent::init();
    }
}