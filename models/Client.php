<?php

namespace app\models;

use Yii;
use yii\base\Behavior;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use app\behaviors\GenerateClientCode;
/**
 * This is the model class for table "{{%clients}}".
 *
 * @property int $id
 * @property int $name
 * @property string $code
 * @property string $slug
 * @property int $created_at
 * @property int $update_at
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%clients}}';
    }

    public function behaviors()
    {
        return[
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'update_at',
                'value' => new Expression('NOW()'),
            ],
            'sluggable' => [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                // 'slagAttribute' => 'nome-da-sua-coluna',
            ],
            'codeGenerator' => [
                'class' => GenerateClientCode::className(),
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            ['name', 'string', 'max' => '60'],
            [['id', 'created_at', 'update_at'], 'integer'],
            [['code'], 'string', 'max' => 60],
            [['slug'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'code' => '#',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }
}
