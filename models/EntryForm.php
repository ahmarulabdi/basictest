<?php


namespace app\models;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {

        return $rules = [
            [['name','email'],'required'],
            ['email','email']
        ];
    }
}