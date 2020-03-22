<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Competicao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competicao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_inicio')->textInput() ?>

    <?= $form->field($model, 'data_fim')->textInput() ?>

    <?= $form->field($model, 'local')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'director_torneio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arbitro_principal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arbitro_auxiliar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
