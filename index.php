<?php

if ( extension_loaded('pdo_sqlite') ) {
    echo "The pdo_sqlite extension is loaded";
}
else {
    echo "The pdo_sqlite extension is NOT loaded";
}

?>
