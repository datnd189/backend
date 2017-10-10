<?php 
class Cms59dc81884db0a451849817_47e62c59c1cf84985e8d50b96be4f1feClass extends \Cms\Classes\PageCode
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
