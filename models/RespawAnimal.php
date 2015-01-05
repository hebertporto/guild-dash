<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "respaw_animal".
 *
 * @property integer $id
 * @property string $animal
 * @property string $color
 * @property string $data_hora
 * @property string $player
 */
class RespawAnimal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'respaw_animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['animal', 'color', 'data_hora'], 'required'],
            [['data_hora'], 'safe'],
            [['animal', 'color', 'player'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'animal' => 'Animal',
            'color' => 'Color',
            'data_hora' => 'Data Hora',
            'player' => 'Player',
        ];
    }
}
