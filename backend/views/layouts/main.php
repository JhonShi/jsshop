<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use \yii\helpers\Url;

AppAsset::register($this);
$controller = Yii::$app->controller;
$action = Yii::$app->controller->action;
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
    <style>
        .one_nav
        {
            width: 100%;
            height: 40px;
            border: 1px solid #ccc;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
        }
        .two_nav
        {
            display: none;
        }
        .ul_nav
        {
            list-style: none;
            text-align: center;
            padding:0;
        }
        .li_nav
        {
            width: 100%;
            margin: 0;
        }
    </style>
    <script>
        function one_nav(id)
        {
            for(var i=1;i<10;i++)
            {
                $("#two_nav_"+i).css('display','none');
                $("#one_nav_"+i).css('background','#278296');
            }
            $("#one_nav_"+id).css('background','#272296');
            $("#two_nav_"+id).css('display','block');
        }
    </script>
</head>
<body>
<?php $this->beginBody() ?>

<div>
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    }
    else
    {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</div>
    <div style="width: 100%;border:2px solid #000;height: 100%;">
        <div style="width:200px;height: 100%;border:1px solid #ccc;padding-top:50px;float: left;">
            <div>
                <div class="one_nav" id="one_nav_1" onclick="one_nav(1)">
                   系统设置
                </div>
                <ul id="two_nav_1" class="two_nav ul_nav">
                    <li id="basic-config" class="li_nav"><a href="<?=Url::to(['basic/basic-config'])?>">基本设置</a></li>
                    <li id="two_nav_1_item2" class="li_nav">item2</li>
                    <li id="two_nav_1_item3" class="li_nav">item3</li>
                </ul>
            </div>
            <div>
                <div class="one_nav" id="one_nav_2" onclick="one_nav(2)">
                    呵呵
                </div>
                <ul id="two_nav_2" class="two_nav">
                    <li id="two_nav_2_item4" class="li_nav">item4</li>
                    <li id="two_nav_2_item5" class="li_nav">item5</li>
                    <li id="two_nav_2_item6" class="li_nav">item6</li>
                </ul>
            </div>
        </div>
        <div style="width:800px;height: 100%;border:1px solid #ccc;padding-top:50px;float: left;">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
        </div>
        <br style="clear: both"/>
    </div>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<script>
    var nav="<?=isset($this->params['nav'])?$this->params['nav']:''?>";
    if(nav!='')
    {
        var temp= nav.split('_');
        one_nav(temp[0]);
        $("#<?=$action->id?>").css('background','#a7c');
        $("#one_nav_"+temp[0]).css('background','#272296');
    }
</script>
</body>
</html>
<?php $this->endPage() ?>
