<!DOCTYPE html>
<?php
	/* /mobile/index.php
	 * Autor: Machac Philipp
	 * Version: 1.0.0
	 * Beschreibung:
	 *	Auswahlseite fuer mobile Geraete.
	 *
	 * Changelog:
	 * 	1.0.0:  31.01.2014, Machac Philipp - Erste Seite
	 */
	include("../config.php");
?>
<html>
	<head>
   		 <title>SIS.Mobile</title>
         
         <!-- Favicon -->
		 <link rel="shortcut icon" href="favicon.ico" type="image/x-ico" />
		 <link rel="icon" href="favicon.ico" type="image/x-ico" />
         <!-- Includes -->
		 <link rel="stylesheet" type="text/css" href="mobile.css" />
	</head>
    <body>    
        <div id="content">
          <h1>Mobile Apps</h1>
                <center>
                    <a href="Placeholder TODO" title="App f&uuml;r Windows Phone ansehen">
                        <img src="<?php echo RELATIVE_ROOT; ?>/images/windowsphone.svg" alt="Windows Phone Store">
                    </a>
                    <a href="https://itunes.apple.com/at/app/htlinn/id423243235?mt=8" title="App f&uuml;r iOS ansehen">
                        <img src="<?php echo RELATIVE_ROOT; ?>/images/ios.svg" alt="App Store">
                    </a>
                    <a href="Placeholder TODO" title="App f&uuml;r Android ansehen">
                        <img src="<?php echo RELATIVE_ROOT; ?>/images/android.svg" alt="GooglePlay Store">
                    </a>
                </center>
                    <br />
                    <br />
                    <br />
          <h1>Desktop Version</h1>
                <center>
                    <a href="<?php echo RELATIVE_ROOT; ?>/?noJS&noMobile" title="Desktop Version der Seite besuchen">
                        <img src="<?php echo RELATIVE_ROOT; ?>/images/desktop.svg" alt="Desktop Version">
                    </a>
                    <br />
                    <br /> 
                    <br />
                    <br />
                </center>
        </div>
	</body>
</html>