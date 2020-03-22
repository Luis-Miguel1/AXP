<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CompeticaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competicao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_competicao') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'data_inicio') ?>

    <?= $form->field($model, 'data_fim') ?>

    <?= $form->field($model, 'local') ?>

    <?php // echo $form->field($model, 'director_torneio') ?>

    <?php // echo $form->field($model, 'arbitro_principal') ?>

    <?php // echo $form->field($model, 'arbitro_auxiliar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
