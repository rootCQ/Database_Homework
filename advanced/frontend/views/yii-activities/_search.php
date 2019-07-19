<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivitiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-activities-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ac_id') ?>

    <?= $form->field($model, 'ac_activities') ?>

    <?= $form->field($model, 'ac_location') ?>

    <?= $form->field($model, 'ac_begindate') ?>

    <?= $form->field($model, 'ac_begintime') ?>

    <?php // echo $form->field($model, 'ac_enddate') ?>

    <?php // echo $form->field($model, 'ac_endtime') ?>

    <?php // echo $form->field($model, 'ac_hostdept') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
