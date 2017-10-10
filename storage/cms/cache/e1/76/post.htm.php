<?php 
class Cms59dcafd7c262f782383769_a3af458fc5645dd4736e295fbd66489aClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
