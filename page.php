
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div id="single" class="page">
    <div id="top">
        <div class="bar"></div>
        <a class="" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>">
            <img  style="width: 28px; margin-top: 7px;margin-left: 8px;float: left;" src="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
        </a>
    </div>
    <div class="section">
        <div class="images">
        </div>
        <div class="article">
            <div>
                <div class="content">
                    <div id="archives">
                        <?php
                            $this->widget('Widget_Contents_Post_Recent','pageSize=10000')->to($post);
                            while($post->next()):
                                $res_cid[$post->cid] = getPostView($post,1);
                                $pageArchives[] = pageArchives($post);
                            endwhile;
                            $res_page =[];
                            foreach ($pageArchives as $v){
                                $created = date('Y',$v['created']);
                                $d = date('d',$v['created']);
                                $res_page[$created][$v['created_y']][$d] = $v;
                            }
                        ?>
                        <?php foreach ($res_page as $k_d => $v_d){ ?>
                            <h3 class="al_year"><?php echo $k_d?> 年</h3>
                            <ul class="al_mon_list">
                                <li>
                            <?php foreach ($v_d as $k_m => $v_m){ ?>
                                <span class="al_mon"><?php echo $k_m?> 月 <em> ( <?php echo count($v_m)?> 篇文章 )</em></span>
                                <?php foreach ($v_m as $k_list => $v_list){

                                    ?>
                                    <ul class="al_post_list">
                                        <li>
                                            <?php echo $k_list?>日: <a href="<?php echo $v_list['href']?>"><?php echo $v_list['title']?></a> <em>(<?php echo $res_cid[$v_list['cid']]['cid']?>)</em>
                                        </li>
                                    </ul>
                                <?php }?>
                            <?php }?>
                                </li>
                            </ul>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->need('footer.php');?>