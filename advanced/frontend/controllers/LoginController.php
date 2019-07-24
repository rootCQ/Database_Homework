<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Login;
use Yii;

class LoginController extends Controller
{
    public function actionLogin()
    {
        $this->layout = false;
        $model = new Login;
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if ($model->login($post)) {
                $this->redirect(['site/shop1']);
                Yii::$app->end();
            }
        }
        return $this->render("login", ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->session->removeAll();
        if (!isset(Yii::$app->session['user']['isLogin'])) {
            $this->redirect(['Login/login']);
            Yii::$app->end();
        }
        $this->goback();
    }




}
