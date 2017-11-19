<?php

/* @var $this yii\web\View */
/** @var $user \app\models\User */

use yii\helpers\Html;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="media">
        <div class="media-left">
            <img src="https://loremflickr.com/150/150/cat" alt="" class="img-circle">
        </div>
        <div class="media-body">
            <h3 class="media-heading">Профиль пользователя <?= $user->username ?></h3>
            <div>email: <?= $user->email ?></div>
            <div>Ссылка для приглашения пользователей: <?= $user->getId() ?></div>
        </div>
    </div>
    <p>
    </p>

</div>
