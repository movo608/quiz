<?php

namespace backend\modules\admin\controllers;

use Yii;
use backend\models\SpecialQuestionsAnswers;
use backend\models\SpecialQuestionsAnswersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SpecialanswersController implements the CRUD actions for SpecialQuestionsAnswers model.
 */
class SpecialanswersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SpecialQuestionsAnswers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SpecialQuestionsAnswersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SpecialQuestionsAnswers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SpecialQuestionsAnswers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SpecialQuestionsAnswers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionDrop() {
    	
    	$model = new SpecialQuestionsAnswers();
    	
    	if (Yii::$app->request->post()) {
    		
    		$query = Yii::$app->db->createCommand()
    		->truncateTable('special_questions_answers')
    		->execute();
    		
    		return $this->redirect(['index']);
    	} else {
    		return $this->render('drop', [
    			'model' => $model	
    		]);
    	}
    }

    /**
     * Updates an existing SpecialQuestionsAnswers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SpecialQuestionsAnswers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SpecialQuestionsAnswers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SpecialQuestionsAnswers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SpecialQuestionsAnswers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
