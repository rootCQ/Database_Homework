<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\NklActivityInfo;
use yii\data\ActiveDataProvider;
?>

<!DOCTYPE html>

<html id="home" class="slider-area">
<!--<![endif]-->

<!-- <head> -->
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <title>活动预告</title>
    <meta name="keywords" content="南开大学百年校庆,百年校庆,百年南开,南开校庆,南开大学" />
    <meta name="description" content="2019年南开大学建校一百周年。百年南开，再塑辉煌" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!-- <link type="text/css" href="css/system.css" rel="stylesheet" />
    <link type="text/css" href="css/6.css" rel="stylesheet" />
    <link type="text/css" href="css/146.css" rel="stylesheet" /> -->
    <link type="text/css" href="statics/css/activities/simplenews.css" rel="stylesheet" />
    <link type="text/css" href="statics/css/activities/sudyNav.css" rel="stylesheet" />
    <link href="statics/css/activities/bootstrapmin.css" rel="stylesheet" type="text/css" />
    <link href="statics/css/activities/font-awesome.min.css" rel="stylesheet">
    <link href="statics/css/activities/style.css" rel="stylesheet" />


  
    <style type="text/css">
        #filters {
            padding-left: 25px;
        }
        
        #filters .date {
            text-align: center;
            javascript: void(0);
            float: left;
            border: 1px solid #e7e7e7;
        }
        
        #filters .date {
            width: 20%;
        }
        
        #filters .date-1017 {
            width: 40%;
        }
        
        #filters .date-active {
            background: #fffcea;
            border: 1px solid #a0468c;
        }
        
        #filters .date-month {
            font-size: 18px;
            height: 50px;
            line-height: 50px;
            color: #888;
        }
        
        #filters .date-active .date-month {
            color: #a0468c;
        }
        
        #filters .date-month span {
            font-size: 14px;
            height: 32px;
            line-height: 32px;
        }
        
        #filters .date-year {
            background-color: #fafafa;
            color: #d5d5d5;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
        }
        
        #filters .date-active .date-year {
            color: #fff;
            background-color: #a0468c;
        }
        
        #container .item {
            transition: 2s;
            -moz-transition: 2s;
            /* Firefox 4 */
            -webkit-transition: 2s;
            /* Safari and Chrome */
            -o-transition: 2s;
            /* Opera */
        }
    </style>
<!-- </head> -->

<body>
<script language="javascript" src="statics/css/activities/jquery.min.js" sudy-wp-context="" sudy-wp-siteId="155"></script>
    <script language="javascript" src="statics/css/activities/jquery.sudy.wp.visitcount.js"></script>
    <script type="text/javascript" src="statics/css/activities/jquery.sudyNav.js"></script>
    <script type="text/javascript" src="statics/js/activities/jquery-214min.js"></script>
    
    
    <div id="wrapper" style="margin-left:30px;">

        <section class="padding-top30  margin-top--60" style="padding-top:30px; 
        background-size: auto;
        background-position-y: bottom;
        background-repeat: no-repeat;
        background-position-x: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7" frag="面板6">
                        <h2 style="padding-bottom:20px;font-family:华文中宋;">
                            <span class='Column_Anchor'>活动预告</span> <img src="statics/img/messages/100num.png" style="width:60px;" />
                        </h2>
                        <hr style="margin:10px 0 20px 0">
                        <div class="timeline1" id="container" frag="面板19">
                            <div class="timeline-left1" frag="窗口19" portletmode="simpleList">

                            <?php
                                  // 返回一个Post实例的数组
                               $posts = $dataProvider->getModels();
                  
                                 foreach ($posts as $model)
                              {
                                echo '<div class="item noborder bnxq" style="display:inline;">';
                                echo '<div class="singleline">';
                                echo ' <a class="news-title">',$model['activity_info'],'</a>';
                                echo '<p> &nbsp;<i class="fa fa-fw fa-user"></i>主办单位：',$model['activity_hostDept'] ,'</p>';
                                echo ' <p> &nbsp;<i class="fa fa-fw fa-calendar"></i> 日期：',$model['activity_beginDate'], ' ',$model['activity_beginTime'] ,'<a href="http://100.nankai.edu.cn/2018/1018/c10880a111096/page.htm">【新闻报道】</a></p>';
                                echo '  <p> &nbsp;<i class="fa fa-fw fa-map-marker"></i> 地点：',$model['activity_location'],'</p>';
                                echo '  </div>';
                                echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="filters" class="act">
                        <?php  echo $this->render('../activities/_search', ['model' => $searchModel]); ?>

                
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </div>
    
</body>

</html>