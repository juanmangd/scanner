<?php

namespace frontend\controllers;
//namespace yii\filters;
use Yii;
use yii\base\ActionEvent;
use yii\base\Behavior;
use yii\web\MethodNotAllowedHttpException;



use yii\rest\ActiveController;
class ScannerrestController extends ActiveController
{
   public $modelClass = 'frontend\models\scanned_products';
	
	
}