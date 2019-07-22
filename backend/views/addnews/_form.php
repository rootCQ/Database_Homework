<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NklNewsInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-news-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_releaser')->textInput() ?>

    <?= $form->field($model, 'news_releaseTime')->textInput() ?>

    <?= $form->field($model, 'news_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_isSelected')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
