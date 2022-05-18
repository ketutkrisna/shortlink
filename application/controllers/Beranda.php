<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('google_login_model');
	} 
	
	public function index()
	{
		$data['title'] = 'Beranda';
		$userid = $this->session->userdata('user_id');
		// var_dump($elink);die;
		$data['profiluser'] = $this->db->get_where('users',['login_oauth_uid' => $userid])->row_array();
							   $this->db->order_by('id_link', 'DESC');
		$data['daftarlinks'] = $this->db->get_where('links',['id_userlink'=> $userid])->result_array();
		$data['cekresult'] = $this->db->get_where('links',['id_userlink'=> $userid])->row_array();
		$this->load->view('home/beranda', $data);
	}

	public function mylink($namalink='')
	{
		$namalink=htmlspecialchars($namalink);
		$datalink = $this->db->get_where('links',['short_link'=>$namalink])->row_array();
		if($datalink){
			redirect($datalink['original_link']);
		}
	}

	public function login()
	{
		if($this->session->userdata('access_token')){
			redirect('beranda');
			return false;
		}
		require_once APPPATH .'../vendor/autoload.php';
		$google_client = new Google\Client();
		$google_client->setCLientId('576389328319-h6ovprcr5q8gdrmeuj4fh5li8d826n6h.apps.googleusercontent.com');
		$google_client->setClientSecret('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');
		$google_client->setRedirectUri('http://localhost/shortlink/beranda/login');

		$google_client->addScope('email');
		$google_client->addScope('profile');

		if (isset($_GET['code'])) {
		    $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
		    if(!isset($token['error'])){
		    	$google_client->setAccessToken($token['access_token']);
		    	$this->session->set_userdata('access_token', $token['access_token']);
		    	$google_service = new Google_Service_Oauth2($google_client);
		    	$data = $google_service->userinfo->get();
		    	$current_datetime = date('Y-m-d H:i:s');

		    	$this->session->set_userdata('user_id', $data->id);

		    	if($this->google_login_model->is_already_register($data->id)){
		    		$user_data = [
		    						'first_name' => $data->given_name,
		    						'last_name' => $data->family_name,
		    						'email_adress' => $data->email,
		    						'profile_picture' => $data->picture,
		    						'created_at' => $current_datetime
		    					];
		    		$this->google_login_model->Update_user_data($user_data, $data->id);
		    		$this->session->set_flashdata('message_form','<div class="alert alert-success alert-dismissible fade show" role="alert">
						  Login success!
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>');
		    		redirect('beranda');
		    	}else{
		    		$user_data = [
		    						'user_id' => null,
		    						'login_oauth_uid' => $data->id,
		    						'first_name' => $data->given_name,
		    						'last_name' => $data->family_name,
		    						'email_adress' => $data->email,
		    						'profile_picture' => $data->picture,
		    						'created_at' => $current_datetime,
		    						'updated_at' => ''
		    					];
		    		$this->google_login_model->Insert_user_data($user_data);
		    		$this->session->set_flashdata('message_form','<div class="alert alert-success alert-dismissible fade show" role="alert">
						  Login success!
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>');
		    		redirect('beranda');
		    	}
		    	$this->session->userdata('user_data',$user_data);
		    }
		}else{
			if(!$this->session->userdata('access_token')){
				$login_link = $google_client->createAuthUrl();
				$data['login_link'] = $login_link;
				$this->load->view('home/login',$data);
			}else{
				redirect('beranda');
				return false;
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('access_token');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_data');
		$this->session->set_flashdata('message_form','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Anda telah logout!
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('beranda');
	}


}
