<?php

namespace Zelenin\Telegram\Bot\Type;

final class GroupChat extends Type
{
    /**
     * Unique identifier for this group chat
     *
     * @var integer
     */
    public $id;

    /**
     * Group name
     *
     * @var string
     */
    public $title;
}
