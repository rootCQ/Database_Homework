<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiActivitiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-activities-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Activities', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ac_id',
            'ac_activities',
            'ac_location',
            'ac_begindate',
            'ac_begintime',
            //'ac_enddate',
            //'ac_endtime',
            //'ac_hostdept',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
