<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Events_model');
        $this->load->model('Options_event_model');
         $this->load->library('form_validation');       
    }
	public function index()
	{
		 $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'events/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'events/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'events/index.html';
            $config['first_url'] = base_url() . 'events/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Events_model->total_rows($q);
        $events = $this->Events_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'events_data' => $events,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('V_manage_event', $data);
	}

	public function create() 
    {
        
        $data = array(
            'button' => 'Create',
            'action' => site_url('manage/create_vote'),
	    'id_events' => set_value('id_events'),
	    'name_events' => set_value('name_events'),
	    'type_events' => set_value('type_events'),
	    'link_events' => set_value('link_events'),
	    'about_events' => set_value('about_events'),
	    'date_events' => set_value('date_events'),
	    'closed_events' => set_value('closed_events'),
	);
        $this->load->view('V_create_form', $data);
    }

    public function create_vote() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'id_events' => $this->input->post('id_events',TRUE),
		'name_events' => $this->input->post('name_events',TRUE),
		'type_events' => $this->input->post('type_events',TRUE),
		'link_events' => $this->input->post('link_events',TRUE),
		'about_events' => $this->input->post('about_events',TRUE),
		'date_events' => $this->input->post('date_events',TRUE),
		'closed_events' => $this->input->post('closed_events',TRUE),
	    );

            $this->Events_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('manage/options'));
        }
        
    }

    public function read($id) 
    {
        $row = $this->Events_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_events' => $row->id_events,
		'name_events' => $row->name_events,
		'type_events' => $row->type_events,
		'link_events' => $row->link_events,
		'about_events' => $row->about_events,
		'date_events' => $row->date_events,
		'closed_events' => $row->closed_events,
	    );
            $this->load->view('V_read_vote', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('manage'));
        }
    }

    public function update($id) 
    {
        $row = $this->Events_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('manage/update_action'),
		'id_events' => set_value('id_events', $row->id_events),
		'name_events' => set_value('name_events', $row->name_events),
		'type_events' => set_value('type_events', $row->type_events),
		'link_events' => set_value('link_events', $row->link_events),
		'about_events' => set_value('about_events', $row->about_events),
		'date_events' => set_value('date_events', $row->date_events),
		'closed_events' => set_value('closed_events', $row->closed_events),
	    );
            $this->load->view('V_upd_vote', $data);
        } else {
 
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('manage'));
        }
    }
    
    public function update_action() 
    {
        
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_events', TRUE));
        } else {
            $data = array(
		'name_events' => $this->input->post('name_events',TRUE),
		'type_events' => $this->input->post('type_events',TRUE),
		'link_events' => $this->input->post('link_events',TRUE),
		'about_events' => $this->input->post('about_events',TRUE),
		'date_events' => $this->input->post('date_events',TRUE),
		'closed_events' => $this->input->post('closed_events',TRUE),
	    );

            $this->Events_model->update($this->input->post('id_events', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('manage'));
        }
    }

    public function options() 
    {
        
       if($_POST==NULL) {
            $this->load->view('V_multi_opt');
        }else {
            redirect('Manage/create_options/'.$_POST['banyak_data']);
        }
    }

    public function create_options($banyak_data=0) 
    {
        $this->load->library('upload');
       
       if($_POST==NULL) {
            $data['banyak_data'] = $banyak_data;
            $this->load->view('V_create_form_options',$data);
        }else {
            foreach($_POST['data'] as $d){
                $this->db->insert('tbl_options_event',$d);
                $this->do_upload_multi;
            }
            redirect('manage');
        }
    }
    
    public function do_upload_multi($banyak_data=0)
    {        
             $this->load->library('upload');
              $data['banyak_data'] = $banyak_data;
             //Configure upload.
             $this->upload->initialize(array(
             "allowed_types" => "gif|jpg|png|jpeg",
            "upload_path"   => "./uploads/"
             ));
        
             //Perform upload.
             if($this->upload->do_upload("images")) {
                 $uploaded = $this->upload->data();
                 echo '<pre>';
            var_export($uploaded);
            echo '</pre>';
             }else{
             die('GAGAL UPLOAD');
    }
  }
  



	public function delete($id) 
    {
        $row = $this->Events_model->get_by_id($id);

        if ($row) {
            $this->Events_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('manage'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('manage'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('name_events', 'name events', 'trim|required');
       $this->form_validation->set_rules('type_events', 'type events', 'trim|required');
       $this->form_validation->set_rules('link_events', 'link events', 'trim|required');
       $this->form_validation->set_rules('about_events', 'about events', 'trim|required');
       $this->form_validation->set_rules('date_events', 'date events', 'trim|required');
       $this->form_validation->set_rules('closed_events', 'closed events', 'trim|required');

       $this->form_validation->set_rules('id_events', 'id_events', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function _rulesoptions() 
    {
       $this->form_validation->set_rules('name_options', 'name options', 'trim|required');
       $this->form_validation->set_rules('img_options', 'type events', 'trim|required');
       $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
       
       $this->form_validation->set_rules('id_events', 'id_events', 'trim|required');
       $this->form_validation->set_rules('id_options', 'id_options', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
