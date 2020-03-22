<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JogoJogador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogo-jogador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jogador_id')->textInput() ?>

    <?= $form->field($model, 'jogo_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
