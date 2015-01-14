<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reportes".
 *
 * @property string $usuario
 * @property string $email
 * @property string $descripcion
 * @property string $coordenadas
 * @property integer $link1
 * @property integer $link2
 */
class Reportes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reportes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario', 'email', 'descripcion', 'coordenadas', 'link1', 'link2'], 'required'],
            [['link1', 'link2'], 'integer'],
            [['usuario', 'email'], 'string', 'max' => 30],
            [['descripcion'], 'string', 'max' => 250],
            [['coordenadas'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario' => 'Usuario',
            'email' => 'Email',
            'descripcion' => 'Descripcion',
            'coordenadas' => 'Coordenadas',
            'link1' => 'Link1',
            'link2' => 'Link2',
        ];
    }
}
