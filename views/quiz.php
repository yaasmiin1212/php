<?php
 $isQuizSubmitted = isset($_POST['quiz_submitted']);
 if($isQuizSubmitted){
    $answer=$_POST['answer'];
    $answer=$_POST['answer'];
    $answer=$_POST['answer'];
    $answer=$_POST['answer'];
    $output=showQuizResponse($answer);

   
 }else {
    $output=include_once "views/quiz_form.php";

 }
 return$output;

 function showQuizResponse( $answer ){
    $response = "<p>You welcome $answer</p>";
    $response = "<p>your phone number </p>";
    $response .= "<p>
    <a href='index.php?page=quiz'>Try quiz again?</a>
    </p>";
    return $response;
 }
   


