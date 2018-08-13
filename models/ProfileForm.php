<?php

namespace app\models;
      
use Yii;
use yii\base\Model;
      
/**
* Profile form
*/

class ProfileForm extends Model
{
    public $username;
    public $surname;
    public $status;

    public function rules()
    {
        return [
            ['username', 'required'],
            [['username', 'surname'], 'string', 'max' => 255],
            [['username', 'surname'], 'match', 'pattern' => '/^[a-z]*$/i', 'message' => 'Only letters are allowed'],
            ['status', 'integer', 'min' => 0, 'max' => 1]
        ];
    }

    public function saveProfile()
    {

        if (!$this->validate()) {
            return null;
        }

        $user = User::findIdentity(Yii::$app->user->id);
        $user->username = $this->username;
        $user->surname  = $this->surname;
        $user->status   = $this->status;
        return $user->save() ? $user : null;
    }
}