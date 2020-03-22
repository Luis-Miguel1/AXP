<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Orgaos */

$this->title = 'Update Orgaos: ' . $model->id_orgaos;
$this->params['breadcrumbs'][] = ['label' => 'Orgaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_orgaos, 'url' => ['view', 'id' => $model->id_orgaos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orgaos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
