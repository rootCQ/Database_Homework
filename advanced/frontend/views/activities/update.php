<?php

use yii\helpers\Html;
/**
 * Team: @NKL,NKU
 * Coding by 李伟 1711350
 * This is the activities update for the activities views generated by gii.
 */

/* @var $this yii\web\View */
/* @var $model common\models\NklActivityInfo */

$this->title = 'Update Nkl Activity Info: ' . $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Nkl Activity Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_id, 'url' => ['view', 'id' => $model->activity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nkl-activity-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
