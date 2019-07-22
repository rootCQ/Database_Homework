<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NklHistoryInfo */

$this->title = 'Create Nkl History Info';
$this->params['breadcrumbs'][] = ['label' => 'Nkl History Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-history-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
