<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\YiiMessage;
use yii\data\ActiveDataProvider;
?>
<!DOCTYPE html>
<html id="home" class="slider-area">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./statics/css/messages/main.css">
    <link rel="stylesheet" type="text/css" href="./statics/css/messages/sinaFaceAndEffec.css">
    <title></title>
</head>
<script src="uploadPreview.js" type="statics/js/messages/javascript"></script>
<script src="statics/js/messages/jquery.min.js"></script>
<script src="statics/js/messages/jquery-1.9.1.js"></script>
<script type="text/javascript" src="statics/js/messages/sinaFaceAndEffec.js"></script>
<body>
    <div id="content" style="width: 700px; height: auto;">
        <div class="wrap">
            <h2 style="padding-bottom:20px;font-family:华文中宋;">
                    我爱南开 <img src="statics/img/messages/100num.png" style="width:60px;">
                </h2>
               
            <div class="comment">
            <div class="head-face">
                    <img src="statics/img/messages/2.gif">
                </div>
                <div class="content">
                    <div class="yii-message-form">

                     <?php $form = ActiveForm::begin(); ?>
                        <label for="title">姓名</label>
                        <?php echo $form->field($model, 'Mes_Name',[
                                'template'=>'<div class="form-group">{input}</div>',
                                ])->input(['maxlength' => true,
                                  'class'=>"form-control",
                                  'placeholder'=>"请输入姓名"]) ?>

                         <label for="info">校友信息</label>
                         <?php echo $form->field($model, 'Mes_Info',[
                                'template'=>'<div class="form-group">{input}</div>',
                                ])->input(['maxlength' => true,
                                'class'=>"form-control",
                                'placeholder'=>"校友信息，如2003级商学院信管专业，南开大学教师等"]) ?>
                           
                        <label for="message">祝福语</label> 
                            <?php echo  $form->field($model, 'Mes_message', [
                            // 可以自定义,并会覆盖掉form中设置的属性
                            'template' => '<div class="cont-box">{input}</div>',
                             ])->textarea([
                                 'class'=>'text',
                                 'placeholder' => '请写下你的祝福,通过审核后可以被更多人看见哦！'
                                ]) ?>

                            
                            <div class="tools-box">
                            <div class="operator-box-btn"><span class="face-icon">☺</span><span class="img-icon">▧</span></div>
                            <?= Html::submitButton('祝福南开', ['class' => 'submit-btn','onclick'=>'trans()' ]) ?>
                            </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </div>
            <div id="info-show">
                <ul></ul>
                <?php
                   $query = YiiMessage::find();

                   $provider = new ActiveDataProvider([
                       'query' => $query,
                       'pagination' => [
                           'pageSize' => 10,
                       ],
                       'sort' => [
                           'defaultOrder' => [
                               'Mes_ID' => SORT_DESC,
                               'Mes_Name' => SORT_ASC,
                           ]
                       ],
                   ]);
                
                   // 返回一个Post实例的数组
                   $posts = $provider->getModels();
                  
                   foreach ($posts as $model)
                   {
                    echo '<li>';
                    echo '<div class="head-face">';
                    echo '<img src="statics/img/messages/',rand(2,8),'.gif" / >';
                    echo '</div>';
                    echo '<div class="reply-cont">';
                    echo '<p class="username">',$model['Mes_Name'],'</p>';
                    echo '<p class="comment-body">' ,$model['Mes_message'], '</p>';
                    echo '<p class="comment-footer">',$model['Mes_Info'],'</p>';
                    echo '</div>';
                    echo '</li>';
                   }
                ?>
            </div>
        </div>
    </div>
    </body>

<script type="text/javascript">
     // 绑定表情
     $('.face-icon').SinaEmotion($('.text'));
    function trans()
    {
        console.log($('.text').val());
        $('.text').val(AnalyticEmotion($('.text').val()));
   console.log($('.text').val());
    }
  
</script>

</html>


