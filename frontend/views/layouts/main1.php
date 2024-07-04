<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2017-03-15 21:16
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use frontend\widgets\MenuView;
AppAsset::register($this);
AppAsset::addCss($this,"/css/animate.min.css");
AppAsset::addScript($this,"/js/wow.js");
AppAsset::addScript($this,"/js/main.js");
AppAsset::addScript($this,"/js/owl.carousel.js");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="/js/html5.js"></script>
    <![endif]-->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php !isset($this->metaTags['keywords']) && $this->registerMetaTag(['name' => 'keywords', 'content' => yii::$app->feehi->seo_keywords], 'keywords');?>
    <?php !isset($this->metaTags['description']) && $this->registerMetaTag(['name' => 'description', 'content' => yii::$app->feehi->seo_description], 'description');?>
    <meta charset="<?= yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<?php $this->beginBody() ?>
<body>
  <!-------------------------------------- 头部开始 -------------------------------------->
    <div class="header">
        <div class="wrap">
            <div class="logo">
                <a href="http://demo..com/www/121demo-134/index.html"><img src="/images/logo.png"></a>
            </div>
            <div class="nav">
                <ul>
                    <li class="on"><a href="#">首页</a></li>
                    <li><a href="#">新闻中心</a></li>
                    <li><a href="#">服务项目</a></li>
                    <li><a href="#">服务流程</a></li>
                    <li><a href="#">项目导航</a></li>
                    <li><a href="#">加入我们</a></li>
                    <li><a href="#">联系我们</a></li>
                </ul> 
                <div class="clear"></div>
            </div>
            <div class="nav_wap"></div>
            <div class="clear"></div>
        </div>
    </div>
    <!-------------------------------------- 头部结束 -------------------------------------->
    <!-------------------------------------- 内容开始 -------------------------------------->
    <div class="mainer main_index">
        <div class="banner">
            <div class="banner_cur cur">
                <span class="prev"></span>
                <span class="next"></span>
            </div>
            <div class="owl">
                <div class="item"><img src="/images/banner/2.jpg"></div>
                <div class="item"><img src="/images/banner/2.png"></div>
            </div>

        </div>
 <!--       <div class="page_num clear">
            <div class="wrap">
                <ul>
                    <li class="wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <h2><span class="timer" data-to="12" data-speed="1800">12</span></h2>
                        <label></label>
                        <p>12年专注国际艺术教育</p>
                    </li>
                    <li class="wow fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h2><span class="timer" data-to="200" data-speed="1900">200</span>万+</h2>
                        <label></label>
                        <p>200多万的学员光荣毕业</p>
                    </li>
                    <li class="wow fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h2><span class="timer" data-to="500" data-speed="1800">500</span>+</h2>
                        <label></label>
                        <p>500多家合作机构</p>
                    </li>
                    <li class="wow fadeInUp animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <h2><span class="timer" data-to="300" data-speed="1900">300</span>+</h2>
                        <label></label>
                        <p>300多位优秀导师</p>
                    </li>
                </ul>
            </div>
        </div>-->

      <div class="div_news">
            <div class="title wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <h3>新闻动态</h3>
                <label></label>
                <span>News information</span>
            </div>
            <div class="wrap">
                <div class="news_lt item flt wow fadeInUp animated" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                    <div class="img"><img src="/images/banner/h.jpg"></div>
                    <div class="text">
                        <a href="">
                            <h3>福寿园举办殡仪服务培训2018综合班</h3>
                            <p>10月15日—17日，福寿园国际集团殡仪服务培训2018综合班（第二期）在重庆西郊福寿园开班。为期两天半的培训共有来自集团24家分公司，36位学员参与。本次培训是继5月首次殡仪服务培训（综合班）的基础上开设的第二期综合管理班，根据集。。。</p> 
                        </a>
                    </div>
                </div>
                <div class="news_rt item frt wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <ul>
                        <li>
                            <a href="http://demo..com/www/121demo-134/news_details.html">
                                <div class="date"><span>09-30</span><label>2018</label></div>
                                <div class="text">
                                    <h3>我馆党支部组织学习《中华人民共和国宪法》</h3>
                                    <p> 为学习宣传和贯彻实施新修订的宪法，牢固树立宪法观念，根据《中共佛山市民政局机关委员会2018年工作要点》文件精神，结合《佛山市殡仪馆党支部2018年学习活动计划》，10月10日...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://demo..com/www/121demo-134/news_details.html">
                                <div class="date"><span>08-24</span><label>2018</label></div>
                                <div class="text">
                                    <h3>缅怀革命先烈 弘扬烈士精神</h3>
                                    <p>鲜花祭英烈，哀思祭忠魂。9月30日是全国烈士纪念日，为缅怀先烈，佛山市民政局党组书记、局长陈浩斌组织机关全体人员以及局直属单位...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://demo..com/www/121demo-134/news_details.html">
                                <div class="date"><span>8-15</span><label>2018</label></div>
                                <div class="text">
                                    <h3》我馆召开“纪律教育学习月活动”动员大会</h3>
                                    <p>作风建设永远在路上，永远没有休止符，这是习近平总书记在新时代中国特色社会主义思想理论讲话中的重点阐述。近日，佛山市民政系统组织开展了“2018年纪律教育规...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://demo..com/www/121demo-134/news_details.html">
                                <div class="date"><span>07-11</span><label>2018</label></div>
                                <div class="text">
                                    <h3>党支部组织党员到南庄镇紫南村开展党日活动</h3>
                                    <p>9月7日下午，我馆党支部一行15人在支部书记朱建军同志带领下，到佛山新农村建设的典型——南庄镇紫南村开展了主题党日活动，实地感受了佛山基层服务和文明村居建设等工...</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="div_about">
            <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                <h3>关于我们</h3>
                <label></label>
                <span>About us</span>
            </div>
            <div class="about wow fadeInUp animated" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                <div class="img" style="background:url(images//banner/j.png) no-repeat center center; background-size:cover;"><img src="/images/banner/j.png"></div> 
                <div class="wrap wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="tit">
                        <h3>西户殡仪馆有限责任公司</h3>
                    </div>
                    <div class="text">
                        <p>西户殡仪馆是由西安市发改委审批，西安市民政局核准，户县民政局建设的西安市国家二级殡仪馆。规划总用地面积137604平方米（206.303亩），主要包括殡仪馆火化区和公益性公墓区。通过项目的改迁实施，使项目最高殡殓服务能力达到1000015000具/年，建立公益性公墓（骨灰堂），以公益性公墓（骨灰堂）及树葬、草坪葬、花葬、卧葬为主，达到骨灰安葬和存放38000个和60000个，使项目最高服务人群范围能力达到300万人以上。项目建成后将成为服务西安市的殡仪馆之一和西安市最大的城市公益性公墓，满足人民群众的基本丧葬需求，为西安全市、区县百姓提供殡葬服务。。</p>

                        <div class="btn"><a href="http://demo..com/www/121demo-134/index.html#"><span>查看更多</span></a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="div_hot">
            <div class="wrap">
                <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <h3>服务项目</h3>
                    <label></label>
                    <span>Our Servers</span>
                </div>
                <div class="div_tag wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <ul>
                        <li class="on">西户殡仪馆</li>
                        <li>西户陵园</li>
                    </ul>
                </div>
                <div class="hot_list wow_list">
                    <ul>
                        <li class="wow fadeInUp animated" data-wow-delay="0s" style="visibility: hidden; animation-delay: 0s; animation-name: none;">
                            <a href="#" class="ht_w" style="height: 242px;"><div class="img"><img src="/images/banner/a.jpg"></div><div class="text"><div class="cell"><p>遗体运输<span></span></p></div></div></a>
                        </li>
                        <li class="wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <a href="#" class="ht_w" style="height: 242px;"><div class="img"><img src="/images/banner/b.jpg"></div><div class="text"><div class="cell"><p>遗体美容<span></span></p></div></div></a>
                        </li>
                        <li class="wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                            <a href="#" class="ht_w" style="height: 242px;"><div class="img"><img src="/images/banner/c.jpg"></div><div class="text"><div class="cell"><p>遗体冷藏<span></span></p></div></div></a>
                        </li>
                        <li class="wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                            <a href="#" class="ht_w" style="height: 242px;"><div class="img"><img src="/images/banner/d.jpg"></div><div class="text"><div class="cell"><p>遗体火花<span></span></p></div></div></a>
                        </li>
                        <li class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                            <a href="#" class="ht_w" style="height: 242px;"><div class="img"><img src="/images/banner/e.jpg"></div><div class="text"><div class="cell"><p>遗体告别<span></span></p></div></div></a>
                        </li>
                        <li class="wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                            <a href="#" class="ht_w" style="height: 242px;"><div class="img"><img src="/images/banner/f.jpg"></div><div class="text"><div class="cell"><p>用品销售<span></span></p></div></div></a>
                        </li>

                        <li class="li_more wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                            <a href="#" class="ht_w" style="height: 394px;"><div class="img"><img src="/images/banner/g.jpg"></div><div class="text text_t_ht" style="top: 399px;"><div class="cell"><p>西户陵园</p><span></span></div></div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


