<div class="wrap">
    <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"> 
                <h3>服务项目</h3>
                <label></label>
                <span>Our Servers</span>
            </div>
            <div class="curriculum_article" style="padding: 0px;">
                <div class="img wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <img src="<?php echo $model->thumb; ?>"> 
                </div>
                <div class="web">
                    <div class="tit wow fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h3><?php echo $model->name; ?></h3>
                    <p>价格：<?php echo $model->price; ?><span> <?php echo $model->range; ?></span></p>
                        <div class="line"></div>
                    </div>
                    <div class="text wow fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h4>服务介绍：</h4>
                        <?php echo $model->desciption ?>
                
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
