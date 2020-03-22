<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Competicao */

$this->title = 'Create Competicao';
$this->params['breadcrumbs'][] = ['label' => 'Competicaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competicao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
