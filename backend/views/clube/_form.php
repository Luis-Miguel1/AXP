<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Clube */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clube-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <?= $form->field($model, 'residencia')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
