<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NklActivityInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nkl-activity-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['activities'],
        'method' => 'get',
    ]); ?>

    <?php  
    //echo  $form->field($model, 'activity_id')
    echo '<label style=" padding:10px 0px 10px 0px">活动预告查询：</label>'
     ?>

    <?= $form->field($model, 'activity_info') ?>

    <?= $form->field($model, 'activity_location') ?>

    <?= $form->field($model, 'activity_beginDate') ?>

    <?= $form->field($model, 'activity_beginTime') ?>

    <?php // echo $form->field($model, 'activity_endDate') ?>

    <?php // echo $form->field($model, 'activity_endTime') ?>

    <?php // echo $form->field($model, 'activity_hostDept') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
