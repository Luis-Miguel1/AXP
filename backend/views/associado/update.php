<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Associado */

$this->title = 'Update Associado: ' . $model->id_associado;
$this->params['breadcrumbs'][] = ['label' => 'Associados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_associado, 'url' => ['view', 'id' => $model->id_associado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="associado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
