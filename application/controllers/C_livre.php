<?php 
 
 /**
  * 
  */
 class C_livre extends CI_Controller
 {

 	public function __construct()
     	{
     	   parent::__construct();
     	    if (empty($this->session->id)==true)
               header('location:'.site_url('C_acceuil'));
     	   $this->load->model('M_livre','mv');
     	}

    		public function index()
     	{ 
       /* $resulte = $this->art->get_data(); */
     		$resulte = $this->mv->get_data();
     		$data_vue['donne'] = $resulte;
     		$data_vue['titre'] ="Les livres";
     		$data['vue_a_charger']='V_livre';
     		$data['data_vue']=$data_vue;
     		$this->load->view('template',$data);
     	}


     	   public function ajout()
   	     {
   	     $resulte = $this->mv->get_data();
         $data_vue['donne'] = $resulte;  
     	   $data_vue['titre']="Ajout un livre";
  		   $data['vue_a_charger']="V_livre_from";
  		   $data['data_vue']=$data_vue;
		   $this->load->view('template',$data);

   	     }

     	public function ajouter()
     	{
     		  if(empty($this->input->post('idlv'))==false){
			  $this->mv->idlv=$this->input->post('idlv');
			  }
     		$this->mv->numero=$this->input->post('numero');
        $this->mv->titre=$this->input->post('titre');
        $this->mv->auteurs=$this->input->post('auteurs');
        $this->mv->nbrp=$this->input->post('nbrp');
        $this->mv->prixe=$this->input->post('prixe');
        $this->mv->idl=$this->input->post('idl');
        $this->mv->idm=$this->input->post('idm');
		  	$reponse=$this->mv->addmysql();
		    if ($reponse==true ) 
                     $key=1;
                   else
                     $key=0;

                     if (empty($this->input->post('idlv'))==false) {
                       header("location:".site_url("C_livre/index?key=$key"));
                     }else{
                       header("location:".site_url("C_livre/ajout?key=$key"));
                     }
     	}


	public function modif(){
			//var_dump($_GET);
			
			$this->mv->idlv=$_GET['id'];
			$row=$this->mv->get_record();
			//var_dump($row);
      $resulte = $this->mv->get_data();
      $data_vue['donne'] = $resulte; 
			$data_vue['titre']="Modification livres";
			$data_vue['row']=$row;
			$data['vue_a_charger']="V_livre_from";
			$data['data_vue']=$data_vue;
			$this->load->view('template',$data);

		} 

		public function delete(){
		//var_dump($_GET);
		
		$this->mv->idlv=$_GET['id'];
		$reponse=$this->mv->delete();
		if ($reponse==true) {
			header("location:".site_url('C_livre'));
		}
		//var_dump($row);
		
	}



 }



 ?>