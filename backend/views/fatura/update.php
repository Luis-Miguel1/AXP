<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fatura */

$this->title = 'Update Fatura: ' . $model->id_fatura;
$this->params['breadcrumbs'][] = ['label' => 'Faturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_fatura, 'url' => ['view', 'id' => $model->id_fatura]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fatura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
