<?php
/**
 * Display Published and Modifed Time
 *
 * in "time ago" format within the loop
 * @param date: unix format date & time
 * @param string: time ago in string
 */
function time_ago_format($unix_time) {
    if (!empty($unix_time)) {
        $timeago = human_time_diff($unix_time, current_time('timestamp')).' ago';
        return $timeago;
    }
}
?>