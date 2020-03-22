<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Clube */

$this->title = 'Create Clube';
$this->params['breadcrumbs'][] = ['label' => 'Clubes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clube-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
