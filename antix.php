<?php 


 	set_time_limit(0);
  	error_reporting(0);
  	date_default_timezone_set('Asia/Jakarta');
	system('clear');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$abu2}[{$res}•{$abu2}]{$green2}";


$banner = "
{$putih}\r{$red}               
              █████╗ ███╗   ██╗████████╗██╗██╗  ██╗     
             ██╔══██╗████╗  ██║╚══██╔══╝██║╚██╗██╔╝  
             ███████║██╔██╗ ██║   ██║   ██║ ╚███╔╝   
 {$putih}            ██╔══██║██║╚██╗██║   ██║   ██║ ██╔██╗   
             ██║  ██║██║ ╚████║   ██║   ██║██╔╝ ██╗  
             ╚═╝  ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝╚═╝  ╚═╝    
              {$purple}[ LINK: https://github.com/km37id/]
{$putih}    {$green2} {$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}     {$putih}   
{$putih}\n";

echo $banner;
echo "{$green2}	Tool  : {$putih}Finder Login Pages Admin\n";
echo "{$green2}	Author: {$putih}Kemet_ID\n\n";





	function findlogin($domain, $green2, $putih, $red, $up){

		$file = "url.txt";
		$hal = file_get_contents($file);
		for ($i=0; $i <= 9999999 ; $i++) { 

		$halexp = explode("\n", $hal); 
		$log = $halexp[$i];
		if($log == null)break;
		$url = $domain.$log;
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("user-agent:Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0"));

			$exec = curl_exec($ch);
			curl_close($ch);
			$kecil = strtolower($exec);
			$cilik = array($kecil);
			foreach ($cilik as $cilik) {

			if (preg_match('/password/i', $cilik)) {
				$resul = $domain.$log;
				echo "{$green2} [ + ]{$putih} ".$resul." {$green2} 200 OK\n";
				fwrite($up, $domain.$log."\n");
			} else{
				echo "{$red} [ - ]{$putih} ".$domain."".$log." {$red} Not Found\n";

			}
		}


		};


	}


$dom = readline(" [ # ] List File: ");
$file_domain = file_get_contents($dom);
		mkdir("Result");
		$dateup = "Result/Result-".date("H-i-s")."_@Antix";
		$up = fopen($dateup.".txt", 'w+');

	for ($n=0; $n <= 9999999 ; $n++) { 
// print_r($file_domain);die;

		$exp_domain = explode("\n", $file_domain);
		$lop_domain = $exp_domain[$n];
		if($lop_domain == null)break;

		$min = array($lop_domain);
		foreach ($min as $domain) {
		findlogin($domain, $green2, $putih, $red, $up);

		}


	}


 ?>




