<?php

use yii\helpers\Html;
use yii\grid\GridView;

use backend\models\NklBbsInfo;
?>
<div class="nkl-bbs-select-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <h2>待筛选的留言如下：</h2>
    <br>
    <p><font size="3"><b>ID &nbsp&nbsp&nbsp&nbsp Content</b></font></p>

    <?php $NklBbsInfo = NklBbsInfo::find()->where(['bbs_isSolved' => '0'])->all();?> 

        <?php $count = NklBbsInfo::find()->count(); 
                $bbs = NklBbsInfo::find()->where(['bbs_isSolved' => '0'])->select(['bbs_id','bbs_content'])->all();
        ?> 

        <?php foreach ($bbs as $NklBbsInfo) : ?>
           <p> <?= Html::encode("{$NklBbsInfo->bbs_id}") ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <?= Html::encode("{$NklBbsInfo->bbs_content}") ?> </p>
        <?php endforeach; ?>

    <br>
    <br>

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
