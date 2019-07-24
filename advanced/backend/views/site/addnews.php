<?php
$this->title = 'News management';
use yii\helpers\Html;
use  yii\web\Response;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\NklNewsInfo */

 $this->title = 'Add News';
// $this->params['breadcrumbs'][] = ['label' => 'Nkl News Infos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;

?>
<div class="nkl-news-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_newsform', [
        'model' => $model,
    ]) ?>


</div>
