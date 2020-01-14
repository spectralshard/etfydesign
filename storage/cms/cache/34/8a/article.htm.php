<?php 
class Cms5e1df2f5a412c642221084_02aee25d28f88b8295152482fc8332f7Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
}
}
