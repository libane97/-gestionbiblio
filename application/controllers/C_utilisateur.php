<?php 

   
   class C_utilisateur extends CI_Controller
   {
     	public function __construct()
     	{
     	   parent::__construct();
     	    if (empty($this->session->id)==true)
               header('location:'.site_url('C_acceuil'));
     	     $this->load->model('M_utilisateur','mt');
     	}
     
       	public function index()
     	{    
     		$resulte = $this->mt->liste();
     		$data_vue['donne'] = $resulte;
     		$data_vue['titre'] ="Les Utilisateur";
     		$data['vue_a_charger']='V_utilisateur';
     		$data['data_vue']=$data_vue;
     		$this->load->view('template',$data);
     	}

  		
  			   public function ajout()
   	       {
   	      
     	   $data_vue['titre']="Ajout un Utilisateur";
  		   $data['vue_a_charger']="V_utilisateur_from";
  		   $data['data_vue']=$data_vue;
		   $this->load->view('template',$data);
  
    	     }

     	public function ajouter()
     	{
     		  if(empty($this->input->post('idu'))==false){
			  $this->mt->idu=$this->input->post('idu');
			  }
     		$this->mt->nom=$this->input->post('nom');
     		$this->mt->prenom=$this->input->post('prenom');
            $this->mt->adresse=$this->input->post('adresse');
            $this->mt->login=$this->input->post('login');
            $this->mt->password=sha1($this->input->post('password'));
		  	$reponse=$this->mt->addmysql();
		    if ($reponse==true ) 
                     $key=1;
                   else
                     $key=0;

                     if (empty($this->input->post('idu'))==false) {
                       header("location:".site_url("C_utilisateur/index?key=$key"));
                     }else{
                       header("location:".site_url("C_utilisateur/ajout?key=$key"));
                     }
     	}


	public function modif(){
			//var_dump($_GET);
			
			$this->mt->idu=$_GET['id'];
			$row=$this->mt->get_record();
			//var_dump($row);
			$data_vue['titre']="Modification Utilisateur";
			$data_vue['row']=$row;
			$data['vue_a_charger']="V_utilisateur_from";
			$data['data_vue']=$data_vue;
			$this->load->view('template',$data);

		} 

		public function delete(){
		//var_dump($_GET);
		
		$this->mt->idu=$_GET['id'];
		$reponse=$this->mt->delete();
		if ($reponse==true) {
			header("location:".site_url('C_utilisateur'));
		}
		//var_dump($row);
		
	}





   }

 ?>