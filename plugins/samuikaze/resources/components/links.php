<?php namespace Samuikaze\Resources\Components;

use Cms\Classes\ComponentBase;
use ApplicationExeption;

class Links extends ComponentBase{
	public function componentDetails(){
		return [
			'name' => 'Links',
			'description' => 'Displays resouces links'
		];
	}
	public function defineProperties(){
		return [
			'link1'=> [
				'title' => 'Link 1',
				'description' => 'link 1 URL',
				'type' => 'string'
			],
			'link2'=> [
				'title' => 'Link 2',
				'description' => 'link 2 URL',
				'type' => 'string'
			],
			'link3'=> [
				'title' => 'Link 3',
				'description' => 'link 3 URL',
				'type' => 'string'
			],
		];
	}

	public function onRun(){
		$links = [$this->property('link1'),$this->property('link2'),$this->property('link3')];
		$this->page['links'] = $links;
	}
}
