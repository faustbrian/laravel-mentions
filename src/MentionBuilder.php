<?php

/*
 * This file is part of Laravel Mentions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Mentions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Mentions;

use Collective\Html\FormBuilder;

class MentionBuilder extends FormBuilder
{
    /**
     * @param $name
     * @param $value
     * @param $type
     * @param $column
     *
     * @return string
     */
    public function asText($name, $value, $type, $column): string
    {
        $input = $this->text($name, $value, [
            'id' => 'mention-'.$name,
        ]);

        $scriptTag = '<script type="text/javascript">$(function(){enableMentions("#mention-'.$name.'", "'.$type.'", "'.$column.'");});</script>';

        return $scriptTag.$input;
    }

    /**
     * @param $name
     * @param $value
     * @param $type
     * @param $column
     *
     * @return string
     */
    public function asTextArea($name, $value, $type, $column): string
    {
        $input = $this->textarea($name, $value, [
            'id' => 'mention-'.$name,
        ]);

        $scriptTag = '<script type="text/javascript">$(function(){enableMentions("#mention-'.$name.'", "'.$type.'", "'.$column.'");});</script>';

        return $scriptTag.$input;
    }
}
