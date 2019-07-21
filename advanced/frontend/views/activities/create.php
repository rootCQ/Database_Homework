<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NklActivityInfo */

$this->title = 'Create Nkl Activity Info';
$this->params['breadcrumbs'][] = ['label' => 'Nkl Activity Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-activity-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
