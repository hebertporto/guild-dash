<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "champion".
 *
 * @property string $id
 * @property string $nome
 * @property string $data_hora
 */
class Champion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'champion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'data_hora'], 'required'],
            [['data_hora'], 'safe'],
            [['nome'], 'string', 'max' => 32]
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
        ];
    }
}
