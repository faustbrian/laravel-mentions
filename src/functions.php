<?php



declare(strict_types=1);

use BrianFaust\Mentions\MentionBuilder;

if (!function_exists('mention')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function mention(): MentionBuilder
    {
        return app('mentionBuilder');
    }
}
