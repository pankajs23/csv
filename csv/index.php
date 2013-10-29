<?php
$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;

        for ($c=0; $c < 5; $c++) {
            $d[$c][]=$data[$c] . "<br />\n";
        }
    }
    fclose($handle);
	
	
	$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";   
        $row++;
        for ($c=0; $c < $num; $c++) {
            $blackpowder = $data;
            $dynamit = implode(";", $blackpowder);
            $pieces = explode(";", $dynamit);
			
            $col1 = $pieces[0];
            $col2 = $pieces[1];
            $col3 = $pieces[2];
            $col4 = $pieces[3];
            $col5 = $pieces[5];
            
        }
    }
	//echo "<pre>";print_r($d);
}
}



$myfile = "test.csv"; 
if (!isset($_POST['submit'])) {
$f = fopen($myfile, 'r');
echo "<table>";
while (($line = fgetcsv($f)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}
fclose($f);
echo "\n</table>";

}


?>