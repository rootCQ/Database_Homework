<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivities */

$this->title = 'Create Yii Activities';
$this->params['breadcrumbs'][] = ['label' => 'Yii Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-activities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
