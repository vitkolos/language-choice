<?php
include("src/db.php");
echo file_get_contents("assets/template.html");
var_dump(sql("SELECT * FROM hello"));
