<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Medical care, You provide us with more detailed requirements, we can help find it';
?>

<div class="tip">
    <div class="content-body ">
        <a href="<?=Url::to(['/'])?>">Home</a> > <a href="<?=Url::to(['medicalcare/index'])?>">Medical care</a>
    </div>

</div>

<div id="body">
    <div class="content-body body-contenter" >
        <div id="body-left">

            <div id="category">
                <h3>Category</h3>
                <div class="short-line"></div>
                <ul>

                    <?php foreach($category as $category_row) {?>
                        <li><a href="<?=Yii::$app->urlManager->createUrl(['medicalcare/index','id'=>$category_row->id])?>"><?=$category_row->name?></a></li>
                    <?php }?>
                </ul>

            </div>



        </div>

        <div id="body-right">

            <div id="datecontent">
                <?php foreach($model as $list) {?>
                <div class="body-right-list" each="list:${lists}">
                    <div class="body-right-list-img"><a href="<?=Yii::$app->urlManager->createUrl(['medicalcare/detail', 'id'=>$list['id']])?>"><img src="/static<?=$list['img_url']?>" ></a></div>
                    <div class="body-right-list-title"><a href="<?=Yii::$app->urlManager->createUrl(['medicalcare/detail', 'id'=>$list['id']])?>" ><?=$list['name']?></a></div>
                    <div class="body-right-list-title"><a href="<?=Yii::$app->urlManager->createUrl(['medicalcare/detail', 'id'=>$list['id']])?>" ><?=$list['no']?></a></div>
                </div>
                <?php }?>
            </div>

            <div id="pagination">
                <?=
                LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>
            </div>
        </div>






    </div>
</div>
