<?php

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">

        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Главная', 'url' => '/agro/web/'],
                ['label' => 'Животноводство', 'url' => ['post/index']],
                ['label' => 'Растеневодство', 'url' => ['post/plant']],
                ['label' => 'Форма', 'url' => ['post/show']],
                /*['label' => 'Contact', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )*/
            ],
        ]);
        NavBar::end();
        ?>







        <div class="container">
            <!-- Своё меню
            <ul class="nav nav-pills">
                <li class="active nav-item">
                    <?php
                        //Html::a('Главная', '/agro/web/', 'activeCssClass'=>'active')
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                        //Html::a('Животновоство', ['post/index'])
                    ?>
                </li>
                <li class="nav-item">
                    <?php //Html::a('Форма', ['post/show']) ?>
                </li>
            </ul>-->


            <?= $content ?>

        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
