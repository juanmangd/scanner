<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Eventos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idMovil',
            'id',
            'nombre',
            'edad',
            'email:email',
            // 'urlFoto1:url',
            // 'lonCapturaFoto1Movil:ntext',
            // 'latCapturaFoto1Movil:ntext',
            // 'timeStampCapturaFoto1Movil:datetime',
            // 'urlFoto2:ntext',
            // 'lonCapturaFoto2Movil:ntext',
            // 'latCapturaFoto2Movil:ntext',
            // 'timeStampCapturaFoto2Movil:ntext',
            // 'latCapturaFoto3Movil:ntext',
            // 'urlFoto3:ntext',
            // 'timeStampCapturaFoto3Movil:ntext',
            // 'urlFoto4:ntext',
            // 'lonCapturaFoto4Movil:ntext',
            // 'latCapturaFoto4Movil:ntext',
            // 'timeStampCapturaFoto4Movil:ntext',
            // 'urlVideo:ntext',
            // 'lonCapturaVideoMovil:ntext',
            // 'latCapturaVideoMovil:ntext',
            // 'timeStampCapturaVideoMovil:ntext',
            // 'observaciones:ntext',
            // 'username:ntext',
            // 'servAuth:ntext',
            // 'celular:ntext',
            // 'lugarCaptura:ntext',
            // 'lonCapturaFoto3Movil:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
