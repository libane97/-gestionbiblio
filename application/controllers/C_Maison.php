<?php 
 
 
 class C_Maison extends CI_Controller
 {
 	 public function __construct()
     	{
     	   parent::__construct();
     	    if (empty($this->session->id)==true)
               header('location:'.site_url('C_acceuil'));
     	   $this->load->model('M_Maison','ms');
     	}
 	
 
     		public function index()
     	{    
     		$resulte = $this->ms->liste();
     		$data_vue['donne'] = $resulte;
     		$data_vue['titre'] ="Les maison";
     		$data['vue_a_charger']='V_Maison';
     		$data['data_vue']=$data_vue;
     		$this->load->view('template',$data);
     	}

         public function ajout()
   	     {
   	      
     	   $data_vue['titre']="Ajout Maison";
  		   $data['vue_a_charger']="V_maison_from";
  		   $data['data_vue']=$data_vue;
		   $this->load->view('template',$data);

   	     }

     	public function ajouter()
     	{
     		  if(empty($this->input->post('idm'))==false){
			  $this->ms->idm=$this->input->post('idm');
			  }
     		$this->ms->nom=$this->input->post('nom');
            $this->ms->adresse=$this->input->post('adresse');
		  	$reponse=$this->ms->addmysql();
		    if ($reponse==true ) 
                     $key=1;
                   else
                     $key=0;

                     if (empty($this->input->post('idm'))==false) {
                       header("location:".site_url("C_Maison/index?key=$key"));
                     }else{
                       header("location:".site_url("C_Maison/ajout?key=$key"));
                     }
     	}


	public function modif(){
			//var_dump($_GET);
			
			$this->ms->idm=$_GET['id'];
			$row=$this->ms->get_record();
			//var_dump($row);
			$data_vue['titre']="Modification maison";
			$data_vue['row']=$row;
			$data['vue_a_charger']="V_maison_from";
			$data['data_vue']=$data_vue;
			$this->load->view('template',$data);

		} 

		public function delete(){
		//var_dump($_GET);
		
		$this->ms->idm=$_GET['id'];
		$reponse=$this->ms->delete();
		if ($reponse==true) {
			header("location:".site_url('C_Maison'));
		}
		//var_dump($row);
		
	}

 	
 }

 ?>