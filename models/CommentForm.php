<?php

namespace app\models;

use yii\base\Model;
use Yii;
class CommentForm extends Model
{

    public $comment;

    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'],'string', 'length'=>[3,250]]
        ];
    }

public function saveComment($post_id)
{
   $comment= new Comment;
   $comment->content = $this->comment;
   $comment->author = \Yii::$app->user->id;
   $comment->post_id = $post_id;
   $comment->status = 0;
   $comment->create_time= date('Y-m-d');
   return $comment->save();

}

}