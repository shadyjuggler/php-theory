<?php

$mb_string = "复制";
var_dump(mb_strlen($mb_string));

$url = "https://google.com/path?key=value&special=@#$%";
var_dump(urlencode($url));

$html = '<p> This is "quoted" text & a <a href="#">link</a>.</p>';

echo htmlentities($html);

echo base64_encode("Hello World!");