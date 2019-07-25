<?php
/**
 * Team: @NKL,NKU
 * Coding by 周辰霏 1712991
 * This is the activities views for the frontend web.
 */
use yii\helpers\Html;
use common\models\NklNewsInfo;
use yii\data\Pagination;
use  yii\web\Response;
use yii\web\Controller;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="slider-area1">
    <div class="row">
        <div class="col-md-9" style="margin-left:30px;">
            <h2 style="padding-bottom:20px;font-family:华文中宋;" portletmode="simpleColumnAnchor">
                <span class="Column_Anchor">校庆新闻</span> <img src="statics/img/nk100.png" style="width:60px;">
            </h2>
            <hr style="margin:10px 0 20px 0">
            <div class="row" frag="面板19" style="padding-left:15px;padding-right:15px;padding-bottom:30px;">
                <div class="col-md-12" frag="窗口19" portletmode="simpleList">
                    <?php $NklNewsInfos = NklNewsInfo::find()->orderBy('news_releaseTime DESC')->all(); ?>
                    <?php $count = NklNewsInfo::find()->count(); $pagination = new Pagination(['totalCount' => $count,'pageSize' => 15]);
                                 $articles = NklNewsInfo::find()->offset($pagination->offset)->limit($pagination->limit)->all();?> 
                    <?php foreach ($articles as $NklNewsInfo) : ?>
                        <div class="news-list row">
                            <div class="col-md-12">
                                <a class="item-title" href="<?= Html::encode("{$NklNewsInfo->news_link}") ?>"><?= Html::encode("· {$NklNewsInfo->news_title}") ?></a>
                                <p class="item-date"><small><?= Html::encode("{$NklNewsInfo->news_releaseTime}") ?></small></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div id="wp_paging_w19">
                        <ul class="wp_paging clearfix">
                        总共&nbsp;<?= Html::encode("{$count}") ?>&nbsp;条新闻&nbsp;<?php  echo LinkPager::widget(['pagination' => $pagination,'maxButtonCount' => 5,'options' => ['class' => 'mypagination'], ]);?>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-2" style="border-left:1px dotted #ddd;hight:10px;">
            <!-- 子栏目 -->
            <ul class="nav nav-list side-nav" frag="窗口8">
                <li class="">
                    <a class="nav-head"><i class="fa fa-angle-down"></i> 更多栏目</a>
                </li>
                <li class="">
                    <a href="<?php echo Url::to(['site/news']);?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> 校庆公告</a>
                </li>
                <li class="">
                    <a href="<?php echo Url::to(['site/news']);?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> 校庆新闻</a>
                </li>

                <li class="">
                    <a href="<?php echo Url::to(['site/activities']);?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> 活动预告</a>
                </li>
            </ul>
        </div>
    </div>
</div>