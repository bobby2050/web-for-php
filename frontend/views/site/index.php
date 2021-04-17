<?php

/* @var $this yii\web\View */

$this->title = 'You provide us with more detailed requirements, we can help find it';

use yii\helpers\Url;
?>

<div id="body">
    <div class="content-body body-contenter" style="background:url(/static/bg.png); " >
        <h1 style="text-align: center">What's New</h1>

        <div class="body-right-list" id="body-right-list-first">
            <div class="body-right-list-first-block"><h1>Covid19 you need to use it</h1></div>

        </div>
        <?php //var_dump($rows);die;
        foreach ($rows as $row) {?>
        <div class="body-right-list" >
            <div class="body-right-list-img"><a href="<?=Yii::$app->urlManager->createUrl(['medicalcare/detail', 'id'=>$row['id']])?>"><img src="/static/<?=$row['img_url']?>" ></a></div>
            <div class="body-right-list-title"><a href="<?=Yii::$app->urlManager->createUrl(['medicalcare/detail', 'id'=>$row['id']])?>" text="${list.name}"><?=$row['name']?></a></div>
            <div class="body-right-list-title"><a href="<?=Yii::$app->urlManager->createUrl(['medicalcare/detail', 'id'=>$row['id']])?>" text="${list.no}"><?=$row['no'] ?></a></div>

        </div>
        <?php }?>


    </div>
</div>

