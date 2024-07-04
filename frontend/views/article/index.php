<?php
use frontend\models\Article;
use frontend\widgets\ArticleListView;
use yii\data\ArrayDataProvider;
use yii\widgets\LinkPager;
$this->title='新闻中心';
?>
        <div class="wrap">
            <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                
            <h3><?php foreach($categorys as $cat){ 
                    if($cat->id == Yii::$app->request->get('cat_id')){
                        echo $cat->name;
                        $this->title = $cat->name;
                    }}
                ?></h3>
                <label></label>
                <span><?php if(Yii::$app->request->get('cat_id')==1) {?>Funeral culture<?php }else{ ?>News information<?php }?></span>
            </div>
            <?php if(Yii::$app->request->get('cat_id')!=1) {?>
           <div class="class_nav wow fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <ul>
                    <!--<li <?php if(empty(Yii::$app->request->get('cat_id'))){ ?>class="on"<?php }?>><a href="<?php echo Yii::$app->urlManager->createUrl(['article/index']); ?>">全部</a></li> -->
                    <?php foreach($categorys as $cat){ 
                        if($cat->id==1) continue;
                    ?>

                    <li <?php if($cat->id == Yii::$app->request->get('cat_id')){ ?>class="on"<?php }?>><a href="<?php echo Yii::$app->urlManager->createUrl(['article/index','cat_id'=>$cat->id]); ?>"><?php echo $cat->name; ?></a></li>
                    <?php }?>
                </ul>
                <div class="clear"></div>
            </div>
            <?php }?>
            <div class="news2_list wow_list">
                <ul>
                <?php foreach($models as  $model){ ?>
                        
                    <li class='wow fadeInUp animated  animated' data-wow-delay='0s' >
                    <a title='<?php echo $model->title;?>' target='_blank' href='<?php echo Yii::$app->urlManager->createUrl(['article/view','id'=>$model->id]); ?>'>
                    <?php if(!empty($model->thumb)) {?><div class='img'><img src='/<?php echo $model->getThumbUrlBySize(168, 112);?>' alt='<?php echo $model->title;?>'></div><?php }?>
                                        <div class='date'><span><?php echo date('m-d',$model->created_at);?></span><label><?php echo date('Y',$model->created_at);?></label></div>
                                        <div class='text'>
                                            <h3><?php echo $model->title;?></h3>
                                            <p><?php echo $model->summary;?></p>
                                        </div><div class='clear'></div>
                                    </a>
                                    </li>

                <?php }?>
                </ul>
             
            </div>
            <?php
                echo LinkPager::widget([
                    'pagination' => $pages,
                    'options' => ['class' => 'page_size wow fadeInUp animated animated'], 
                    'nextPageLabel' => false, 
                    'prevPageLabel' => false, 
                ]);
            ?>
        </div>

