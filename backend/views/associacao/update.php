<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Associacao */

$this->title = 'Update Associacao: ' . $model->id_associacao;
$this->params['breadcrumbs'][] = ['label' => 'Associacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_associacao, 'url' => ['view', 'id' => $model->id_associacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="associacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
