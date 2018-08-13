<?php
     
     namespace app\models;
      
     use Yii;
     use yii\base\Model;
      
     /**
      * Signup form
      */
     class SignupForm extends Model
     {
      
         public $username;
         public $email;
         public $password;
         public $password_repeat;
         public $captcha;
      
         /**
          * @inheritdoc
          */
         public function rules()
         {
             return [
                ['username', 'trim'],
                ['username', 'required'],
                ['username', 'string', 'min' => 2, 'max' => 255],
                ['username', 'match', 'pattern' => '/^[a-z]*$/i', 'message' => 'Only letters are allowed'],
                ['email', 'trim'],
                ['email', 'required'],
                ['email', 'email'],
                ['email', 'string', 'max' => 255],
                ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
                ['password', 'required'],
                ['password', 'string', 'min' => 6, 'max' => 255],
                ['password_repeat', 'compare', 'compareAttribute' => 'password'],
                ['captcha', 'required'],
                ['captcha', 'captcha']
             ];
         }
      
         /**
          * Signs user up.
          *
          * @return User|null the saved model or null if saving fails
          */
         public function signup()
         {
      
             if (!$this->validate()) {
                 return null;
             }
      
             $user = new User();
             $user->username = $this->username;
             $user->email = $this->email;
             $user->setPassword($this->password);
             return $user->save() ? $user : null;
         }
      
     }