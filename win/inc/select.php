
<?php
$sql ='SELECT * FROM users ORDER BY RAND() LIMIT 1';
$resalut=mysqli_query($conn,$sql);
$users=mysqli_fetch_all($resalut,MYSQLI_ASSOC);