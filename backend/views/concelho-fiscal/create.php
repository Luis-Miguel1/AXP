<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ConcelhoFiscal */

$this->title = 'Create Concelho Fiscal';
$this->params['breadcrumbs'][] = ['label' => 'Concelho Fiscals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concelho-fiscal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
