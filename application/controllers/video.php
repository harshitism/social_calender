<?php
class Video extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
		}
		/*function insert gets parameters separated by / as inputs in the url 
		assuming the inputs are in order event,added_by,path
		and video_id and date_added are assigned automatically
		it inserts these values in video table
		*/
		public function insert($event,$added_by,$path){
			$this->load->database();
				$this->load->helper(array('form', 'url'));

				$this->load->library('form_validation');	
				
				$parameter=array($event,$added_by,$path);
				
				$this->load->model('Md_video');
				$this->Md_video->insert_video($parameter);		
		}
		/*function edit gets parameters separated by / as inputs in the url 
		assuming the inputs are in order video_id,event,added_by,path
		and date_added is assigned automatically
		it edits or updates these values in video table
		*/
		public function edit($id,$event_id,$added_by,$path){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			$parameter=array($id,$event_id,$added_by,$path);
			$this->load->model('Md_video');
			$this->Md_video->edit_video($parameter);
		}
		/*function delete gets video_id  as parameter  in the url 
		it deletes the rows from having video_id=$video_id from the video table  
		*/
		public function delete($video_id){
			$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_video');
			$this->Md_video->delete_video($video_id);
		
		}
		
		/*function show displays the contents of video  table in
		a tabular form
		*/
		public function show(){
		$this->load->database();
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');	
			$this->load->model('Md_video');
			$this->Md_video->show_video_table();
		}
}
?>
