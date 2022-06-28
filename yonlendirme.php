<?php      
    $host='localhost';
    $user='root';
    $password='12345678';
    $db='denemesitesi';
    
    $con = mysqli_connect($host, $user, $password, $db);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   
    
    header("Location: ../admin/production/login.php");
           

        
      
         
            
          
?>  