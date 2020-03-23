


<?php
//Initialize the session
//session_start();
 
  
  
  // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   echo "Success";
  
}


// Include config file
include "configure.php";
 
// Define variables and initialize with empty values
$userID = $qms_ques1 = $qms_ques2 = $qms_ques3 = $qms_ques4 = $qms_ques5 = $qms_ques6 = $qms_total_points="";
$userID_err = $qms_ques1_err = $qms_ques2_err = $qms_ques3_err = $qms_ques4_err = $qms_ques5_err = $qms_ques6_err =$qms_total_points_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    //validate qms_questions
    if(empty(trim($_POST['qms_ques1']))){
        $qms_ques1_err = "Please respond to question one";
    }else if(empty(trim($_POST['qms_ques2']))){
        $qms_ques2_err = "Please respond to question two";
    }else if(empty(trim($_POST['qms_ques3']))){
        $qms_ques3_err = "Please respond to question three";
    } else if(empty(trim($_POST['qms_ques4']))){
        $qms_ques4_err = "Please respond to question four";
    } else if(empty(trim($_POST['qms_ques5']))){
        $qms_ques5_err = "Please respond to question five";
    } else if(empty(trim($_POST['qms_ques6']))){
        $qms_ques6_err = "Please respond to question six";
    } else{
        //preparing a select statement
        $sql = "SELECT a.userID, b.qms_ques1, b.qms_ques2, b.qms_ques3, b.qms_ques4, b.qms_ques5, b.qms_ques6, b.qms_total_points FROM respondents a LEFT OUTER JOIN qms b ON a.userID=b.userID  WHERE userID='$userID'";
        if($stmt = $mysqli ->prepare($sql)){
            //bind variables to the prepared statement as parameters
            $stmt ->bind_param("issssssi", $param_qms_ques1, $param_qms_ques2, $param_qms_ques3, $param_qms_ques4, $param_qms_ques5, $param_qms_ques6);
            // Set parameters
            $param_userID = trim($_POST['userID']);
            $param_qms_ques1 = trim($_POST['qms_ques1']);
            $param_qms_ques2 = trim($_POST['qms_ques2']);
            $param_qms_ques3 = trim($_POST['qms_ques3']);
            $param_qms_ques4 = trim($_POST['qms_ques4']);
            $param_qms_ques5 = trim($_POST['qms_ques5']);
            $param_qms_ques6 = trim($_POST['qms_ques6']);
            
            $param_qms_total_points = trim($_POST['qms_total_points']);
            
             // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $userID_err = "You have already attempted this question one.";
                } else{
                    $qms_ques1 = trim($_POST["qms_ques1"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Check input errors before inserting in database
    if(empty($userID_err) && empty($qms_ques1_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO qms (qms_ques1, qms_ques2, qms_ques3, qms_ques4, qms_ques5, qms_ques6, userID, qms_total_points) VALUES (?, ?, ?, ?, ?, ?, $userID, ?)"; 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssii", $param_qms_ques1, $param_qms_ques2, $param_qms_ques3, $param_qms_ques4, $param_qms_ques5, $param_qms_ques6, $param_userID, $param_total_points);
            
            // Set parameters
            $param_qms_ques1 = $qms_ques1;
            $param_qms_ques2 = $qms_ques2;
            $param_qms_ques3 = $qms_ques3;
            $param_qms_ques4 = $qms_ques4;
            $param_qms_ques5 = $qms_ques5;
            $param_qms_ques6 = $qms_ques6;
            
            $param_userID = $userID;
            $param_qms_total_points = $qms_ques1 + $qms_ques2 + $qms_ques3 + $qms_ques4 + $qms_ques5 + $qms_ques6;

            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                echo "<script>alert('You have successfully responded to this survey!'); window.location='welcome.php'</script>";
                //header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}

    
  /*
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO respondents (username, password) VALUES (?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                echo "<script>alert('You have successfully registered!'); window.location='login.php'</script>";
                //header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
    */

?>
		