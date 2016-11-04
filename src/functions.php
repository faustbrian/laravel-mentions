<?php


if (!function_exists('mention')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function mention()
    {
        return app('mentionBuilder');
    }
}
