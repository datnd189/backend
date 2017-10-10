<?php namespace Samuikaze\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase{
	public function pluginDetails(){
		return [
			'name' => 'Samuikaze',
			'description' => '東京デザインテクノロジーセンター専門学校',
			'author' => 'Nguyen Duc Dat',
			'icon' => 'icon-leaf'

		];
	}
	public function registerComponents(){
		return [
			'\Samuikaze\Resources\Components\Links' => 'resourcesLinks'
		];
	}
}
