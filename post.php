
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->widget('Widget_Contents_Post_Recent','pageSize=7')->to($post);


?>
<!--    <div id="container" style="display: none;">-->
<!--    </div>-->

<div id="single">
    <div id="top">
        <div class="bar"></div>
        <a class="" href="javascript:history.back()">
            <img  style="width: 33px; margin-top: 5px;margin-left: 20px;float: left;" src="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
        </a>
        <!--        icon-play 关  icon-pause 开-->
        <div title="播放/暂停" data-id="<?php $this->cid(); ?>" class="icon-play"></div>
        <div title="查看壁纸" class="icon-images"></div>
        <h3 class="subtitle"><?php $this->title() ?></h3>
        <div class="social">
            <div class="like-icon">
                <a href="javascript:;" class="likeThis" id="like-<?php $this->cid(); ?>"><span class="icon-like"></span><span class="count">627</span></a></div><div>
                <div class="share">
                    <a title="获取二维码" class="icon-wechat" href="javascript:;"></a><a style="display: none" href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&amp;title=',e(d.title),'&amp;appkey='].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));" rel="nofollow" class="icon-weibo" title="分享到新浪微博"></a>
                </div>

                <div id="qr"></div>
            </div>
        </div>
        <div class="scrollbar"></div>
    </div>

    <div class="section">
        <div class="images" >
            <div id="jg">
                <a class="zoom icon-zoom" target="_blank" href="https://wx1.sbimg.cn/2019/09/04/wallhaven-635742.jpg"><img width="300" height="169" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=https://wx1.sbimg.cn/2019/09/04/wallhaven-635742.jpg"/></a>
                <a class="zoom icon-zoom" target="_blank" href="https://wx1.sbimg.cn/2019/09/04/wallhaven-634995.jpg"><img width="300" height="126" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=https://wx1.sbimg.cn/2019/09/04/wallhaven-634995.jpg"/></a>
                <a class="zoom icon-zoom" target="_blank" href="https://wx1.sbimg.cn/2019/09/04/wallhaven-634689.jpg"><img width="300" height="169" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=https://wx1.sbimg.cn/2019/09/04/wallhaven-634689.jpg"/></a>
                <a class="zoom icon-zoom" target="_blank" href="https://wx2.sbimg.cn/2019/09/04/wallhaven-634613.jpg"><img width="300" height="144" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=https://wx2.sbimg.cn/2019/09/04/wallhaven-634613.jpg"/></a>
                <a class="zoom icon-zoom" target="_blank" href="https://wx2.sbimg.cn/2019/04/12/accd193bgy1g0f5u34pqkj21cf0u0tn6.jpg"><img width="300" height="200" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=https://wx2.sbimg.cn/2019/04/12/accd193bgy1g0f5u34pqkj21cf0u0tn6.jpg"/></a>
                <a class="zoom icon-zoom" target="_blank" href="https://wx2.sbimg.cn/2019/04/12/ac1a0c4agy1ftz7i6u1gxj21hc0u0tyk.jpg"><img width="300" height="164" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=https://wx2.sbimg.cn/2019/04/12/ac1a0c4agy1ftz7i6u1gxj21hc0u0tyk.jpg"/></a>
            </div>




            <a target="_blank" class="downloadlink">壁纸下载</a>
        </div>
        <div class="article" >
            <div>
                <h1 class="title"><?php $this->title() ?></h1>
                <div class="stuff">
                    <span><?php $this->date('F jS, Y'); ?> </span>
                    <span>阅读 <?php getPostView($this); ?></span>
                    <span>字数 <?php art_count($this->cid); ?></span>
                    <span>评论 <?php $this->commentsNum(_t('0 '), _t('1 '), _t('%d ')); ?></span>
                    <span>喜欢 <a href="javascript:;" class="likeThis" id="like-<?php $this->cid(); ?>"><span class="icon-like"></span><span class="count">627</span></a></span>
                </div>

                <div class="content">

                    <?php $this->content(); ?>
                    <div id="content_pic"></div>
                    <span style="float: right;">
                        <p class="form-submit">
                            <input style=" width: 88px;" name="submit"  type="button" id="submit" class="submit" value="上一章" onclick="load_content(1)">
                            &nbsp;
                            <input style=" width: 88px;" name="submit" type="button" id="submit" class="submit" value="下一章" onclick="load_content(2)">
                        </p>
                        <input name="sum" type="hidden"  class="load_content_sum" value="<?php echo !empty($_GET['p']) ?$_GET['p'] : 1;?>">
                    </span>

                    <!--[if lt IE 9] -->
                    <script>document.createElement('audio');</script>
                    <!-- [endif]-->
                    <audio class="wp-audio-shortcode" id="audio-<?php $this->cid(); ?>-1" loop="1" preload="auto" style="width: 100%;" controls="controls">
                        <source type="audio/mpeg" src="http://music.163.com/song/media/outer/url?id=<?php if(!empty($this->fields->music)) $this->fields->music(); else echo '29045492'; ?>.mp3" />
                    </audio>

                </div>
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
    </div>

    <div class="relate">
        <ul>
            <h3>
                <em>相 关 文 章</em>
                <span>
                    <a href="javascript: window.scrollTo(0, 0);">返回顶部</a>
                    <?php theNextPrev($this); ?>
                </span>
            </h3>

            <?php
            while($post->next()):

                ?>
                <li>
                    <div>
                        <a class="relatea" data-id="<?php $post->cid()?>" href="<?php $post->permalink() ?>" title="<?php $post->title() ?>"><?php $post->title() ?></a>
                        <p>
                            <?php
                            if($post->fields->previewContent)
                                $post->fields->previewContent();
                            else
                                $post->excerpt(80, '...');
                            ?></p>
                    </div>
                    <a href="<?php $post->permalink() ?>" data-id="<?php $post->cid()?>" title="<?php $post->title() ?>" style=" float: right;">
                        <img class="relateimg" style="width: 189px;height: 106px;" src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/usr/themes/Minibus/timthumb/timthumb.php?src=<?php if($post->fields->thumbnail) $post->fields->thumbnail(); else echo getThumbnail(); ?>" alt="<?php $post->title() ?>" />
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<?php $this->need('footer.php');?>
<script type="text/javascript">
    $(function () {
        var sum_c= '<?php echo !empty($_GET['p']) ? $_GET['p'] : 1 ?>';
        communal(sum_c);
    })

    function load_content(val) {
        var load_content_sum = $('.load_content_sum').val();
        if(val == 2){
            var sum = parseInt(load_content_sum) + 1;
        } else {
            var sum = parseInt(load_content_sum) - 1;
        }
        $('.load_content_sum').val(sum);
        var url = window.location.href;
        var   newUrl=  changeURLArg(url, "p", sum);
        window.location.href=newUrl;
        communal(sum);
    }


    function communal() {

        var cartoon = '<?php echo cartoon($this->fields->cartoon,!empty($_GET['p']) ? $_GET['p'] : 1 ) ?>';
        var object = JSON.parse(cartoon);//转化
        $.each(object,function(k,val){
            $.each(val,function(k_l,v_l){
                $('#content_pic').append('<img src="'+v_l+'">') // 修改为你自己的头像标签
            });
        });
    }
    function changeURLArg(url, arg, arg_val) {
        var pattern = arg + '=([^&]*)';
        var replaceText = arg + '=' + arg_val;
        if (url.match(pattern)) {
            var tmp = '/(' + arg + '=)([^&]*)/gi';
            tmp = url.replace(eval(tmp), replaceText);
            return tmp;
        } else {
            if (url.match('[\?]')) {
                return url + '&' + replaceText;
            } else {
                return url + '?' + replaceText;
            }
        }
        return url + '\n' + arg + '\n' + arg_val;
    }
    //获取url中的参数
    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg); //匹配目标参数
        if (r != null) return unescape(r[2]); return null; //返回参数值
    }


    $('.icon-images').click(function(){//点击a标签
        console.log($('#jg').is(':hidden'));
        if($('.images').is(':hidden')){//如果当前隐藏
            $('#timo').show();//那么就显示div
        }else{//否则
            $('.article').css('right','-50%');
            $('.images').css('margin-top','50px');
        }
    })
</script>
