<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-06-19 14:46
 */
namespace frontend\widgets;

class ScrollPicView extends \yii\base\Widget
{

    public $banners;

    public $template = "<div class='owl'>{lis}</div>";

    public $liTemplate = "<div class='item'><div class='img'><img src='{img_url}'><a target='{target}' href=\"{link_url}\"><span></span></a></div></div>";
        

    /**
     * @inheritdoc
     */
    public function run()
    {
        parent::run();
        $lis = '';
        foreach ($this->banners as $banner) {
            $lis .= str_replace(['{link_url}', '{img_url}', '{target}'], [$banner['link'], $banner['img'], $banner['target']], $this->liTemplate);
        }
        return str_replace('{lis}', $lis, $this->template);
    }

}
