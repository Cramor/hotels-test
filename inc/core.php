<?php
function get_com($link, $parent_id, $lvl)
{
    $result = mysqli_query($link, "SELECT * FROM comments WHERE parent_id = ".$parent_id." ORDER BY id ");
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $margin_lvl = 50 * $lvl;
        echo('<div class="media" style="margin-left: '.$margin_lvl.'px;">
    <div class="media-left media-middle">
    </div>
    <div class="media-body">
        <h4 class="media-heading"><strong>' . $row["name"] . '</strong> ' . $row["comment_date"] . '<a class="btn btn-default" href="comments.php?delete=' . $row["id"] . '" role="button">Удалить</a></h4>
        <div class="panel panel-default">
            <div class="panel-body">
    ' . $row["comment"] . '<br />
    <form method="post" action="Add_comment.php">
        <div class="form-group hide_form" id="add_form_' . $row["id"] . '" >
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" placeholder="Имя" name="name">
            <label for="comment">Комментарий</label>
            <textarea name="comment" class="form-control" id="comment" placeholder="Имя">
            </textarea>
            <input type = hidden name="parent_id" value="'.$row["id"].'" >
        <button type="submit" class="btn btn-default">Отправить</button>
        </div>
    </form>
    <a href="#" class="click_form" id="answer" data-answer="' . $row["id"] . '">Ответить</a>' . '
    </div>
        </div>
    </div>
</div>');
        get_com($link, $row["id"], $lvl+1);
    }

    mysqli_free_result($result);
}