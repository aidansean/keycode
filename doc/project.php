<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/keycode" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=keycode" ;
$project = new project_object("keycode", "Key decoder", "https://github.com/aidansean/keycode", "http://aidansean.com/projects/?tag=keycode", "keycode/images/project.jpg", "keycode/images/project_bw.jpg", "This project tells the user the keycode associated with a given key in a given browser.", "Tools,Web design", "CSS,HTML,JavaScript") ;
?>