<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ArbitroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arbitro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_arbitro') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'data_nascimento') ?>

    <?= $form->field($model, 'residencia') ?>

    <?php // echo $form->field($model, 'telemovel') ?>

    <?php // echo $form->field($model, 'Nacionalidade') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'titulo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
