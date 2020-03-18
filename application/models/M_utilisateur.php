<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
  class M_utilisateur extends CI_model
    {
  	
  	public $idu;
  	public $nom;
    public $prenom;
  	public $adresse;
  	public $login;
  	public $password;

  	public function get_user($login,$password)
  	{
  	   $sql="SELECT * FROM utilisateur WHERE login='$login' and password = sha1('$password')";
  	   $query = $this->db->query($sql);

  	   $user = $query->row();
  	   return $user;
  	}

    public function liste()
    {
      return $this->db->select('*')->from('utilisateur')->get()->result();
    }

      public function addmysql()
        {
          if (empty($this->idu)==TRUE) {
             $this->db->insert('utilisateur',$this);
          }
           else{
              $this->db->UPDATE('utilisateur',$this,array('idu' => $this->idu));
           }
           if ($this->db->affected_rows()==TRUE) 
            return TRUE;
          else
            return FALSE;
        }

    public function get_record()
  {
    return $this->db->select('*')
    ->from('utilisateur')
    ->where('idu',$this->idu)
    ->get()
    ->row();
  }

  public function delete()
  {
    return $this->db->delete('utilisateur',array('idu' => $this->idu));
    if ($this->db->affected_rows()==true) {
        return true;
    }else{
      return  false;
    }
    
  }

 }


 ?>