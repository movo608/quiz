<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property integer $id
 * @property integer $genre_id
 * @property string $text
 * @property string $photo
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['genre_id', 'text', 'photo'], 'required'],
            [['genre_id'], 'integer'],
            [['text', 'photo'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genre_id' => 'Genre ID',
            'text' => 'Text',
            'photo' => 'Photo',
        ];
    }
}
