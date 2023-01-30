 <h2>
<?php
    if( ! have_comments()) {
        "leave a comment!";
    } else {
        get_comments_count(). "The given Comments";
    }
    ?>
    </h2>