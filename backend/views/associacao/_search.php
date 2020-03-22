<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AssociacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="associacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_associacao') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'pais') ?>

    <?= $form->field($model, 'cidade') ?>

    <?= $form->field($model, 'dat_fundacao') ?>

    <?php // echo $form->field($model, 'rua') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
