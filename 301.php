<?php

header("HTTP/1.1 301 Moved Permanently");
header("Location: http://wiki.mid2bms.net/${_SERVER['QUERY_STRING']}");

exit;


?>


