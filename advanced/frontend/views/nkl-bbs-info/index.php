<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NklBbsInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nkl Bbs Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-bbs-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nkl Bbs Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bbs_id',
            'bbs_time',
            'bbs_userNickname',
            'bbs_userDescribe',
            'bbs_content',
            //'bbs_isSelected',
            //'bbs_isSolved',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
