<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Newsinfo */

$this->title = 'Update Newsinfo: ' . $model->news_id;
$this->params['breadcrumbs'][] = ['label' => 'Newsinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->news_id, 'url' => ['view', 'id' => $model->news_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="newsinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
