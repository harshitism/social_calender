<?php
class Invite extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
		}
		/*function insert gets parameters separated by / as inputs in the url 
		assuming the inputs are in order invited_friend,friend_id,location,invited_by
		it inserts these values in invite table
		*/
		public function insert($invited_friend,$friend_id,$event_id,$location,$invited_by ){
			$this->load->database();
				$this->load->helper(array('form', 'url'));

				$this->load->library('form_validation');	
				
				$parameter=array($invited_friend,$friend_id,$event_id,$location,$invited_by );
				
				$this->load->model('Md_invite');
				$this->Md_invite->insert_invite($parameter);
				
				
		}
		/*function edit gets parameters separated by / as inputs in the url 
		assuming the inputs are in order invited_friend,friend_id,location,invited_by
		it edits or updates these values in invite table
		*/
		public function edit($invited_friend,$friend_id,$event_id,$location,$invited_by ){
			$this->load->database();
				$this->load->helper(array('form', 'url'));

				$this->load->library('form_validation');	
				
				$parameter=array($invited_friend,$friend_id,$event_id,$location,$invited_by );
				
				$this->load->model('Md_invite');
				$this->Md_invite->edit_invite($parameter);
				
				
		}
		/*function delete gets event_id and friend_id as parameter  in the url 
		it deletes the rows from tables having event_id=$event_id and friend_id=$friend_id   
		*/
		public function delete($event_id,$friend_id){
			$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_invite');
			$this->Md_invite->delete_invite($event_id,$friend_id);
		
		}
		/*function show displays the contents of invite table in
		a tabular form
		*/
		public function show(){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_invite');
			$this->Md_invite->show_invite();
		}
		
}
?>
