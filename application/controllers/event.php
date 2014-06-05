<?php
class Event extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
		}
		/*function insert gets parameters separated by / as inputs in the url 
		assuming the inputs are in order user_id,start_date,end_date
		event_id is assigned automatically 
		*/
		public function insert($id,$start,$end){
			$this->load->database();
				$this->load->helper(array('form', 'url'));

				$this->load->library('form_validation');	
				
				$parameter=array($id,$start,$end);
				
				$this->load->model('Md_event');
				$this->Md_event->insert_event($parameter);		
		}
		/*function edit gets parameters separated by / as inputs in the url 
		assuming the inputs are in order event_id,user_id,start_date,end_date 
		it edits or updates the event table
		*/
		public function edit($id,$user_id,$start,$end){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			$parameter=array($id,$user_id,$start,$end);
			$this->load->model('Md_event');
			$this->Md_event->edit_event($parameter);
		}
		/*function delete gets event_id as parameter as $id in the url 
		it deletes the rows from all the tables having event_id=$id  
		*/
		public function delete($id){
			$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_event');
			$this->Md_event->delete_event($id);
		
		}
		
		/*function show displays the contents of event table in
		a tabular form
		*/
		public function show(){
		$this->load->database();
			$this->load->helper(array('form', 'url'));
	
			$this->load->library('form_validation');	
			echo "<br><br><br>";
			$this->load->model('Md_event');
			$this->Md_event->show_event();
			$this->load->view('profile');
		}
}
?>
