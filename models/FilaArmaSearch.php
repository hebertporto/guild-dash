<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FilaArma;

/**
 * FilaArmaSearch represents the model behind the search form about `app\models\FilaArma`.
 */
class FilaArmaSearch extends FilaArma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'posicao'], 'integer'],
            [['player', 'arma', 'data_hora'], 'safe'],
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
        $query = FilaArma::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'posicao' => $this->posicao,
            'data_hora' => $this->data_hora,
        ]);

        $query->andFilterWhere(['like', 'player', $this->player])
            ->andFilterWhere(['like', 'arma', $this->arma]);

        return $dataProvider;
    }
}
