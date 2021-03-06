<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'coordenadas')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'link1')->textInput() ?>

    <?= $form->field($model, 'link2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
