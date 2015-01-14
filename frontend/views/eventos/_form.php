<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Eventos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eventos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idMovil')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'urlFoto1')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'lonCapturaFoto1Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'latCapturaFoto1Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'timeStampCapturaFoto1Movil')->textInput() ?>

    <?= $form->field($model, 'urlFoto2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lonCapturaFoto2Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'latCapturaFoto2Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'timeStampCapturaFoto2Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'latCapturaFoto3Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'urlFoto3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'timeStampCapturaFoto3Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'urlFoto4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lonCapturaFoto4Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'latCapturaFoto4Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'timeStampCapturaFoto4Movil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'urlVideo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lonCapturaVideoMovil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'latCapturaVideoMovil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'timeStampCapturaVideoMovil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'username')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'servAuth')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'celular')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lugarCaptura')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lonCapturaFoto3Movil')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
