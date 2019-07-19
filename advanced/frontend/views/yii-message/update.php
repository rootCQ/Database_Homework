<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiMessage */

$this->title = 'Update Yii Message: ' . $model->Mes_ID;
$this->params['breadcrumbs'][] = ['label' => 'Yii Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Mes_ID, 'url' => ['view', 'id' => $model->Mes_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
