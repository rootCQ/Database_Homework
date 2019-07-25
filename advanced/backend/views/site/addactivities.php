<?php

use yii\helpers\Html;

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295 
 * Views of activities addition for backend.
 */

/* @var $this yii\web\View */
/* @var $model backend\models\NklActivityInfo */

$this->title = 'Add Activity';
?>
<div class="nkl-activity-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_activityform', [
        'model' => $model,
    ]) ?>

</div>
