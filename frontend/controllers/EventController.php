<?php

namespace frontend\controllers;
//namespace yii\filters;
use Yii;
use yii\base\ActionEvent;
use yii\base\Behavior;
use yii\web\MethodNotAllowedHttpException;

use yii\rest\ActiveController;

class EventController extends ActiveController
{
	public $modelClass = 'frontend\models\Eventos';
	/*
  public function behaviors()
{
	$behaviors = parent::behaviors();
	$behaviors['authenticator'] = [
	'class' => CompositeAuth::className(),
	'authMethods' => [
						HttpBasicAuth::className(),
						HttpBearerAuth::className(),
						QueryParamAuth::className(),
					],
	];
	return $behaviors;
}// end of behaviors
*/
}
