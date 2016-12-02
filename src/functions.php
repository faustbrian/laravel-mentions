<?php

/*
 * This file is part of Laravel Mentions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('mention')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function mention()
    {
        return app('mentionBuilder');
    }
}
