<?php 
use RainLab\Translate\Classes\Translator;
class Cms5ed7fa6c3ae19786008819_1885f7cb425b708ad89fb5662c3f5581Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
