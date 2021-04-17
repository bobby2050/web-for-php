<?php

use yii\helpers\Url;


$this->title = $row->name . ' ' . $row->no . ' You provide us with more detailed requirements, we can help find it';
?>

<div class="tip">
    <div class="content-body">
        <a href="<?=Url::to(['/'])?>">Home</a> > <a href="<?=Url::to(['medicalcare/index'])?>">Medical care</a> > <?=$row->name . ' ' . $row->no?>
    </div>

</div>


<div id="body" >
    <div class="content-body body-contenter" >
        <div id="body-img">
            <img src="/static<?=$row->img_url?> " alt="@{${'Name: ' + data.name +' ' + data.no}}">

        </div>

        <div id="body-title">
            <h3 text="@{${'Name: ' + data.name}}"><?=$row->name?> </h3><br/>
            <h3 text="@{${'Art.No: '+ data.no}}"><?=$row->no?></h3><br/>

            <ul id="point">
                <?=$row->feature?>

            </ul>

            <br/><br/><br/>
            <b>Description:</b><br/><br/>
            <ul id="s">
                <?=$row->detail?>
            </ul>


        </div>


    </div>
</div>