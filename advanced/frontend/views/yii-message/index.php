<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Mes_ID',
            'Mes_Name',
            'Mes_Info',
            'Mes_message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
