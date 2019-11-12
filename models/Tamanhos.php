<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tamanhos}}".
 *
 * @property int $id
 * @property string $nome
 * @property string $abreviacao
 * @property int $status
 * @property string $criado_em
 * @property string $atualizado_em
 */
class Tamanhos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tamanhos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'abreviacao'], 'required'],
            [['status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['nome'], 'string', 'max' => 60],
            [['abreviacao'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'abreviacao' => 'Abreviação',
            'status' => 'Status',
            'criado_em' => 'Criado Em',
            'atualizado_em' => 'Atualizado Em',
        ];
    }
}
