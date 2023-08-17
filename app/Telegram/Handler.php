<?php

namespace App\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Stringable;

class Handler extends WebhookHandler
{
    public function hello()
    {
        $this->reply('Привет');
    }

    protected function handleUnknownCommand(Stringable $text): void
    {
        if ($text->value() == '/start') {
            $this->reply('Рад тебя видеть');
        } else {
            $this->reply('Непонятно');
        }

    }
}
