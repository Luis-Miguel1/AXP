<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ConcelhoFiscal */

$this->title = 'Update Concelho Fiscal: ' . $model->id_conselho_fiscal;
$this->params['breadcrumbs'][] = ['label' => 'Concelho Fiscals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_conselho_fiscal, 'url' => ['view', 'id' => $model->id_conselho_fiscal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="concelho-fiscal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
