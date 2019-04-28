<?php
// post published time in unix format within the loop
echo time_ago_format(get_the_time('U'));

// post modified time in unix format within the loop
echo time_ago_format(get_the_modified_date('U'));

// comment time in unix format within the loop
echo time_ago_format(get_comment_time('U'));
?>