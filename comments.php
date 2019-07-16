

<div class="comments">
    <h2>Comments</h2>
    <?php
        $args = array(
            'walker'            => null,
            'max_depth'         => '',
            'style'             => 'ul',
            'callback'          => null,
            'end-callback'      => null,
            'type'              => 'all',
            'reply_text'        => 'Reply',
            'page'              => '',
            'per_page'          => '',
            'avatar_size'       => 65,
            'reverse_top_level' => null,
            'reverse_children'  => '',
            'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
            'short_ping'        => false,   // @since 3.6
            'echo'              => true     // boolean, default is true
        );
        wp_list_comments( $args, $comments );

        $comments_args = array(
            'label_submit'          =>'Send',
            'title_reply'           =>'Write a Reply or Comment',
            'comment_notes_after'   => '',
            'comment_field'         => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
        );
        comment_form($comments_args);

        $args = array(
            'author_email' => '',
            'author__in' => '',
            'author__not_in' => '',
            'include_unapproved' => '',
            'fields' => '',
            'ID' => '',
            'comment__in' => '',
            'comment__not_in' => '',
            'karma' => '',
            'number' => '',
            'offset' => '',
            'orderby' => 'date',
            'order' => 'DESC',
            'parent' => '',
            'post_author__in' => '',
            'post_author__not_in' => '',
            'post_ID' => '', // ignored (use post_id instead)
            'post_id' => 0,
            'post__in' => '',
            'post__not_in' => '',
            'post_author' => '',
            'post_name' => '',
            'post_parent' => '',
            'post_status' => '',
            'post_type' => '',
            'status' => 'all',
            'type' => '',
            'type__in' => '',
            'type__not_in' => '',
            'user_id' => '',
            'search' => '',
            'count' => false,
            'meta_key' => '',
            'meta_value' => '',
            'meta_query' => '',
            'date_query' => null, // See WP_Date_Query
        );
        get_comments( $args );
    ?>
</div>
