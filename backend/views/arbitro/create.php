<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Arbitro */

$this->title = 'Cadastrar Arbitro';
$this->params['breadcrumbs'][] = ['label' => 'Arbitros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="arbitro-create" style="margin:auto">

    <h1 ><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
