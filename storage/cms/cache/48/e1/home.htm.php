<?php 
class Cms59dc7f33014c4572430928_80a4df506e684063f9be917d506e86d2Class extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
