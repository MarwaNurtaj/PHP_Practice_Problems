<html>
    <head>
        <title>

        </title>

        <style>

            table,td,th{
                border : 2px solid black;
                border-collapse: collapse;
                text-align: center;
            } 

        </style>
    </head>

    <body>

    <?php
    $array_box = array (
          array(5,12,17,9,3),
          array(13,4,8,14,1),
          array(9,6,3,7,21)
          );
          ?>
        <center>
            
            <table border="2">
                <tr>
                    <td><?php echo $array_box[0][0]?></td>
                    <td><?php echo $array_box[0][1]?></td>
                    <td><?php echo $array_box[0][2]?></td>
                    <td><?php echo $array_box[0][3]?></td>
                    <td><?php echo $array_box[0][4]?></td>
                </tr>
                <tr>
                    <td><?php echo $array_box[1][0]?></td>
                    <td><?php echo $array_box[1][1]?></td>
                    <td><?php echo $array_box[1][2]?></td>
                    <td><?php echo $array_box[1][3]?></td>
                    <td><?php echo $array_box[1][4]?></td>
                </tr>
                <tr>
                    <td><?php echo $array_box[2][0]?></td>
                    <td><?php echo $array_box[2][1]?></td>
                    <td><?php echo $array_box[2][2]?></td>
                    <td><?php echo $array_box[2][3]?></td>
                    <td><?php echo $array_box[2][4]?></td>
                </tr>

            </table>
        </center>
        
    </body>
</html>