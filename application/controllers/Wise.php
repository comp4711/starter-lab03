<?php
/**
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application
{
	function __construct() 
	{
		parent::__construct();
	}
	function bingo() 
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// get first author data, to pass on to our view
		$record = $this->quotes->get(5);
		
		// Put into respective data view
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}
}
/* End of file Wise.php */
/* Location: application/controllers/Wise.php */