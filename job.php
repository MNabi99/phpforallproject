<?php include_once 'config/init.php'; ?>

<!--  below job viriable is from job class we created in in job.php -->

<?php
$job = new Job; 

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    // if we have Delete Option for Job then can we delete the Job
    if($job->delete($del_id)){
        redirect('index.php', 'job Deleted', 'success');

    }else{
        redirect('index.php', ' job Not Deleted', 'success');

    }
}

$template = new Template('templates/job-single.php');


$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);   

echo $template;
?>