<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anuncio;

/**
 * AnuncioSearch represents the model behind the search form about `app\models\Anuncio`.
 */
class AnuncioSearch extends Anuncio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['anuncio', 'player', 'data_hora'], 'safe'],
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
        $query = Anuncio::find();

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

        $query->andFilterWhere(['like', 'anuncio', $this->anuncio])
            ->andFilterWhere(['like', 'player', $this->player]);

        return $dataProvider;
    }
}
