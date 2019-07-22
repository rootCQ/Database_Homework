<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NklBbsInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-bbs-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bbs_id') ?>

    <?= $form->field($model, 'bbs_time') ?>

    <?= $form->field($model, 'bbs_userNickname') ?>

    <?= $form->field($model, 'bbs_userDescribe') ?>

    <?= $form->field($model, 'bbs_content') ?>

    <?php // echo $form->field($model, 'bbs_isSelected') ?>

    <?php // echo $form->field($model, 'bbs_isSolved') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
