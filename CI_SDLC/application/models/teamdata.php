<?php 
class Teamdata extends CI_Model
{

   public function userdata()
   {
   	return $this->db->query("select * from Users")->result();
   }
   public function AddUsers($data)
   {
     $this->db->query("INSERT INTO users_teams (teamid,userid) VALUES('".$data['teamid']."','".$data['userid']."')");
   }

   public function AddTeam()
   {
   	if (isset($_POST['submit']))
   	{
   		 $t_desc = $_POST['desc'];
       $t_name = $_POST['tname'];
       $this->db->query("INSERT INTO Teams (description,name) VALUES('$t_desc','$t_name')"); 
   	}
      
    }

    public function ListTeams()
    {

    	return $this->db->query("select * from Teams")->result();
    }

    public function DeleteTeam($id)
    {
      $this->db->delete('Teams', array('id' => $id)); 
    }
    public function EditTeam($id,$data)
    {
      
      $this->db->where('id', $id);
      $this->db->update('Teams', $data);

    }

    public function GetTeamData($id)
    {   
       $query = $this->db->get_where('Teams', array('id' => $id));
       $row=$query->result_array();
       return $row;
    }
    
    public function GetUsersIds($id)
    {
       $this->db->select('userid');
       $query = $this->db->get_where('users_teams', array('teamid' => $id));
       $ids=$query->result_array();
       // var_dump($ids);
       return $ids;
    }

    public function GetTeamUsers($ids)
    {   
        $i = 0;
        $allusers=array();
        foreach ($ids as $id)
        {
          $allusers[$i]=(int)$id['userid'];
           $i++;
        }  
          // var_dump($allusers);   
          $this->db->where_in('id',$allusers);
          $query=$this->db->get('Users');
          return $query->result_array();
         
    }

    public function DeleteUsersInTeam($id)
    {   
        $this->db->where('teamid', $id);
        $this->db->delete('users_teams');       
    }
    
 

  
}
