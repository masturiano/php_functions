<?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.
if (file_exists('xml.xml'))
{
    $xml = simplexml_load_file('xml.xml');
}
else 
{
    exit('Failed to open test.xml.');
} 
echo $xml->title;
echo "<br/>";
echo $xml->database->name;
//print_r($xml);
?>