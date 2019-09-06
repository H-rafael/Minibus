<?php
/**
 *  由心而发，简单的
 * <a href="https://github.com/H-rafael/Typecho-Theme-Simple" target="_blank">Github</a> | <a href="http://qqexit.com/" target="_blank">Home</a>
 * @package Simple
 * @author  Kiln
 * @version 1.2.0
 * @link http://qqexit.com/index.php/archives/23/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->widget('Widget_Contents_Post_Recent','pageSize=1')->to($index);


?>
    <style>
        .img_pic{
            font-family: 'icomoon';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .img_pic img{
            max-width:65%
        }
    </style>
<div id="container">
    <div id="screen">
        <div id="mark">
            <div class="layer" data-depth="0.4">
                <img id="cover" crossorigin="anonymous" src="https://cdn.jsdelivr.net/gh/hojun2/hojun2.github.io/img/wallhaven-672007-2.jpg">
            </div>
        </div>

        <div id="vibrant">
            <svg viewBox="0 0 2880 1620" height="100%" preserveAspectRatio="xMaxYMax slice">
                <polygon opacity="0.7" points="2000,1620 0,1620 0,0 600,0 "/>
            </svg>
            <div></div>
        </div>

        <div id="header">
            <div>
                <a  class="img_pic" href="/" style="margin-top: -55px;">
                    <img src="<?php $this->options->themeUrl('images/1567591982_802171.png'); ?>" />
                </a>
                <div class="icon-menu switchmenu" style="color: rgb(195, 106, 82);"></div>
            </div>
        </div>

        <?php while($index->next()): ?>
            <div id="post0">
                <p><?php $this->date('F jS, Y'); ?></p>
                <h2><a data-id="<?php $index->cid()?>" class="posttitle" href="<?php $index->permalink() ?>"><?php $index->title() ?></a></h2>
                <p>   <?php
                    if($this->fields->previewContent)
                        $this->fields->previewContent();
                    else
                        $this->excerpt(48, '...');
                    ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <div id="primary">
<?php while($this->next()): ?>
        <div class="post">
            <a data-id="<?php $this->cid()?>" href="<?php $this->permalink() ?>" title="<?php $this->sticky(); $this->title() ?>">
                <img width="680" height="440" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=<?php if($this->fields->thumbnail) $this->fields->thumbnail(); else echo getThumbnail(); ?>" class="cover">
            </a>
            <div class="else">
                <p><?php //$this->category(' ',true,'无'); ?> <?php $this->date('F j, Y'); ?></p>
                <h3><a data-id="<?php $this->cid()?>" class="posttitle" href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title() ?></a></h3>
                <p>     <?php
                    if($this->fields->previewContent)
                        $this->fields->previewContent();
                    else
                        $this->excerpt(80, '...');
                    ?></p>
                <p class="here">
                    <span class="icon-letter"><?php art_count($this->cid); ?></span>
                    <span class="icon-view"><?php getPostView($this); ?></span>
                    <a href="javascript:;" class="likeThis" id="like-<?php $this->cid()?>"><span class="icon-like"></span><span class="count"><?php $this->commentsNum(_t('0 '), _t('1 '), _t('%d ')); ?></span></a>        </p>
            </div>
        </div>
<?php endwhile; ?>
    </div>

    <div id="pager"><?php $this->pageLink('加载更多','next'); ?></div>
</div>
<div id="preview" ></div>
<p style="text-align: center;">
    <a style="color: inherit" target="_blank" href="https://github.com/H-rafael/Typecho-Theme-Simple">这是我</a>
</p>
<?php $this->need('footer.php');?>
