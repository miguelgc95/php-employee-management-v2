<?php

class Session{
    public function __construct($controller)
    {
        session_start();
        if (isset($_SESSION["id"]) && $controller != "main") {
            $sessionOk = true;
        }else{
            $sessionOk = false;
        }
    }
    
    //TODO: adapt next method
    //public function isSessionAlive($init, $life)
    //{
    //    $actual_time = time();
    //    $session_finish = $init + $life;
    //    if ($actual_time >= $session_finish) {
    //        $head = "Refresh: 0; URL=./library/loginController.php?timeout";
    //        header($head);
    //    }
    //}
}







// $session_init = $_SESSION['init'];
// $session_life = $_SESSION['life'];


// function isSessionAlive($init, $life)
// {
//     $actual_time = time();
//     $session_finish = $init + $life;

//     if ($actual_time >= $session_finish) {
//         $head = "Refresh: 0; URL=./library/loginController.php?timeout";
//         header($head);
//     }
// }

// isSessionAlive($session_init, $session_life);
