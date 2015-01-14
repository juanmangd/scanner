<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */

$this->title = 'Update Reportes: ' . ' ' . $model->descripcion;
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion, 'url' => ['view', 'id' => $model->descripcion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reportes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
