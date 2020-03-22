<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JogoJogador */

$this->title = 'Update Jogo Jogador: ' . $model->id_jogo_jogador;
$this->params['breadcrumbs'][] = ['label' => 'Jogo Jogadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jogo_jogador, 'url' => ['view', 'id' => $model->id_jogo_jogador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jogo-jogador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
