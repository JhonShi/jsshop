<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '管理中心';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="width: 500px;height: auto;margin: 20px auto;padding: 20px auto;color:white;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请输入账号和密码:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options'=>['class'=>'form-horizontal'],
                'fieldConfig'=>[
                    'template'=>"{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class='col-lg-3'>{error}</div>",
                    'labelOptions'=>['class'=>'col-lg-2 control-label']
                ]
            ]); ?>

                <?= $form->field($model, 'username') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group" style="padding-left: 20%;">
                    <?= Html::submitButton('进入管理中心', ['class' => 'btn btn-primary', 'name' => 'login-button' ,'style'=>'background:white;color:black;']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
