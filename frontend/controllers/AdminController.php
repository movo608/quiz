<?php 

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller {
	
	public function actionIndex() {
		
		return $this->redirect(Yii::$app->urlManagerBackend->createUrl(['quiz/backend/web/admin']));
	}
	
}