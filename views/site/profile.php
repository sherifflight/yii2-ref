<?php

/* @var $this yii\web\View */
/** @var $user \app\models\User */
/** @var $referral \app\models\User */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Профиль пользователя $user->username";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="media">
        <div class="media-left">
            <img src="https://loremflickr.com/150/150/cat" alt="cat" class="img-circle">
        </div>
        <div class="media-body">

            <div>Имя пользователя: <code><?= $user->username ?></code></div>

            <div><?= !is_null($referral) ? 'Вы были приглашены пользователем <code>' . $referral->email . '</code>' : '' ?></div>

            <div>email: <code><?= $user->email ?></code></div>

            <div>Ссылка для приглашения пользователей: <code><?= Url::home(true) . 'signup?ref=' . $user->getId() ?></code></div>

        </div>

        <?php if ($user->getChildrenUsers()->count() > 0) {
            echo '<h3>Список приглашенных пользователей</h3>';

            echo '<table class="table">';
                echo '<thead>';
                    echo '<tr>';
                      echo '<th>Имя пользователя</th>';
                      echo '<th>Дата регистрации</th>';
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    foreach ($user->getChildrenUsers()->all() as $childrenUser) {
                        echo '<tr>';
                            echo "<td>$childrenUser->username</td>";
                            echo "<td>" . Yii::$app->formatter->asDatetime($childrenUser->created_at, "php:d-m-Y H:i:s") . "</td>";
                        echo '</tr>';
                    }
                echo '</tbody>';
                echo '</table>';

        } else {
            echo '<h3>Список приглашенных пользователей пуст ;(</h3>';
        } ?>


    </div>
    <p>
    </p>

</div>
