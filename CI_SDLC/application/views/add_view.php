<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link href="http://localhost/CI_SDLC/css/team.css" rel="stylesheet" type="text/css">
	<title>Add</title>
</head>
<body>
  <!--   <div id="menu">
        <ul>
          <li><a href="<?php echo base_url() ;?>teams/Add_Team/">Add team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/Edit_Team/">Edit team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/Delete_Team/">Delete team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/List_Teams/">List teams</a></li>
        </ul>
    </div> -->
    <h1>Add Team</h1>
    <div id="add_form">
      <?php echo form_open('teams/Add_Team/'); ?>
      <?php echo form_label('Description :') ?>
      <?php echo form_input(array('id' => 'desc','value' =>'','name' => 'desc','placeholder' => 'The team description' ))?>
      <?php echo form_label('Team Name :') ?>
      <?php echo form_input(array('id' => 'tname','value' =>'','name' => 'tname','placeholder' => 'The team name' ))?>
      <?php echo form_label('Add user to the team :') ?>
      <?php  
         
         // $ids=array();
         foreach($result as $row )
          {
            $options [$row->id] = $row->full_name;
          } 
       
          echo form_multiselect('username[]', $options);
      ?>
      <?php echo form_submit(array('name' => 'submit', 'value' => 'Submit')); ?>
      <?php echo form_close(); ?>

    </div>


</body>

