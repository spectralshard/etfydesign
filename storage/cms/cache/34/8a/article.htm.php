<?php 
class Cms5ed7fcfeaf0d9402972630_adf3252fed01c88d4a122a454b9149c0Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
}
}
