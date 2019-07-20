<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Newsinfo */

$this->title = 'Create Newsinfo';
$this->params['breadcrumbs'][] = ['label' => 'Newsinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
