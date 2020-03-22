<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Associado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="associado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bi')->textInput() ?>

    <?= $form->field($model, 'nif')->textInput() ?>

    <?= $form->field($model, 'tipo_associado')->dropDownList([ 'fundadores' => 'Fundadores', 'regulares' => 'Regulares', 'honorarios' => 'Honorarios', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'associacao_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
