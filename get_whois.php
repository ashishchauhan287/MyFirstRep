<?php 

$whois = [];

// Open a Socket connection to our WHOIS server
$whoisSocket = fsockopen("whois.verisign-grs.com", 43);

// The data we're sending
$out = "helgesverre.com\r\n";

// Send the data
fwrite($whoisSocket, $out);

// grab the next 128 bytes until there ar eno more bytes to grab
while (!feof($whoisSocket)) {
    $whois[] = fgets($$whoisSocket, 128);
}

echo "<pre>";
echo implode("\n", $whois);
?>