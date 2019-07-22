<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NklActivityInfo */

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
