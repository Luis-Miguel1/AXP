<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JogadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jogador') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'elo') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'data_nas') ?>

    <?php // echo $form->field($model, 'residencia') ?>

    <?php // echo $form->field($model, 'telemovel') ?>

    <?php // echo $form->field($model, 'Nacionalidade') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'data_log') ?>

    <?php // echo $form->field($model, 'Socio_id') ?>

    <?php // echo $form->field($model, 'associacao_id') ?>

    <?php // echo $form->field($model, 'clube_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
