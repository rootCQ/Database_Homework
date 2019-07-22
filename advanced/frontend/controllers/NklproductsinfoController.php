<?php
namespace frontend\controllers;
use yii\web\Controller;

class NklproductsinfoController extends Controller{
    public function actionIndex(){
    $this->layout = false;
    return $this->render("index");
    }


    public function actionPayment($productname){
    $new = $productname;
    $this->layout = false;
    return $this->render("payment",['new'=>$new]);
    }


    public function actionSucceed(){
  
    $this->layout = false;
    return $this->render("succeed");
    }
    public $enableCsrfValidation = false; 
}
