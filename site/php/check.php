<?php
if ($_SESSION['auth']== 1){
    echo ('WORK');
}else{
    header( 'Location: index.html', true, 303);    
}
?>