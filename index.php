<?php

    $DS = DIRECTORY_SEPARATOR;
    require_once $_SERVER["DOCUMENT_ROOT"].$DS."serverside".$DS."libs".$DS."xtemplate".$DS."xtemplate.class.php";

    $template = new XTemplate($_SERVER["DOCUMENT_ROOT"].$DS."serverside".$DS."templates".$DS."application.html");
    $template -> assign("INITIAL_DATA", "'test'");
    $template -> parse("main");
    $template -> out("main");

?>