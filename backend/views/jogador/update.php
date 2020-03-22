<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jogador */

$this->title = 'Update Jogador: ' . $model->id_jogador;
$this->params['breadcrumbs'][] = ['label' => 'Jogadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jogador, 'url' => ['view', 'id' => $model->id_jogador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jogador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
