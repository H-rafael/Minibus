<?php if($this->options->statistics) $this->options->statistics(); ?>
<script src="<?php $this->options->themeUrl('static/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('static/plugin.js'); ?>"></script>
<!--<script src="--><?php //$this->options->themeUrl('assets/Diaspora.js'); ?><!--"></script>-->

<script src="https://isujin.com/wp-content/themes/Diaspora/assets/Diaspora.js"></script>
<script type="text/javascript">
    //点击加载更多
    jQuery(document).ready(function($) {
        //点击下一页的链接(即那个a标签)
        $('.next').click(function() {
            $this = $(this);
            $this.addClass('loading').text('正在努力加载'); //给a标签加载一个loading的class属性，用来添加加载效果
            var href = $this.attr('href'); //获取下一页的链接地址

            if (href != undefined) { //如果地址存在
                $.ajax({ //发起ajax请求
                    url: href,
                    //请求的地址就是下一页的链接
                    type: 'get',
                    //请求类型是get
                    error: function(request) {
                        //如果发生错误怎么处理
                    },
                    success: function(data) { //请求成功
                        $this.removeClass('loading').text('点击查看更多'); //移除loading属性
                        var $res = $(data).find('.post'); //从数据中挑出文章数据，请根据实际情况更改
                        $('#primary').append($res.fadeIn(500)); //将数据加载加进posts-loop的标签中。
                        var newhref = $(data).find('.next').attr('href'); //找出新的下一页链接
                        if (newhref != undefined) {
                            $('.next').attr('href', newhref);
                        } else {
                            $('.next').remove(); //如果没有下一页了，隐藏
                        }
                    }
                });
            }
            return false;
        });
    });


    $(function () {
        $('#content_pic').empty();
        var sum_c= '<?php echo !empty($_GET['p']) ? $_GET['p'] : 1 ?>';
        communal(sum_c);
    })
    function load_content(val) {
        $('#content_pic').empty();
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

        $.each(object['res_list'],function(k,val){
            $('#content_pic').append('<img src="'+val+'">') // 修改为你自己的头像标签

//            $.each(val,function(k_l,v_l){
//            });
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
//    $('.icon-images').click(function(){//点击a标签
//        console.log($('#jg').is(':hidden'));
//        article_images()
//    })

    function icon_images() {
        console.log($('#jg').is(':hidden'));
        if($('.images').is(':hidden')){//如果当前隐藏
            $('#timo').show();//那么就显示div
        }else{//否则
            $('.article').css('right','-50%');
            $('.images').css('margin-top','50px');
        }
    }
    function cartoon_info() {
        console.log($('.top_b').is(':hidden'));
        if($('.top_b').is(':hidden')){//如果当前隐藏
            console.log(333);
            $('.top_b').show();//那么就显示div
            $('.article').hide();
        }else{//否则
            $('.article').show();
            $('.top_b').hide();
        }
    }
</script>
</body>
</html>
