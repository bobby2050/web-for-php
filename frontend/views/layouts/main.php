<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title) ?> - Leo</title>
    <link rel="icon" href="/static/favicon.ico" type="image/x-icon"/>
    <link rel="bookmark" href="/static/favicon.ico" type="image/x-icon"/>
    <meta name="keywords" content="Medical Care,Infrared Thermometer" />
    <link rel="stylesheet" href="<?php echo $this->params['css']?>">
</head>
<body>
<div id="top">
    <div class="content-body top-contenter" >

        <p class="lbodyl rightborder element-padding"> <a>EN</a></p>
        <p  class="lbodyl rightborder element-padding"><a>Available 24/7 at (+86) 18813951795</a></p>
        <p class="lbodyr">Leo's & COVID-19: A Shipping and Customer Service Update for You. <a> wendy@esellto.com</a></p>

    </div>
</div>

<div id="log">
    <h1 style="height: 80px;line-height: 80px">
        <img style="margin-top: 10px; height: 70px" src="/static/logo.png">
    </h1>
</div>

<div id="menu">
    <div class="content-body menu-contenter">
        <ul>

            <li><a href="/">Home</a></li>
            <li><a href="<?=Url::to(['medicalcare/index'])?>">Medical care</a></li>
<!--            <li><a href="--><?//=Url::to(['medicalcare/index'])?><!--">Medical care</a></li>-->
            <li><a>coming</a></li>
        </ul>
    </div>
</div>
<div id="line"> </div>

<?php $this->beginBody() ?>
        <?= $content ?>

<?php $this->endBody() ?>


        <div id="bottom">
            <div  style="margin-top: 20px;width: 100%; height: 1px;background: #ed9018"> </div>
            <div class="content-body bottom-contenter">
                <p>Terms of UsePrivacy PolicyFur PolicyInterest-Based Ads24/7 Customer Service (+86) 18813951795  email: wendy@esellto.com</p>
                <p> &copy2020 Leo's, Inc. All rights reserved</p>

            </div>
        </div>

</body>
</html>
<?php $this->endPage() ?>
