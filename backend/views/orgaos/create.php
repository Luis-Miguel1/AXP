<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Orgaos */

$this->title = 'Create Orgaos';
$this->params['breadcrumbs'][] = ['label' => 'Orgaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orgaos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
