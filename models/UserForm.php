<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\models;

use yii\base\Model;
          
class UserForm extends Model
{
    public $name;
    public $email;
    
    public function rules() 
    
            {
    
        return [
                [['name', 'email'], 'required'],
                ['email','email'],
                ];
        echo 'Surya inside surya';
          exit(0);
    }
}


?>
