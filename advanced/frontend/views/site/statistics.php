<?php
/**
 * Team: @NKL,NKU
 * Coding by 李力铤 1711345
 * This is the statistics views for the frontend web using e-charts to present our db info dynamically.
 */
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use common\models\NklNewsInfo;
use common\models\NklBbsInfo;
?>
<!DOCTYPE html>
<html lang="en-us" id="home" class="slider-area">

<!-- 第一张文章数的表格 -->
<html style="height: 100%">
   <head>
       <meta charset="utf-8">
   </head>
   <body style="height: 100%; margin: 0">
       <div id="container" style="height: 500%"></div>

       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
option = null;
option = {
  title: {
        text: '百年南开专题文章发布频数变化图',
        subtext: '数据来自南开大学官网百年南开专题栏',
        left: 'center'
    },
    xAxis: {
        type: 'category',
        name : '日期',
        data: <?php
             $query = NklNewsInfo::find();
             $provider = new ActiveDataProvider([
                 'query' => $query,
                 'sort' => [
                     'defaultOrder' => [
                         'news_releaseTime' => SORT_ASC,
                     ]
                 ],
                 'pagination' => [
                                     'pageSize' => 50,
                                 ],
             ]);
             // 返回一个Post实例的数组
             $posts = $provider->getModels();
             $timeArray = array();
             $countArray = array();
             $previousModel = '';
             $countTimes=-1;
              foreach ($posts as $model)
               {
                if ($model['news_releaseTime']==$previousModel)
                {
                  $countTimes++;
                  continue;
                }
                if($countTimes==-1)
                {
                  $countTimes=1;
                  $previousModel=$model['news_releaseTime'];
                  continue;
                }
                array_push($timeArray, $previousModel);
                array_push($countArray, $countTimes);
                $previousModel=$model['news_releaseTime'];
                $countTimes=1;
               }
              echo json_encode($timeArray);
          ?>
    },

    yAxis: {
        type: 'value',
        name : '发布频数',
    },

    series: [{
        data: 
          <?php
             $query = NklNewsInfo::find();
             $provider = new ActiveDataProvider([
                 'query' => $query,
                 'sort' => [
                     'defaultOrder' => [
                         'news_releaseTime' => SORT_ASC,
                     ]
                 ],
                 'pagination' => [
                                     'pageSize' => 50,
                                 ],
             ]);
             // 返回一个Post实例的数组
             $posts = $provider->getModels();
             $timeArray = array();
             $countArray = array();
             $previousModel = '';
             $countTimes=-1;
              foreach ($posts as $model)
               {
                if ($model['news_releaseTime']==$previousModel)
                {
                  $countTimes++;
                  continue;
                }
                if($countTimes==-1)
                {
                  $countTimes=1;
                  $previousModel=$model['news_releaseTime'];
                  array_push($timeArray, $previousModel);
                  array_push($countArray, $countTimes);
                  continue;
                }
                array_push($timeArray, $previousModel);
                array_push($countArray, $countTimes);
                $previousModel=$model['news_releaseTime'];
                $countTimes=1;
               }
              echo json_encode($countArray);
          ?>,
        type: 'line',
        smooth: true
    }]
};
if (option && typeof option === "object") 
{
    myChart.setOption(option, true);
}
</script>
   </body>


<!-- 第二张评论数的表格 -->
<body style="height: 100%; margin: 0">
<div id="container2" style="height: 500%"></div>
<script type="text/javascript">
var dom = document.getElementById("container2");
var myChart = echarts.init(dom);
var app = {};
option = null;
var dataAxis = 
//数据输入1
<?php
   $query = NklBbsInfo::find();
   $provider = new ActiveDataProvider([
       'query' => $query,
       'sort' => [
           'defaultOrder' => [
               'bbs_userNickname' => SORT_ASC,
           ]
       ],
       'pagination' => [
                           'pageSize' => 50,
                       ],
   ]);
   // 返回一个Post实例的数组
   $posts = $provider->getModels();
   $timeArray = array();
   $countArray = array();
   $previousModel = '';
   $countTimes=-1;
    foreach ($posts as $model)
         {
          if ($model['bbs_userNickname']==$previousModel)
          {
            $countTimes++;
            continue;
          }
          if($countTimes==-1)
          {
            $countTimes=1;
            $previousModel=$model['bbs_userNickname'];
            continue;
          }
          array_push($timeArray, $previousModel);
          array_push($countArray, $countTimes);
          $previousModel=$model['bbs_userNickname'];
          $countTimes=1;
         }
    echo $array = json_encode($timeArray, JSON_UNESCAPED_UNICODE);
?>;


var data = 
//数据输入2
<?php
   $query = NklBbsInfo::find();
   $provider = new ActiveDataProvider([
       'query' => $query,
       'sort' => [
           'defaultOrder' => [
               'bbs_userNickname' => SORT_ASC,
           ]
       ],
       'pagination' => [
                           'pageSize' => 50,
                       ],
   ]);
   // 返回一个Post实例的数组
   $posts = $provider->getModels();
   $timeArray = array();
   $countArray = array();
   $previousModel = '';
   $countTimes=-1;
    foreach ($posts as $model)
         {
          if ($model['bbs_userNickname']==$previousModel)
          {
            $countTimes++;
            continue;
          }
          if($countTimes==-1)
          {
            $countTimes=1;
            $previousModel=$model['bbs_userNickname'];
            continue;
          }
          array_push($timeArray, $previousModel);
          array_push($countArray, $countTimes);
          $previousModel=$model['bbs_userNickname'];
          $countTimes=1;
         }
    echo json_encode($countArray);
?>;


var yMax = 5;
var dataShadow = [];

for (var i = 0; i < data.length; i++) {
    dataShadow.push(yMax);
}

option = {
    title: {
        text: 'NKL留言板用户留言数目一览表（点击|滚动鼠标 可缩放）',
        subtext: '数据来自项目数据库的留言板部分',
        left: 'center'
    },
    xAxis: {
      name : '用户名称',
        data: dataAxis,
        axisLabel: {
            inside: true,
            textStyle: {
                color: '#fff'
            }
        },
        axisTick: {
            show: false
        },
        axisLine: {
            show: false
        },
        z: 10
    },
    yAxis: {
      name : '留言数目',
        axisLine: {
            show: false
        },
        axisTick: {
            show: false
        },
        axisLabel: {
            textStyle: {
                color: '#999'
            }
        }
    },
    dataZoom: [
        {
            type: 'inside'
        }
    ],
    series: [
        { // For shadow
            type: 'bar',
            itemStyle: {
                normal: {color: 'rgba(0,0,0,0.05)'}
            },
            barGap:'-100%',
            barCategoryGap:'40%',
            data: dataShadow,
            animation: false
        },
        {
            type: 'bar',
            itemStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(
                        0, 0, 0, 1,
                        [
                            {offset: 0, color: '#D8BFD8'},
                            {offset: 0.5, color: '#7e0c6e'},
                            {offset: 1, color: '#DDA0DD'}
                        ]
                    )
                },
                emphasis: {
                    color: new echarts.graphic.LinearGradient(
                        0, 0, 0, 1,
                        [
                            {offset: 0, color: '#2378f7'},
                            {offset: 0.7, color: '#2378f7'},
                            {offset: 1, color: '#83bff6'}
                        ]
                    )
                }
            },
            data: data
        }
    ]
};
// Enable data zoom when user click bar.
var zoomSize = 6;
myChart.on('click', function (params) {
    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
    myChart.dispatchAction({
        type: 'dataZoom',
        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
    });
});;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
</script>
</body>

   </body>
</html>

 