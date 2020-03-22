<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JogoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jogos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jogo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jogo',
            'data',
            'updated-at',
            'brancas',
            'petras',
            //'registro_partida',
            //'vencedor',
            //'perdedor',
            //'competicao_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
