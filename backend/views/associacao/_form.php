<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Associacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="associacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_associacao')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cidade')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dat_fundacao')->textInput() ?>

    <?= $form->field($model, 'rua')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
