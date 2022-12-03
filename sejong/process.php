<?php
    $boo = rand(1, 9);
    $na = $_POST['txtStuKorName'];
    $no = $_POST['txtSuhumNo'];
    $nocode = explode( ' ', $no) [0];
    $nonum = explode( ' ', $no) [1];
    if ($nocode == 'pass' or $nocode == 'fail'){ $no = $nonum; }
    if ($boo <= 2 or $nocode == 'pass'){ 
        echo '<form method="post" name="choice" action="pass.php">';
    } else {
        echo '<form method="post" name="choice" action="fail.php">';
    }
    echo '<input type="hidden" name="txtStuKorName" value="'.$na.'">';
    echo '<input type="hidden" name="txtSuhumNo" value="'.$no.'">';
    echo '</form>'
?>

<script>
var requiredfrom = "home.php";
if (document.referrer.indexOf(requiredfrom) == -1) {
	window.location="/error/403.html";
}
</script>

<script>document.choice.submit();</script>