<?php include_once 'config/init.php'; ?>


<?php
$job = new Job; ?>

<?php

if(isset($_POST['submit'])){
    // Create Data Array to bring all data from FORM

    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->create($data)){
        redirect('index.php', 'Yout Job has been listed', 'success');
    }else{
        redirect('index.php', 'Your Data does not match', 'error');

    }
}

$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories(); 
echo $template;
?>