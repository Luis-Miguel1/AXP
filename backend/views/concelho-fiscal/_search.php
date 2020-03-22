<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ConcelhoFiscalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="concelho-fiscal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_conselho_fiscal') ?>

    <?= $form->field($model, 'presidente') ?>

    <?= $form->field($model, 'vice_presidente') ?>

    <?= $form->field($model, 'vogal') ?>

    <?= $form->field($model, 'data_log') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'orgaos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
