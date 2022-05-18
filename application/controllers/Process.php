<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('access_token')){
			redirect('login');
			return false;
		}
	} 
	
	public function index()
	{
		redirect('beranda');
	}

	public function createlink()
	{
		$userid = $this->session->userdata('user_id');
		$linkoriginal = $this->input->post('linkoriginal', true);
		$linkcustom = strtolower($this->input->post('linkcustom', true));
		$tanggalcreate = time();

		$data['title'] = 'Beranda';
		$userid = $this->session->userdata('user_id');
		$data['profiluser'] = $this->db->get_where('users',['login_oauth_uid' => $userid])->row_array();
		$data['daftarlinks'] = $this->db->get_where('links',['id_userlink'=> $userid])->result_array();


		$linkoriginal = trim($linkoriginal);
		if(empty($linkoriginal)){
	      	$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  Link original tidak boleh kosong!
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			$this->load->view('home/beranda',$data);
			return false;
	    }else{
	    	$linkoriginal = filter_var($linkoriginal, FILTER_SANITIZE_URL);
	    	if(filter_var($linkoriginal, FILTER_VALIDATE_URL)){

	    	}else{
	    		$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Link original tidak valid!
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('beranda');
				return false;
	    	}


			$linkcustom = trim($linkcustom);
		    if(empty($linkcustom)){
		      	$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Short link tidak boleh kosong!
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				$this->load->view('home/beranda',$data);
				return false;
		    }else{
		      $linkcustom = preg_replace('/[^a-zA-Z0-9\_\.\-]/', ' ', $linkcustom);
		      $linkcustom = str_replace(' ', '', $linkcustom);

		      $ceklink = $this->db->get_where('links',['short_link' => $linkcustom])->row_array();
		      if($ceklink){
		      	$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Short link <b>"'.$linkcustom.'"</b> sudah digunakan!
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				$this->load->view('home/beranda',$data);
				return false;
		      }
		    }
		}

		$data = [
	        'id_link' => null,
	        'id_userlink' => $userid,
	        'short_link' => $linkcustom,
	        'original_link' => $linkoriginal,
	        'create_link' => $tanggalcreate
			];
		$this->db->insert('links', $data);
		$this->session->set_flashdata('id_link', $this->db->insert_id());
		$this->session->set_flashdata('notifikasi', '<span class="badge rounded-pill bg-primary ms-1"> new added</span>');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
		  Link berhasil di buat!
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('beranda');
		return false;
	}

	public function ajaxgetdatalinkbyid()
	{
		// sleep(2);
		$userid=$this->session->userdata('user_id');
		$idlink = $this->input->post('idlink', true);
		$datajson=$this->db->get_where('links',['id_link' => $idlink, 'id_userlink' => $userid])->row_array();
		echo json_encode($datajson);
		return false;
	}

	public function editlink()
	{
		$userid=$this->session->userdata('user_id');
		$elinkid = $this->input->post('elinkid', true);
		$elinkcustom = strtolower($this->input->post('elinkcustom', true));
		$elinkoriginal = $this->input->post('elinkoriginal', true);

		$elinkoriginal = trim($elinkoriginal);
		if(empty($elinkoriginal)){
	      	$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  Link original edit tidak boleh kosong!
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('beranda');
			return false;
	    }else{
	    	$elinkoriginal = filter_var($elinkoriginal, FILTER_SANITIZE_URL);
	    	if(filter_var($elinkoriginal, FILTER_VALIDATE_URL)){

	    	}else{
	    		$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Link original tidak valid!
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('beranda');
				return false;
	    	}

			$elinkcustom = trim($elinkcustom);
		    if(empty($elinkcustom)){
		      	$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Short link edit tidak boleh kosong!
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('beranda');
				return false;
		    }else{
		      $elinkcustom = preg_replace('/[^a-zA-Z0-9\_\.\-]/', ' ', $elinkcustom);
		      $elinkcustom = str_replace(' ', '', $elinkcustom);

		      $ceklink = $this->db->get_where('links',['short_link' => $elinkcustom])->row_array();
		      if($ceklink){
		      	$this->session->set_flashdata('message_form','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Short link edit <b>"'.$elinkcustom.'"</b> sudah digunakan!
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
				redirect('beranda');
				return false;
		      }
		    }
		}

		$this->db->set('short_link', $elinkcustom);
		$this->db->set('original_link', $elinkoriginal);
		$this->db->where('id_link', $elinkid);
		$this->db->where('id_userlink', $userid);
		$this->db->update('links');
		$this->session->set_flashdata('id_link', $elinkid);
		$this->session->set_flashdata('notifikasi', '<span class="badge rounded-pill bg-primary ms-1"> new updated</span>');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
		  Short link berhasil di edit!
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('beranda');
		return false;
	}

	public function deletelink($idlink='', $shortlink='')
	{
		$userid=$this->session->userdata('user_id');
		$idlink = htmlspecialchars($idlink);
		$shortlink = htmlspecialchars($shortlink);

		$this->db->where('id_link', $idlink);
		$this->db->where('id_userlink', $userid);
		$this->db->delete('links');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Short link "<b>'.$shortlink.'</b>" berhasil di hapus!
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('beranda');
		return false;
	}
}
