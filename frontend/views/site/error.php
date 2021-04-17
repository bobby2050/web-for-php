<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "You provide us with more detailed requirements, we can help find it";
?>
<div class="site-error" style="width: 1152px; margin: 0 auto">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
<script type="application/javascript">
    function goHome(){
        window.location.href="<?=Url::to(['site/index'])?>";
    }
    setTimeout("goHome()", 5)
</script>
