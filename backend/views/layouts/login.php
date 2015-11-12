<?php
/**
 * Created by PhpStorm.
 * User: sq
 * Date: 2015/11/12
 * Time: 11:41
 */
use yii\helpers\Html;
use backend\assets\AppAsset;
AppAsset::register($this);

?>

<?php
$this->beginPage();
?>
<!doctype html>
<html>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body style="background: #278296;">
        <?php $this->beginBody() ?>
        <div style="width: 100%;margin-top: 100px;">
        <?= $content ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>


<?php $this->endPage()?>
