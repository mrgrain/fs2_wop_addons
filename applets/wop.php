<?php
$template = '<script type="text/javascript">
    var css = document.createElement("link");
    css.type = "text/css";
    css.rel = "stylesheet";
    css.href = "/netzwerkbutton/button.css";
    document.getElementsByTagName("head")[0].appendChild(css);
</script>'.PHP_EOL;
$template .= '<script type="text/javascript" src="/netzwerkbutton/button.js"></script>'.PHP_EOL;
$template .= file_get_contents("/var/www/inc/netzwerkpur.inc.php");
?>
