<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>
<div class="nkl-activity-info-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Nkl Activity Info', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'activity_id',
        'activity_info',
        'activity_location',
        'activity_beginDate',
        'activity_beginTime',
        //'activity_endDate',
        //'activity_endTime',
        //'activity_hostDept',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>


</div>