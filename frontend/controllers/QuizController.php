<?php

namespace frontend\controllers;

use yii\web\controller;
/*
 * uses the models for genres, questions and answers
 * located in the common\models directory within the app
 */
use common\models\Genres;
use common\models\Questions;
use common\models\Answers;
use Symfony\Component\Console\Question\Question;

/*
 * QuizzController is the root controller for the quizz section of the website
 * functions nested within this class: actionIndex(), actionQuestion(), actionAnswer()
 */
class QuizController extends Controller {

	/*
	 * renders the index page
	 * @return mixed
	 */
	public function actionIndex() {
		
		/*
		 * sets a session 'score' posision to 0, will be changed by API call
		 */
		$_SESSION['score'] = 0;
		
		/*
		 * gets all the genres from the DB
		 */
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
		
		/*
		 * gets the genre which has the id = $id
		 */
		$selected_genre = Genres::find()->where(['id' => $id])->one();
		
		/*
		 * gets the questions which have the genre_id = $id
		 */
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
		
		/*
		 * gets the question which has the id = $id
		 */
		$selected_question = Questions::find()->where(['id' => $id])->one();
		
		/*
		 * gets the possible answers for the question with the id = $id
		 * each answer has a field of 'question_id', used for the query condition
		 */
		$answers_model = Answers::find()->where(['question_id' => $id])->all();
		
		return $this->render('question', [
			'answers_model' => $answers_model,
			'selected_question' => $selected_question
		]);
	}
	
	/*
	 * changes the 'is_active' field in the database to 0
	 * if the API-let is called upon
	 */
	public function actionApi($id) {
		
		$question_model = Questions::find()->where(['id' => $id])->one();
		
		$question_model->is_active = 0;
		
		$question_model->save();
		
		return $this->render('api');
	}

}