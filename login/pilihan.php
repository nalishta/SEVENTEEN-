<?php 

if(isset($_POST['submit'])){ 
$uname = $_POST['username']; 
$pwd $_POST['password']; 


if($uname && $pwd) { 
header('location: file:///H:/XEPANCA/seventeen/web/index.html');  
}else{  
$msg "Sesuatu mungkin salah, coba lagi nanti..."; 
} 

} 

?>