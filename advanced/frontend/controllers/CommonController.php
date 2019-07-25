<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
/**
 * Team: @NKL,NKU
 * Coding by 朱心怡 1711304
 * common controller for shop.
 */
class CommonController extends Controller
{
    public function init()
    {
        if (Yii::$app->session['admin']['isLogin'] != 1) {
            return $this->redirect(['/admin/public/login']);
        }
    }
}
