<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Competicao */

$this->title = 'Update Competicao: ' . $model->id_competicao;
$this->params['breadcrumbs'][] = ['label' => 'Competicaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_competicao, 'url' => ['view', 'id' => $model->id_competicao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="competicao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
