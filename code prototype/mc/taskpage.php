<!DOCTYPE html>
<html>
<link rel ="stylesheet" href="task.css">
<?php
$data = $_POST['lname'];
$fp = fopen("savedData.txt", "a");

if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
    fwrite($fp, $data);
    fflush($fp);            // flush output before releasing the lock
    flock($fp, LOCK_UN);    // release the lock
} else {
    echo "Couldn't write name to file";
}

fclose($fp);
?>

<body> 
<h1> Task 1/4</h1>
<p> Please use pen and paper to <strong>write down</strong> the following task: </p>
<br>
<p> Book a flight for 2 people from Amsterdam Airport to Bangkok on December 20th, 2021 with a return flight on December 25th, 2021. Book the <strong>cheapest</strong> flight with <strong>RyanAir</strong>.
</p>


<div class = "startbutton">
    <div class="center">
        <form action="searchpage.html">
            <input type="submit" value="Go to task 1"/>
        </form>
    </div>
</div>


</body>
</html>
