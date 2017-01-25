<?php

namespace frontend\controllers;

use Yii;
use yii\web\controller;
/*
 * uses the models for genres, questions and answers
 * located in the common\models directory within the app
 */
use common\models\Genres;
use common\models\Questions;
use common\models\Answers;
use Symfony\Component\Console\Question\Question;
use common\models\AnsweredQuestions;
use common\models\SpecialQuestions;
use common\models\SpecialQuestionsAnswers;
use yii\web\HttpException;

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
	 * url-model: quiz/api/ + id provided by AJAX
	 * 
	 * @return nothing, blank page
	 */
	public function actionApi($id) {
		
		$answered_question_model = new AnsweredQuestions();	
		$answered_question_model->user_id = Yii::$app->user->id;
		$answered_question_model->question_id = $id;
		$answered_question_model->save();
			
		return $this->render('api');
	}
	
	/*
	 * renders a special question, called by the question id in the url
	 * url-model: quiz/special/ + id provided by USER
	 * @return mixed
	 */
	public function actionSpecial($id) {
		
		if ($special_model = SpecialQuestions::find()->where(['id' => $id])->one()) {
			$special_answers_model = SpecialQuestionsAnswers::find()->where(['special_question_id' => $id])->all();
			
			return $this->render('special', [
					'special_model' => $special_model,
					'special_answers_model' => $special_answers_model
			]);
		} else {
			throw new HttpException('400', 'The special question id provided in the url is invalid. Fuck off. Now.');
		}
	}

}