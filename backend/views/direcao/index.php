<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DirecaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Direcaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direcao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Direcao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_direcao',
            'presidente',
            'vice_presidente',
            'secretario',
            'tesoureiro',
            //'director_tecnico',
            //'data_log',
            //'estado',
            //'orgaos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
