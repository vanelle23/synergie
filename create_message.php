<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $email = $message = $message = "";
$name_err = $email_err = $subject_err  = $message_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
   // Validate name
   $input_name = trim($_POST["name"]);
   if(empty($input_name)){
       $name_err = "Please enter your name";     
   } else{
       $name = $input_name;
   } 
   
    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter your email";     
    } else{
        $email = $input_email;
    }
    
    // Validate subject
    $input_subject = trim($_POST["subject"]);
    if(empty($input_subject)){
        $subject_err = "Please enter the subject";     
    } else{
        $subject = $input_subject;
    }

    // Validate message
    $input_message = trim($_POST["message"]);
    if(empty($input_message)){
        $message_err = "Please enter the message amount.";     
    } else{
        $message = $input_message;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($email_err) && empty($subject_err) && empty($message_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO contact_messages (Username, Email, Subject, Message) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_subject, $param_message);
            
            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_subject = $subject;
            $param_message = $message;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: create_message.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>