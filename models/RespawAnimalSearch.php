<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RespawAnimal;

/**
 * RespawAnimalSearch represents the model behind the search form about `app\models\RespawAnimal`.
 */
class RespawAnimalSearch extends RespawAnimal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['animal', 'color', 'data_hora', 'player'], 'safe'],
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
        $query = RespawAnimal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'data_hora' => $this->data_hora,
        ]);

        $query->andFilterWhere(['like', 'animal', $this->animal])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'player', $this->player]);

        return $dataProvider;
    }
}
