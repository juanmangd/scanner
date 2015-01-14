<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EventosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eventos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMovil') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'edad') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'urlFoto1') ?>

    <?php // echo $form->field($model, 'lonCapturaFoto1Movil') ?>

    <?php // echo $form->field($model, 'latCapturaFoto1Movil') ?>

    <?php // echo $form->field($model, 'timeStampCapturaFoto1Movil') ?>

    <?php // echo $form->field($model, 'urlFoto2') ?>

    <?php // echo $form->field($model, 'lonCapturaFoto2Movil') ?>

    <?php // echo $form->field($model, 'latCapturaFoto2Movil') ?>

    <?php // echo $form->field($model, 'timeStampCapturaFoto2Movil') ?>

    <?php // echo $form->field($model, 'latCapturaFoto3Movil') ?>

    <?php // echo $form->field($model, 'urlFoto3') ?>

    <?php // echo $form->field($model, 'timeStampCapturaFoto3Movil') ?>

    <?php // echo $form->field($model, 'urlFoto4') ?>

    <?php // echo $form->field($model, 'lonCapturaFoto4Movil') ?>

    <?php // echo $form->field($model, 'latCapturaFoto4Movil') ?>

    <?php // echo $form->field($model, 'timeStampCapturaFoto4Movil') ?>

    <?php // echo $form->field($model, 'urlVideo') ?>

    <?php // echo $form->field($model, 'lonCapturaVideoMovil') ?>

    <?php // echo $form->field($model, 'latCapturaVideoMovil') ?>

    <?php // echo $form->field($model, 'timeStampCapturaVideoMovil') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'servAuth') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'lugarCaptura') ?>

    <?php // echo $form->field($model, 'lonCapturaFoto3Movil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
