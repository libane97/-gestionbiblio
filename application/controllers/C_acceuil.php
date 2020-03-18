<?php 

   class C_acceuil extends CI_Controller
   {

   	public function index()
   	{
   		  $this->load->view('V_connexion');
   	}

   
   	 public function login()
  	 {
  	 	$this->load->model('M_utilisateur','user');
  	 	$login = $this->input->post('login');
  	 	$password = $this->input->post('password');
  	 	$user = $this->user->get_user($login,$password);

  	 	  if (empty($user)) {
  	 	  	   header('location:'.site_url('C_acceuil/index?erreur=1')); 
  	 	    }
  	 	    else{
  	 	    	$this->session->set_userdata('id',$user->idu);
  	 	    	$this->session->set_userdata('prenom',$user->prenom);
  	 	    	$this->session->set_userdata('nom',$user->nom);
  	 	  	    header('location:'.site_url('C_Maison/index')); 
  	 	    }
  	 }


  	 public function logout()
  	 {
  	 	$this->session->sess_destroy();
  	 	header('location:'.site_url('C_acceuil')); 
  	 }

 	

   }
 
 ?>
