<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="http://localhost/CI_SDLC/css/team.css" rel="stylesheet" type="text/css">
  <title>Add</title>
</head>
<body>
    <div id="menu">
        <ul>
          <li><a href="<?php echo base_url() ;?>teams/Add_Team/">Add team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/Edit_Team/">Edit team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/Delete_Team/">Delete team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/List_Teams/">List teams</a></li>
        </ul>
    </div>

    <div id="add_form">
      <?php echo form_open('teams/Add_Team/'); ?>
      <?php echo form_label('Team id:') ?>
      <?php echo form_input(array('id' => 'teamid','value' =>'','name' => 'teamid','placeholder' => 'The team id' ))?>
      <?php echo form_label('User id :') ?>
      <?php echo form_input(array('id' => 'userid','value' =>'','name' => 'userid','placeholder' => 'The user id' ))?>
     
      <?php echo form_submit(array('name' => 'submit', 'value' => 'Submit')); ?>
      <?php echo form_close(); ?>

    </div>


</body>

