<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    private $isCaptchaEnabled = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        $rules = [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];

        if ($this->isCaptchaEnabled()){
            $rules[] = ['verifyCode', 'captcha'];
        }

        return $rules;
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'subject' => 'Тема',
            'body' => 'Текст',
            'verifyCode' => 'Проверочный код',
        ];
    }

    public function save(){
        if ($this->hasErrors()){
            return false;
        }

        $model = new Messages();
        $model->name = $this->name;
        $model->email = $this->email;
        $model->subject = $this->subject;
        $model->text = $this->body;

        return $model->save();
    }

    public function isCaptchaEnabled(){
        return $this->isCaptchaEnabled;
    }
}
