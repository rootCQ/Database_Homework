<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiMessage */

$this->title = 'Create Yii Message';
$this->params['breadcrumbs'][] = ['label' => 'Yii Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
