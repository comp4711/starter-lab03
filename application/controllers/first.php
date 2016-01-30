<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class first extends Application {

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
		// build the list of authors, to pass on to our view
		$source = $this->quotes->first();

	
		$this->data['mug'] = $source['mug'];
                $this->data['who'] = $source['who'];
                $this->data['what'] = $source['what'];

		$this->render();
	}
        
        function zzz()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(1);

		
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

		$this->render();	
	}
        
	function gimme($id)
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$source = $this->quotes->get($id);

		
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

		$this->render();	
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */