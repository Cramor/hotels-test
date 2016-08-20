<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1></h1>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.1.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
t<script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "comments");

if (isset ($_GET["delete"] )) {
   $id = $_GET["delete"];
    mysqli_query($link, "DELETE FROM comments WHERE id=$id");

}

$result = mysqli_query($link, "SELECT * FROM comments ORDER BY id");
while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
   echo ('<div class="media">
    <div class="media-left media-middle">
    </div>
    <div class="media-body">
        <h4 class="media-heading"><strong>'.$row["name"].'</strong> '.$row["comment_date"].'<a class="btn btn-default" href="comments.php?delete='.$row["id"].'" role="button">УДОЛИ</a></h4>
        <div class="panel panel-default">
            <div class="panel-body">
    '.$row["comment"].'
    </div>
        </div>
    </div>
</div>');
}

mysqli_free_result($result);
?>
