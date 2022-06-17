<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rb".
 *
 * @property int $id Primary Key
 * @property string|null $nome
 * @property string|null $artist
 * @property string|null $album
 * @property string|null $duration
 */
class Rb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 100],
            [['artist', 'album'], 'string', 'max' => 80],
            [['duration'], 'string', 'max' => 6],
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
            'artist' => 'Artist',
            'album' => 'Album',
            'duration' => 'Duration',
        ];
    }
}
