<?php
//determina si una vaiable esta bin definia  y no es nula
if(isset($_POST)){
    echo $_POST['username'];
    echo '<br>';
    echo $_POST['password'];
}

?>