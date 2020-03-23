<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuarrySYS</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
                $(document).ready(function(){ 
                    $("#myTab li:eq(1) a").tab('show');
                });
    </script>


    <?php include('../container/header.php');?>
    
    <style type="text/css">

        body{
            padding-top: 70px;
        }
        .bs-example{
            margin: 20px;
        }
    </style>
    </head>
<body>
<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li><a data-toggle="tab" href="#sectionA">QMS Section</a></li>
        <li><a data-toggle="tab" href="#sectionB">QES Section</a></li>
        <li><a data-toggle="tab" href="#sectionC">QBP Section</a></li>
        <li><a data-toggle="tab" href="#sectionD">QIT Section</a></li>
        <li><a data-toggle="tab" href="#sectionE">QTS Section</a></li>
        <li><a data-toggle="tab" href="#sectionF">QEP Section</a></li>
        <li><a data-toggle="tab" href="#sectionG">QOH Section</a></li>
        <li><a data-toggle="tab" href="#sectionH">QWS Section</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Tables <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dropdown1">QMS Table 1</a></li>
                <li><a data-toggle="tab" href="#dropdown2">QES Table 2</a></li>
                <li><a data-toggle="tab" href="#dropdown3">QBP Table 3 </a></li>
                <li><a data-toggle="tab" href="#dropdown4">QIT Table 4 </a></li>
                <li><a data-toggle="tab" href="#dropdown5">QTS Table 5 </a></li>
                <li><a data-toggle="tab" href="#dropdown6">QEP Table 6 </a></li>
                <li><a data-toggle="tab" href="#dropdown7">QOH Table 7 </a></li>
                <li><a data-toggle="tab" href="#dropdown8">QWS Table 8 </a></li>

            </ul>
        </li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <h3>Quarry Management Systems (QMS) Section</h3>
            <p>
                <?php include("enterQms.php");?>

            </p>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Quarry Explosives Storage (QES) Section</h3>
            <p>
                <?php include("enterQes.php");?>
            </p>
        </div>
        <div id="sectionC" class="tab-pane fade">
            <h3>Quarry Blasting Practices (QBP) Section</h3>
            <p>
                <?php include("enterQbp.php");?>
            </p>
        </div>
        <div id="sectionD" class="tab-pane fade">
            <h3>Quarry Isolation and Tagging (QIT) Section</h3>
            <p>
                <?php include("enterQit.php");?>
            </p>
        </div>
        <div id="sectionE" class="tab-pane fade">
            <h3>Quarries Tipping on Stockpile (QTS) Section</h3>
            <p>
                <?php include("enterQts.php");?>
            </p>
        </div>
        <div id="sectionF" class="tab-pane fade">
            <h3>Quarry Emergency Plans (QEP) Section</h3>
            <p>
                <?php include("enterQep.php");?>
            </p>
        </div>
        <div id="sectionG" class="tab-pane fade">
            <h3>Quarries Occupational Health (QOH) Section</h3>
            <p>
                    <?php include("enterQoh.php");?>
            </p>
        </div>
        <div id="sectionH" class="tab-pane fade">
            <h3>Quarry Workshops (QWS) Section</h3>
            <p>
                    <?php include("enterQws.php");?>
            </p>
        </div>
        <div id="dropdown1" class="tab-pane fade">
            <h3>Quarry Management Systems (QMS) Table</h3>
            <p>
                <?php include('qms_table.php');?>
            </p>
        </div>
       <div id="dropdown2" class="tab-pane fade">
            <h3>Quarry Explosives Storage (QES) Table</h3>
            <p>
                    <?php include('qes_table.php');?>
            </p>
        </div>
        <div id="dropdown3" class="tab-pane fade">
            <h3>Quarry Blasting Practices (QBP) Table</h3>
            <p>
                <?php include('qbp_table.php');?>
            </p>
        </div>
        <div id="dropdown4" class="tab-pane fade">
            <h3>Quarry Isolation and Tagging (QIT) Table</h3>
            <p>
                <?php include('qit_table.php');?>
            </p>
        </div>
        <div id="dropdown5" class="tab-pane fade">
            <h3>Quarries Tipping on Stockpile (QTS) Table</h3>
            <p>
                <?php include('qts_table.php');?>
            </p>
        </div>
        <div id="dropdown6" class="tab-pane fade">
            <h3>Quarry Emergency Plans (QEP) Table</h3>
            <p>
                    <?php include('qep_table.php');?>
            </p>
        </div>
        <div id="dropdown7" class="tab-pane fade">
            <h3>Quarries Occupational Health (QOH) Table</h3>
            <p>
                    <?php include('qoh_table.php');?>
            </p>
        </div>
        <div id="dropdown8" class="tab-pane fade">
            <h3>Quarry Workshops (QWS) Table</h3>
            <p>
                <?php include('qws_table.php');?>
            </p>
        </div>

    </div>
</div>
</body>
</html>                            