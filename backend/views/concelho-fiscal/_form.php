<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ConcelhoFiscal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="concelho-fiscal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'presidente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vice_presidente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vogal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_log')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'orgaos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