<!--
        <div class="div_work">
            <div class="title on wow fadeInUp animated" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                <h3>优秀作品集</h3>
                <label></label>
                <span>Hot courses</span>
            </div>
            <div class="div_tag wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <ul>
                    <li class="on"><a href="http://demo..com/www/121demo-134/index.html#">课程分类1</a></li>
                    <li><a href="http://demo..com/www/121demo-134/index.html#">课程分类2</a></li>
                    <li><a href="http://demo..com/www/121demo-134/index.html#">课程分类3</a></li>
                    <li><a href="http://demo..com/www/121demo-134/index.html#">课程分类4</a></li>
                    <li><a href="http://demo..com/www/121demo-134/index.html#">课程分类5</a></li>
                </ul>
            </div>
            <div class="course_owl wow fadeInUp animated" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                <div class="course_cur cur">
                    <span class="prev"></span>
                    <span class="next"></span>
                </div>
                <div class="owl owl-carousel owl-theme owl-center owl-loaded">
 
                <div class="owl-stage-outer"><div class="owl-stage" style="transition: 0s; width: 5960px; transform: translate3d(-427px, 0px, 0px);"><div class="owl-item cloned" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_07.jpg"></div>
                            <div class="text">
                                <h3>游戏插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item cloned" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_09.jpg"></div>
                            <div class="text">
                                <h3>插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item cloned active" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_11.jpg"></div>
                            <div class="text">
                                <h3>古风插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item cloned active" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_13.jpg" style="opacity: 1;"></div>
                            <div class="text">
                                <h3>游戏UI作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item active center" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_03.jpg"></div>
                            <div class="text">
                                <h3>插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item active" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_05.jpg"></div>
                            <div class="text">
                                <h3>摄影作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item active" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_07.jpg"></div>
                            <div class="text">
                                <h3>游戏插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item active" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_09.jpg"></div>
                            <div class="text">
                                <h3>插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_11.jpg"></div>
                            <div class="text">
                                <h3>古风插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_13.jpg"></div>
                            <div class="text">
                                <h3>游戏UI作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_03.jpg"></div>
                            <div class="text">
                                <h3>插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_05.jpg"></div>
                            <div class="text">
                                <h3>摄影作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_07.jpg"></div>
                            <div class="text">
                                <h3>游戏插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_09.jpg"></div>
                            <div class="text">
                                <h3>插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_11.jpg"></div>
                            <div class="text">
                                <h3>古风插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_13.jpg" style="opacity: 1;"></div>
                            <div class="text">
                                <h3>游戏UI作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item cloned" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_03.jpg"></div>
                            <div class="text">
                                <h3>插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item cloned" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_05.jpg"></div>
                            <div class="text">
                                <h3>摄影作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item cloned" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_07.jpg"></div>
                            <div class="text">
                                <h3>游戏插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div><div class="owl-item cloned" style="width: auto; margin-right: 20px;"><div class="item">
                        <a href="http://demo..com/www/121demo-134/works_details.html">
                            <div class="img"><img src="/images/img_09.jpg"></div>
                            <div class="text">
                                <h3>插画作品展示</h3>
                                <p>作者：小丫静</p>
                            </div>
                        </a>
                    </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
            </div>
        </div>
       
        <div class="div_Cooperative">
            <div class="title wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <h3>合作伙伴</h3>
                <label></label>
                <span>Cooperative</span>
            </div>
            <div class="link_owl wow fadeInUp animated" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                <div class="link_cur cur">
                    <span class="prev"></span>
                    <span class="next"></span>
                </div>
                <div class="wrap">
                    <div class="owl owl-carousel owl-theme owl-loaded">
                        
                        
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2360px, 0px, 0px); transition: 0s; width: 7080px;"><div class="owl-item cloned" style="width: 1180px; margin-right: 0px;"><div class="item">
                            <div class="list">
                                <ul>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_33.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_28.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_30.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_36.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_25.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_39.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_60.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_62.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_54.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_51.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_57.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_48.jpg"></a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 1180px; margin-right: 0px;"><div class="item">
                            <div class="list">
                                <ul>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_33.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_28.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_30.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_36.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_25.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_39.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_60.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_62.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_54.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_51.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_57.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_48.jpg"></a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 1180px; margin-right: 0px;"><div class="item">
                            <div class="list">
                                <ul>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_33.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_28.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_30.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_36.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_25.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_39.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_60.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_62.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_54.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_51.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_57.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_48.jpg"></a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div></div><div class="owl-item" style="width: 1180px; margin-right: 0px;"><div class="item">
                            <div class="list">
                                <ul>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_33.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_28.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_30.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_36.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_25.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_39.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_60.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_62.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_54.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_51.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_57.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_48.jpg"></a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 1180px; margin-right: 0px;"><div class="item">
                            <div class="list">
                                <ul>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_33.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_28.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_30.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_36.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_25.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_39.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_60.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_62.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_54.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_51.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_57.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_48.jpg"></a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 1180px; margin-right: 0px;"><div class="item">
                            <div class="list">
                                <ul>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_33.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_28.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_30.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_36.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_25.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_39.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_60.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_62.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_54.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_51.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_57.jpg"></a></li>
                                    <li><a href="http://demo..com/www/121demo-134/index.html#"><img src="/images/img_48.jpg"></a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
                </div>
            </div>
        </div>
    </div>
--> 
    <!-------------------------------------- 内容结束 -------------------------------------->
    <!-------------------------------------- 尾部开始 -------------------------------------->
    <div class="footer" style="background:url(/images/banner/ft.png) no-repeat center center; background-size:cover;">
        <div class="wrap">
            <div class="left">
                <h3>西安西户殡仪馆管理有限公司</h3>
                <p><a href="http://demo..com/www/121demo-134/index.html#">公司首页</a>/<a href="http://demo..com/www/121demo-134/index.html#">关于我们</a>/<a href="http://demo..com/www/121demo-134/index.html#">产品服务</a>/<a href="http://demo..com/www/121demo-134/index.html#">联系我们</a>/<a href="http://demo..com/www/121demo-134/index.html#">新闻动态</a></p>
            </div>
            <div class="right">
                <h3>客服热线：<span>029-84821480</span></h3>
                <p>版权所有 © 2017 - 2019 西安西户殡仪馆管理有限公司</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-------------------------------------- 尾部结束 -------------------------------------->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
