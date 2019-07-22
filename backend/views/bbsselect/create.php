<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NklBbsSelectRecord */

$this->title = 'Create Nkl Bbs Select Record';
$this->params['breadcrumbs'][] = ['label' => 'Nkl Bbs Select Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-bbs-select-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
