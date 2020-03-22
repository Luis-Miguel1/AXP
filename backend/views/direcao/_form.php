<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Direcao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direcao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'presidente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vice_presidente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secretario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tesoureiro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'director_tecnico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_log')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'orgaos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
