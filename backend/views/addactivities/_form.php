<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NklActivityInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-activity-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'activity_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_beginDate')->textInput() ?>

    <?= $form->field($model, 'activity_beginTime')->textInput() ?>

    <?= $form->field($model, 'activity_endDate')->textInput() ?>

    <?= $form->field($model, 'activity_endTime')->textInput() ?>

    <?= $form->field($model, 'activity_hostDept')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
