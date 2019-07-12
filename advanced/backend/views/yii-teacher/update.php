<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiTeacher */

$this->title = 'Update Yii Teacher: ' . $model->tch_id;
$this->params['breadcrumbs'][] = ['label' => 'Yii Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tch_id, 'url' => ['view', 'id' => $model->tch_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
