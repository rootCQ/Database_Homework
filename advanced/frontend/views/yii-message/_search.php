<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiMessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-message-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Mes_ID') ?>

    <?= $form->field($model, 'Mes_Name') ?>

    <?= $form->field($model, 'Mes_Info') ?>

    <?= $form->field($model, 'Mes_message') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
