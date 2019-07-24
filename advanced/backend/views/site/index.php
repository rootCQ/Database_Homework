<?php

/* @var $this yii\web\View */

$this->title = 'Managers';

use yii\helpers\Html;
use yii\widgets\LinkPager;
use backend\models\NklManagersInfo;
use  yii\db\ActiveRecord;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 style="color:#7e0c6e">They are NKLs!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <?php $NklManagersInfo = NklManagersInfo::find()->orderBy('manager_id ASC')->limit(5)->all(); ?>
            <?php foreach ($NklManagersInfo as $Nkler) : ?>
                <div class="col-lg-4">
                    <h2 style="color:#9966cc"><?= Html::encode("{$Nkler->manager_name}") ?></h2>
                    <p>ID：<?= Html::encode("{$Nkler->manager_stuNum}") ?></p>
                    <p>College：<?= Html::encode("{$Nkler->manager_college}") ?></p>
                    <p>Email：<?= Html::encode("{$Nkler->manager_email}") ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>