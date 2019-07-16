<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html id="home" class="slider-area">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./statics/css/messages/main.css">
    <link rel="stylesheet" type="text/css" href="./statics/css/messages/sinaFaceAndEffec.css">
    <title></title>
</head>
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
                          <div class="form-group">
                                  <label for="title">姓名</label>
                                  <input type="text" class="form-control" id="title" name="title" placeholder="请输入姓名">
                                </div>
                                <div class="form-group">
                                    <label for="info">校友信息</label>
                                    <input type="text" class="form-control" id="info" name="info" placeholder="校友信息，如2003级商学院信管专业，南开大学教师等"> 
                                </div>
                                <label for="info">祝福语</label> 
                    <div class="cont-box">
                        <textarea class="text" placeholder="请输入..."></textarea>
                    </div>
                    <div class="tools-box">
                        <div class="operator-box-btn"><span class="face-icon">☺</span><span class="img-icon">▧</span></div>
                        <div class="submit-btn"><input type="button" onClick="out()" value="祝福南开" /></div>
                    </div>
                </div>
            </div>
            <div id="info-show">
                <ul></ul>
            </div>
        </div>
    </div>
    </body>
<script src="uploadPreview.js" type="statics/js/messages/javascript"></script>
<script src="statics/js/messages/jquery.min.js"></script>
<script src="statics/js/messages/jquery-1.9.1.js"></script>
<script type="text/javascript" src="statics/js/messages/sinaFaceAndEffec.js"></script>
<script type="text/javascript">
    // 绑定表情
    $('.face-icon').SinaEmotion($('.text'));
    // 测试本地解析
    function out() {
        var inputText = $('.text').val();
        $('#info-show ul').append(reply(AnalyticEmotion(inputText)));
        $('.text').val("");         //清空输入文本内容
    }

    var html;
    function reply(content) {
        html = '<li>';
        html += '<div class="head-face">';
        html += '<img src="statics/img/messages/2.gif" / >';
        html += '</div>';
        html += '<div class="reply-cont">';
        html += '<p class="username">小小红色飞机</p>';
        html += '<p class="comment-body">' + content + '</p>';
        html += '<p class="comment-footer">2016年10月5日　回复　点赞54　转发12</p>';
        html += '</div>';
        html += '</li>';
        return html;
    }
</script>

</html>


