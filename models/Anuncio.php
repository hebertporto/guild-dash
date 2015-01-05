<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anuncio".
 *
 * @property integer $id
 * @property string $anuncio
 * @property string $player
 * @property string $data_hora
 */
class Anuncio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anuncio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anuncio', 'player', 'data_hora'], 'required'],
            [['anuncio'], 'string'],
            [['data_hora'], 'safe'],
            [['player'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'anuncio' => 'Anuncio',
            'player' => 'Player',
            'data_hora' => 'Data Hora',
        ];
    }
}
