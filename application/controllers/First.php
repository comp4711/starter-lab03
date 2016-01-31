<?php

/* 
 * application/controllers/First.php
 */

class First extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    // function for first link after logo 
    function index()
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }       
    // function for qoute for third link
    function zzz()
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 * controller for the 5th Link: Show
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
		
                $record = $this->quotes->get();
                $this->data = array_merge($this->data, $record); 

		$this->render();
	}
        
        function gimme($id){
                $this->data['pagebody'] = 'justone';	
		
                $record = $this->quotes->get($id); 
                $this->data = array_merge($this->data, $record); 

		$this->render();
                      
        }

}

/* End of file First.php */
/* Location: application/controllers/First.php */
