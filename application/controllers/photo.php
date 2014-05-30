<?php
class Photo extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
		}
		/*function insert gets parameters separated by / as inputs in the url 
		assuming the inputs are in order event,added_by,path
		and photo_id and date_added is assigned automatically
		it inserts these values in photo table
		*/
		public function insert($event,$addedby,$pathh){
			$this->load->database();
				$this->load->helper(array('form', 'url'));

				$this->load->library('form_validation');	
				
				$parameter=array($event,$addedby,$pathh);
				
				
				$this->load->model('Md_photo');
				$this->Md_photo->insert_photo($parameter);
				
				
		}
		/*function edit gets parameters separated by / as inputs in the url 
		assuming the inputs are in order photo_id,event,added_by,path
		and date_added is assigned automatically
		it edits or updates these values in photo table
		*/
		public function edit($photo_id,$event_id,$added_by,$pt){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			$parameter=array($photo_id,$event_id,$added_by,$pt);
			$this->load->model('Md_photo');
			$this->Md_photo->edit_photo($parameter);
			
		}
		
		/*function delete gets photo_id  as parameter  in the url 
		it deletes the rows from having photo_id=$photo_id 
		*/
		public function delete($photo_id){
			$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_photo');
			$this->Md_photo->delete_photo($photo_id);
			
		}
		
		/*function show displays the contents of invite table in
		a tabular form
		*/
		public function show(){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			echo "<br><br><br>";
			$this->load->model('Md_photo');
			$this->Md_photo->show_photo_table();
			$this->load->view('profile');
		}
}
?>
