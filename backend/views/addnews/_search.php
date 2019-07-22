<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NklNewsInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-news-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'news_id') ?>

    <?= $form->field($model, 'news_title') ?>

    <?= $form->field($model, 'news_releaser') ?>

    <?= $form->field($model, 'news_releaseTime') ?>

    <?= $form->field($model, 'news_link') ?>

    <?php // echo $form->field($model, 'news_isSelected') ?>

    <?php // echo $form->field($model, 'news_isSolved') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
