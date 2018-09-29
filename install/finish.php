<?php

if (isset($_GET['go'])) {
    foreach (scandir(__DIR__) as $file) {
        if ($file == "." || $file == "..") continue;

        @unlink($file);
    }
    header("Location: ../");
    die;
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Belloo Script Installer</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <style>body{background-color:#d9d9d9;font-family:Roboto,sans-serif;font-size:16px;color:#555;padding:70px 20px 0}.panel{background-color:#fafafa;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;width:950px;margin:0 auto;box-shadow:2px 2px 4px rgba(0,0,0,.3)}.panel>table{width:100%}.logo{padding:25px 0 15px 30px}table tr,table tr td{margin:0;padding:0}.panel>table>tbody>tr>td:nth-child(2){background-color:#fff;padding:30px 35px}nav ul{margin:0 0 15px;padding:0;list-style:none}nav ul li{display:block;margin:0;padding:7px 0 8px 25px;color:#666;position:relative}nav ul li a{color:inherit;font-size:16px}nav ul li.active{background-color:#ff3f33;color:#fff}nav ul li.done{color:#aaa;text-decoration:line-through}nav ul li.active:after{left:100%;top:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none;border-color:rgba(21,101,192,0);border-left-color:#ff3f33;border-width:17px;margin-top:-17px}h1,p{margin:0 0 20px}h1{font-size:21px;font-weight:400}.terms{border:1px solid #ddd;background-color:#eee;margin:0 0 15px;padding:25px;border-radius:3px;max-height:200px;overflow-y:auto;font-size:14px}.terms strong{display:block;margin:0 0 4px;font-size:15px}.terms p{margin:0 0 15px}.terms p:last-child{margin-bottom:0}.btn{display:inline-block;padding:0 15px;height:32px;border:1px solid #cfcfcf;background-color:#f7f7f7;line-height:32px;font-size:13px;font-weight:500;color:#666;text-align:center;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;cursor:pointer}.btn:hover{background-color:#f0f0f0}.btn.blue{background-color:#ff3f33;color:#fff}input.fancy,select.fancy{border:1px solid #ddd;font:inherit;font-size:15px;color:#555;padding:6px 13px;margin:0;width:100%;display:block;box-sizing:border-box;-webkit-box-sizing:border-box;border-radius:2px;-webkit-border-radius:2px;-moz-border-radius:2px}.error,form>table strong{font-weight:500}form>table{margin:40px 0 0}form>table tr td{border-bottom:15px solid #fff}form>table tr td:nth-child(1){padding-right:35px}.error{color:#F44336;font-size:14px;border:1px solid #F44336;border-radius:3px;padding:10px 15px}
    </style>
</head>
<body>
    <div class="panel">
        <table cellspacing="0" cellpadding="0">
            <tr valign="top">
                <td width="225px">
                     <div class="logo">
                         <img src="https://www.belloo.date/themes/default/images/logo.png" width="150px">
                    </div>

                    <nav>
                        <ul>
                            <li class="done"><a>License agreement</a></li>
                            <li class="done"><a>Database setup</a></li>
                            <li class="done"><a>Activate license</a></li>
                            <li class="done"><a>Setup account</a></li>
                        </ul>
                    </nav>
                </td>
                <td>
                    <h1>Finish</h1>

                    <p>Congratulations! You've finished installing <b>Belloo Script</b>.<br>
                    The installation directory will now be deleted as a safety measure.</p>

                    <a class="btn blue" href="?go">Go to my site</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
