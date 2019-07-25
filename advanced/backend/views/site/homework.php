<?php

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295 框架, 周辰霏1712991 样式修改，路径下载样式规范
 * Views for our team homework presentation on the backend.
 */

/* @var $this yii\web\View */

$this->title = 'Homework';
use yii\helpers\Html;
use yii\widgets\LinkPager;
use  yii\db\ActiveRecord;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 style="color:#7e0c6e">团队作业</h1>
        <p><a href="../../data/team/w3logo.gif" download="NKL_需求文档(1711350_1711295_1712991_1711345_1711304)">实现文档</a></p>
        <p><a href="../../data/team/w3logo.gif" download="NKL_实现文档(1711350_1711295_1712991_1711345_1711304)">实现文档</a></p>
        <p><a href="../../data/team/w3logo.gif" download="NKL_用户手册(1711350_1711295_1712991_1711345_1711304)">用户手册</a></p>
        <p><a href="../../data/team/w3logo.gif" download="NKL_项目展示PPT(1711350_1711295_1712991_1711345_1711304)">项目展示PPT</a></p>
        <p><a href="../../data/team/w3logo.gif" download="NKL_部署文档(1711350_1711295_1712991_1711345_1711304)">部署文档</a></p>
        <p><a href="../../data/team/w3logo.gif" download="NKL_设计文档(1711350_1711295_1712991_1711345_1711304)">设计文档</a></p>
    </div>

    <div class="jumbotron">
        <h1 style="color:#7e0c6e">个人作业</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2 style="color:#9966cc">李力挺</h2>
                <p>
                <a href="../../data/personal/llt/作业1(1711345_李力铤).pdf" download="作业1(1711345_李力铤)">作业1(1711345_李力铤)</a>
                </p>
                <p>
                <a href="../../data/personal/llt/作业2(1711345_李力铤).pdf" download="作业2(1711345_李力铤)">作业2(1711345_李力铤)</a>
                </p>
                <p>
                <a href="../../data/personal/llt/作业3(1711345_李力铤).pdf" download="作业3(1711345_李力铤)">作业3(1711345_李力铤)</a>
                </p>
                <p>
            </div>

            <div class="col-lg-4">
                <h2 style="color:#9966cc">李伟</h2>
                <p>
                <a href="../../data/personal/lw/作业1(1711350_李伟).pdf" download="作业1(1711350_李伟)">作业1(1711350_李伟)</a>
                </p>
                <p>
                <a href="../../data/personal/lw/作业2(1711350_李伟).zip" download="作业2(1711350_李伟)">作业2(1711350_李伟)</a>
                </p>
                <p>
                <a href="../../data/personal/lw/作业3(1711350_李伟).pdf" download="作业3(1711350_李伟)">作业3(1711350_李伟)</a>
                </p>
            </div>

            <div class="col-lg-4">
                <h2 style="color:#9966cc">周辰霏</h2>
                <p>
                <a href="../../data/personal/zcf/作业1(1712991_周辰霏).pdf" download="作业1(1712991_周辰霏)">作业1(1712991_周辰霏)</a>
                </p>
                <p>
                <a href="../../data/personal/zcf/作业2(1712991_周辰霏).pdf" download="作业2(1712991_周辰霏)">作业2(1712991_周辰霏)</a>
                </p>
                <p>
                <a href="../../data/personal/zcf/作业3(1712991_周辰霏).pdf" download="作业3(1712991_周辰霏)">作业3(1712991_周辰霏)</a>
                </p>
            </div>
            <div class="col-lg-4">
                <h2 style="color:#9966cc">乔静欣</h2>
                <p>
                <a href="../../data/personal/qjx/作业1(1711295_乔静欣).pdf" download="作业1(1711295_乔静欣)">作业1(1711295_乔静欣)</a>
                </p>
                <p>
                <a href="../../data/personal/qjx/作业2(1711295_乔静欣).pdf" download="作业2(1711295_乔静欣)">作业2(1711295_乔静欣)</a>
                </p>
                <p>
                <a href="../../data/personal/qjx/作业3(1711295_乔静欣).pdf" download="作业3(1711295_乔静欣)">作业3(1711295_乔静欣)</a>
                </p>
            </div>

            <div class="col-lg-4">
                <h2 style="color:#9966cc">朱心怡</h2>
                <p>
                <a href="../../data/personal/zxy/作业1(1711304_朱心怡).pdf" download="作业1(1711304_朱心怡)">作业1(1711304_朱心怡)</a>
                </p>
                <p>
                <a href="../../data/personal/zxy/作业2(1711304_朱心怡).pdf" download="作业2(1711304_朱心怡)">作业2(1711304_朱心怡)</a>
                </p>
                <p>
                <a href="../../data/personal/zxy/作业3(1711304_朱心怡).pdf" download="作业3(1711304_朱心怡)">作业3(1711304_朱心怡)</a>
                </p>
            </div>
        </div>

    </div>
</div>
