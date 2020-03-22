<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DirecaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direcao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_direcao') ?>

    <?= $form->field($model, 'presidente') ?>

    <?= $form->field($model, 'vice_presidente') ?>

    <?= $form->field($model, 'secretario') ?>

    <?= $form->field($model, 'tesoureiro') ?>

    <?php // echo $form->field($model, 'director_tecnico') ?>

    <?php // echo $form->field($model, 'data_log') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'orgaos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
