<?php


function findUser($id)
{
    for($i=0;$i<count($_SESSION['userlist']);$i++)
    {
        if($_SESSION['userlist'][$i]["user_id"]==$id)
        {
            return true;

        }
    }
return false;
}

function findUserDetail($id)
{
    for($i=0;$i<count($_SESSION['userlist']);$i++)
    {
        if($_SESSION['userlist'][$i]["user_id"]==$id)
        {
            return $_SESSION['userlist'][$i];
        }
    }
return false;

}
function appendUserId($id1,$id2)
{
    $id1.=$id2;

    return $id1;
}
?>