
<!DOCTYPE html>
<html><head>
    <meta name="generator" content="Hugo 0.55.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="google" content="notranslate">
    <title>熊之大</title>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header("generator=&commentReply="); ?>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?> - <?php $this->options->description(); ?></title>
    <meta name="keywords" content="熊之大, rainmeter, design, web, 壁纸, 设计, 收集, wallpaper, collection, jaku, icon">
    <meta name="description" content="世界上每个角落都有人过着相似的人生">
    <meta name="author" content="LoeiFy">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
    <link rel="icon" type="image/png" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/Diaspora.css'); ?>">
    <?php if($this->options->userHeader) $this->options->userHeader(); ?>
    <style>
        .top_b{margin-top: 50px;margin-left: 26px;}
        .chapterlist {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-line-pack: start;
            align-content: flex-start;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            height: 3.20003rem;
            padding: 0 .32rem;
            width: 50%;
            height: 100%;
        }
        .chapterlist>.item {
            position: relative;
            width: 15%;
            height: 1.85334rem;
            margin-top: .28334rem;
            margin-right: 9px;
            background: #f5f5f5;
            border-radius: .05333rem;
        }
        .chapterlist>.item .chapterBtn {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            height: 100%;
            color: #555;
        }
    </style>
</head>

<body class="loading">
<div id="loader"></div>
<div class="nav">
    <ul id="menu-menu" class="menu">
        <?php $slugs = getPermalinkFromSlug();showNav(0,$slugs); ?>
<!--        <div id="search-input-wrap" class="on">-->
<!--            <div id="search-input-icon">-->
<!--                <i class="fa fa-search"></i>-->
<!--            </div>-->
<!--            <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="search" id="search-input" placeholder="Search..." class="aa-input" style="position: relative; vertical-align: top;"></span>-->
<!--        </div>-->
<!--        <div class="ins-search">-->
<!--            <div class="ins-search-mask"></div>-->
<!--            <div class="ins-search-container">-->
<!--                <div class="ins-input-wrapper">-->
<!--                    <input type="text" class="ins-search-input" placeholder="请输入关键词..."/>-->
<!--                    <span class="ins-close ins-selectable"><i class="icon-close"></i></span>-->
<!--                </div>-->
<!--                <div class="ins-section-wrapper">-->
<!--                    <div class="ins-section-container"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <script>
            (function (window) {
                var INSIGHT_CONFIG = {
                    TRANSLATION: {
                        POSTS: '文章',
                        TAGS: '便签',
                    },
                    ROOT_URL: "https://diaspora.hojun.cn",
                    CONTENT_URL: '/lunr.json',
                };
                window.INSIGHT_CONFIG = INSIGHT_CONFIG;
            })(window);
        </script>
    </ul>
    <p>&copy 2019 Simple . 熊之大</p>
</div>
