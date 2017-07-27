<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller
{
    public function actionSurya()
    {
         echo "test";
         return $this->render('surya');
//$fruitsale = Users::find()->all();
       //print_r($fruitsale);
    }
     
}


?>