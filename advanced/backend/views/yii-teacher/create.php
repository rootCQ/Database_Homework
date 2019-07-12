<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiTeacher */

$this->title = 'Create Yii Teacher';
$this->params['breadcrumbs'][] = ['label' => 'Yii Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-teacher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
