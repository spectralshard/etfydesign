<?php 
class Cms5dd437648069a504921199_f8c03f9e5b5f3c61041c6d45fafedc99Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
}
}
