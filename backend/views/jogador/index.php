<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JogadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jogadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jogador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jogador',
            'nome',
            'elo',
            'email:email',
            'foto:ntext',
            //'data_nas',
            //'residencia',
            //'telemovel',
            //'Nacionalidade',
            //'estado',
            //'data_log',
            //'Socio_id',
            //'associacao_id',
            //'clube_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
