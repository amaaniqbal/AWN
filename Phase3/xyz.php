<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
        <link href="http://localhost/toolkit-inverse.css" rel="stylesheet">
        <link href="http://localhost/application.css" rel="stylesheet">
        
        <style>
            
        </style>
        
    </head>
    <body>
        <?php

            $link = mysqli_connect("localhost","root","","admin");

            if(mysqli_connect_error()) {

                die("There was an error connecting to the database");

            }
            
            $var = (($_GET["pagination_page_value"]-1)*20);  
          
            $query = 'SELECT article_id, publisher, heading, date, views FROM admin LIMIT 20 OFFSET '.$var;

            $result=mysqli_query($link,$query);

            if ( false==$result ) {
              printf("error: %s\n", mysqli_error($link));
            }

            echo '<div class="table-full" id="table1"><div class="table-responsive"><table class="table" data-sort="table">';
            echo '<thead><tr><th>ARTICLE</th><th>PUBLISHER</th><th>HEADING</th><th>DATE</th><th>VIEWS</th></tr></thead><tbody>';
            while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                  echo '<tr><td><a href="#">' ."{$row[0]} "."</a></td>
                        <td>" . " {$row[1]} </td> ".
                       "<td>" . " {$row[2]} </td> ".
                       '<td style="min-width:88px">' . " {$row[3]} </td> ".
                       "<td>" . " {$row[4]} </td></tr> ";
            }
            echo "</tbody></table></div></div>";

            mysqli_close($link);
        ?>
        
        <script src="http://localhost/Admin/assets/js/jquery.min.js"></script>
        <script src="http://localhost/Admin/assets/js/chart.js"></script>
        <script src="http://localhost/Admin/assets/js/tablesorter.min.js"></script>
        <script src="http://localhost/Admin/assets/js/toolkit.js"></script>
        <script src="http://localhost/Admin/assets/js/application.js"></script>
    </body>
</html>