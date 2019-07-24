<?php

use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Search News';
?>

<div class="nkl-news-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'news_id',
            'news_title',
            'news_releaser',
            'news_releaseTime',
            'news_link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
