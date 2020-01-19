<!DOCTYPE HTML>
<html>
<head> 
        <link rel="stylesheet" href="arranger.css" /> 

		<?php session_start();?>
<script class="graphi">
window.onload = function () {


var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light",
	title:{
		text: "Évolution la fréquence cardiaque"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 80 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"  },
			{ y: 75},
			{ y: 85},
			{ y: 90 },
			{ y: 100 },
			{ y: 105 },
			{ y: 120 },
			{ y: 125 , indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ y: 100},
			{ y: 95 },
			{ y: 90 },
			{ y: 84 }
		]
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light",
	title:{
		text: "Évolution de la température corporelle"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 36.7 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"  },
			{ y: 36.8},
			{ y: 37.2},
			{ y: 37.4 },
			{ y: 37.6 },
			{ y: 37.7 },
			{ y: 38.2 },
			{ y: 38.5 , indexLabel: "highest",markerColor: "red", markerType: "triangle"},
			{ y: 38},
			{ y: 37.7 },
			{ y: 37.6 },
			{ y: 37.4 }
		]
	}]
});

var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	theme: "light",
	title:{
		text: "Évolution l‘étendue"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 67.5 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"  },
			{ y: 69},
			{ y: 74},
			{ y: 76 },
			{ y: 85 },
			{ y: 90 },
			{ y: 94 },
			{ y: 98 , indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ y: 89},
			{ y: 82 },
			{ y: 80 },
			{ y: 76 },
		]
	}]
});
var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	theme: "light",
	title:{
		text: "Graphique"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 90 },
			{ y: 87},
			{ y: 85},
			{ y: 98 },
			{ y: 100 },
			{ y: 105, indexLabel: "highest",markerColor: "red", markerType: "triangle"  },
			{ y: 86 },
			{ y: 80 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 98},
			{ y: 87 },
			{ y: 85 },
			{ y: 83 }
		]
	}]
});

chart.render();
chart2.render();
chart3.render();
chart4.render();

}
</script>
</head>

<body>
    <div class="container">
        <div id="chartContainer" style="height: 300px; width:35%;"></div>
        <div id="chartContainer2" style="height: 300px; width:35%;"></div>
        <div id="chartContainer3" style="height: 300px; width:35%;"></div>
        <div id="chartContainer4" style="height: 300px; width:35%;"></div>
    </div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<?php require('../Footer/footer.php'); ?>

<?php $title = 'Statistiques'; ?>
<?php $currentPage = 'statistiques'; ?>
<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>

</body>

</html>