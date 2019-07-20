<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiNewsinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Newsinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Newsinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'news_id',
            'news_title',
            'news_date',
            'news_content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
