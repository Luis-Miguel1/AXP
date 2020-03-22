<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArbitroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Arbitros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arbitro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Arbitro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
           // 'id_arbitro',
            'nome',
            [
                'label'=> 'Foto',
                'format'=>'html',
                'value' => function ($model)
                {
                    return Html::img($model->foto,['width'=>'100px','height'=>'50px']);
                }
            ],
            //'data_nascimento',
            //'residencia',
            'titulo',
            'telemovel',
            //'Nacionalidade',
            'email:email',
            //'created_at',
            //'updated_at',
            [
                'class' =>'yii\grid\ActionColumn', 
                'headerOptions' =>['style'=>'with:90px'],
                'contentOptions' => ['class'=>'test-center'],
                'header' => 'Ações',
            ],

        ],
    ]); ?>


</div>
