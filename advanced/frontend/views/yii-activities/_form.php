<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-activities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ac_activities')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_begindate')->textInput() ?>

    <?= $form->field($model, 'ac_begintime')->textInput() ?>

    <?= $form->field($model, 'ac_enddate')->textInput() ?>

    <?= $form->field($model, 'ac_endtime')->textInput() ?>

    <?= $form->field($model, 'ac_hostdept')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
