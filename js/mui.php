<?php
require 'conect.php';
$qu=$pdo->query('SELECT * FROM `users`');
while($row = $qu->fetch(PDO::FETCH_OBJ)){
    
    
    echo'<p>'.$row->email.'</p>';
    
    


}
?>