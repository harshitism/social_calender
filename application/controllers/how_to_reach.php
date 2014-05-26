<?php
class How_to_reach extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
		}
		/*function insert gets parameters separated by / as inputs in the url 
		assuming the inputs are in order id,latitude,longitude,event_date
		it inserts these values in how_to_reach table
		*/
		public function insert($id,$latitude,$longitude,$event_date ){
			$this->load->database();
				$this->load->helper(array('form', 'url'));

				$this->load->library('form_validation');	
				
				$parameter=array($id,$latitude,$longitude,$event_date );
				
				$this->load->model('Md_how_to_reach');
				$this->Md_how_to_reach->insert_how_to_reach($parameter);		
		}
		/*function edit gets parameters separated by / as inputs in the url 
		assuming the inputs are in order id,latitude,longitude,event_date
		it edits or updates these values in how_to_reach table
		*/
		public function edit($id,$latitude,$longitude,$event_date ){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			$parameter=array($id,$latitude,$longitude,$event_date );
			$this->load->model('Md_how_to_reach');
			$this->Md_how_to_reach->edit_how_to_reach($parameter);
		}
		/*function delete gets id  as parameter  in the url 
		it deletes the rows from having event_id=$id from the how_to_reach table  
		*/
		public function delete($id){
			$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_how_to_reach');
			$this->Md_how_to_reach->delete_how_to_reach($id);
		
		}
		
				
		/*function show displays the contents of how_to_reach table in
		a tabular form
		*/
		public function show(){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_how_to_reach');
			$this->Md_how_to_reach->show_how_to_reach();
		}
			
		
}
?>
