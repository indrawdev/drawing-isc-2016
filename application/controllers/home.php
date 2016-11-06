<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function view($kompetisi) {
		$this->load->model('home_mod');
        if ($kompetisi == 1) {
            $title = "SOERATIN";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (SOERATIN)";
            $data['desc'] = $description;
            $data['small'] = 'assets/images/small-soeratin.png';
        } else if ($kompetisi == 2) {
            $title = "LIGA NUSANTARA";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (LIGA NUSANTARA)";
            $data['desc'] = $description;
            $data['small'] = 'assets/images/small-linus.png';
        }

        $this->template->title = $title;
        $this->template->description = $description;

        // Dynamically add a css stylesheet
        $this->template->stylesheet->add('assets/css/bootstrap.min.css');
        $this->template->stylesheet->add('assets/css/font-awesome.min.css');
        $this->template->stylesheet->add('assets/css/main.css');
        
        // Dynamically add a javascript
        //$this->template->javascript->add('assets/js/jquery.min.js');
        //$this->template->javascript->add('assets/js/jquery-sortable.js');
        $this->template->javascript->add('assets/js/bootstrap.min.js');
        $this->template->javascript->add('assets/js/custom.js');

        //$data['lists'] = $this->home_mod->getDataList();
        $data['group_a'] = $this->home_mod->checkGroup(1, $kompetisi);
        $data['group_b'] = $this->home_mod->checkGroup(2, $kompetisi);
        $data['group_c'] = $this->home_mod->checkGroup(3, $kompetisi);
        $data['group_d'] = $this->home_mod->checkGroup(4, $kompetisi);
        $data['group_e'] = $this->home_mod->checkGroup(5, $kompetisi);
        $data['group_f'] = $this->home_mod->checkGroup(6, $kompetisi);
        $data['group_g'] = $this->home_mod->checkGroup(7, $kompetisi);
        $data['group_h'] = $this->home_mod->checkGroup(8, $kompetisi);
        $this->template->content->view('home_v', $data);

        // Set a partial's content
        $this->template->footer = '';
        
        // Publish the template
        $this->template->publish();
	}


	public function display($kompetisi) {
		$this->load->model('home_mod');
		        // Set the title
        if ($kompetisi == 1) {
            $title = "SOERATIN";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (SOERATIN)";
            $data['desc'] = $description;
            $data['small'] = 'assets/images/small-soeratin.png';
        } else if ($kompetisi == 2) {
            $title = "LIGA NUSANTARA";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (LIGA NUSANTARA)";
            $data['desc'] = $description;
            $data['small'] = 'assets/images/small-linus.png';
        }

        $this->template->title = $title;
        $this->template->description = $description;

        // Dynamically add a css stylesheet
        $this->template->stylesheet->add('assets/css/bootstrap.min.css');
        $this->template->stylesheet->add('assets/css/font-awesome.min.css');
        $this->template->stylesheet->add('assets/css/main.css');
        $this->template->javascript->add('assets/js/bootstrap.min.js');

        $data['group_a'] = $this->home_mod->checkGroup(1, $kompetisi);
        $data['group_b'] = $this->home_mod->checkGroup(2, $kompetisi);
        $data['group_c'] = $this->home_mod->checkGroup(3, $kompetisi);
        $data['group_d'] = $this->home_mod->checkGroup(4, $kompetisi);
        $data['group_e'] = $this->home_mod->checkGroup(5, $kompetisi);
        $data['group_f'] = $this->home_mod->checkGroup(6, $kompetisi);
        $data['group_g'] = $this->home_mod->checkGroup(7, $kompetisi);
        $data['group_h'] = $this->home_mod->checkGroup(8, $kompetisi);
        $data['group0'] = $this->home_mod->getGroup($kompetisi);
        $data['listgroup'] = $this->home_mod->listGroup();
        $data['listsort'] = $this->home_mod->listSort();
        $data['kompetisi'] = $this->uri->segment(3);
        $this->template->content->view('display_v', $data);
       // $this->printOut($html);
        // Set a partial's content
        $this->template->footer = '';
        
        // Publish the template
        $this->template->publish();   
	}

	public function drag_order($id, $group, $item) {
		$this->load->model('home_mod');
		$this->home_mod->dragItem($id, $group, $item);
		return true;
	}

	public function update() {
		$this->load->model('home_mod');
		$id = $this->input->post('id');
		$group = $this->input->post('group');
		$item = $this->input->post('item_id');
		$sort = $this->input->post('sort');
        $kompetisi = $this->input->post('kompetisi');
		$this->home_mod->updateGroup($id, $group, $item, $sort);
		redirect("home/display/" . $kompetisi);
	}

	public function printOut($kompetisi) {
		$this->load->model('home_mod');
        if ($kompetisi == 1) {
            $title = "SOERATIN";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (SOERATIN)";
            $data['desc'] = $description;
            $data['logo'] = 'assets/images/small-soeratin.png';
        } else if ($kompetisi == 2) {
            $title = "LIGA NUSANTARA";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (LIGA NUSANTARA)";
            $data['desc'] = $description;
            $data['logo'] = 'assets/images/small-linus.png';
        }

        $data['group_a'] = $this->home_mod->checkGroup(1, $kompetisi);
        $data['group_b'] = $this->home_mod->checkGroup(2, $kompetisi);
        $data['group_c'] = $this->home_mod->checkGroup(3, $kompetisi);
        $data['group_d'] = $this->home_mod->checkGroup(4, $kompetisi);  
        $data['group_e'] = $this->home_mod->checkGroup(5, $kompetisi);
        $data['group_f'] = $this->home_mod->checkGroup(6, $kompetisi);
        $data['group_g'] = $this->home_mod->checkGroup(7, $kompetisi);
        $data['group_h'] = $this->home_mod->checkGroup(8, $kompetisi);  	

        //$this->load->view('print_v', $data);
		$html = $this->load->view('print_v', $data, true);
		
		$pdfFilePath = "printout.pdf";
		
		$this->load->library('m_pdf');
		$this->m_pdf->pdf->WriteHTML($html);
		$this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}

	public function preview($kompetisi) {
		$this->load->model('home_mod');
        if ($kompetisi == 1) {
            $title = "SOERATIN";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (SOERATIN)";
            $data['desc'] = $description;
            $data['logo'] = 'assets/images/small-soeratin.png';
        } else if ($kompetisi == 2) {
            $title = "LIGA NUSANTARA";
            $description = "PUTARAN FINAL KOMPETISI AMATIR ISC 2016 (LIGA NUSANTARA)";
            $data['desc'] = $description;
            $data['logo'] = 'assets/images/small-linus.png';
        }

		$data['group_a'] = $this->home_mod->checkGroup(1, $kompetisi);
        $data['group_b'] = $this->home_mod->checkGroup(2, $kompetisi);
        $data['group_c'] = $this->home_mod->checkGroup(3, $kompetisi);
        $data['group_d'] = $this->home_mod->checkGroup(4, $kompetisi);	
        $data['group_e'] = $this->home_mod->checkGroup(5, $kompetisi);
        $data['group_f'] = $this->home_mod->checkGroup(6, $kompetisi);
        $data['group_g'] = $this->home_mod->checkGroup(7, $kompetisi);
        $data['group_h'] = $this->home_mod->checkGroup(8, $kompetisi);  
		$this->load->view('print_v', $data);
	}

}