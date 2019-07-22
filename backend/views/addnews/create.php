<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NklNewsInfo */

$this->title = 'Create Nkl News Info';
$this->params['breadcrumbs'][] = ['label' => 'Nkl News Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-news-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
