<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\scanned_product;

/**
 * scanned_productsSearch represents the model behind the search form about `app\models\scanned_product`.
 */
class scanned_productsSearch extends scanned_product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barcode', 'amount'], 'integer'],
            [['description', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = scanned_product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'barcode' => $this->barcode,
            'amount' => $this->amount,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
