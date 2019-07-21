<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use common\models\NklActivityInfo;
=======
use common\models\YiiActivities;
>>>>>>> da11d20ff7fec8199af51ba585bba3d965cb29a3
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

 
    <link rel="shortcut icon" href="images/favicon.ico" />
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

<body class="smoothscroll">
<script language="javascript" src="statics/css/activities/jquery.min.js" sudy-wp-context="" sudy-wp-siteId="155"></script>
    <script language="javascript" src="statics/css/activities/jquery.sudy.wp.visitcount.js"></script>
    <script type="text/javascript" src="statics/css/activities/jquery.sudyNav.js"></script>
    <script type="text/javascript" src="statics/js/activities/jquery-214min.js"></script>
    
    
    <div id="wrapper" style="margin-left:30px;">

<<<<<<< HEAD
        <section class="padding-top30  margin-top--60" style="padding-top:30px; 
=======
        <section class="padding-top30  margin-top--60" style="padding-top:30px;    background-image: url(/_upload/tpl/01/41/321/template321/__ASSETS__/img/newsbg.png);
>>>>>>> da11d20ff7fec8199af51ba585bba3d965cb29a3
        background-size: auto;
        background-position-y: bottom;
        background-repeat: no-repeat;
        background-position-x: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8" frag="面板6">
                        <h2 style="padding-bottom:20px;font-family:华文中宋;" frag="窗口6" portletmode="simpleColumnAnchor">
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
<<<<<<< HEAD
                                echo '<div class="item noborder bnxq" style="display:inline;">';
                                echo '<div class="singleline">';
                                echo ' <a class="news-title">',$model['activity_info'],'</a>';
                                echo '<p> &nbsp;<i class="fa fa-fw fa-user"></i>主办单位：',$model['activity_hostDept'] ,'</p>';
                                echo ' <p> &nbsp;<i class="fa fa-fw fa-calendar"></i> 日期：',$model['activity_beginDate'], ' ',$model['activity_beginTime'] ,'<a href="http://100.nankai.edu.cn/2018/1018/c10880a111096/page.htm">【新闻报道】</a></p>';
                                echo '  <p> &nbsp;<i class="fa fa-fw fa-map-marker"></i> 地点：',$model['activity_location'],'</p>';
=======
                                echo '<div class="item noborder 201810 bnxq" style="display:inline;">';
                                echo '<div class="singleline">';
                                echo ' <a class="news-title" href="/2018/1009/c10881a110388/page.htm">',$model['ac_activities'],'</a>';
                                echo '<p> &nbsp;<i class="fa fa-fw fa-user"></i>主办单位：',$model['ac_hostdept'] ,'</p>';
                                echo ' <p> &nbsp;<i class="fa fa-fw fa-calendar"></i> 日期：',$model['ac_begindate'], ' ',$model['ac_begintime'] ,'<a href="http://100.nankai.edu.cn/2018/1018/c10880a111096/page.htm">【新闻报道】</a></p>';
                                echo '  <p> &nbsp;<i class="fa fa-fw fa-map-marker"></i> 地点：',$model['ac_location'],'</p>';
>>>>>>> da11d20ff7fec8199af51ba585bba3d965cb29a3
                                echo '  </div>';
                                echo '</div>';
                                }
                                ?>
 

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id='filters' class="act">

<<<<<<< HEAD
                            <?php  echo $this->render('../activities/_search', ['model' => $searchModel]); ?>
=======
                            <?php  echo $this->render('/activities/_search', ['model' => $searchModel]); ?>
