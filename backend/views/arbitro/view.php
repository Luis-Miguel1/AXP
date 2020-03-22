<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Arbitro */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Arbitros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="arbitro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_arbitro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_arbitro], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_arbitro',
            'nome',
            [
                'attribute'=> 'foto',
                'format'=>'html',
                'value' => function ($model)
                {
                    return Html::img($model->foto,['width'=>'100px','height'=>'50px']);
                }
            ],
            'data_nascimento',
            'residencia',
            'telemovel',
            'Nacionalidade',
            'email:email',
            'titulo',
        ],
    ]) ?>

</div>
