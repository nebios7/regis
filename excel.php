<?php

/*******EDIT LINES 3-8*******/
$DB_Server = 'localhost'; //MySQL Server
$DB_Username = 'root'; //MySQL Username
$DB_Password = ''; //MySQL Password
$DB_DBName = 'regisku'; //MySQL Database Name
$DB_TBLName = 'teacher'; //MySQL Table Name
$filename = 'excelfilename'; //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/
//create MySQL connection
$sql = "Select * from $DB_TBLName";
$Connect = mysqli_connect($DB_Server, $DB_Username, $DB_Password) or die('could not connect to mysql');
//select database
$Db = mysqli_select_db($Connect, $DB_DBName);

if (!$Db) {
    die('Database selection failed: '.mysqli_error($Connect));
}

//execute query
$result = mysqli_query($Connect, $sql) or trigger_error(mysqli_error($conn));

$file_ending = 'xls';
//header info for browser
header('Content-Type: application/xls');
header("Content-Disposition: attachment; filename=$filename.xls");
header('Pragma: no-cache');
header('Expires: 0');
/*******Start of Formatting for Excel*******/
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysqli_num_rows($result); ++$i) {
    echo mysqli_fetch_field_direct($result, $i)->name."\t";
}
echo "\n";
//end of printing column names
//start while loop to get data
while ($row = mysql_fetch_row($result)) {
    $schema_insert = '';
    for ($j = 0; $j < mysqli_num_rows($result); ++$j) {
        if (!isset($row[$j])) {
            $schema_insert .= 'NULL'.$sep;
        } elseif ($row[$j] != '') {
            $schema_insert .= "$row[$j]".$sep;
        } else {
            $schema_insert .= ''.$sep;
        }
    }
    $schema_insert = str_replace($sep.'$', '', $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", ' ', $schema_insert);
    $schema_insert .= "\t";
    echo trim($schema_insert);
    echo "\n";
}
