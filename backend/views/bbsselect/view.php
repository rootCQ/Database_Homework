<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NklBbsSelectRecord */

$this->title = $model->manager_id;
$this->params['breadcrumbs'][] = ['label' => 'Nkl Bbs Select Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nkl-bbs-select-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'manager_id' => $model->manager_id, 'bbs_solveTime' => $model->bbs_solveTime], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'manager_id' => $model->manager_id, 'bbs_solveTime' => $model->bbs_solveTime], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'manager_id',
            'bbs_isSelected',
            'bbs_solveTime',
            'bbs_id',
        ],
    ]) ?>

</div>
