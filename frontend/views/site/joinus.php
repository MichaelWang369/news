<?php


use yii\widgets\LinkPager;
$this->title = '加入我们';


?>
<div class="page_list">
 <!--<div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"> 
                <h3>加入我们</h3>
                <label></label>
                <span>Join us</span>
            </div>-->
 <div class="banner_page">
            <div class="text join_banner">
                <div class="wrap">
                    <h2 class="wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Join us</h2>
                    <p class="wow fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">加入我们</p>
                </div>
            </div>
        </div>

<div style='margin:0 auto;max-width:1100px'>
<div class="join_list">
                    <ul>

                        <?php foreach($models as $model){ ?>

                        <li>
                            <div class="tit on">
                                <h5>西户殡仪馆招聘</h5>
                                <h3><?= $model->title; ?></h3>
                                <p><label><?= $model->price; ?></label>经验: <?=  Yii::$app->params['years'][$model->years]; ?> </p>
                            </div>
                            <div class="text" style="display: block;">
                                <div class="list">
                                    <h4>职位要求</h4>
                                    <?= $model->request; ?>
                                </div>
                                <div class="list">
                                    <h4>所属部门</h4>
                                    <p><?= $model->belongs; ?></p>
                                </div>
                                <div class="list">
                                    <h4>工作地点</h4>
                                    <p><?= $model->address; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php  }?>
                    </ul>
                </div>
                </div>
 <!--<div class="page_size wow fadeInUp animated animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s;margin-top:50px;">
                <a class="prev" href="#"></a><a href="#">1</a><a class="on" href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">1</a><a class="next" href="#"></a>
            </div>
    </div>-->
            <?php
                echo LinkPager::widget([
                    'pagination' => $pages,
                    'options' => ['class' => 'page_size wow fadeInUp animated animated'], 
                    'nextPageLabel' => false, 
                    'prevPageLabel' => false, 
                ]);
            ?>
 
</div> 
<script type='text/javascript'>
$(document).ready(function(){
	$(".join_list ul li .tit").click(function () {
	    $(this).toggleClass("on").siblings(".text").stop().slideToggle();
	})
})
</script>
