<?php
session_start();
if(isset($_SESSION['username']))
{
echo "helllkho";
}
else
{
echo "destroyed";
}
?>