<?php
$data = $_POST['jsonString'];
$fp = fopen("savedData.txt", "a");

if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
    fwrite($fp, $data);
    fflush($fp);            // flush output before releasing the lock
    flock($fp, LOCK_UN);    // release the lock
} else {
}

fclose($fp);

?>