<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NklBbsSelectRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-bbs-select-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'manager_id')->textInput() ?>

    <?= $form->field($model, 'bbs_isSelected')->textInput() ?>

    <?= $form->field($model, 'bbs_solveTime')->textInput() ?>

    <?= $form->field($model, 'bbs_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
