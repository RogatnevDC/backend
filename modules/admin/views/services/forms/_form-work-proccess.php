<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WorkProccess */
/* @var $form yii\widgets\ActiveForm */

$model->service_id = $service_id['id'];
?>

<div class="work-proccess-form">
   <?php $form = ActiveForm::begin([
           'action' => '/admin/work-proccess/create',
           'options' => [
               'enableAjaxValidation' => true,
               'enableClientValidation'=>true

           ]
       ]); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
               <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'required' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
               <?= $form->field($model, 'status')->dropDownList(['1' => 'Включен', '0' => 'Отключен']) ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
               <?= $form->field($model, 'img')->fileInput(['maxlength' => true, 'required' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
               <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="col-lg-12 text-center">
       <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink']) ?>
    </div>
    <?= $form->field($model, 'service_id')->hiddenInput(['value' => $service_id['id']])->label(false) ?>
   <?php ActiveForm::end(); ?>
</div>
