<?php require '../dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MongoDB AJAX Pagination with Search and Sort | by Carlo Fontanos</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="override">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">MongoDB Example</a>
                </div>
            </div>
        </nav>
    </div>
 
<div class="container">
    <form class = "post-list">
        <input type = "hidden" value = "" />
    </form>
   
    <article class="navbar-form navbar-left ml-b">
        <div class="form-group">
            <label>Per Page: </label>
            <select class="form-control post_max">
                <option value="40">40</option>
                <option value="80">80</option>
                <option value="160">160</option>
            </select>
            <label>Search Keyword: </label>
            <input type="text" class="form-control post_search_text" placeholder="Enter a keyword">
        </div>
        <input type = "submit" value = "Filter" class = "btn btn-primary post_search_submit" />
    </article>
   
    <br class = "clear" />
   
    <div class = "wave-box-wrapper">
        <div class = "wave-box"></div>
        <table class = "table table-striped table-post-list no-margin">
            <thead>
                <tr>
                    <th id = "name" class = "active"><a href = "#">Name</a></th>
                    <th id = "price"><a href = "#">Price</a></th>
                    <th id = "status"><a href = "#">Status</a></th>
                    <th id = "date"><a href = "#">Date</a></th>
                    <th id = "quantity"><a href = "#">Quantity</a></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class = "pagination-container"></tbody>
        </table>
       
        <div class = "pagination-nav"></div>
    </div>
</div>

<footer class="m-t">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span class="pull-right">Copyright &copy <a href="https://carlofontanos.com" target="_blank">www.carlofontanos.com</a>; <?php echo date('Y'); ?></span>
                </div>
            </div>
    </footer>
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>