
<?php 
    include('../container/header.php');
    include('../configure.php');
?>


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
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <h3>Quarry Management Systems (QMS) Statistic Section </h3>
            <p>
                <?php include("qms_statistic.php");?>

            </p>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Quarry Explosives Storage (QES) Statistic Section </h3>
            <p>
                <?php include("qes_statistic.php");?>
            </p>
        </div>
        <div id="sectionC" class="tab-pane fade">
            <h3>Quarry Blasting Practices (QBP) Statistic Section </h3>
            <p>
                <?php include("qbp_statistic.php");?>
            </p>
        </div>
        <div id="sectionD" class="tab-pane fade">
            <h3>Quarry Isolation and Tagging (QIT) Statistic Section </h3>
            <p>
                <?php include("qit_statistic.php");?>
            </p>
        </div>
        <div id="sectionE" class="tab-pane fade">
            <h3>Quarries Tipping on Stockpile (QTS) Statistic Section </h3>
            <p>
                <?php include("qts_statistic.php");?>
            </p>
        </div>
        <div id="sectionF" class="tab-pane fade">
            <h3>Quarry Emergency Plans (QEP) Statistic Section </h3>
            <p>
                <?php include("qep_statistic.php");?>
            </p>
        </div>
        <div id="sectionG" class="tab-pane fade">
            <h3>Quarries Occupational Health (QOH) Statistic Section </h3>
            <p>
                <?php include("qoh_statistic.php");?>
            </p>
        </div>
        <div id="sectionH" class="tab-pane fade">
            <h3>Quarry Workshops (QWS) Statistic Section </h3>
            <p>
                <?php include("qws_statistic.php");?>
            </p>
        </div>
        
    </div>
</div>
</body>
</html>                            