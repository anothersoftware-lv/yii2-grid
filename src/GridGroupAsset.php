<?php

/**
 * @package   yii2-grid
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2019
 * @version   3.3.1
 */

namespace kartik\grid;

use kartik\base\AssetBundle;

/**
 * Asset bundle for row grouping functionality of [[GridView]] widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class GridGroupAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/kv-grid-group']);
        parent::init();
    }
}
