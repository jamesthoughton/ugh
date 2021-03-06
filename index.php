<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="icons/favicon.ico" rel="icon" type="image/ico">
    <link href="main.css" rel="stylesheet" />
</head>
<title>
</title>

<script src="scripts/jquery-2.2.0.min.js"></script>
<body>
    <div id="sidebar-wrapper">
        <div id="sidebar">
        </div>
    </div>
    <div id="wrapper">
        <div id="menu">
            <button id="home" onclick="goHome()"></button>
            <div id="logo"></div>
            <div id="logo-text">COVALENCE</div>
            <input id="search" type="text"></input>
        </div>
        <div id="content-wrapper">
            <div id="content">
				<!--<div class="music">
					<p>Music</p>
						<?php
						    /*$filename = "music/metadata.json";
							$file = fopen($filename,"r") or die("Unable to open file");
							$json = json_decode(fread($file,filesize($filename)),true);
							foreach($json['files'] as $audio) {
								echo "<div class='card'><audio><source src='" . preg_replace("/^\/srv\/http/",'',$audio) . "'></audio></div>";
							}
							fclose($file);
						*/
                        ?>
				</div>-->
			</div>
		    
		    <div id="image-view-wrapper">
                <div id="image-view">
                    <div class="window-bar">
                    <button class="exit-button" onclick="document.getElementById('image-view-wrapper').style.visibility='hidden';document.getElementById('image-view-wrapper').style.opacity='0';"></button>
                    <div class="window-label">
                    </div>
                </div>
            </div>
        </div>
    	<div id="player-wrapper">
			<div id="player"></div>
		</div>
	</div>
</body>
<script src="scripts/script.js"></script>
<!--<script src="decode.js"></script>-->
</html>
