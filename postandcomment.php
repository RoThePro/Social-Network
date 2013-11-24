<?php
error_reporting(0);
include 'core/init.php';
include 'includes/header.php';
require('core/database/connect.php');

$name = $_POST['name'];
$post = $_POST['post'];
$submit = $_POST['submit'];
$id = $_POST['id'];

//if ($submit)
//{
//    if($name&&$post)
//    {
//        $insert=mysql_query("INSERT INTO post (name, post) VALUES ('$name', '$post')");
//    }
//    else
//    {
//        echo "Please fill out all the fields";
//    }
//}
?>
<script src="jquery-1.6.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
function get()
{
    var input= $('#post').val();
    $('#an').prepend(input);
}
</script>
<form action="postandcomment.php" method="post">
    <table>
        <tr><td colspan="2">Post: </td></tr>
        <tr><td colspan="2"><textarea name="post" id="post"></textarea></td></tr>
        <tr><td colspan="2"><input type="button" name="submit" value="Post" onclick="get()" /></td></tr>
    </table>
</form>
<div id="an" style="width:300px"></div>
<?php
//$getcommentquery = mysql_query("SELECT * FROM comment ORDER BY commentid DESC");
//$getquery = mysql_query("SELECT * FROM post ORDER BY id DESC");
//while($rows = mysql_fetch_assoc($getquery))
//{
//    $id = $rows['id'];
//    $name = $rows['name'];
//    $comment = $rows['post'];
    
    //$postid = $_POST['postid'];
    //$commentname = $_POST['commentname'];
    //$subcomment = $_POST['subcomment'];
    //$submitcomment = $_POST['submitcomment'];
    //
        //if ($submitcomment)
        //{
        //    if($subcomment)
        //    {
        //        $insert=mysql_query("INSERT INTO comment (postid, subcomment) VALUES ('$rows', '$subcomment')");
        //    }
        //    else
        //    {
        //        echo "Please enter a comment.";
        //    }
        //}
    
    //echo '<table border="0" style="border-width: 1px; border-color:#000000; border-style: solid;"><tr><td>'
    //. $name . '<br /><br />' . $post . '<br /><br /><hr>' .
    //'<form action="postandcomment.php" method="post"><textarea name="subcomment"></textarea></td></tr><br /><tr><td><input type="submit"
    //name="submitcomment" value="Comment" /><br /><br /></td></tr></table></form>';
    //while($rows2 = mysql_fetch_assoc($getcommentquery))
    //{
    //    $commentid = $rows2['commentid'];
    //    $subcomment = $rows2['subcomment'];
    //    
    //    echo '<table border="0" style="border-width: 1px; border-color:#000000; border-style: solid;"><tr><td><br /><br />' . $subcomment . '</table>';
    //}
    
//    echo '<hr width="500px" />' . '<br />';
//    
//;}
include 'includes/footer.php'; ?>
    