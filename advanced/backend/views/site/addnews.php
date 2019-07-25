<?php
$this->title = 'News management';
use yii\helpers\Html;
use  yii\web\Response;
use yii\helpers\Url;

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295 
 * Views for news addition for backend.
 */

/* @var $this yii\web\View */
/* @var $model backend\models\NklNewsInfo */

 $this->title = 'Add News';

?>
<div class="nkl-news-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_newsform', [
        'model' => $model,
    ]) ?>


</div>
