<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivities */

$this->title = 'Update Yii Activities: ' . $model->ac_id;
$this->params['breadcrumbs'][] = ['label' => 'Yii Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ac_id, 'url' => ['view', 'id' => $model->ac_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-activities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
