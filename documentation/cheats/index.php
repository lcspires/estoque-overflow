<?php

$folder = __DIR__ . "/examples";

var_dump([
    filetype($folder),
    mime_content_type($folder)
]);