<?php
use \yii\widgets\ActiveForm;
$this->title = '基本设置';
$this->params['breadcrumbs'][] = $this->title;
$this->params['nav']='1_basic-config';
?>
<?php
$form = ActiveForm::begin([
    'id'=>'config-form'
]);
?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'value')?>

<?php ActiveForm::end()?>
