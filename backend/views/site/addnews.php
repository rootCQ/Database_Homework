<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>
<div class="nkl-news-info-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Nkl News Info', ['create'], ['class' => 'btn btn-success']) ?>
</p>

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
        //'news_isSelected',
        //'news_isSolved',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>


</div>