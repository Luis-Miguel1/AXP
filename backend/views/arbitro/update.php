<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Arbitro */

$this->title = 'Update Arbitro: ' . $model->id_arbitro;
$this->params['breadcrumbs'][] = ['label' => 'Arbitros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_arbitro, 'url' => ['view', 'id' => $model->id_arbitro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="arbitro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
