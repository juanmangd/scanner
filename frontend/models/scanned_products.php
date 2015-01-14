<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "scanned_products".
 *
 * @property string $barcode
 * @property integer $amount
 * @property string $description
 * @property string $created_at
 */
class scanned_products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scanned_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barcode', 'amount'], 'required'],
            [['barcode', 'amount'], 'integer'],
            [['description'], 'string', 'max' => 600]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'barcode' => 'Barcode',
            'amount' => 'Amount',
            'description' => 'Description',
        ];
    }
	
	
}
