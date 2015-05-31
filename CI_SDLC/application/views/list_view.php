<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1>List of teams</h1>
<table  class="table table-striped table table-hover table table-condensed">
  <tr>
    <th>
    Team_Id
    </th>
    <th>
    Team_Description
    </th>
    <th>
    Team_Name
    </th>
    <th>
    Edit Team
    </th>
    <th>
    Delete Team
    </th>
    <th>
   Users In This Team
    </th>
  </tr>
  <?php
   foreach($result as $team)
    {  
               
      echo "<tr>";    
      echo "<td> ".$team->id ."</td>"; 
      echo "<td>".$team->name ."</td>";
      echo "<td>".$team->description ."</td>";
      echo "<td>". anchor(base_url().'teams/Edit_Team/'.$team->id,'Edit') ."</td>";
      echo "<td>". anchor(base_url().'teams/Delete_Team/'.$team->id,'Delete') ."</td>";
      echo "<td>". anchor(base_url().'teams/Team_Users/'.$team->id,'Users IN This Team') ."</td>";
      echo "</tr>";                            
    }
    echo "</table>";                               
  ?>
</body>
</html>