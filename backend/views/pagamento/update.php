<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pagamento */

$this->title = 'Update Pagamento: ' . $model->id_pagamento;
$this->params['breadcrumbs'][] = ['label' => 'Pagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pagamento, 'url' => ['view', 'id' => $model->id_pagamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pagamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
