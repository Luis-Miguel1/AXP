<?php



use yii\helpers\Html;
//use dosamigos\datepicker\DatePicker;
use yii\jui\DatePicker;
//use yii\widgets\ActiveForm;
//use yii\bootstrap\ActiveForm;
use kartik\form\ActiveForm;
use kartik\datetime\DateTimePicker;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Arbitro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arbitro-form " style="margin:auto;">

    <?php $form = ActiveForm::begin(
        []
    ); ?>

    <div class="form-group row" style="margin:auto;">
        <div class="col-sm-10" style="width:500px">
            <?= $form->field($model, 'nome', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->textInput(['maxlength' => true, 'autofocus' => true]) ?>
        </div>
        <div class="col-sm-12" style="width:500px">
            <?= $form->field($model, 'data_nascimento', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->widget(DateTimePicker::classname(), [
                'options' => ['placeholder' => 'Ensere data de nascimento ...'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy/mm/dd',
                    'minView' => 2,
                ]
            ]); ?>
        </div>

    </div>
    <div class="form-group row" style="margin:auto;">
        <div class="col-sm-10" style="width:500px">
            <?= $form->field($model, 'email', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-10" style="width:500px">
            <?= $form->field($model, 'titulo', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group row" style="margin:auto;">
        <div class="col-sm-10" style="width:500px">
            <?= $form->field($model, 'residencia', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-10" style="width:500px">
            <?= $form->field($model, 'Nacionalidade', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group row" style="margin:auto">
        <div class="col-sm-10" style="width:500px">
            <?= $form->field($model, 'telemovel', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->textInput() ?>
        </div>
        <div class="col-sm-10" style="width:500px;">
            <?= $form->field($model, 'foto', ['inputOptions' => [
                'autocomplete' => 'off'
            ]])->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showPreview' => false,
                    'showCaption' => true,
                    'showCancel' => false,
                    'showUpload' => false
                ]
            ])->label('Foto'); ?>
        </div>
    </div>



    <div class="form-group row" style="margin:10px;padding: 10px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>




    <?php ActiveForm::end(); ?>


</div>