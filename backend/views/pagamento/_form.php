<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pagamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pagamento')->textInput() ?>

    <?= $form->field($model, 'quantia')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'socio_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
