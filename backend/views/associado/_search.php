<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AssociadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="associado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_associado') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'bi') ?>

    <?= $form->field($model, 'nif') ?>

    <?= $form->field($model, 'tipo_associado') ?>

    <?php // echo $form->field($model, 'associacao_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
