<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiMessage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Mes_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mes_Info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mes_message')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
