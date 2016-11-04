<?php

namespace BrianFaust\Mentions\Builder;

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
    public function asText($name, $value, $type, $column)
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
    public function asTextArea($name, $value, $type, $column)
    {
        $input = $this->textarea($name, $value, [
            'id' => 'mention-'.$name,
        ]);

        $scriptTag = '<script type="text/javascript">$(function(){enableMentions("#mention-'.$name.'", "'.$type.'", "'.$column.'");});</script>';

        return $scriptTag.$input;
    }
}
