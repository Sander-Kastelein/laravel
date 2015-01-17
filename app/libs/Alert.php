<?php

namespace Technasium;
use \Illuminate\Support\Facades\View;

Class Alert{
	
	public $type,$content;


	public function __construct($type,$content){
		if(!is_string($type)) $type = 'INVALID_STRING';
		if(!is_string($content)) $content = 'INVALID_STRING';
		$this->type = $type;
		$this->content = $content;
	}

	public function __toString(){
		return (string)View::make('components.alert')->with('type',$this->type)->with('content',trans($this->content));
	}
}