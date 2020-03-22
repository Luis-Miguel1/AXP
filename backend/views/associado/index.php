<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AssociadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Associados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="associado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Associado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_associado',
            'nome',
            'bi',
            'nif',
            'tipo_associado',
            //'associacao_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
