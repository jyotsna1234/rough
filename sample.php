
<?php
class Sample extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('samplemodel');
		$data['query']=$this->samplemodel->bugsdata();
		$this->load->view('sampleview',$data);
		
		
		
		/*$data['name']='dale';
		//$data['color']='red';
		
		//$this->load->view('sampleview',$data);*/
	}
}
?>