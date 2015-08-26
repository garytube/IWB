<?php
ini_set("display_errors", true);

$iitc = "";
$newvar = "";

//holt sich die daten per URL
$data = $_GET['iitc'];
// legt die datei fest
$file = "data.txt"; 

//prefix für XML
$prefix ="id,portals,resist_portals,resist_level,resist_ap,entlight_portals,entlight_level,entlight_ap,datetime";

// spaltet die Zeile in der URL -> index.php?data=wert1|wert2|wert3
// anstelle von echo soll das aber per ' $neueVar."\n" ' gespeichert werden
// damit man das mit dem $prefix zusammen in eine datei schreiben kann

$exploded =(explode('|', $data));
        for($i = 0; $i < count($exploded)-1; $i++){
        $newvar .= ("$exploded[$i]"."\n");
                }

// pack alle daten zusammen
$csvData = $prefix."\n".$newvar;
// schreibe alles in eine datei
$fp = fopen($file, "w") or die("Couldn't open $file for writing!");
fwrite($fp, $csvData ) or die("Couldn't write values to file!"); 
fclose($fp);




error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", true);

function csv2xml($file, $container = 'data', $rows = 'row')
{
	$r = "<{$container}>\n";
	$row = 0;
	$cols = 0;
	$titles = array();
	
	$handle = @fopen($file, 'r');
	if (!$handle) return $handle;
	
	while (($data = fgetcsv($handle, 1000, ',')) !== FALSE)
	{
		if ($row > 0) $r .= "\t<{$rows}>\n";
		if (!$cols) $cols = count($data);
		for ($i = 0; ($i < $cols) && (strlen($data[$i]) > 0); $i++)
		{
			if ($row == 0)
			{
				$titles[$i] = $data[$i];
				continue;
			}
			
			$r .= "\t\t<{$titles[$i]}>";
			$r .= $data[$i];
			$r .= "</{$titles[$i]}>\n";
		}
		if ($row > 0) $r .= "\t</{$rows}>\n";
		$row++;
	}
	fclose($handle);
	$r .= "</{$container}>";
	
	return $r;
}
$xml = csv2xml('data.txt', 'data', 'area');

$xmlfile = @fopen('output.xml', 'wb') or die('Could not open XML file for writing');
fwrite($xmlfile, $xml) or die('Could not write string to XML file');
fclose($xmlfile);
$saving = $_REQUEST['saving'];
 header("location: /IWB");

?>