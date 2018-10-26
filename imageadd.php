<?php
echo "working till here" ;
session_start();
if(isset($_POST)){
    if(isset($_POST['submit'])){
        echo "POst call";
        move_uploaded_file($_FILES['file']['tmp_name'],"profile/".$_FILES['file']['name']);
        $_SESSION['image']=$_FILES['file']['name'];
        header("Location: index.php");
    }
}

?>