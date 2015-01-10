<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('ADMIN_NAME')==FALSE){
			redirect(base_url().'login');
		}
	}

	public function index(){	
		$data  =  array();
	    $data['base_url']  =  base_url();
		$this->load->view('admin/index',$data);

	}
	
	public function category() {
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/category';
        $config['total_rows'] = $this->db->count_all_results('mailing_list_category');
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
       	$data['base_url']   =  base_url();
       	$this->load->helper(array('form'));
		$this->load->model('category_model');
        $data['category'] = $this->category_model->list_category($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/categorylist', $data);
        
    }

    public function addcategory($id  =  NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model('category_model');
        if($_POST){
        	
        	$this->form_validation->set_rules('title', 'Title', 'required|is_unique[mailing_list_category.title]');	
        	if ($this->form_validation->run() == TRUE) {
        		$this->category_model->add_category($id);
        		if(!empty($id)){
        			$this->session->set_flashdata('msg',"Updated category successfully");
        		}else{
        			$this->session->set_flashdata('msg',"Added category successfully");	
        		}
        		redirect(base_url().'admin/addcategory/'.$id);
        	}
        }
        	$category   =   $this->category_model->get_category($id);
	        if(!empty($category)){
	        	foreach($category as $row){
	        		$data['id']    =  $row->id;
	        		$data['title'] =  $row->title;
	        	}
	        }else{
	        	$data['id']    =  '';
	        	$data['title'] =  '';
	        }
	        $this->load->view('admin/addcategory',$data);

      
     
            
    }

    public function deletecategory($id = NULL) {
        $this->load->model('category_model');	
		$this->category_model->deletecategory($id);
		$this->session->set_flashdata('msg',"Deleted category successfully");
        redirect(base_url().'admin/category');
    }

    public function contact() {
		$data['base_url']   =  base_url();
       	$this->load->helper(array('form'));
		$this->load->model('contact_model');
        $this->load->library('pagination');
        $config['base_url']   = base_url().'admin/contact';
        $config['total_rows'] = $this->db->count_all_results('mailing_list');
        $config['per_page']   = 10; 
        $this->pagination->initialize($config);
        if($_POST){
            $data['contact'] = $this->contact_model->search_contact($_POST['search']);
            $this->load->view('admin/contactlist', $data);
        }else{
            $data['contact'] = $this->contact_model->list_contact($config['per_page'], $this->uri->segment(3));
            $this->load->view('admin/contactlist', $data);
        }
       
    }

    public function addcontact($id  =  NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model(array('contact_model','category_model'));
        if($_POST){
        	$this->form_validation->set_rules('name', 'Name', 'trim|required');
        	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');	
        	if ($this->form_validation->run() == TRUE) {
        		$this->contact_model->add_contact($id);
        		if(!empty($id)){
        			$this->session->set_flashdata('msg',"Updated contact successfully");
        		}else{
        			$this->session->set_flashdata('msg',"Added contact successfully");	
        		}
        		redirect(base_url().'admin/addcontact/'.$id);
        	}
        }
        	$data['categories'] = $this->category_model->list_category();
        	$contact   =   $this->contact_model->get_contact($id);
	        if(!empty($contact)){
	        	foreach($contact as $row){
	        		$data['id']           =  $row->id;
	        		$data['category']     =  $row->category;
	        		$data['name']         =  $row->name;
	        		$data['email']        =  $row->email;
	        	}
	        }else{
	        	$data['id']           =  '';
	        	$data['category']     =  '';
	        	$data['name']         =  '';
	        	$data['email']        =  '';
	        }
	        $this->load->view('admin/addcontact',$data);

        
     
            
    }

    public function deletecontact($id = NULL) {
        $this->load->model('contact_model');	
		$this->contact_model->deletecontact($id);
		$this->session->set_flashdata('msg',"Deleted contact successfully");
        redirect(base_url().'admin/contact');
    }

    public function content() {
		$data['base_url']   =  base_url();
       	$this->load->helper(array('form'));
		$this->load->model('content_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/content';
        $config['total_rows'] = $this->db->count_all_results('region');
        $config['per_page']   = 10; 
        $this->pagination->initialize($config); 
        $data['content'] = $this->content_model->list_content($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/contentlist', $data);
    }
    public function addcontent($id  =  NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model(array('content_model'));
        if($_POST){
        	if(!empty($id)){
        		$this->form_validation->set_rules('name', 'Name', 'trim|required|edit_unique[region.title.id]');
        	}else{
        		$this->form_validation->set_rules('name', 'Name', 'trim|required|is_unique[region.title]');
        	}
        	$this->form_validation->set_rules('content', 'Content', 'trim|required');
        	$this->form_validation->set_rules('url', 'Url', 'trim|required');	
        	if ($this->form_validation->run() == TRUE) {
        		$config['upload_path'] = 'uploads';
        		$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
 				if (!$this->upload->do_upload())
				{
					$error   =  array('error' => $this->upload->display_errors());
					$image   =  $this->input->post('image');
					
				}
				else
				{
					$data    =  array('upload_data' => $this->upload->data());
                    $image   =  $data['upload_data']['file_name'];
				}
				
				$this->content_model->add_content($id,$image);
        		if(!empty($id)){
        			$this->session->set_flashdata('msg',"Updated content successfully");
        		}else{
        			$this->session->set_flashdata('msg',"Added content successfully");	
        		}
        		redirect(base_url().'admin/addcontent/'.$id);
        	}
        }
        	
        	$content   =   $this->content_model->get_content($id);
	        if(!empty($content)){
	        	foreach($content as $row){
	        		$data['id']           =  $row->id;
	        		$data['name']         =  $row->title;
	        		$data['content']      =  $row->content;
	        		$data['url']          =  $row->url;
	        		$data['image']        =  $row->image;
	        	}
	        }else{
	        	$data['id']           =  '';
	        	$data['name']         =  '';
	        	$data['content']      =  '';
	        	$data['url']          =  '';
	        	$data['image']        =  '';
	        }
	        $this->load->view('admin/addcontent',$data);
       
    }

    public function deletecontent($id = NULL) {
        $this->load->model('content_model');	
		$this->content_model->deletecontent($id);
		$this->session->set_flashdata('msg',"Deleted content successfully");
        redirect(base_url().'admin/content');
    }
    public function template() {
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->model('template_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/template';
        $config['total_rows'] = $this->db->count_all_results('template');
        $config['per_page']   = 10; 
        $this->pagination->initialize($config); 
        $data['template'] = $this->template_model->list_template($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/templatelist', $data);
    }
    
    public function viewtemplate($id = NULL){
        $data['base_url']   =  base_url();
        $this->load->model(array('template_model','content_model'));
        if(!empty($id)){
                $template           =  $this->template_model->get_template($id);
        }
        if(!empty($template)){
            foreach($template as $row){
                $data['id']                 =  $row->id;
                $data['title']              =  $row->name;
                $data['main_title']         =  $row->header;
                $data['main_content']       =  $row->footer;
                for($i=1;$i<=4;$i++){
                    $c  = 'content'.$i;
                    $data['content'.$i]           =  $this->content_model->get_content($row->$c);
                    foreach($data['content'.$i] as $record){
                            $data['regiontitle'.$i]    =   $record->title;
                            $data['regioncontent'.$i]  =   $record->content;
                            $data['regionimage'.$i]    =   $record->image;
                            $data['regionurl'.$i]      =   $record->url;
                    }
                }
            }
        }else{
            $data['id']                 =  $id;
            $data['title']              =  '';
            $data['main_title']         =  '';
            $data['main_content']       =  '';
            for($i=1;$i<=4;$i++){
                $data['regiontitle'.$i]    =   '';
                $data['regioncontent'.$i]  =   '';
                $data['regionimage'.$i]    =   '';
                $data['regionurl'.$i]      =   '';
                
            }

        }
        $data['unsubscribe_url']  =  '';
        $this->load->view('admin/mailtemplate',$data);
    }

    public function getcontacts(){
        $this->load->helper(array('form'));
        if($_POST){
            $this->db->where_in('category',$_POST['selected']);
            $data['contact']    =    $this->db->get('mailing_list')->result();
            foreach($data['contact'] as $row){
                $data = array(
                    'name'        => 'contact['.$row->id.']',
                    'value'       => $row->email,
                    'checked'     => TRUE,
                );
                echo form_checkbox($data);
                echo form_label($row->email, 'contact');
                echo '<br/>';
               
            }
            echo form_submit('submit','Send');
        }
    }

    public function sendtemplate($id = NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        if($_POST){

            $this->load->model(array('template_model','content_model'));
            $template           =  $this->template_model->get_template($id);
            if(!empty($id)){
                foreach($template as $row){
                        $data['id']                 =  $row->id;
                        $data['title']              =  $row->name;
                        $data['main_title']         =  $row->header;
                        $data['main_content']       =  $row->footer;
                        for($i=1;$i<=4;$i++){
                            $c  = 'content'.$i;
                            $data['content'.$i]           =  $this->content_model->get_content($row->$c);
                            foreach($data['content'.$i] as $record){
                                $data['regiontitle'.$i]    =   $record->title;
                                $data['regioncontent'.$i]  =   $record->content;
                                $data['regionimage'.$i]    =   $record->image;
                                $data['regionurl'.$i]      =   $record->url;
                            }
                        }

                          
                }
            }
          
            $this->load->library('email');
            $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
            );
            
            foreach($_POST['contact'] as $key => $value ){
                $data['unsubscribe_url']  =  base_url().'admin/unsubscribe/'.$key;
                $msg            =   $this->load->view('admin/mailtemplate',$data,TRUE);
                $this->email->initialize($config);
                $this->email->from('fp@progno.co.in');
                $this->email->subject('Smart Savings Magazine');
                $this->email->message($msg);
                $this->email->to($value);
                $this->email->send();
            }
            echo $this->email->print_debugger();
            /*$apikey = '9494a392eafcc7aefde071fb1b91f52f-us9';
            $config = array(
                    'apikey' => $apikey,      // Insert your api key
                    'secure' => FALSE   // Optional (defaults to FALSE)
            );
            $this->load->library('MCAPI', $config, 'mail_chimp');
        
            $message = array(
                'html'=>'Yo, this is the <b>html</b> portion',
                'text'=>'Yo, this is the *text* portion',
                'subject'=>'This is the subject',
                'from_name'=>'Me!',
                'from_email'=>'verifed@example.com',                'to_email'=>$to_emails,
                'to_name'=>$to_names
            );
            //campaignCreate($apikey, 'regular', array options, array content, array segment_opts, array type_opts)
            */
        }else{
            $data['category']   =  $this->db->get('mailing_list_category')->result();
            $this->load->view('admin/sendtemplate',$data);
        }
       
    }
    
    public function addtemplate($id  =  NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model(array('template_model','content_model'));
        if($_POST){
            $this->form_validation->set_rules('name', 'Title', 'trim|required|edit_unique[template.name.id]');
            if ($this->form_validation->run() == TRUE) {
                $this->template_model->add_template($id);
                if(!empty($id)){
                    $this->session->set_flashdata('msg',"Updated template successfully");
                }else{
                    $this->session->set_flashdata('msg',"Added template successfully"); 
                }
                redirect(base_url().'admin/addtemplate/'.$id);
            }
        }
            $data['content']       =      $this->content_model->list_content();
            $template   =   $this->template_model->get_template($id);
            if(!empty($id)){
                foreach($template as $row){
                    $data['id']                 =  $row->id;
                    $data['title']              =  $row->name;
                    $data['header']             =  $row->header;
                    $data['footer']             =  $row->footer;
                    $data['content1']           =  $row->content1;
                    $data['content2']           =  $row->content2;
                    $data['content3']           =  $row->content3;
                    $data['content4']           =  $row->content4;
                   
                }
            }else{
                    $data['id']                 =  '';
                    $data['title']              =  '';
                    $data['header']             =  '';
                    $data['footer']             =  '';
                    $data['content1']           =  '';
                    $data['content2']           =  '';
                    $data['content3']           =  '';
                    $data['content4']           =  '';
                   
            }
            $this->load->view('admin/addtemplate',$data);

      
     
            
    }

    public function deletetemplate($id = NULL) {
        $this->load->model('template_model');   
        $this->template_model->deletetemplate($id);
        $this->session->set_flashdata('msg',"Deleted template successfully");
        redirect(base_url().'admin/template');
    }
    public function unsubscribe($id = NULL) {
       $data['base_url']   =  base_url();
       $this->db->where(array('id'=>$id));
       $this->db->delete('mailing_list');
       $this->load->view('admin/unsubscribe',$data);     
       
    }


	
}