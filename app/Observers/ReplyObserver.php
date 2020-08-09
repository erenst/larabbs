<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;
// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    // 我们将使用 HTMLPurifier 来修复此问题。
    // 与话题的类似地，我们将在模型监控器的 creating 事件中对 content 字段进行净化处理：
    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_topic_body');
    }

    public function created(Reply $reply)
    {
        $reply->topic->reply_count = $reply->topic->replies->count();
        $reply->topic->save();

         // 通知话题作者有新的评论
         $reply->topic->user->notify(new TopicReplied($reply));
    }
}