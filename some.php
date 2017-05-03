<?php 
    
    session_start();
    $_SESSION['newSession'] = null;
    header('Location: index.php'); 
    
?>