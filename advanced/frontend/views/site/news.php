<?php

use yii\helpers\Html;
use frontend\models\NklNewsInfo;
?>
<div class="slider-area1">
    <div class="row">
        <div class="col-md-9" frag="面板6">
            <h2 style="padding-bottom:20px;font-family:华文中宋;" frag="窗口6" portletmode="simpleColumnAnchor">
                <span class="Column_Anchor">校庆新闻</span> <img src="statics/img/nk100.png" style="width:60px;">
            </h2>
            <hr style="margin:10px 0 20px 0">
            <div class="row" frag="面板19" style="padding-left:15px;padding-right:15px;padding-bottom:30px;">
                <div class="col-md-12" frag="窗口19" portletmode="simpleList">
                    <?php $NklNewsInfos = NklNewsInfo::findBySql('SELECT * FROM `nkl_news_info` ORDER by news_releaseTime DESC')->all(); ?>
                    <?php foreach ($NklNewsInfos as $NklNewsInfo) : ?>
                        <div class="news-list row">
                            <div class="col-md-12">
                                <a class="item-title" href="<?= Html::encode("{$NklNewsInfo->news_link}") ?>"><?= Html::encode("· {$NklNewsInfo->news_title}") ?></a>
                                <p class="item-date"><small><?= Html::encode("{$NklNewsInfo->news_releaseTime}") ?></small></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div id="wp_paging_w19">
                        <ul class="wp_paging clearfix">
                            <li class="pages_count">
                                <!-- <span class="per_page">每页&nbsp;<em class="per_count">12</em>&nbsp;记录&nbsp;</span> -->
                                <span class="all_count">总共&nbsp;<em class="all_count">39</em>&nbsp;条记录&nbsp;</span>

                            </li>
                            <!-- <li class="page_nav">
                            <a href="javascript:" class="layui-laypage-first" data-page="0"><span>首页</span></a>
                                <a href="javascript:" class="layui-laypage-pre" data-page="2"><span>&lt;&lt;上一页</span></a>
                                <a  href="javascript:" class="layui-laypage-next" data-page="2"><span>下一页&gt;&gt;</span></a>
                                <a href="javascript:" class="layui-laypage-last" data-page="2"><span>尾页</span></a>
                            </li>
                            <li class="page_jump">
                                <span class="pages">页码&nbsp;<em class="curr_page">1</em>/<em class="all_pages">4</em></span>
                            </li> -->
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div style="border-left:1px dotted #ddd;width:284px;" frag="面板8">
            <!-- 子栏目 -->
            <ul class="nav nav-list side-nav" frag="窗口8">
                <li class="">
                    <a class="nav-head"><i class="fa fa-angle-right"></i> 更多栏目&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li class="">
                    <a href="http://100.nankai.edu.cn/xqgg/list.htm">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> 校庆公告</a>
                </li>

                <li class="">
                    <a href="http://100.nankai.edu.cn/xqxw/list.htm">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> 校庆新闻</a>
                </li>

                <li class="">
                    <a href="http://100.nankai.edu.cn/xqhd/list.htm">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> 活动预告</a>
                </li>
            </ul>
        </div>

    </div>
</div>