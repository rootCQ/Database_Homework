<?php

use yii\helpers\Html;
use backend\models\NklBbsInfo;


/* @var $this yii\web\View */
/* @var $model backend\models\NklBbsSelectRecord */

$this->title = 'Select BBS';
//$this->params['breadcrumbs'][] = ['label' => 'Nkl Bbs Select Records', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="nkl-bbs-select-record-create">

<h2>Unsolved BBS：</h2>
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
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_bbsform', [
        'model' => $model,
    ]) ?>

</div>
