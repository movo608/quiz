<?php

namespace backend\models;

use Yii;
use frontend\models\Questions;

/**
 * This is the model class for table "answers".
 *
 * @property integer $id
 * @property integer $question_id
 * @property string $text
 * @property integer $is_true
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'text', 'is_true'], 'required'],
            [['question_id', 'is_true'], 'integer'],
            [['text'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_id' => 'Question',
            'text' => 'Answer Text',
            'is_true' => 'Is True',
        ];
    }
    
    public function getQuestionsQuestion() {
    	
    	return $this->hasOne(Questions::className(), ['id' => 'question_id']);
    }
}
