<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NklBbsSelectRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-bbs-select-record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'manager_id') ?>

    <?= $form->field($model, 'bbs_isSelected') ?>

    <?= $form->field($model, 'bbs_solveTime') ?>

    <?= $form->field($model, 'bbs_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
