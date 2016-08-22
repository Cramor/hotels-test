<?php
include("inc/core.php");
?>
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
    <link href="css/comments.css" rel="stylesheet">

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
<script src="js/bootstrap.min.js"></script>
<script src="js/comments.js"></script>

</body>




</html>

<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "comments");

if (isset ($_GET["delete"] )) {
   $id = $_GET["delete"];
    mysqli_query($link, "DELETE FROM comments WHERE id=$id");

}

get_com($link, 0, 0);
?>
<form method="post" action="Add_comment.php">
    <div class="form-group" id="add_form">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name" placeholder="Имя" name="name">
        <label for="comment">Комментарий</label>
        <textarea name="comment" class="form-control" id="comment" placeholder="Имя">
        </textarea>
    <button type="submit" class="btn btn-default">Отправить</button>
    </div>
</form>



