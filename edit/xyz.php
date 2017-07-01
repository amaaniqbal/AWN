<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
        <link href="http://localhost/Admin/assets/css/toolkit-inverse.css" rel="stylesheet">
        <link href="http://localhost/Admin/assets/css/application.css" rel="stylesheet">
        
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
        ?>
            <div class="table-full">
                <div class="table-responsive">
                    <table class="table" data-sort="table">
                        <thead>
                            <tr>
                                <th>ARTICLE</th>
                                <th>PUBLISHER</th>
                                <th>HEADING</th>
                                <th>DATE</th>
                                <th>VIEWS</th>
                            </tr>
                        </thead>
                        <tbody>
        <?php
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
        
        <script type="text/javascript" src="http://localhost/Admin/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://localhost/Admin/assets/js/chart.js"></script>
        <script type="text/javascript" src="http://localhost/Admin/assets/js/tablesorter.min.js"></script>
        <script type="text/javascript" src="http://localhost/Admin/assets/js/toolkit.js"></script>
        <script type="text/javascript" src="http://localhost/Admin/assets/js/application.js"></script>
    </body>
</html>