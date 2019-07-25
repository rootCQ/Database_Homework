<?php

use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use frontend\models\NklHistoryInfo;
/**
 * Team: @NKL,NKU
 * Coding by 李力铤1711345
 * This is the history views for the frontend web.
 */
?>
<!doctype html>
<html lang="en-us" id="home" class="slider-area">

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="statics/css/mycss.css" />
</head>

<body>
    <div id="hiswrapper">
        <section id="hisintro" class="hismain">
            <h4>
                <font size=15 color='#7E0C6E' face="Times">
                    Review History</font>
            </h4>
        </section>
        <!-- hisitems -->
        <section class="hismain items">
            <article class="hisitem">
                <header>
                    <a href="#"><img src="statics/img/NKU_10.jpg" alt="" /></a>
                </header>
                <p>
                    <h3>
                        <font size=5 color='#7E0C6E' face="verdana"><?php

                                                                    $this->title = 'My Yii Application';
                                                                    $query = NklHistoryInfo::find();
                                                                    $provider = new ActiveDataProvider([
                                                                        'query' => $query,
                                                                        'sort' => [
                                                                            'defaultOrder' => [
                                                                                'history_id' => SORT_DESC,
                                                                            ]
                                                                        ],
                                                                    ]);

                                                                    // 返回一个Post实例的数组
                                                                    $posts = $provider->getModels();
                                                                    echo $posts[4]['history_title'];
                                                                    ?></font>
                    </h3>
                    <p>
                        <font size=3 color='#7E0C6E' face="verdana">
                            <?php
                            echo $posts[4]['history_passage'];
                            ?></font>
                    </p>
                </p>
            </article>
            <article class="hisitem">
                <header>
                    <a href="#"><img src="statics/img/NKU_2.jpg" alt="" /></a>
                </header>
                <h3>
                    <font size=5 color='#7E0C6E' face="verdana"><?php
                                                                echo $posts[3]['history_title'];
                                                                ?></font>
                </h3>
                <p>
                    <font size=3 color='#7E0C6E' face="verdana">
                        <?php
                        echo $posts[3]['history_passage'];
                        ?></font>
                </p>
            </article>
            <article class="hisitem">
                <header>
                    <a href="#"><img src="statics/img/NKU_1.jpg" alt="" /></a>
                </header>
                <h3>
                    <font size=5 color='#7E0C6E' face="verdana"> <?php
                                                                    echo $posts[2]['history_title'];
                                                                    ?></font>
                </h3>
                <p>
                    <font size=3 color='#7E0C6E' face="verdana">
                        <?php
                        echo $posts[2]['history_passage'];
                        ?></font>
                </p>
            </article>
            <article class="hisitem">
                <header>
                    <a href="#"><img src="statics/img/NKU_2.jpg" alt="" /></a>
                </header>
                <h3>
                    <font size=5 color='#7E0C6E' face="verdana"><?php
                                                                echo $posts[1]['history_title'];
                                                                ?></font>
                </h3>
                <p>
                    <font size=3 color='#7E0C6E' face="verdana">
                        <?php
                        echo $posts[1]['history_passage'];
                        ?>
                    </font>
                </p>
            </article>
        </section>
        <article class="hisitem">
            <img class='nku' src="statics/img/NKU.jpg">
            <h2><font size=6 color='#7E0C6E' face="verdana"><?php
                echo $posts[0]['history_title'];
                ?></font></h2>
            <p>
                <font size=4 color='#7E0C6E' face="verdana">
                    <?php
                    echo $posts[0]['history_passage'];
                    ?>
                </font>
            </p>
        </article>
    </div>
</body>

</html>
<style>
    img.nku {
        margin: 3px;
        border: 1px solid #bebebe;
        height: 350px;
        width: 350px;
        float: left;
        text-align: center;
    }
</style>