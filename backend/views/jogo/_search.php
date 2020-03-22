<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JogoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jogo') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'updated-at') ?>

    <?= $form->field($model, 'brancas') ?>

    <?= $form->field($model, 'petras') ?>

    <?php // echo $form->field($model, 'registro_partida') ?>

    <?php // echo $form->field($model, 'vencedor') ?>

    <?php // echo $form->field($model, 'perdedor') ?>

    <?php // echo $form->field($model, 'competicao_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
