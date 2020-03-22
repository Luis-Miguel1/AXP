<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Clube */

$this->title = 'Update Clube: ' . $model->id_clube;
$this->params['breadcrumbs'][] = ['label' => 'Clubes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_clube, 'url' => ['view', 'id' => $model->id_clube]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clube-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
