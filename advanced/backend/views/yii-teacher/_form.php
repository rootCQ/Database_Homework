<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tch_id')->textInput() ?>

    <?= $form->field($model, 'tch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tch_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
