<?php
namespace kouosl\site\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class ZamanWidget extends Widget{
    public $message;

    public function init(){
        parent::init();
        if($this->message === null){
        $this->message=date('d.m.Y');
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}