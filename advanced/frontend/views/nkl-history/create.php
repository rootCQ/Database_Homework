<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\NklHistory */

$this->title = 'Create Nkl History';
$this->params['breadcrumbs'][] = ['label' => 'Nkl Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
