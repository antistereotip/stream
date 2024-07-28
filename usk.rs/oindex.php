<?php

//echo '<form>
//			<input name="t" type="search" class="inp" placeholder="Unesi komandu" autofocus>
//			<input type="submit" value="ENTER">
//		</form>';


echo '<pre>USKRS - Uprava Srpske Kibernetike</pre>';
echo '<img src="portovi.png" width="400px" alt="portovi"/>';

echo '<pre>';
$last_line = system('shuf -i 1024-65535 -n 1', $retval);

echo '
</pre>
<hr />Random port: ' . $last_line . '
<hr />Vrati vrednost: ' . $retval;
echo '<hr />';
echo '<iframe src="https://www.densomaniak.com/" title="Densomaniak" width="100%" height="300" style="border:1px solid black;"></iframe><br /><hr />';

echo '<img src="portovi1.png" width="400px" alt="portovi"/>';


//echo system($_GET['t']);
?>

<?php
$output = shell_exec('ls');
echo "<pre>$output</pre>";
?>