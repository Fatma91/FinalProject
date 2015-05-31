<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teams extends CI_Controller
 {
	public function __construct()
	{
		parent::__construct();
    $this->load->model('teamdata');
		$this->load->helper(array('form','url'));
	}

    public function Add_Team()
    { 
        $this->load->model('teamdata');
        $data['result']=$this->teamdata->userdata();
    	  $this->load->view("add_view",$data);
        $this->teamdata->AddTeam();
    if (isset($_POST['submit']))
      {
        $usernames = $this->input->post ('username') ; 
        $teamid=mysql_insert_id();
        foreach ($usernames as $user) 
        { 
          $newrows=array('teamid' => $teamid,'userid' => $user);
          $this->teamdata->AddUsers($newrows);
        } 
        redirect('teams/List_Teams');
      }

    }

    public function Team_Users($id)
    { 
        $this->load->model('teamdata');
        $users_ids['record']=$this->teamdata->GetUsersIds($id);
        $allusers['users']=$this->teamdata->GetTeamUsers($users_ids['record']);
        $this->load->view("listusers_view",$allusers);

    }

    public function List_Teams()
    {
    	  $this->load->model('teamdata');
        $data['result']=$this->teamdata->ListTeams();
        $this->load->view("list_view",$data);
    }

    public function Delete_Team($id)
    {
		 if (empty($id))
		  {
		     echo "This record not found in Team table";
		   }
		 else
		   {    
    			$this->load->model('teamdata');
    			$this->teamdata->DeleteTeam($id);
          redirect('teams/List_Teams');
		   }
    }
    
    public function Edit_Team($id)
    {   
       $this->load->model('teamdata');
       $data['result']=$this->teamdata->GetTeamData($id);
       $data['users']=$this->teamdata->userdata();
       $users_ids['record']=$this->teamdata->GetUsersIds($id);
       $data['oldusers']=$this->teamdata->GetTeamUsers($users_ids['record']);
       // var_dump($data['oldusers']);
       $this->load->view("edit_view",$data);

       if (isset($_POST['submit'])) 
       {    
            $this->teamdata->DeleteUsersInTeam($id);
            $this->load->model('teamdata');
            $newRow = array(
           'description' =>$this->input->post('desc'),
           'name' =>$this->input->post('tname')); 
            $usernames = $this->input->post ('username') ; 
            foreach ($usernames as $user) 
            { 
              $newrows=array('teamid' => $id,'userid' => $user);
              $this->teamdata->AddUsers($newrows);
            } 
           $this->teamdata->EditTeam($id,$newRow); 

          redirect('teams/List_Teams');
       }
    }




}
