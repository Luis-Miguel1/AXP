<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ConcelhoFiscal */

$this->title = $model->id_conselho_fiscal;
$this->params['breadcrumbs'][] = ['label' => 'Concelho Fiscals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="concelho-fiscal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_conselho_fiscal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_conselho_fiscal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_conselho_fiscal',
            'presidente',
            'vice_presidente',
            'vogal',
            'data_log',
            'estado',
            'orgaos_id',
        ],
    ]) ?>

</div>
