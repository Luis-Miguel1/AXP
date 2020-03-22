<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompeticaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Competicaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competicao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Competicao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_competicao',
            'nome',
            'data_inicio',
            'data_fim',
            'local',
            //'director_torneio',
            //'arbitro_principal',
            //'arbitro_auxiliar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
