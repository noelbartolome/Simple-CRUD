<?php
	$xml = 'data.xml';
	if (file_exists($xml))
	{
		header('Content-Description: File Transfer');
		header('Content-Disposition: attachment; filename=data_export.xml');
		readfile($xml);
		exit;
	}
?>