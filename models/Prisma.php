<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prisma".
 *
 * @property integer $id
 * @property string $nome
 * @property string $data_hora
 * @property string $tinta
 * @property string $player
 */
class Prisma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prisma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'data_hora'], 'required'],
            [['data_hora'], 'safe'],
            [['nome', 'tinta', 'player'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'data_hora' => 'Data Hora',
            'tinta' => 'Tinta',
            'player' => 'Player',
        ];
    }
}
