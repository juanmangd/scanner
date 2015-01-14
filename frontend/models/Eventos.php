<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "eventos".
 *
 * @property integer $idMovil
 * @property integer $id
 * @property string $nombre
 * @property integer $edad
 * @property string $email
 * @property string $urlFoto1
 * @property string $lonCapturaFoto1Movil
 * @property string $latCapturaFoto1Movil
 * @property integer $timeStampCapturaFoto1Movil
 * @property string $urlFoto2
 * @property string $lonCapturaFoto2Movil
 * @property string $latCapturaFoto2Movil
 * @property string $timeStampCapturaFoto2Movil
 * @property string $latCapturaFoto3Movil
 * @property string $urlFoto3
 * @property string $timeStampCapturaFoto3Movil
 * @property string $urlFoto4
 * @property string $lonCapturaFoto4Movil
 * @property string $latCapturaFoto4Movil
 * @property string $timeStampCapturaFoto4Movil
 * @property string $urlVideo
 * @property string $lonCapturaVideoMovil
 * @property string $latCapturaVideoMovil
 * @property string $timeStampCapturaVideoMovil
 * @property string $observaciones
 * @property string $username
 * @property string $servAuth
 * @property string $celular
 * @property string $lugarCaptura
 * @property string $lonCapturaFoto3Movil
 */
class Eventos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eventos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['idMovil', 'latCapturaFoto1Movil', 'timeStampCapturaFoto1Movil', 'urlFoto2', 'lonCapturaFoto2Movil', 'latCapturaFoto2Movil', 'timeStampCapturaFoto2Movil', 'latCapturaFoto3Movil', 'urlFoto3', 'timeStampCapturaFoto3Movil', 'urlFoto4', 'lonCapturaFoto4Movil', 'latCapturaFoto4Movil', 'timeStampCapturaFoto4Movil', 'urlVideo', 'lonCapturaVideoMovil', 'latCapturaVideoMovil', 'timeStampCapturaVideoMovil', 'username', 'servAuth', 'celular', 'lugarCaptura', 'lonCapturaFoto3Movil'], 'required'],
            [['idMovil', 'edad'], 'integer'],
            [['timeStampCapturaFoto1Movil','lonCapturaFoto1Movil', 'latCapturaFoto1Movil', 'urlFoto2', 'lonCapturaFoto2Movil', 'latCapturaFoto2Movil', 'timeStampCapturaFoto2Movil', 'latCapturaFoto3Movil', 'urlFoto3', 'timeStampCapturaFoto3Movil', 'urlFoto4', 'lonCapturaFoto4Movil', 'latCapturaFoto4Movil', 'timeStampCapturaFoto4Movil', 'urlVideo', 'lonCapturaVideoMovil', 'latCapturaVideoMovil', 'timeStampCapturaVideoMovil', 'observaciones', 'username', 'servAuth', 'celular', 'lugarCaptura', 'lonCapturaFoto3Movil'], 'string'],
            [['nombre', 'email'], 'string', 'max' => 50],
            [['urlFoto1'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMovil' => 'Id Movil',
            'id' => 'ID',
            'nombre' => 'Nombre',
            'edad' => 'Edad',
            'email' => 'Email',
            'urlFoto1' => 'Url Foto1',
            'lonCapturaFoto1Movil' => 'Lon Captura Foto1 Movil',
            'latCapturaFoto1Movil' => 'Lat Captura Foto1 Movil',
            'timeStampCapturaFoto1Movil' => 'Time Stamp Captura Foto1 Movil',
            'urlFoto2' => 'Url Foto2',
            'lonCapturaFoto2Movil' => 'Lon Captura Foto2 Movil',
            'latCapturaFoto2Movil' => 'Lat Captura Foto2 Movil',
            'timeStampCapturaFoto2Movil' => 'Time Stamp Captura Foto2 Movil',
            'latCapturaFoto3Movil' => 'Lat Captura Foto3 Movil',
            'urlFoto3' => 'Url Foto3',
            'timeStampCapturaFoto3Movil' => 'Time Stamp Captura Foto3 Movil',
            'urlFoto4' => 'Url Foto4',
            'lonCapturaFoto4Movil' => 'Lon Captura Foto4 Movil',
            'latCapturaFoto4Movil' => 'Lat Captura Foto4 Movil',
            'timeStampCapturaFoto4Movil' => 'Time Stamp Captura Foto4 Movil',
            'urlVideo' => 'Url Video',
            'lonCapturaVideoMovil' => 'Lon Captura Video Movil',
            'latCapturaVideoMovil' => 'Lat Captura Video Movil',
            'timeStampCapturaVideoMovil' => 'Time Stamp Captura Video Movil',
            'observaciones' => 'Observaciones',
            'username' => 'Username',
            'servAuth' => 'Serv Auth',
            'celular' => 'Celular',
            'lugarCaptura' => 'Lugar Captura',
            'lonCapturaFoto3Movil' => 'Lon Captura Foto3 Movil',
        ];
    }
}
