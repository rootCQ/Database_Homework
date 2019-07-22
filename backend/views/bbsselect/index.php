<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NklBbsSelectRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nkl Bbs Select Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-bbs-select-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nkl Bbs Select Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'manager_id',
            'bbs_isSelected',
            'bbs_solveTime',
            'bbs_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
