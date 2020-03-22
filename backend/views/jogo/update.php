<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jogo */

$this->title = 'Update Jogo: ' . $model->id_jogo;
$this->params['breadcrumbs'][] = ['label' => 'Jogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jogo, 'url' => ['view', 'id' => $model->id_jogo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
