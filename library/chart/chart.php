<!doctype html>

<?php 
    /*
     * Please put this file in the same folder with KoolControls folder
     * or you may modify path of require and scriptFolder to refer correctly
     * to koolchart.php and its folder.
     */
    require "koolchart.php";
    $chart = new KoolChart("chart");
    $chart->scriptFolder="";
    $chart->PlotArea->XAxis->Title = "Quarter";
    $chart->PlotArea->XAxis->Set(array("Q1","Q2","Q3","Q4","Q5"));
    $chart->PlotArea->YAxis->Title = "Sales";
    $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "$ {0}";
   /* $series = new AreaSeries();
    $series->ArrayData(array(0,20,30,40,170,50));*/
	$series = new AreaSeries();
    $series->Name = "Dermal lens";
    $series->Appearance->BackgroundColor = "#7CFC00";
    $series->LabelsAppearance->DataFormatString = "DL {0}";
    $series->TooltipsAppearance->DataFormatString = "$ {0} Pics";
    $series->ArrayData(array(20,30,40,70,50));
   
    $chart->PlotArea->AddSeries($series);
    
	$series = new AreaSeries();
    $series->Name = "Laser";
    $series->Appearance->BackgroundColor = "red";
    $series->LabelsAppearance->DataFormatString = "LS {0}";
    $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
    $series->ArrayData(array(30,20,65,40,30));
   
    $chart->PlotArea->AddSeries($series);
	
	
	$series = new AreaSeries();
    $series->Name = "Rebond";
    $series->Appearance->BackgroundColor = "#1C86EE";
    $series->LabelsAppearance->DataFormatString = "RB {0}";
    $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
    $series->ArrayData(array(00,30,95,140,76));
   
    $chart->PlotArea->AddSeries($series);
	
	
   
?>
<html>
    <head>
        <title>KoolChart</title>
    </head>
    <body>
        
	<?php echo $chart->Render();?>					
    </body>
</html>
