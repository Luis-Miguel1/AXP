<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AssociacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Associacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="associacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Associacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_associacao',
            'nome',
            'pais:ntext',
            'cidade:ntext',
            'dat_fundacao',
            //'rua:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
