<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReportesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usuario') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'coordenadas') ?>

    <?= $form->field($model, 'link1') ?>

    <?php // echo $form->field($model, 'link2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
