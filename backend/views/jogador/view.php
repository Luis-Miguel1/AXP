<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Jogador */

$this->title = $model->id_jogador;
$this->params['breadcrumbs'][] = ['label' => 'Jogadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jogador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jogador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jogador], [
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
            'id_jogador',
            'nome',
            'elo',
            'email:email',
            'foto:ntext',
            'data_nas',
            'residencia',
            'telemovel',
            'Nacionalidade',
            'estado',
            'data_log',
            'Socio_id',
            'associacao_id',
            'clube_id',
        ],
    ]) ?>

</div>
