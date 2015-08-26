<?php
/**
* Converts a CSV file to a simple XML file
*
* @param string $file
* @param string $container
* @param string $rows
* @return string
*/

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
?>