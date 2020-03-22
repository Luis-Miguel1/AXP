<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Assembleia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assembleia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_assenbleia')->textInput() ?>

    <?= $form->field($model, 'presidente')->textInput() ?>

    <?= $form->field($model, 'vice_presidente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secretario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_log')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'orgaos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
