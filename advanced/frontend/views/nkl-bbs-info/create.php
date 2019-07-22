<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NklBbsInfo */

$this->title = 'Create Nkl Bbs Info';
$this->params['breadcrumbs'][] = ['label' => 'Nkl Bbs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nkl-bbs-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
