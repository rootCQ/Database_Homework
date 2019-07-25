<?php
/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295
 * Views for news overview on the backend.
 */

use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Search News';
?>

<div class="nkl-news-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

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

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
