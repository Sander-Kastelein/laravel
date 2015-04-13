<?php

Class GroupFile extends Eloquent{
	
	public function group(){
		return $this->BelongsTo('Group');
	}

	public function owner(){
		return $this->BelongsTo('User');
	}

}