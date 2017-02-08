<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SpecialQuestions;

/**
 * SpecialQuestionsSearch represents the model behind the search form about `backend\models\SpecialQuestions`.
 */
class SpecialQuestionsSearch extends SpecialQuestions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['text', 'add_on_type', 'add_on'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SpecialQuestions::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'add_on_type', $this->add_on_type])
            ->andFilterWhere(['like', 'add_on', $this->add_on]);

        return $dataProvider;
    }
}
