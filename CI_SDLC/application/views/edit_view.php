<html>
<head>
	<title>test</title>
	<link href="http://localhost/CI_SDLC/css/team.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Edit Team</h1>
<div>
 <?php  foreach ($result as $value) 
   {?> 
     <?php echo form_open('teams/Edit_Team/'.$value['id']);?>
     <?php echo form_label('Description :')?>
     <?php echo form_input(array('name' => 'desc','value' =>$value['description']))?>
     <?php echo form_label('Team Name :')?>
     <?php echo form_input(array('value' =>$value['name'],'name' => 'tname'))?>
     <?php echo form_label('Old users in the team :') ?>
    <!--  <?php 
          $i=0; 
         foreach($oldusers as $row )
          {
            $names[$i]= $row['full_name'];
            $i++;
          } 
         var_dump($names);
         echo form_multiselect('username[]', $names);
          echo "<br>";
      ?> -->
     <?php echo form_label('Add user to the team :') ?>
     <?php  
         $i=0; 
         //print_r($oldusers) ; die ; 
         foreach($oldusers as $row )
          { 
            
            $names[$i]= $row['id'];
            $i++;

          } 
        //  die;
         //var_dump($names);
         foreach($users as $row )
          {
            $options [$row->id] = $row->full_name;
          } 
       
          echo form_multiselect('username[]', $options,$names);
      ?>
     <?php echo form_submit(array('name' => 'submit', 'value' => 'Submit')); ?>
 	<?php } 
 	echo form_close(); ?>
 </div>

</body>
</html>

