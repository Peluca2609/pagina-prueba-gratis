<?php
$edad=$_POST['edad'];
if ([$edad] > "65") {
    echo "<script>
                alert('ola beto');
                window.location= 'index.html'
    </script>";
} else {
  
  header('Location: index.html');
  // code...
}
?>
