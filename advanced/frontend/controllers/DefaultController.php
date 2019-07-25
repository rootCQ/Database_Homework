<?php
/**
 * Team: @NKL,NKU
 * Coding by 朱心怡 1711304
 * default controller for shop.
 */
namespace frontend\controllers;

use yii\web\Controller;
use frontend\controllers\CommonController;

class DefaultController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
}
