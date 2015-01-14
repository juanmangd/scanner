<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Eventos */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventos-view">

    <h1><?= Html::encode($this->title) ?></h1>
<script language=javascript>
window.print();
</script>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idMovil',
            'id',
            'nombre',
            'edad',
            'email:email',
            'urlFoto1:url',
            'lonCapturaFoto1Movil:ntext',
            'latCapturaFoto1Movil:ntext',
            'timeStampCapturaFoto1Movil:datetime',
            'urlFoto2:url',
            'lonCapturaFoto2Movil:ntext',
            'latCapturaFoto2Movil:ntext',
            'timeStampCapturaFoto2Movil:ntext',
            'latCapturaFoto3Movil:ntext',
            'urlFoto3:url',
            'timeStampCapturaFoto3Movil:ntext',
            'urlFoto4:ntext',
            'lonCapturaFoto4Movil:ntext',
            'latCapturaFoto4Movil:ntext',
            'timeStampCapturaFoto4Movil:ntext',
            'urlVideo:url',
            'lonCapturaVideoMovil:ntext',
            'latCapturaVideoMovil:ntext',
            'timeStampCapturaVideoMovil:ntext',
            'observaciones:ntext',
            'username:ntext',
            'servAuth:ntext',
            'celular:ntext',
            'lugarCaptura:ntext',
            'lonCapturaFoto3Movil:ntext',
        ],
    ]) ?>

</div>
