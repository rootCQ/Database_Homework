<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\NklBbsInfo;
$this->title = 'Search BBS Selection Record';
?>
<div class="nkl-bbs-select-record-index">

    <h1><?= Html::encode($this->title) ?></h1>



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

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
