<?php
$settings['text_from_file'] = 'http://danasiapacific.org/testimonials/01_testimonials.txt';
$settings['display_type'] = 1;
$settings['allow_otf'] = 1;


if ($settings['allow_otf'] && isset($_GET['type']))
{
	$type = intval($_GET['type']);
}
else
{
	$type = $settings['display_type'];
}

if ($settings['text_from_file'])
{
	$settings['quotes'] = file($settings['text_from_file']);
}

if (count($settings['quotes']))
{
	$txt = $settings['quotes'][array_rand($settings['quotes'])];
}
else
{
	$txr = 'No text to choose from';
}

if ($type)
{
    $txt = nl2br(trim($txt));
    $txt = str_replace(array("\n","\r"),'',$txt);
	echo 'document.write(\''.addslashes($txt).'\')';
}
else
{
	echo $txt;
}
?>
