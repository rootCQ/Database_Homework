<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NklBbsInfo */

$this->title = 'Update Nkl Bbs Info: ' . $model->bbs_id;
$this->params['breadcrumbs'][] = ['label' => 'Nkl Bbs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bbs_id, 'url' => ['view', 'id' => $model->bbs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nkl-bbs-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
