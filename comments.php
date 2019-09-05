<style>
    .img-fluid{
        width: 40px;
    }
</style>
<?php
function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';

    ?>
    <li id="comment-<?php $comments->theId(); ?>" class="comment odd alt thread-odd thread-alt depth-1 parent">
        <div id="div-comment-<?php $comments->theId(); ?>" class="comment-body">
            <div class="comment-author vcard">
<!--                http://bl.cc/usr/themes/Minibus/timthumb/timthumb.php?src=--><?php //if($this->fields->thumbnail) $this->fields->thumbnail(); else echo getThumbnail(); ?>
                <a class='avatar avatar-40 photo' style="width:40px; height: 40px;"  href="" target="_blank"><?php $comments->gravatar('40', ''); ?></a>
                <cite class="fn"><?php $comments->author?></cite><span class="says">说道：</span>
                <cite class="fn">
                    <?php echo "<a href=\"$comments->url\" rel=\"external nofollow\" target=\"_blank\" class=\"url\">$comments->author</a>"; ?>
                </cite>
                <span class="says">说道：</span>
            </div>
            <div class="comment-meta commentmetadata">
                <a href="">
                    <?php $comments->date('Y-m-d H:i'); ?>
                </a>
            </div>
            <?php showCommentContent($comments->coid); ?>
            <div class="reply">
                <?php $comments->reply(); ?>
                </pre>
            </div>
        </div>

        <ol class="children">
            <?php if ($comments->children) { ?>
                <?php $comments->threadedComments($options); ?>
            <?php } ?>
        </ol>
    </li><!-- #comment-## -->

<?php } ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php commentReply($this); ?>



<div class="comment-wrap">
    <div id="comments" class="comments-area">
        <h2>评论列表</h2>

        <?php if($this->allow('comment')): ?>
            <?php  $this->comments()->to($comments); ?>
            <?php  $comments->listComments(); ?>
        <?php endif; ?>

<!--        <nav class="navigation comment-navigation" role="navigation">-->
<!--            <h2 class="screen-reader-text">评论导航</h2>-->
<!--            <div class="nav-links"><div class="nav-previous"><a href="https://isujin.com/17/comment-page-2#comments" >较早评论</a></div></div>-->
<!--        </nav>-->

            <div id="respond" class="comment-respond">
                <h2 id="reply-title" class="comment-reply-title">发表评论
                    <small>
                        <a rel="nofollow" id="cancel-comment-reply-link" href="/17#respond" style="display:none;">取消回复</a>
                    </small>
                </h2>
                <form  action="<?php $this->commentUrl() ?>"  method="post" id="commentform" class="comment-form">
                    <p class="comment-notes">
                        <span id="email-notes">电子邮件地址不会被公开。</span> 必填项已用
                        <span class="required">*</span>标注</p>
                    <p class="comment-form-comment">
                        <label for="comment">评论</label>
                        <textarea id="comment" name="text" cols="45" rows="8" maxlength="65525" required="required" placeholder="<?php $this->options->placeholder(); ?>"><?php $this->remember('text'); ?></textarea>
                    </p>

                    <?php if($this->user->hasLogin()): ?>
                        <p class="comment-form-comment">
                            <label for="comment"> <?php _e('登录身份: '); ?>
                                <a href="<?php $this->options->profileUrl(); ?>">
                                    <?php $this->user->screenName(); ?>
                                </a>  .
                                <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" no-pjax>
                                    <?php _e('退出'); ?>&raquo;</a>
                            </label>
                        </p>
                    <?php else: ?>

                    <p class="comment-form-author">
                        <label for="author">姓名 <span class="required">*</span></label>
                        <input id="author" name="author" type="text" value="<?php $this->remember('author'); ?>" size="30" maxlength="245" required='required' />
                    </p>
                    <p class="comment-form-email">
                        <label for="mail" <?php if ($this->options->commentsRequireMail): ?> class="required"
                        <?php endif; ?>>
                            电子邮件 <span class="required">*</span>
                        </label>
                        <input  type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"
                            <?php if ($this->options->commentsRequireMail): ?> required
                            <?php endif; ?>/>
                    </p>



                    <p class="comment-form-url">
                        <label for="url" <?php if ($this->options->commentsRequireURL): ?> class="required"
                        <?php endif; ?>>站点
                            <i class="iconfont icon-aria-link"></i>
                        </label>
                        <input type="url" name="url" id="url" class="text" value="<?php $this->remember('url'); ?>" <?php
                        if ($this->options->commentsRequireURL): ?> required
                        <?php endif; ?>/>
                    </p>


                    <?php endif; ?>
                    <p class="form-submit">
                        <input name="submit" type="submit" id="submit" class="submit" value="发表评论" />
                        <input type='hidden' name='comment_post_ID' value='17' id='comment_post_ID' />
                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                    </p>
                </form>
            </div><!-- #respond -->
<!--        </form>-->
    </div>

</div>