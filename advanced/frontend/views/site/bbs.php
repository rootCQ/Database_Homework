<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\NklBbsInfo;
use yii\data\ActiveDataProvider;
use yii\widgets\LinkPager;
use yii\data\Pagination;
?>
<!DOCTYPE html>
<html id="home" class="slider-area">
<link rel="stylesheet" type="text/css" href="statics/css/sinaFaceAndEffec.css">
<title></title>
</head>
<script src="statics/js/uploadPreview.js" type="text/javascript"></script>
<script src="statics/js/jquery.min.js"></script>
<script src="statics/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="statics/js/sinaFaceAndEffec.js"></script>

<body>
    <div id="content" style="width: 700px; height: auto;margin-left:50px;">
        <div class="wrap">
            <h2 style="padding-bottom:20px;font-family:华文中宋;">
                我爱南开 <img src="statics/img/nk100.png" style="width:60px;">
            </h2>
            <img src="statics/img/2.gif" style="width:40px;">
        </div>
        <div class="content">
            <div class="yii-message-form">

                <?php $form = ActiveForm::begin(); ?>
                <label for="title">姓名</label>
                <?php echo $form->field($model, 'bbs_userNickname', [
                    'template' => '<div class="form-group">{input}</div>',
                ])->input('text', [
                    'maxlength' => true,
                    'class' => "form-control",
                    'placeholder' => "请输入姓名"
                ]) ?>

                <label for="info">校友信息</label>
                <?php echo $form->field($model, 'bbs_userDescribe', [
                    'template' => '<div class="form-group">{input}</div>',
                ])->input('text', [
                    'maxlength' => true,
                    'class' => "form-control",
                    'placeholder' => "校友信息，如2003级商学院信管专业，南开大学教师等"
                ]) ?>
                <!-- 在使用input的时候需要在首先说明是text的type属性，因为默认一个填充的属性为type属性且为必填项 -->
                <label for="message">祝福语</label>
                <?php echo  $form->field($model, 'bbs_content', [
                    // 可以自定义,并会覆盖掉form中设置的属性
                    'template' => '<div class="cont-box">{input}</div>',
                ])->textarea([
                    'class' => 'text',
                    'placeholder' => '请写下你的祝福,通过审核后可以被更多人看见哦！'
                ]) ?>


                <div class="tools-box">
                    <div class="operator-box-btn"><span class="face-icon">☺</span><span class="img-icon">▧</span></div>
                    <?= Html::submitButton('祝福南开', ['class' => 'submit-btn', 'onclick' => 'trans()']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
    <div id="info-show">
        <?php
        $query = NklBbsInfo::find()->where(['bbs_isSelected' => 1]);
        $count = NklBbsInfo::find()->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 5]);
        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
            'sort' => [
                'defaultOrder' => [
                    'bbs_id' => SORT_DESC,
                    'bbs_userNickname' => SORT_ASC,
                ]
            ],
        ]); ?>
        <?php // 返回一个Post实例的数组
        $posts = $provider->getModels();
        foreach ($posts as $model) {
            echo '<li style="list-style: none;">';
            echo '<div class="head-face">';
            echo '<img src= "statics/img/', rand(2, 8), '.gif" style="width:40px;" / >';
            echo '</div>';
            echo '<div class="reply-cont">';
            echo '<p class="username">', $model['bbs_userNickname'], '</p>';
            echo '<p class="comment-body">', $model['bbs_content'], '</p>';
            echo '<p class="comment-footer">', $model['bbs_userDescribe'], '</br>', $model['bbs_time'], '</p>';
            echo '</div>';
            echo '</li>';
        }
        ?>
    </div>
    <?php echo LinkPager::widget(['pagination' => $pagination, 'maxButtonCount' => 5,'options' => ['class' => 'mypagination','style'=>'margin-top:70px;']]); ?>
</body>

<script type="text/javascript">
    // 绑定表情
    $('.face-icon').SinaEmotion($('.text'));

    function trans() {
        console.log($('.text').val());
        $('.text').val(AnalyticEmotion($('.text').val()));
        console.log($('.text').val());
    }
</script>

</html>