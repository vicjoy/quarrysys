<!DOCTYPE html>
<html>
<head>

<title></title>
     <link href="sum_number/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     <style type="text/css">
            h4{
                color:white;
                background-color: blue;
                border-radius:20%;
                text-align: center;
            }
            b{
                background-color: #000ea3;
            }
     </style>
</head>
<body>
<br>
<br>
<div class="container">
    
  
<br /> 
  
	     <table  class="table table-striped table-bordered">     
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Question</th>
                                    <th>Strongly Agree</th>
                                    <th>Agree</th>
                                    <th>Disagree</th>
                                    <th>Strongly Disagree</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							$query=mysqli_query($mysqli, "select * from qes_table")or die(mysqli_error());
                            $numberOfRows= mysqli_num_rows($query);

                            echo "<h4>There are " . " " . $numberOfRows . " ". "Questions for this section</h4><br \>";

							while($row=mysqli_fetch_array($query)){
							$id=$row['ID'];
							?>
								<tr>
								     <td><?php echo $row['ID'] ?></td>
                                     <td><?php echo $row['Question'] ?></td>
                                     <td><?php echo $row['Strongly_Agree'] ?></td>
                                     <td><?php echo $row['Agree'] ?></td>
                                     <td><?php echo $row['Disagree'] ?></td>
                                     <td><?php echo $row['Strongly_Disagree'] ?></td>
                                </tr>
						          <?php } ?>
                             
						  <?php
                            $result = mysqli_query($mysqli, "SELECT count(ID) FROM qes_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                        <tr>
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total:&nbsp;<?php 

                                            $totalID = $rows['count(ID)'];
                                            echo $totalID ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                            <?php
                            $result = mysqli_query($mysqli, "SELECT count(Question) FROM qes_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Questions:&nbsp;<?php 

                                            $totalQuestion = $rows['count(Question)'];
                                            echo $totalQuestion ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>

						   <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Strongly_Agree) FROM qes_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Strongly Agree:&nbsp;<?php 

                                            $sumStronglyAgree = $rows['sum(Strongly_Agree)'];
                                            echo $sumStronglyAgree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                                <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Agree) FROM qes_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Agree:&nbsp;<?php 

                                            $sumAgree = $rows['sum(Agree)'];
                                            echo $sumAgree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                                <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Disagree) FROM qes_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Disagree:&nbsp;<?php 

                                            $sumDisagree = $rows['sum(Disagree)'];
                                            echo $sumDisagree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                                <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Strongly_Disagree) FROM qes_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Agree:&nbsp;<?php 

                                            $sumStronglyDisagree = $rows['sum(Strongly_Disagree)'];
                                            echo $sumStronglyDisagree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                            </tr>
                                <?php }
                                ?>
                            
                             </tbody>
                        </table>

                                   
</div>						
</body>
</html>
