<?php

namespace App\Services;
// namespace App\Services\Slack;

use Illuminate\Notifications\Notifiable;
use App\Notifications\SlackNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable
class SlackService
{
    use Notifiable;

    /**
    * 通知チャンネル情報
    *
    * @var array
    */ 
    protected $channel = null;

    /**
    * 通知チャンネルを指定
    *
    * @param array $channel
    * @return this
    */ 
    public function channel($channel)
    {
        $this->channel = config('slack.channels.' . $channel);

        return $this;
    }

    /**
    * 通知処理
    *
    * @param string $message
    * @return void
    */
    // public function send($message = null, $attachment = null)
    public function send($message = null)
    {
        if (!isset($this->channel)) {
            $this->channel(config('slack.default'));
        }
        $this->notify(new SlackNotification($this->channel, $message));
    }

    /**
    * Slack通知用URLを指定する
    *
    * @return string
    */
    protected function routeNotificationForSlack()
    {
        return config('slack.url');
    }
}