<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Eventos;

/**
 * EventosSearch represents the model behind the search form about `frontend\models\Eventos`.
 */
class EventosSearch extends Eventos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMovil', 'id', 'edad', 'timeStampCapturaFoto1Movil'], 'integer'],
            [['nombre', 'email', 'urlFoto1', 'lonCapturaFoto1Movil', 'latCapturaFoto1Movil', 'urlFoto2', 'lonCapturaFoto2Movil', 'latCapturaFoto2Movil', 'timeStampCapturaFoto2Movil', 'latCapturaFoto3Movil', 'urlFoto3', 'timeStampCapturaFoto3Movil', 'urlFoto4', 'lonCapturaFoto4Movil', 'latCapturaFoto4Movil', 'timeStampCapturaFoto4Movil', 'urlVideo', 'lonCapturaVideoMovil', 'latCapturaVideoMovil', 'timeStampCapturaVideoMovil', 'observaciones', 'username', 'servAuth', 'celular', 'lugarCaptura', 'lonCapturaFoto3Movil'], 'safe'],
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
        $query = Eventos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idMovil' => $this->idMovil,
            'id' => $this->id,
            'edad' => $this->edad,
            'timeStampCapturaFoto1Movil' => $this->timeStampCapturaFoto1Movil,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'urlFoto1', $this->urlFoto1])
            ->andFilterWhere(['like', 'lonCapturaFoto1Movil', $this->lonCapturaFoto1Movil])
            ->andFilterWhere(['like', 'latCapturaFoto1Movil', $this->latCapturaFoto1Movil])
            ->andFilterWhere(['like', 'urlFoto2', $this->urlFoto2])
            ->andFilterWhere(['like', 'lonCapturaFoto2Movil', $this->lonCapturaFoto2Movil])
            ->andFilterWhere(['like', 'latCapturaFoto2Movil', $this->latCapturaFoto2Movil])
            ->andFilterWhere(['like', 'timeStampCapturaFoto2Movil', $this->timeStampCapturaFoto2Movil])
            ->andFilterWhere(['like', 'latCapturaFoto3Movil', $this->latCapturaFoto3Movil])
            ->andFilterWhere(['like', 'urlFoto3', $this->urlFoto3])
            ->andFilterWhere(['like', 'timeStampCapturaFoto3Movil', $this->timeStampCapturaFoto3Movil])
            ->andFilterWhere(['like', 'urlFoto4', $this->urlFoto4])
            ->andFilterWhere(['like', 'lonCapturaFoto4Movil', $this->lonCapturaFoto4Movil])
            ->andFilterWhere(['like', 'latCapturaFoto4Movil', $this->latCapturaFoto4Movil])
            ->andFilterWhere(['like', 'timeStampCapturaFoto4Movil', $this->timeStampCapturaFoto4Movil])
            ->andFilterWhere(['like', 'urlVideo', $this->urlVideo])
            ->andFilterWhere(['like', 'lonCapturaVideoMovil', $this->lonCapturaVideoMovil])
            ->andFilterWhere(['like', 'latCapturaVideoMovil', $this->latCapturaVideoMovil])
            ->andFilterWhere(['like', 'timeStampCapturaVideoMovil', $this->timeStampCapturaVideoMovil])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'servAuth', $this->servAuth])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'lugarCaptura', $this->lugarCaptura])
            ->andFilterWhere(['like', 'lonCapturaFoto3Movil', $this->lonCapturaFoto3Movil]);

        return $dataProvider;
    }
}
