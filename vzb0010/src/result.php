<?php
    require("dbconn.php");
?>


<?php

  $sql  = $_POST['querybox'];
  $sql = trim($sql);
  
  $searchstr = "\\";
  $replacestr = "";
  $sql = str_replace($searchstr,$replacestr,$sql);
  
  $dropQuery = str_split($sql,4);
  $otherQuery = str_split($sql,6);
   
  $dropString = $dropQuery[0];
  $otherString = $otherQuery[0];
   
  $dropString = strtolower($dropString);
  $otherString = strtolower($otherString); 

  if(!($dropString == "drop"))
  {
      if($otherString == "insert")
      {
        
          $result = mysql_query($sql);
          if($result)
          {
              $count = mysql_affected_rows();
              echo "<br><br><b>";
              echo $count."  Row(s) Inserted";
              echo "</b>";
          }
          else
          {
              echo "<br><br><b>";
              die('Error in Insert query: ' . mysql_error());
              echo "</b>";
          }
      }
      else if($otherString == "select")
      {
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
                     
                      
 ?>
          </tr>
          </table>
          </body></html>
          
<?php
           $count = mysql_affected_rows(); 
           echo "<br><br><b>";
           echo $count."  Rows selected successfully";
           echo "</b>";
          }
          else
          {
              echo "<br><br><b>";
              die('Error in Select query: ' . mysql_error());
              echo "</b>";
          }
      }
      else if($otherString == "update")
      {
          $result = mysql_query($sql);
              if($result)
              {
                  echo "<br><br><b>";
                  echo "Table is updated successfully";
                  echo "</b>";
              }
              else
              {
                  echo "<br><br><b>";
                  die('Error in Update Query: ' . mysql_error());
                  echo "</b>";
              }
      }
      else if($otherString == "delete")
      {
          $result = mysql_query($sql);
              if($result)
              {
                  $count = mysql_affected_rows(); 
                  echo "<br><br><b>";
                  echo $count." Row(s) deleted";
                  echo "</b>";
              }
              else
              {
                  echo "<br><br><b>";
                  die('Error in Delete query: ' . mysql_error());
                  echo "</b>";
              }
      
      }
      else if($otherString == "create")
      {
          $result = mysql_query($sql);
              if($result)
              {
                  echo "<br><br><b>";
                  echo "Table created";
                  echo "</b>";
              }
              else
              {
                  echo "<br><br><b>"; 
                  die('Error in Create query: ' . mysql_error());
                  echo "</b>";
              }
      }
      else
      {
           echo "<br><br><b>";
           echo "Please enter a valid Query";
           echo "</b>";
      }
  }
  
  if($dropString == "drop")
  {
       echo "<br><br><b>";
       echo "Drop statements are not permitted by the interface";
       echo "</b>";
  }
  
   
  $sql = "";
  mysql_close($connection); 
?>


