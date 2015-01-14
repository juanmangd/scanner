<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reportes;

/**
 * ReportesSearch represents the model behind the search form about `app\models\Reportes`.
 */
class ReportesSearch extends Reportes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario', 'email', 'descripcion', 'coordenadas'], 'safe'],
            [['link1', 'link2'], 'integer'],
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
        $query = Reportes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'link1' => $this->link1,
            'link2' => $this->link2,
        ]);

        $query->andFilterWhere(['like', 'usuario', $this->usuario])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'coordenadas', $this->coordenadas]);

        return $dataProvider;
    }
}
