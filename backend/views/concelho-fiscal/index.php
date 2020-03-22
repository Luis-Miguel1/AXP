<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ConcelhoFiscalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Concelho Fiscals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concelho-fiscal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Concelho Fiscal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_conselho_fiscal',
            'presidente',
            'vice_presidente',
            'vogal',
            'data_log',
            //'estado',
            //'orgaos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
