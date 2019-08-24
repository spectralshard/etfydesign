<?php 
class Cms5d61129c6db36158943447_aeb813761a87f1e45208ef4d4b262651Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
}
}
