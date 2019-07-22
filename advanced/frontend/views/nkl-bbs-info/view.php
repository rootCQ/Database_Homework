<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\NklBbsInfo */

$this->title = $model->bbs_id;
$this->params['breadcrumbs'][] = ['label' => 'Nkl Bbs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nkl-bbs-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bbs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bbs_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bbs_id',
            'bbs_time',
            'bbs_userNickname',
            'bbs_userDescribe',
            'bbs_content',
            'bbs_isSelected',
            'bbs_isSolved',
        ],
    ]) ?>

</div>
