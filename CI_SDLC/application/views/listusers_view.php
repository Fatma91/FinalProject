<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1>List of user in this team</h1>
<table  class="table table-striped table table-hover table table-condensed">
  <tr>
    <th>
    User_Id
    </th>
    <th>
    User_Email
    </th>
    <th>
    User_Fullname
    </th>
    <th>
    User_Loginname
    </th>
    <th>
    User_password
    </th>
  </tr>
  <?php
   foreach($users as $user)
    {             
      echo "<tr>";    
      echo "<td> ".$user['id'] ."</td>"; 
      echo "<td>".$user['email'] ."</td>";
      echo "<td>".$user['full_name']."</td>";
      echo "<td>".$user['login_name'] ."</td>";
      echo "<td>".$user['password']."</td>";
      echo "</tr>";                            
    }
    echo "</table>";                               
  ?>
</body>
</html>