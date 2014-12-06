<?php
    require("dbconn.php");
?>

<html>
<?php

  $sql  = "select * from Customers";
  $sql = trim($sql);
$result = mysql_query($sql);


if($result)
          {
                $fieldnum = mysql_num_fields($result);
                
?>          
          <html><body>
          <table border="1">
          <tr>
 <?php
                  $i = 0;  
               
                  while ($i < $fieldnum)
                  {                     
                        $fieldname = mysql_field_name($result,$i);
                                                
                        echo "<td><center><b>";
                        echo $fieldname;
                        echo "</b></center></td>";               
                        $i++;
                  }
?>                  
          </tr>
          <tr> 
<?php>          
                  $j = 0;
                  
                      while ($row = mysql_fetch_array($result, MYSQL_NUM)) 
                      {
                           while ($j < $fieldnum)
                           {
                               echo "<td><center>";
                               echo $row[$j];
                               echo "</center></td>";
                               $j++;
                           }
                           echo "<tr>";
                           $j = 0;
                      }
}                     
                      
 ?>
          </tr>
          </table>
          </body></html>











