<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NklBbsSelectRecord */

$this->title = 'Update Nkl Bbs Select Record: ' . $model->manager_id;
$this->params['breadcrumbs'][] = ['label' => 'Nkl Bbs Select Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->manager_id, 'url' => ['view', 'manager_id' => $model->manager_id, 'bbs_solveTime' => $model->bbs_solveTime]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nkl-bbs-select-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
