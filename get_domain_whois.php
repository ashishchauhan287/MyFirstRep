<?php
// Add Domain name that you want to find
$domainname = "webhostworld.in";

// WHOIS server
$server = "whois.registry.in";
$port=43;

if(($whoisinfo = fsockopen($server,$port)) == true)
	{
		$output = "";
		fputs($whoisinfo,"$domainname\r\n");
		while(!feof($whoisinfo)) 
			$output .= fgets($whoisinfo,128); 
		fclose($whoisinfo);
	}

echo "<pre>" . $output . "</pre>";

/*

TLD	Type	Country	WHOIS Server
com			whois.crsnic.net
net			whois.crsnic.net
org			whois.pir.org
edu			whois.crsnic.net
biz			whois.neulevel.biz
info			whois.afilias.info
us			whois.nic.us
uk			whois.nic.uk
ca			whois.cira.ca
de			whois.nic.de
ws			whois.nic.ws
au			whois.ausregistry.net.au
nu			whois.nic.nu
in			whois.registry.in
tel			whois.nic.tel
ie			whois.iedr.ie
tw			whois.twnic.net.tw
tv			whois.nic.tv
ch			whois.nic.ch
eu			whois.eu
it			whois.nic.it
cn			whois.cnnic.net.cn
mobi			whois.dotmobiregistry.net
cc			whois.nic.cc
asia			whois.nic.asia
pro			whois.registrypro.pro
hk			whois.hknic.net.hk
me			whois.meregistry.net
be			whois.dns.be
se			whois.nic.se
ca			whois.cira.ca
nz			whois.domainz.net.nz
nl			whois.sidn.nl
ventures			whois.donuts.co
singles			whois.donuts.co
bike			whois.donuts.co
holdings			whois.donuts.co
plumbing			whois.donuts.co
guru			whois.donuts.co
clothing			whois.donuts.co
camera			whois.donuts.co
equipment			whois.donuts.co
estate			whois.donuts.co
gallery			whois.donuts.co
graphics			whois.donuts.co
lighting			whois.donuts.co
photography			whois.donuts.co
contractors			whois.donuts.co
land			whois.donuts.co
technology			whois.donuts.co
construction			whois.donuts.co
directory			whois.donuts.co
kitchen			whois.donuts.co
today			whois.donuts.co
diamonds			whois.donuts.co
enterprises			whois.donuts.co
tips			whois.donuts.co
voyage			whois.donuts.co
shoes			whois.donuts.co
careers			whois.donuts.co
photos			whois.donuts.co
recipes			whois.donuts.co
limo			whois.donuts.co
domains			whois.donuts.co
cab			whois.donuts.co
company			whois.donuts.co
computer			whois.donuts.co
center			whois.donuts.co
systems			whois.donuts.co
academy			whois.donuts.co
management			whois.donuts.co
training			whois.donuts.co
solutions			whois.donuts.co
support			whois.donuts.co
builders			whois.donuts.co
email			whois.donuts.co
education			whois.donuts.co
institute			whois.donuts.co
repair			whois.donuts.co
camp			whois.donuts.co
glass			whois.donuts.co
solar			whois.donuts.co
coffee			whois.donuts.co
international			whois.donuts.co
house			whois.donuts.co
florist			whois.donuts.co
holiday			whois.donuts.co
marketing			whois.donuts.co
viajes			whois.donuts.co
farm			whois.donuts.co
codes			whois.donuts.co
cheap			whois.donuts.co
zone			whois.donuts.co
agency			whois.donuts.co
bargains			whois.donuts.co
boutique			whois.donuts.co
tienda			whois.donuts.co
watch			whois.donuts.co
works			whois.donuts.co
cool			whois.donuts.co
expert			whois.donuts.co
menu			whois.nic.menu
club			whois.nic.club
photo			whois.uniregistry.net
gift			whois.uniregistry.net
guitars			whois.uniregistry.net
pics			whois.uniregistry.net
link			whois.uniregistry.net
sexy			whois.uniregistry.net
tattoo			whois.uniregistry.net
reviews			whois.unitedtld.com
ms			whois.nic.ms
uno			whois.nic.uno
buzz			whois.nic.buzz
berlin			whois.nic.berlin
*/
?>