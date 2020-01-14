<?php 
use RainLab\Translate\Classes\Translator;class Cms5e1df2db2fa22582175782_8e2a5b4fa0822b695fcd40f3d3109905Class extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