>>>>>>> da11d20ff7fec8199af51ba585bba3d965cb29a3

                            <!-- <h4><i class="fa fa-angle-right"></i> 专题推荐</h4>
                            <ul class="nav nav-pills">
                                <li class="tap-btn-zt" data-filter="bnnkdjt"><a href="javascript:void(0)">百年南开大讲坛</a></li>
                            </ul>
                            <hr style="margin:10px 0 20px 0">
                            <h4><i class="fa fa-angle-right"></i> 类型筛选</h4>
                            <ul class="nav nav-pills">
                                <li class="tap-btn active" data-filter="*"><a href="javascript:void(0)">全部</a></li>
                                <li class="tap-btn" data-filter="bnxq"><a href="javascript:void(0)">百年校庆</a></li>
                                <li class="tap-btn" data-filter="bnnkdjt"><a href="javascript:void(0)">百年南开大讲坛</a></li>
                                <li class="tap-btn" data-filter="xshhd"><a href="javascript:void(0)">学术活动</a></li>
                                <li class="tap-btn" data-filter="wthd"><a href="javascript:void(0)">文体活动</a></li>
                                <li class="tap-btn" data-filter="jnhd"><a href="javascript:void(0)">纪念活动</a></li>
                                <li class="tap-btn" data-filter="xyhd"><a href="javascript:void(0)">校友活动</a></li>
                                <li class="tap-btn" data-filter="jzhd"><a href="javascript:void(0)">发展活动</a></li>
                                <li class="tap-btn" data-filter="qthd"><a href="javascript:void(0)">其他活动</a></li>

                            </ul>
                            <hr style="margin:10px 0 20px 0">
                            <h4><i class="fa fa-angle-right"></i> 院系所系列活动</h4>
                            <ul class="nav nav-pills">
                                <li class="tap-btn-xl active" data-filter="*"><a href="javascript:void(0)">全部</a></li><br/>
                                <li class="tap-btn-xl" data-filter="cryxl"><a href="javascript:void(0)">纪念陈茹玉院士诞辰100周年系列学术活动</a></li><br/>
                                <li class="tap-btn-xl" data-filter="cxsxl"><a href="javascript:void(0)">陈省身数学研究所学术讲座</a></li><br/>
                                <li class="tap-btn-xl" data-filter="lyjcjsxl"><a href="javascript:void(0)">百年南开杰出教授讲座系列（旅游与服务学院）</a></li>
                            </ul>
                            <hr style="margin:10px 0 20px 0">

                            <h4><i class="fa fa-angle-right"></i> 日期筛选</h4>
                            <div class="date" data-filter="201810">
                                <div class="date-month"> 10 <span>月</span></div>
                                <div class="date-year"> 2018 </div>
                            </div>
                            <div class="date" data-filter="201811">
                                <div class="date-month"> 11 <span>月</span></div>
                                <div class="date-year"> 2018 </div>
                            </div>
                            <div class="date" data-filter="201812">
                                <div class="date-month"> 12 <span>月</span></div>
                                <div class="date-year"> 2018 </div>
                            </div>
                            <div class="date" data-filter="201901">
                                <div class="date-month"> 01 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201902">
                                <div class="date-month"> 02 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201903">
                                <div class="date-month"> 03 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date date-active" data-filter="201904">
                                <div class="date-month"> 04 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201905">
                                <div class="date-month"> 05 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201906">
                                <div class="date-month"> 06 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201907">
                                <div class="date-month"> 07 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201908">
                                <div class="date-month"> 08 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201909">
                                <div class="date-month"> 09 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date" data-filter="201910">
                                <div class="date-month"> 10 <span>月</span></div>
                                <div class="date-year"> 2019 </div>
                            </div>
                            <div class="date date-active date-1017" data-filter="20191017">
                                <div class="date-month"> 百年校庆</div>
                                <div class="date-year"> 2019.10.17 </div>
                            </div>
                            <div style="clear:both;"></div> -->
                            <!--    <hr style="margin:10px 0 20px 0">
                        <div>
                            <a href="javascript:void(0)"><img style="width:100%;" src="/_upload/tpl/01/41/321/template321/__ASSETS__/img/slider5.jpg"/></a>
                        </div>
                        <hr style="margin:10px 0 20px 0"> -->
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <a href="javascript:void(0)" id="toTop"></a>

    </div>
    <script type="text/javascript" src="statics/js/activities/bootstrapmin.js"></script>
    <!-- <script type="application/javascript">
        function filter() {
            var filter = '#container .item';
            var filter_zt = $('.tap-btn-zt.active').data('filter');
            if (filter_zt == 'bnnkdjt') {
                filter = filter + '.' + filter_zt;
            } else {
                var filter_b = $('#filters .date.date-active').first().data('filter');
                if (filter_b != '*') {
                    filter = filter + '.' + filter_b;
                }
            }




            var filter_a = $('.tap-btn.active').data('filter');
            if (filter_a != '*') {
                filter = filter + '.' + filter_a;
            }
            var filter_c = $('.tap-btn-xl.active').data('filter');
            if (filter_c != '*') {
                filter = filter + '.' + filter_c;
            }

            $('#container .item').css('display', 'none');
            $('#container .item').css('opacity', 0);

            $(filter).css('display', 'block');
            $(filter).css('display');
            $(filter).css('opacity', 1);

        }
        $('#filters .tap-btn-zt').on('click tap', function() {
            $this = $(this);
            $('.tap-btn-zt').removeClass('active');
            $('.tap-btn').removeClass('active');
            $('.tap-btn').first().addClass('active');
            $('.tap-btn-xl').removeClass('active');
            $('.tap-btn-xl').first().addClass('active');
            $this.addClass('active');
            $('#container .item').css('display', 'none');
            filter();
        });
        $('#filters .tap-btn').on('click tap', function() {
            $this = $(this);
            $('.tap-btn').removeClass('active');
            $this.addClass('active');
            $('.tap-btn-zt').removeClass('active');
            $('#container .item').css('display', 'none');
            filter();
        });
        $('#filters .tap-btn-xl').on('click tap', function() {
            $this = $(this);
            $('.tap-btn-xl').removeClass('active');
            $this.addClass('active');
            $('.tap-btn-zt').removeClass('active');
            $('#container .item').css('display', 'none');
            filter();
        });

        $('#filters .date').on('click tap', function() {
            $this = $(this);
            $('#filters .date:not(.date-1017)').removeClass('date-active');
            $this.addClass('date-active');
            $('.tap-btn-zt').removeClass('active');
            $('#container .item').css('display', 'none');
            filter();
        });




        $(document).ready(function() {
            filter();
        });
    </script> -->
</body>

<<<<<<< HEAD
</html>
=======
</html>

<img src="/_visitcount?siteId=155&type=2&columnId=10881" style="display:none" width="0" height="0"></image>

>>>>>>> da11d20ff7fec8199af51ba585bba3d965cb29a3
