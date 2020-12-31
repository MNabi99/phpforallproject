<?php
//  Redirect To Page
function redirect($page = FALSE, $message = NULL, $message_type = NULL){

    if(is_string($page)){
        $location = $page;

    }else{
        $location = $_SERVER['SCRIPT-NAME'];
    }

    // to control and check Message
    if($message != NULL){
        $_SESSION['message'] = $message;
    }
    // For Type
    if($message_type != NULL){
        // For Setting Message Type
        $_SESSION['message_type'] = $message_type;
    }

    // pagaing to Redirect
    header ('Location: '. $location);
    exit;
}

// b elow si the code to dispaly the  Display Message
    function displayMessage(){
        if(!empty($_SESSION['message'])){
            //  Assign var about Message
            $message = $_SESSION['message'];

            if(!empty($_SESSION['message'])){
                // Assign Type Vaar
                $message_type = $_SESSION['message_type'];

                if($message_type == 'error'){
                    echo '<div class="alert alert_danger">' . $message. '</div>';
                }else{
                echo '<div class="alert alert_success">' . $message . '</div>';

                }
            }

            // Unset Message
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }else{
            echo '';
        }
    }