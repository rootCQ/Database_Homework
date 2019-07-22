<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NklHistoryInfo */

$this->title = 'Update Nkl History Info: ' . $model->history_id;
$this->params['breadcrumbs'][] = ['label' => 'Nkl History Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->history_id, 'url' => ['view', 'id' => $model->history_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nkl-history-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
