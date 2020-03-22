<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JogoJogador */

$this->title = 'Create Jogo Jogador';
$this->params['breadcrumbs'][] = ['label' => 'Jogo Jogadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogo-jogador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
