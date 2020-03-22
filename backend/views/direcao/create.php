<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Direcao */

$this->title = 'Create Direcao';
$this->params['breadcrumbs'][] = ['label' => 'Direcaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direcao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
