<html>
<head><title>Random</title></head>
<body style="background-color: black;color: white;">
<h2><p>Number generated randomly is  <?php
    $choice = rand(1, 100);
    echo $choice;
?>.</p><p> And its square root is <?php
    echo round(sqrt($choice),4);
?>.</p></h2>
</body>
</html>