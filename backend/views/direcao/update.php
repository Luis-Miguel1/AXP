<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Direcao */

$this->title = 'Update Direcao: ' . $model->id_direcao;
$this->params['breadcrumbs'][] = ['label' => 'Direcaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_direcao, 'url' => ['view', 'id' => $model->id_direcao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="direcao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
