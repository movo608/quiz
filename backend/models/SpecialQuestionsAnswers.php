<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "special_questions_answers".
 *
 * @property integer $id
 * @property string $text
 * @property integer $special_question_id
 * @property integer $is_true
 */
class SpecialQuestionsAnswers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'special_questions_answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'special_question_id', 'is_true'], 'required'],
            [['special_question_id', 'is_true'], 'integer'],
            [['text'], 'string', 'max' => 32],
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
            'special_question_id' => 'Special Question ID',
            'is_true' => 'Is True',
        ];
    }
}
