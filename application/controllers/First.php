<?php

class First extends Application 
{
	function __construct() 
	{
            parent::__construct();
        }
	function index()
	{
		$this->data['pagebody'] = 'justone';
		
		$source = $this->quotes->first();

		$this->data = array_merge($this->data, $source);

		$this->render();
	}
	function zzz()
	{		
		$this->data['pagebody'] = 'justone';
		
		$source = $this->quotes->first();

		$this->data = array_merge($this->data, $source);

		$this->render();
	}

	function gimme($arg)
	{
		$this->data['pagebody'] = 'justone';
		
		$source = $this->quotes->get($arg);

		$this->data = array_merge($this->data, $source);

		$this->render();	
	}
}