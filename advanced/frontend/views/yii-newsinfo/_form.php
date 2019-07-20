<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Newsinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="newsinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_date')->textInput() ?>

    <?= $form->field($model, 'news_content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
