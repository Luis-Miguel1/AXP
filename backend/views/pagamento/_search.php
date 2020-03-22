<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PagamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pagamento') ?>

    <?= $form->field($model, 'quantia') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'socio_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
