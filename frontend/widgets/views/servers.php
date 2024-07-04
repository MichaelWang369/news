   <ul>
<?php
$twice = 0;

foreach($items as  $item){ 
    $twice++;

if($twice<7){
?>
        <li >
        <a href="<?php echo \Yii::$app->urlManager->createUrl(['site/serveritem','id'=>$item->id]);  ?>" style="height: 242px;"><div class="img"><img src="<?php echo $item->thumb; ?>"></div><div class="text"><div class="cell"><p><?php echo $item->name; ?><span></span></p></div></div></a>
        </li>
    <?php }else{ ?>
                        <li class="li_more" >
                            <a href="<?php echo \Yii::$app->urlManager->createUrl(['site/serveritem','id'=>$item->id]);  ?>" style="height: 394px;"><div class="img"><img src="<?php echo $item->thumb; ?>"></div><div class="text text_t_ht" style="top: 399px;"><div class="cell"><p><?php echo $item->name; ?></p><span></span></div></div></a>
                        </li>
<?php }} ?>
    </ul>
