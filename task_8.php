<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

  <body> 

		<form action="" method="post" id="unit-submit">
            	<input type="number" name="row" id="row" placeholder="Please enter row" />
                <input type="number" name="col" id="col" placeholder="Please enter column" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>
        <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php

        if ($_POST) {
            $roww = $_POST['row'];
            $coll = $_POST['col'];
            		    
            //echo " <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">";

                    for($row=1;$row<=$roww;$row++)
                    {
                        echo "<tr>";
                        for($col=1;$col<=$coll;$col++)
                        {
                        $total=$row+$col;
                        if($total%2==0)
                        {
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                        }
                        else
                        {
                        echo "<td height=30px width=30px bgcolor=#000000></td>";
                        }
                        }
                        echo "</tr>";
                    }
                
           
                 // echo  "</table>";
                }
                ?>      
		</table>
        
  </body>
  </html>