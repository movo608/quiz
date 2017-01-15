<?php

namespace frontend\controllers;

use yii\web\controller;
use common\models\Genres;
use common\models\Questions;
use common\models\Answers;

class QuizController extends Controller {

	/*
	 * renders the index page
	 * @return mixed
	 */
	public function actionIndex() {
		
		$genres_model = Genres::find()->all();
		
		return $this->render('index', [
			'genres_model' => $genres_model
		]);
	}
	
	/*
	 * renders the after-genre-click question section
	 * @return mixed
	 */
	public function actionGenre($id) {
		
		$selected_genre = Genres::find()->where(['id' => $id])->one();
		$questions_model = Questions::find()->where(['genre_id' => $id])->all();
		
		return $this->render('genre', [
			'question_id' => $id,
			'questions_model' => $questions_model,
			'selected_genre' => $selected_genre
		]);
	}
	
	/*
	 * renders the after-question-click answer section
	 * @return mixed
	 */
	public function actionQuestion($id) {
		
		$selected_question = Questions::find()->where(['id' => $id])->one();
		$answers_model = Answers::find()->where(['question_id' => $id])->all();
		
		return $this->render('question', [
			'answers_model' => $answers_model,
			'selected_question' => $selected_question
		]);
	}

}