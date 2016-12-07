<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use BomCMS\AdminLTE\Menu;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="layout-boxed sidebar-mini skin-blue-light">
<?php $this->beginBody() ?>

<div class="wrapper">
    <header class="main-header">
        <?= Html::a('<span class="logo-lg"><b>Admin</b>LTE</span>', '/admin', ['class' => 'logo']); ?>
        <nav class="navbar navbar-static-top"></nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <?= Menu::widget([
                'items' => [
                    [
                        'label' => 'Home',
                        'url' => ['site/index'],
                        'icon' => 'fa fa-home'],
                    [
                        'label' => 'Products',
                        'url' => ['product/index'],
                        'items' => [
                            [
                                'label' => 'New Arrivals',
                                'url' => ['product/index']
                            ],
                            [
                                'label' => 'Most Popular',
                                'url' => ['product/index']
                            ],
                        ]],
                    [
                        'label' => 'Thoát',
                        'url' => ['site/logout'],
                        'template' => '<a href="{url}" data-method="post"><i class="{icon}"></i> {label}</a>',
                        'icon' => 'fa fa-sign-out',
                        'visible' => !Yii::$app->user->isGuest
                    ],
                ],
            ]) ?>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>

        </section>
    </div>
    <footer class="main-footer">
        <p class="pull-right hidden-xs"><?= Yii::powered() ?></p>
        &copy; My Company <?= date('Y') ?>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
