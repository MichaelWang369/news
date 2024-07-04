<?php
$this->title = '项目导航';

?>
<div class="wrap" style='margin-top:50px;'>
    <div class="title wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"> 
        <h3><?= Yii::t('frontend','Navigation')?></h3>
        <label></label>
        <span>Our location</span>
    </div>
            <div class="nav_inp">
               <h3> <a href="#" id='submyaddress'><?= Yii::t('frontend','Submit')?></h3></a><input id='myaddress' type="text" placeholder="<?= Yii::t('frontend','Your Address')?>">
            </div>
    <br style='clear:both'/>
    <iframe id='nav' src='' width="100%" height="600px" style='display:none' ></iframe>
    <div class='zhanwei' style='height:500px;'>&nbsp;</div>
</div>

  <script type='text/javascript'>
        $(document).ready(function(){
            $('#submyaddress').click(function(){
                if($('#myaddress').val()!=''){
                    $('#nav').attr('src','http://api.map.baidu.com/direction?origin='+$('#myaddress').val()+'|&destination=<?= Yii::$app->feehi->address; ?>&mode=driving&region=西安&output=html'); 
                    $('#nav').show();
                    $('.zhanwei').hide();
                }

                return false;
            })
        
        })

    </script>
