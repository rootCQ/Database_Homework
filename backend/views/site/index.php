<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Html;
use yii\widgets\LinkPager;
use backend\models\NklManagersInfo;
use  yii\db\ActiveRecord;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>These are NKLs!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            <?php $NklManagersInfo = NklManagersInfo::find()->where(['manager_id' => '0001'])->one();?>
                <h2><?= Html::encode("{$NklManagersInfo->manager_name}") ?></h2>
                <p>ID：<?= Html::encode("{$NklManagersInfo->manager_stuNum}") ?></p>
                <p>College：<?= Html::encode("{$NklManagersInfo->manager_college}") ?></p>
                <p>Email：<?= Html::encode("{$NklManagersInfo->manager_email}") ?></p>

            </div>
            <div class="col-lg-4">
            <?php $NklManagersInfo = NklManagersInfo::find()->where(['manager_id' => '0002'])->one();?>
                <h2><?= Html::encode("{$NklManagersInfo->manager_name}") ?></h2>
                <p>ID：<?= Html::encode("{$NklManagersInfo->manager_stuNum}") ?></p>
                <p>College：<?= Html::encode("{$NklManagersInfo->manager_college}") ?></p>
                <p>Email：<?= Html::encode("{$NklManagersInfo->manager_email}") ?></p>

            </div>
            <div class="col-lg-4">
            <?php $NklManagersInfo = NklManagersInfo::find()->where(['manager_id' => '0003'])->one();?>
                <h2><?= Html::encode("{$NklManagersInfo->manager_name}") ?></h2>
                <p>ID：<?= Html::encode("{$NklManagersInfo->manager_stuNum}") ?></p>
                <p>College：<?= Html::encode("{$NklManagersInfo->manager_college}") ?></p>
                <p>Email：<?= Html::encode("{$NklManagersInfo->manager_email}") ?></p>

            </div>
            <div class="col-lg-4">
            <?php $NklManagersInfo = NklManagersInfo::find()->where(['manager_id' => '0004'])->one();?>
                <h2><?= Html::encode("{$NklManagersInfo->manager_name}") ?></h2>
                <p>ID：<?= Html::encode("{$NklManagersInfo->manager_stuNum}") ?></p>
                <p>College：<?= Html::encode("{$NklManagersInfo->manager_college}") ?></p>
                <p>Email：<?= Html::encode("{$NklManagersInfo->manager_email}") ?></p>

            </div>

            <div class="col-lg-4">
            <?php $NklManagersInfo = NklManagersInfo::find()->where(['manager_id' => '0005'])->one();?>
                <h2><?= Html::encode("{$NklManagersInfo->manager_name}") ?></h2>
                <p>ID：<?= Html::encode("{$NklManagersInfo->manager_stuNum}") ?></p>
                <p>College：<?= Html::encode("{$NklManagersInfo->manager_college}") ?></p>
                <p>Email：<?= Html::encode("{$NklManagersInfo->manager_email}") ?></p>

            </div>
        </div>

    </div>
</div>
