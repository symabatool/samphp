<?php
      $num=$_POST['number'];
      if($num<=10)
      {
        for ($i=1; $i<=10; $i++)
        {
          $mul=$num*$i;
          echo "$mul <br>";
         }
      }
        else
        {
        echo "Invalid entry";
         }
      
      
      ?>
       
       <form action="" method="POST">
<input type="text" name="number" size="10" >   <br>
<input type="submit" name="table" value="get table"> 
</form>
      
       
