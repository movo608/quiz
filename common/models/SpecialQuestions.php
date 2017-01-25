<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "special_questions".
 *
 * @property integer $id
 * @property string $text
 * @property string $add_on_type
 * @property string $add_on
 */
class SpecialQuestions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'special_questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'add_on_type', 'add_on'], 'required'],
            [['text', 'add_on'], 'string', 'max' => 256],
            [['add_on_type'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'add_on_type' => 'Add On Type',
            'add_on' => 'Add On',
        ];
    }
}
