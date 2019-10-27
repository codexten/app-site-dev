<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 29/7/18
 * Time: 5:38 PM
 */

namespace codexten\site\dev\controllers;

/**
 * Class siteAppController
 *
 * @package codexten\site\dev\controllers
 */
class SiteAppController extends \hidev\base\Controller
{
    public $defaultAction = 'deploy';

    public function actionDeploy()
    {
        return $this->take('siteApp')->save();
    }
}