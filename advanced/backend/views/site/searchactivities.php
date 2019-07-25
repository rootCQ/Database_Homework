<?php
/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295
 * Views for activities overview on the backend.
 */

use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Search Activities';
?>
<div class="nkl-activity-info-index">

<h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'activity_id',
        'activity_info',
        'activity_location',
        'activity_beginDate',
        'activity_endDate',
        'activity_hostDept',
        // ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>


</div>