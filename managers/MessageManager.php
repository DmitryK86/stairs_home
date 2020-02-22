<?php

namespace app\managers;

use app\models\Messages;

class MessageManager
{
    /** @var Messages $lastMessage */
    private $lastMessage = -1;

    public static function instance(){
        static $instance;
        if (!$instance){
            $instance = new static();
        }

        return $instance;
    }

    public function getLastMessage(){
        if ($this->lastMessage === -1){
            $this->lastMessage = Messages::find()->where('is_read = FALSE')->orderBy('id')->one();
        }

        return $this->lastMessage;
    }

    public function hasNewMessage(){
        return $this->getLastMessage() instanceof Messages;
    }

    public function getNewMessagesCount(){
        if (!$this->hasNewMessage()){
            return 0;
        }

        return Messages::find()->where('is_read = FALSE')->count();
    }

    public function getSenderName(){
        if (!$this->hasNewMessage()){
            return '';
        }

        return $this->lastMessage->name;
    }

    public function getSubject(){
        if (!$this->hasNewMessage()){
            return '';
        }

        return $this->lastMessage->subject;
    }

    public function getCreatedAt(){
        if (!$this->hasNewMessage()){
            return '';
        }

        return date('d-m-Y H:i', strtotime($this->lastMessage->created_at));
    }
}
