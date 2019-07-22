<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NklNewsInfo */

$this->title = 'Update Nkl News Info: ' . $model->news_id;
$this->params['breadcrumbs'][] = ['label' => 'Nkl News Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->news_id, 'url' => ['view', 'id' => $model->news_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nkl-news-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
