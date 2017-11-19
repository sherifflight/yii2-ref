<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="media">
        <div class="media-left">
            <img src="https://loremflickr.com/150/150/cats" alt="" class="img-circle">
        </div>
        <div class="media-body">
            <h3 class="media-heading">Профиль пользователя username</h3>
            <div>email: mail</div>
            <div>Ссылка для приглашения пользователей: some url</div>
        </div>
    </div>
    <p>
    </p>

</div>
