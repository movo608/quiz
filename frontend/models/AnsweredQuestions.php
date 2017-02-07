<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "answered_questions".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $question_id
 */
class AnsweredQuestions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answered_questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'question_id'], 'required'],
            [['user_id', 'question_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'question_id' => 'Question ID',
        ];
    }
}
