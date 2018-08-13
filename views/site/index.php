<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Test task</h1>

        <p><a class="btn" href="<?= Url::to(['site/users']) ?>">See all users</a></p>
        <p><a class="btn" href="<?= Url::to(['site/signup']) ?>">Sign up</a></p>
        <p><a class="btn" href="<?= Url::to(['site/login']) ?>">Login</a></p>

    </div>

</div>
