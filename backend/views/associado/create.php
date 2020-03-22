<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Associado */

$this->title = 'Create Associado';
$this->params['breadcrumbs'][] = ['label' => 'Associados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="associado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
