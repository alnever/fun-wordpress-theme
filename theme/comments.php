<!-- comments -->
<div class="comments">
    <?php if (have_comments()): ?>
        <h3 class="comments-title">
            Comments: <?php echo get_comments_number(); ?>
        </h3>
        <!-- comments list -->
        <ol class="comments-list">
            <?php wp_list_comments(
                    ['style' => 'ul',
                     'short_ping' => true,
                     'avatar_size' => 70,
                    ]);
            ?>
        </ol>
        <!-- end of comments-list -->
        <!-- comments pagination -->
        <?php if (get_comment_pages_count() && get_option('page_comments')): ?>
            <div class="comment-pagination d-flex flex-row justify-content-around">
                <ul class="pagination">
                    <?php paginate_comments_links(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <!-- end of comments pagination -->
        <!-- no comments -->
        <?php if (! comments_open() && get_comments_number()): ?>
            <div class="alert-warning">
                <?php echo ('Comments are closed', 'sass-wordpress-theming-kit'); ?>
            </div>
        <?php endif; ?>
        <!-- end of no comments -->
    <?php endif; ?>
    <!-- end of comments -->
    <!-- comment form -->
    <?php comment_form(); ?>
    <!-- end of comment form -->
</div>
<!-- comments -->
