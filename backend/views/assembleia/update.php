<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Assembleia */

$this->title = 'Update Assembleia: ' . $model->id_assenbleia;
$this->params['breadcrumbs'][] = ['label' => 'Assembleias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_assenbleia, 'url' => ['view', 'id' => $model->id_assenbleia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assembleia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
