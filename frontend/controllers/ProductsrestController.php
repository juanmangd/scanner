<?php
namespace frontend\controllers;

use yii\rest\ActiveController;

class ProductsrestController extends ActiveController
{
    public $modelClass = 'app\models\Products';
}