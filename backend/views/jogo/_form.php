<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Jogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'updated-at')->textInput() ?>

    <?= $form->field($model, 'brancas')->textInput() ?>

    <?= $form->field($model, 'petras')->textInput() ?>

    <?= $form->field($model, 'registro_partida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vencedor')->textInput() ?>

    <?= $form->field($model, 'perdedor')->textInput() ?>

    <?= $form->field($model, 'competicao_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
