<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "
     <tr>
         <td>{$row['Equipo']}</td>
         <td>{$row['marca']}</td>
         <td>{$row['modelo']}</td>
         <td>{$row['ip_address']}</td>
         <td><a class=\"btn btn-danger\" id='elimina' href='#!' data-id='{$row['m']}'><span class=\"glyphicon glyphicon-remove\"></span></a></td>
    </tr>";
?>