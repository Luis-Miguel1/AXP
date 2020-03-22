<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrgaosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orgaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orgaos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orgaos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_orgaos',
            'data',
            'associacao_id',
            'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
