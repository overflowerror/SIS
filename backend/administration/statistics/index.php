<?php

	/* /statistics/index.php
	 * Autor: Handle Marco
	 * Beschreibung:
	 *	Erstellt das Formular für die Hilfe
	 *
	 */
	 
include("../../../config.php");
include_once(ROOT_LOCATION . "/modules/general/Main.php");				//Stellt das Design zur Verfügung
include_once(ROOT_LOCATION . "/modules/other/statistics.php");

if (!($_SESSION['rights']['root'])){
	header("Location: ".RELATIVE_ROOT."/");
	exit();
}

if(!empty($_POST['release']) && $_POST['release']=="first")
	$temp = get("first");
else
	$temp = get("second");

$os=$temp[1];
$browser = $temp[0];
$classes = $temp[2];
$sections = $temp[3];
$sitesSub = $temp[4];
$hourFrequenzy = $temp[5];
$mobileWeb = $temp[6];
//Seitenheader
pageHeader("Statistiken","main");

if(!empty($_POST['release']) && $_POST['release']=="first")
	$checkedFirst="checked";
else
	$checkedSecond="checked";
?>
<form method="POST">
<input type="radio" name="release" value="first" onclick="this.form.submit()" <?php echo $checkedFirst;?>>Seit Ersetem Release<br />
<input type="radio" name="release" value="second" onclick="this.form.submit()" <?php echo $checkedSecond;?>>Seit Zweitem Release<br />
</form>
Das Entwicklungsteam wir nicht mitgez&auml;hlt!!!<br />
<a href="">Reload</a><br /><br />
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.pieRenderer.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/jquery.jqplot.min.css" />
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.cursor.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo RELATIVE_ROOT;?>/modules/external/jqplot/plugins/jqplot.pointLabels.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var s1 = [ <?php echo $browser; ?>];
         
    var plot1 = $.jqplot('chart1', [s1], {
	title:'Browser',
        seriesDefaults: {
        // Make this a pie chart.
        renderer: $.jqplot.PieRenderer,
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      },
	grid: {
    	drawGridLines: true,        // wether to draw lines across the grid or not.
        gridLineColor: '#cccccc',   // CSS color spec of the grid lines.
        background: 'transparent',      // CSS color spec for background color of grid.
        borderColor: '#999999',     // CSS color spec for border around grid.
        borderWidth: 2.0,           // pixel width of border around grid.
        shadow: true,               // draw a shadow for grid.
        shadowAngle: 45,            // angle of the shadow.  Clockwise from x axis.
        shadowOffset: 1.5,          // offset from the line of the shadow.
        shadowWidth: 3,             // width of the stroke for the shadow.
        shadowDepth: 3
}, 
      legend: { show:true, location: 'e' }
    });
});
$(document).ready(function(){
    var s2 = [ <?php echo $os; ?>];
         
    var plot2 = $.jqplot('chart2', [s2], {
	title:'Plattform',
        seriesDefaults: {
        // Make this a pie chart.
        renderer: $.jqplot.PieRenderer,
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      },
	grid: {
    	drawGridLines: true,        // wether to draw lines across the grid or not.
        gridLineColor: '#cccccc',   // CSS color spec of the grid lines.
        background: 'transparent',      // CSS color spec for background color of grid.
        borderColor: '#999999',     // CSS color spec for border around grid.
        borderWidth: 2.0,           // pixel width of border around grid.
        shadow: true,               // draw a shadow for grid.
        shadowAngle: 45,            // angle of the shadow.  Clockwise from x axis.
        shadowOffset: 1.5,          // offset from the line of the shadow.
        shadowWidth: 3,             // width of the stroke for the shadow.
        shadowDepth: 3
}, 
      legend: { show:true, location: 'e' }
    });
});
$(document).ready(function(){
    var s3 = [ <?php echo $classes; ?>];
         
    var plot3 = $.jqplot('chart3', [s3], {
	title:'Sch&uuml;ler/Lehrer',
        seriesDefaults: {
        // Make this a pie chart.
        renderer: $.jqplot.PieRenderer,
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      },
	grid: {
    	drawGridLines: true,        // wether to draw lines across the grid or not.
        gridLineColor: '#cccccc',   // CSS color spec of the grid lines.
        background: 'transparent',      // CSS color spec for background color of grid.
        borderColor: '#999999',     // CSS color spec for border around grid.
        borderWidth: 2.0,           // pixel width of border around grid.
        shadow: true,               // draw a shadow for grid.
        shadowAngle: 45,            // angle of the shadow.  Clockwise from x axis.
        shadowOffset: 1.5,          // offset from the line of the shadow.
        shadowWidth: 3,             // width of the stroke for the shadow.
        shadowDepth: 3
}, 
      legend: { show:true, location: 'e' }
    });
});
$(document).ready(function(){
    var s4 = [ <?php echo $sections; ?>];
         
    var plot4 = $.jqplot('chart4', [s4], {
	title:'Abteilungen',
        seriesDefaults: {
        // Make this a pie chart.
        renderer: $.jqplot.PieRenderer,
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      },
	grid: {
    	drawGridLines: true,        // wether to draw lines across the grid or not.
        gridLineColor: '#cccccc',   // CSS color spec of the grid lines.
        background: 'transparent',      // CSS color spec for background color of grid.
        borderColor: '#999999',     // CSS color spec for border around grid.
        borderWidth: 2.0,           // pixel width of border around grid.
        shadow: true,               // draw a shadow for grid.
        shadowAngle: 45,            // angle of the shadow.  Clockwise from x axis.
        shadowOffset: 1.5,          // offset from the line of the shadow.
        shadowWidth: 3,             // width of the stroke for the shadow.
        shadowDepth: 3
}, 
      legend: { show:true, location: 'e' }
    });
});
$(document).ready(function(){
    var s5 = [ <?php echo $sitesSub; ?>];
         
    var plot5 = $.jqplot('chart5', [s5], {
	title:'Seiten Supplierungen',
        seriesDefaults: {
        // Make this a pie chart.
        renderer: $.jqplot.PieRenderer,
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      },
	grid: {
    	drawGridLines: true,        // wether to draw lines across the grid or not.
        gridLineColor: '#cccccc',   // CSS color spec of the grid lines.
        background: 'transparent',      // CSS color spec for background color of grid.
        borderColor: '#999999',     // CSS color spec for border around grid.
        borderWidth: 2.0,           // pixel width of border around grid.
        shadow: true,               // draw a shadow for grid.
        shadowAngle: 45,            // angle of the shadow.  Clockwise from x axis.
        shadowOffset: 1.5,          // offset from the line of the shadow.
        shadowWidth: 3,             // width of the stroke for the shadow.
        shadowDepth: 3
}, 
      legend: { show:true, location: 'e' }
    });
});
$(document).ready(function(){
    var s6 = [ <?php echo $mobileWeb; ?>];
         
    var plot6 = $.jqplot('chart6', [s6], {
	title:'App/Web',
        seriesDefaults: {
        // Make this a pie chart.
        renderer: $.jqplot.PieRenderer,
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      },
	grid: {
    	drawGridLines: true,        // wether to draw lines across the grid or not.
        gridLineColor: '#cccccc',   // CSS color spec of the grid lines.
        background: 'transparent',      // CSS color spec for background color of grid.
        borderColor: '#999999',     // CSS color spec for border around grid.
        borderWidth: 2.0,           // pixel width of border around grid.
        shadow: true,               // draw a shadow for grid.
        shadowAngle: 45,            // angle of the shadow.  Clockwise from x axis.
        shadowOffset: 1.5,          // offset from the line of the shadow.
        shadowWidth: 3,             // width of the stroke for the shadow.
        shadowDepth: 3
}, 
      legend: { show:true, location: 'e' }
    });
});
$(document).ready(function(){
	var s7 = [ <?php echo $hourFrequenzy; ?>];
	var plot7 = $.jqplot('chart7', [s7], {
		title:'Aufrufe/Stunde',
	        seriesDefaults: {
	 		renderer:$.jqplot.BarRenderer,
                	rendererOptions: {
                	}
            	},
            	axes: {
                	xaxis: {
                    		renderer: $.jqplot.CategoryAxisRenderer
                	}
            	}
	});
});
</script>
<?php
printf("<div  id=\"chart1\" style=\"height:400px;width:600px;float:left;\"></div>");
printf("<div  id=\"chart2\" style=\"height:400px;width:600px;float:left;\"></div>");
printf("<div  id=\"chart3\" style=\"height:400px;width:600px;float:left;\"></div>");
printf("<div  id=\"chart4\" style=\"height:400px;width:600px;float:left;\"></div>");
printf("<div  id=\"chart5\" style=\"height:400px;width:600px;float:left;\"></div>");
printf("<div  id=\"chart6\" style=\"height:400px;width:600px;float:left;\"></div>");
printf("<div  id=\"chart7\" style=\"height:400px;width:1200px;float:left;\"></div>");
//Seitenfooter



pageFooter();


?>
