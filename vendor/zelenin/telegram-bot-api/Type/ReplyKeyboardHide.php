<?php

namespace Zelenin\Telegram\Bot\Type;

final class ReplyKeyboardHide extends ReplyMarkup
{
    /**
     * Requests clients to hide the custom keyboard
     *
     * @var boolean
     */
    public $hide_keyboard = true;
}
