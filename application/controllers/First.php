<?php

/**
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// get first author data, to pass on to our view
		$record = $this->quotes->first();
		
		// Put into respective data view
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}
	
	function zzz()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		
		// get author dta, to pass onto our view
		$record = $this->quotes->get(1);
		
		// Load into the data view
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/First.php */