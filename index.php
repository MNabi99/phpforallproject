<?php include_once 'config/init.php';?>

<!--  below job viriable is from job class we created in in job.php -->

<?php
$job = new Job; ?>

<?php
$template = new Template('templates/frontpage.php');


$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs In'. $job->getCategory($category)->name;  // now let creat a getCategory in our Job class
}else{

    //  her the template for job classs in job.php
    $template->title = 'Lastest Jobs';

    $template->jobs = $job->getAllJobs(); 
}


//  <!-- now this will lead front_page.php to make only one DIV dynanamic for all job been posted -->

// get list of  category to fill the select box, insted of Static select box
$template->categories = $job->getCategories(); // go to job class to creat that function 

echo $template;
?>