<?php

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
			
			$source = $this->quotes->first();
			
			$this->data['mug'] = $source['mug'];
			$this->data['what'] = $source['what'];
			$this->data['who'] = $source['who'];

			$this->render();
		}

	}
