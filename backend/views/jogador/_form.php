<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Jogador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'elo')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'foto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data_nas')->textInput() ?>

    <?= $form->field($model, 'residencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telemovel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nacionalidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'data_log')->textInput() ?>

    <?= $form->field($model, 'Socio_id')->textInput() ?>

    <?= $form->field($model, 'associacao_id')->textInput() ?>

    <?= $form->field($model, 'clube_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
