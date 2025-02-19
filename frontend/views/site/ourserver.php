<?php
$this->title = '服务项目';
use yii\widgets\LinkPager;

?> 
<div class="wrap">
            <div class="title  fadeInUp animated" > 
                <h3>服务项目</h3>
                <label></label>
                <span>Our Servers</span>
            </div>
            <div class="class_nav  fadeInUp animated" >
                <ul>
                    <?php foreach($categorys as $category){?>
                    <li <?php if($category->id == Yii::$app->request->get('cid')) {?> class="on" <?php }?>><a href="<?php echo \Yii::$app->urlManager->createUrl(['site/ourserver','cid'=>$category->id]); ?>"><?php echo $category->name; ?></a></li>
                    <?php  }?>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="curriculum_list wow_list">
                <ul  class=" fadeInUp animated" >
                    <?php foreach($models as $model){ ?>
                    <li>
                        <a href="<?php echo \Yii::$app->urlManager->createUrl(['site/serveritem','id'=>$model->id]); ?>">
                            <div class="img_box">
                                <div class="img">
                                <img src="<?php echo $model->thumb; ?>">
                                </div>
                                <div class="curriculum_list_mb">
                                    <div class="curriculum_list_more">
                                        <span>more</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="web">
                            <p><?php echo $model->name; ?><span><em>￥ </em><?php echo $model->price; ?></span></p>
                        </div>
                    </li>
                    <?php  }?>
                
                </ul>
                <div class="clear"></div>
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
