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

use Craft;
use craft\base\Plugin;

/**
 *
 * @author    Mildly Geeky, Inc.
 * @package   CraftInstructionLinks
 * @since     1.0.0
 *
 */
class CraftInstructionLinks extends Plugin
{
    /**
     * @var CraftInstructionLinks
     */
    public static $plugin;

    public function init()
    {
        parent::init();
        self::$plugin = $this;
        if (Craft::$app->request->isCpRequest) {
            Craft::$app->getView()->registerAssetBundle(Bundle::class);
        }
    }
}
