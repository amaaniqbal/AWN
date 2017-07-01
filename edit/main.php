<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        ADMIN Dashboard
      
    </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href="http://localhost/Admin/assets/css/toolkit-inverse.css" rel="stylesheet">
    <link href="http://localhost/Admin/assets/css/application.css" rel="stylesheet">

  </head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 sidebar">
        <nav class="sidebar-nav">
          <div class="sidebar-header">
            <button class="nav-toggler nav-toggler-sm sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-sm">
              <span class="sr-only">Toggle nav</span>
            </button>
            <a class="sidebar-brand img-responsive" href="../index.html">
              <span class="icon icon-leaf sidebar-brand-icon"></span>
            </a>
          </div>

          <div class="collapse nav-toggleable-sm" id="nav-toggleable-sm">
            <form class="sidebar-form">
              <input class="form-control" type="text" placeholder="Search...">
              <button type="submit" class="btn-link">
                <span class="icon icon-magnifying-glass"></span>
              </button>
            </form>
            <ul class="nav nav-pills nav-stacked">
				<li class="nav-header">Dashboard</li>
				<li>
					<a href="admin.html">Overview</a>
				</li>
				<li>
					<a href="add-article.html">Add Article</a>
				</li>
				<li class="active">
					<a href="#">Edit Article</a>
				</li>
				<li >
					<a href="delete-article.html">Delete Article</a>
				</li>
				<li>
					<a href="#">Add ADMIN</a>
				</li>
				<li>
					<a href="#">Remove ADMIN</a>
				</li>
				<li >

				<li class="nav-header">More</li>
							
				<li>
					<a href="#">Approve / Reject Comment</a>
				</li>
				<li>
					<a href="#">Reply to a Comment</a>
				</li>
				<li >
					<a href="Admin/order-history/index.html">Subscriber History</a>
				</li>
			</ul>
            <hr class="visible-xs m-t">
          </div>
        </nav>
      </div>
      <div class="col-sm-9 content">
        <div class="dashhead">
          <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">Dashboards</h6>
            <h2 class="dashhead-title">EDIT ARTICLES</h2>
          </div>

          <div class="btn-toolbar dashhead-toolbar">
            <div class="btn-toolbar-item input-with-icon">
              <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
              <span class="icon icon-calendar"></span>
            </div>
          </div>
        </div>

        <div class="flextable table-actions">
          <div class="flextable-item flextable-primary">
            <div class="btn-toolbar-item input-with-icon">
              <input type="text" class="form-control input-block" placeholder="Search articles">
              <span class="icon icon-magnifying-glass"></span>
            </div>
          </div>
          <div class="flextable-item">
            <div class="btn-group">
              <button type="button" class="btn btn-primary-outline">
                <span class="icon icon-pencil"></span>
              </button>
              <button type="button" class="btn btn-primary-outline">
                <span class="icon icon-erase"></span>
              </button>
            </div>
          </div>
        </div>

        <div id="here">
          
        </div>
          
        <div class="text-center" id="tabs">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="links active"><a href="#">1</a></li>
            <li class="links"><a href="#">2</a></li>
            <li class="links"><a href="#">3</a></li>
            <li class="links"><a href="#">4</a></li>
            <li class="links"><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    <script src="http://localhost/Admin/assets/js/jquery.min.js"></script>
    <script src="http://localhost/Admin/assets/js/chart.js"></script>
    <script src="http://localhost/Admin/assets/js/tablesorter.min.js"></script>
    <script src="http://localhost/Admin/assets/js/toolkit.js"></script>
    <script src="http://localhost/Admin/assets/js/application.js"></script>
    <script>
        var selector = '.links';

        $(selector).on('click', function(){
            $(selector).removeClass('active');
            $(this).addClass('active');
            var value = $(this).text();
            $.get("xyz.php",{pagination_page_value:value}).done(function(data){
                $('#here').html(data);
            }).fail(function(){
                alert("Couldn't Return Value");//Something bad happened.
            });
        });
    </script>
  </body>
</html>