<?php

/* @var $this yii\web\View */
/** @var $user \app\models\User */
/** @var $referral \app\models\User */

use yii\helpers\Html;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="media">
        <div class="media-left">
            <img src="https://loremflickr.com/150/150/cat" alt="cat" class="img-circle">
        </div>
        <div class="media-body">

            <h3 class="media-heading">Профиль пользователя <?= $user->username ?></h3>

            <div><?= !is_null($referral) ? 'Вы были приглашены пользователем <code>' . $referral->username . '</code>' : '' ?></div>

            <div>email: <code><?= $user->email ?></code></div>

            <div>Ссылка для приглашения пользователей: <code><?= \yii\helpers\Url::base() . '/signup/' . $user->getId() ?></code></div>

        </div>
    </div>
    <p>
    </p>

</div>
