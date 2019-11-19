<?php 
use RainLab\Translate\Classes\Translator;class Cms5dd43fc750b7e034331768_4261a9bb7dcd7e09e9b32ceb5b436866Class extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
