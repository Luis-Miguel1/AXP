<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Assembleia */

$this->title = 'Create Assembleia';
$this->params['breadcrumbs'][] = ['label' => 'Assembleias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assembleia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
