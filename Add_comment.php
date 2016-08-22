<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "comments");
if (isset($_POST["comment"]) and isset($_POST["name"])){    //отправлен комментарий
    $add_comment=$_POST["comment"];
    $add_name=$_POST["name"];
    echo htmlspecialchars($add_comment);
    echo htmlspecialchars($add_name);
        if (isset($_POST["parent_id"]))
            $res=mysqli_query($link,"INSERT INTO comments (parent_id, comment_date, name, comment)
    values ('".$_POST["parent_id"]."',NOW(),'".$add_name."','".$add_comment."')");
        else $res=mysqli_query($link,"INSERT INTO comments (comment_date, name, comment)
    values (NOW(),'".$add_name."','".$add_comment."')");
    }
    header("Location: comments.php");

