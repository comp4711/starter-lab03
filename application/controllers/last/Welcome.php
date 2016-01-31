<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

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
		// build the list of the last author
		$record = $this->quotes->last();
                $authors = array();
                $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'what' => $record['what']);
                $this->data['authors'] = $authors;
		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */