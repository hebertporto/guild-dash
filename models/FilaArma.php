<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fila_arma".
 *
 * @property integer $id
 * @property integer $posicao
 * @property string $player
 * @property string $arma
 * @property string $data_hora
 */
class FilaArma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fila_arma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player', 'arma', 'data_hora'], 'required'],
            [['posicao'], 'integer'],
            [['data_hora'], 'safe'],
            [['player', 'arma'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posicao' => 'Posicao',
            'player' => 'Player',
            'arma' => 'Arma',
            'data_hora' => 'Data Hora',
        ];
    }
}
