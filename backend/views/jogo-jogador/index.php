<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JogoJogadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jogo Jogadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogo-jogador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jogo Jogador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jogo_jogador',
            'jogador_id',
            'jogo_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
