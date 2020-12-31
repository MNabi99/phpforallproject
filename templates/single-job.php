<?php include 'include/header.php' ?>

<h2 class="page-header">Create Job Listing</h2>


<small>Posted By <?php echo $job->contact_user; ?> on
    <?php echo $job->post_date; ?>
</small>
<hr>
<p class="lead">
    <?php echo $job->description; ?>
</p>
<ul class="listt-group">
    <li class="list-group-item">
        <strong>Company:</strong> <?php echo $job->company; ?>
    </li>
    <ul class="listt-group">
        <li class="list-group-item">
            <strong>Salary:</strong> <?php echo $job->salary; ?>
        </li>
        <ul class="listt-group">
            <li class="list-group-item">
                <strong>Contact_email:</strong> <?php echo $job->contact_email; ?>
            </li>
        </ul>

        <br><br><br><br>
        <a href="index.php">Go Back</a>
        <br><br><br><br>

        <div class="well">
            <a href="edit.php?id=<?echo $job->;?>" class="btn btn-default">Edit</a>

            <form action="job.php" style="display:inline;" method="post">
                <input type="hidden" name="del_id" value="<? php $job->id;?>">

                <input type="submit" class="btn btn-danger" value="Delete">

            </form>
        </div>
        <?php include 'include/footer.php' ?>