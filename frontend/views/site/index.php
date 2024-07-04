<?php

/* @var $this yii\web\View */
use common\models\Options;
use frontend\widgets\ScrollPicView;
use frontend\models\Article;
use frontend\widgets\ArticleListView;
use frontend\widgets\ServerItemListView;
use yii\data\ArrayDataProvider;
$this->title = Yii::$app->feehi->website_title;
?>       
    <div class="banner">
        <div class="banner_cur cur">
            <span class="prev"></span>
            <span class="next"></span>
        </div>
        <?= ScrollPicView::widget([
            'banners' => Options::getBannersByType('index_baner'),
        ]) ?>    
    </div>
     <div class="div_news">
            <div class="title wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <h3><?= Yii::t('frontend','News Information')?></h3>
                <label></label>
                <span>News information</span>
            </div>
            <div class="wrap">
             <?= ArticleListView::widget([
                    'dataProvider' => new ArrayDataProvider([
                        'allModels' =>Article::find()->limit(1)->where(['flag_headline'=>1])->with('category')->orderBy("sort DESC")->all(),
                    ]),
                    'layout' => "<div class='news_lt item flt wow fadeInUp animated' data-wow-delay='.4s' style='visibility: hidden; animation-delay: 0.4s; animation-name: none;'>{items}</div>",
                    'template' => "
                    <div class='img'><img src='{img_url}' alt='{title}'></div>
                        <div class='text'>
                        <a href='{article_url}'>
                            <h3>{title}</h3>
                            <p>{summary}</p> 
                        </a>
                    </div>",
                    'itemOptions' => ['tag'=>'li'],
                    'thumbWidth' => 500,
                    'thumbHeight' => 300,
                ]) ?>
                <div class="news_rt item frt wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <?= ArticleListView::widget([
                    'dataProvider' => new ArrayDataProvider([
                        'allModels' =>Article::find()->limit(1)->where(['flag_recommend'=>1])->limit(4)->with('category')->orderBy("sort DESC")->all(),
                    ]),
                    'layout' => "<ul>{items}</ul>
                                 ",
                                 'template' => "
                                 <li >
                                    <a title='{title}' target='_blank' href='{article_url}'>
                                        <div class='date'><span>{pub_date}</span><label>{pub_year}</label></div>
                                        <div class='text'>
                                            <h3>{title}</h3>
                                            <p>{summary}</p>
                                        </div><div class='clear'></div>
                                    </a>
                                    </li>",
                    'itemOptions' => ['tag'=>'li'],
                    'thumbWidth' => 168,
                    'thumbHeight' => 112,
                ]) ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="div_about">
            <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                <h3><?= Yii::t('frontend','About us')?></h3>
                <label></label>
                <span>About us</span>
            </div>
            <div class="about wow fadeInUp animated" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                <div class="img" style="background:url(images//banner/j.png) no-repeat center center; background-size:cover;"><img src="/images/banner/j.png"></div> 
                <div class="wrap wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="tit">
                    <h3><?= Yii::$app->feehi->website_title;?></h3>
                    </div>
                    <div class="text">
                        <p><?= Yii::$app->feehi->introduce; ?></p>
                        <div class="btn"><a href="<?php echo \Yii::$app->urlManager->createUrl('site/contact');  ?>"><span><?= Yii::t('frontend','More');?></span></a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="div_hot">
            <div class="wrap">
                <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <h3><?= Yii::t('frontend','Servers')?></h3>
                    <label></label>
                    <span>Our Servers</span>
                </div>
                <div class="div_tag wow fadeInUp animated" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <ul class='serverselect'>
                        <li class="on"><a class='binyi'  href="javascript:;">西户殡仪馆</a></li>
                        <li><a  class='lingyuan' href="javascript:;">西户陵园</a></li>
                    </ul>
                </div> 
                <div class="hot_list wow_list servers" id='binyi'>
                    <?php echo ServerItemListView::widget(['category'=>3]);?>
                </div>
                <div class="hot_list wow_list servers" id='lingyuan'>
                    <?php echo ServerItemListView::widget(['category'=>4]);?>
                </div>
            </div>
        </div>
        <div class="div_hot">
            <div class="wrap">
                <div class="page1_text">
                <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <h3><?= Yii::t('frontend','Culture')?></h3>
                    <label></label>
                    <span>Culture</span>
                </div>
                <div class="news_list">
                <?= ArticleListView::widget([
                    'dataProvider' => new ArrayDataProvider([
                        'allModels' =>Article::find()->where(['flag_special_recommend'=>1])->with('category')->limit(4)->orderBy("sort DESC")->all(),
                    ]),
                    'layout' => "<ul class='wow_list'>{items}</ul>",
                                 'template' => "<a href='{article_url}'>
                                    <div class='img'><img src='{img_url}' alt='{title}'></div>
                                    <div class='text'>
                                        <h4>{title}<span>{pub_date}</span></h4>
                                        <p>{summary}</p>
                                    </div>
                                    <div class='clear'></div>
                                </a>",
                    'itemOptions' => ['tag'=>'li'],
                    'thumbWidth' => 168,
                    'thumbHeight' => 112,
                ]) ?>
                    </div>
                </div>
            </div>
        </div>
</div>
