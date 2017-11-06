<?php

namespace Designandsuch\Alfredhelp;

class Query
{
	protected $seperator = '/';
	protected $segments;

	function __construct($str ='')
	{
		$this->set($str);
	}
	
	public function segment($number = 1)
	{
		if( $number < 1 || $number > count($this->segments) ){ return ''; }
		return trim( $this->segments[ $number-1 ] );
	}

	public function count($equals = false)
	{
		if( $equals ){
			return $equals == count($this->segments);
		}
		return count($this->segments);
	}

	public function set( $query = null )
	{
		$query 	= ltrim( $query, $this->seperator );
		$query 	= rtrim( $query, $this->seperator );
		if( $query == ''){ return false; }
		$segments = explode( $this->seperator , $query );
		$this->segments = $segments;
	}
}
