<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NklBbsInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-bbs-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bbs_time')->textInput() ?>

    <?= $form->field($model, 'bbs_userNickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bbs_userDescribe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bbs_content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bbs_isSelected')->textInput() ?>

    <?= $form->field($model, 'bbs_isSolved')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
