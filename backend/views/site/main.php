<?php
/**
 * Author: Wirt
 * Created at: 2016-03-31 14:17
 */
use common\widgets\JsBlock;
use yii\helpers\Url;

/**
 * @var $statics array
 */

?>
<div class="row">
    <div class="col-sm-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right"><?= Yii::t('app', 'Month') ?></span>
                <h5><?= yii::t('app', 'Articles') ?></h5>
            </div>
            <div class="ibox-content openContab" href="<?=Url::to(['article/index'])?>" title="<?=yii::t('app', 'Articles')?>" style="cursor: pointer">
                <h1 class="no-margins"><?= $statics['ARTICLE'][0] ?></h1>
                <div class="stat-percent font-bold text-success"><?= $statics['ARTICLE'][1] ?>% <i class="fa fa-bolt"></i></div>
                <small><?= yii::t('app', 'Total') ?></small>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right"><?= Yii::t('app', 'Today') ?></span>
                <h5><?= yii::t('app', 'Comments') ?></h5>
            </div>
            <div class="ibox-content openContab" href="<?=Url::to(['comment/index'])?>" title="<?=yii::t('app', 'Comments')?>" style="cursor: pointer">
                <h1 class="no-margins"><?= $statics['COMMENT'][0] ?></h1>
                <div class="stat-percent font-bold text-info"><?= $statics['COMMENT'][1] ?>% <i class="fa fa-level-up"></i></div>
                <small><?= yii::t('app', 'Total') ?></small>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right"><?= Yii::t('app', 'Month') ?></span>
                <h5><?= yii::t('app', 'Users') ?></h5>
            </div>
            <div class="ibox-content openContab" href="<?=Url::to(['user/index'])?>" title="<?=yii::t('app', 'Users')?>" style="cursor: pointer">
                <h1 class="no-margins"><?= $statics['USER'][0] ?></h1>
                <div class="stat-percent font-bold text-navy"><?= $statics['USER'][1] ?>% <i class="fa fa-level-up"></i></div>
                <small><?= yii::t('app', 'Total') ?></small>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right"><?= Yii::t('app', 'Month') ?></span>
                <h5><?= yii::t('app', 'Friendly Links') ?></h5>
            </div>
            <div class="ibox-content openContab" href="<?=Url::to(['friendly-link/index'])?>" title="<?=yii::t('app', 'Friendly Links')?>" style="cursor: pointer">
                <h1 class="no-margins"><?= $statics['FRIEND_LINK'][0] ?></h1>
                <div class="stat-percent font-bold text-info"><?= $statics['FRIEND_LINK'][1] ?>% <i class="fa fa-level-up"></i></div>
                <small><?= yii::t('app', 'Total') ?></small>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
       
        <div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?= Yii::t('app', 'Environment') ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        <a class="close-link"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <style>
                            .list-group-item > .badge {
                                float: left
                            }

                            li.list-group-item strong {
                                margin-left: 15px;
                            }
                        </style>
                        <li class="list-group-item ">
                            <span class="badge badge-info">&nbsp;&nbsp;</span> <strong><?= Yii::t('app', 'Server') ?></strong>: <?= $info['OPERATING_ENVIRONMENT'] ?>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-success">&nbsp;&nbsp;</span>
                            <strong><?= Yii::t('app', 'Database Info') ?></strong>: <?= $info['DB_INFO'] ?>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-success">&nbsp;&nbsp;</span>
                            <strong><?= Yii::t('app', 'File Upload Limit') ?></strong>: <?= $info['UPLOAD_MAX_FILESIZE'] ?>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-success">&nbsp;&nbsp;</span>
                            <strong><?= Yii::t('app', 'Script Time Limit') ?></strong>: <?= $info['MAX_EXECUTION_TIME'] ?>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-danger">&nbsp;&nbsp;</span>
                            <strong><?= Yii::t('app', 'PHP Execute Method') ?></strong>: <?= $info['PHP_RUN_MODE'] ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <div class="ibox-title">
                <h5><?= Yii::t('app', 'Status') ?></h5>
                <div class="ibox-tools">
                    <a class="collapse-link ui-sortable">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div>
                    <div>
                        <span><?= Yii::t('app', 'Memory Usage') ?></span>
                        <small class="pull-right">
                            <?php if (PHP_OS == 'Linux') {
                                echo $status['MEM']['NUM'];
                            } else {
                                echo yii::t('app', 'Only supported linux system');
                            }
                            ?>
                        </small>
                    </div>
                    <div class="progress progress-small">
                        <div style="width: <?= $status['MEM']['PERCENTAGE'] ?>;" class="progress-bar progress-bar<?=$status['MEM']['PERCENTAGE']>80 ? '-danger' : ''?>"></div>
                    </div>

                    <div>
                        <span><?= Yii::t('app', 'Real Memory Usage') ?></span>
                        <small class="pull-right">
                            <?php if (PHP_OS == 'Linux') {
                                echo $status['REAL_MEM']['NUM'];
                            } else {
                                echo yii::t('app', 'Only supported linux system');
                            }
                            ?>
                        </small>
                    </div>
                    <div class="progress progress-small">
                        <div style="width: <?= $status['REAL_MEM']['PERCENTAGE'] ?>;" class="progress-bar progress-bar<?=$status['REAL_MEM']['PERCENTAGE']>80 ? '-danger' : ''?>"></div>
                    </div>
                    <!--
                    <div>
                        <span>CPU</span>
                        <small class="pull-right">20 GB</small>
                    </div>
                    <div class="progress progress-small">
                        <div style="width: 50%;" class="progress-bar"></div>
                    </div>
                    -->
                    <div>
                        <span><?= Yii::t('app', 'Disk Usage') ?></span>
                        <small class="pull-right"><?= $status['DISK_SPACE']['NUM'] ?></small>
                    </div>
                    <div class="progress progress-small">
                        <div style="width: <?= $status['DISK_SPACE']['PERCENTAGE'] ?>%;" class="progress-bar progress-bar<?=$status['DISK_SPACE']['PERCENTAGE']>80 ? '-danger' : ''?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?= yii::t('app', 'Latest Guestbook') ?></h5>
                <div class="ibox-tools">
                    <!--<a class="openContab" title="<?=yii::t('app', 'Comments')?>" target="_blank" href="<?=Url::to(['comment/index'])?>"><?=yii::t('app', 'More')?></a>-->
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    <a class="close-link"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="ibox-content">
                <div>
                    <div class="feed-activity-list">
                        <?php
                        foreach ($guestbooks as $book) {
                            ?>
                            <div class="feed-element">
                                <a class="pull-left"></a>
                                <div class="media-body ">
                                    <small class="pull-right"><?= yii::$app->getFormatter()->asRelativeTime($book->created_at) ?></small>
                                    <strong><?= $book->tel ?> | <?= $book->email; ?> <?=yii::t('app', 'Leave message')?></strong>
                                    <br>
                                    <small class="text-muted"><?= yii::$app->getFormatter()->asDate($book->created_at) ?>  </small>
                                    <div data-index="0" class="openContab well"  title="<?=yii::t('app', 'gutstbook')?>" style="cursor: pointer">
                                        <?= $book->request ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

