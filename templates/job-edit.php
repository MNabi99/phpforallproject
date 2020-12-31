<?php include 'include/header.php'; ?>

<h2 class="page-header">Edit Job listing</h2>

<form action="edit.php?id<?php echo $job->id; ?>" method="post">
    <div class="form-group">
        <label>
            Company
        </label>
        <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="form-control" name="category">
            <option value="0">Choose Category</option>
            <?php foreach ($categories as $category): ?>
            <?php if($job->$category-> == $category->): ?>
                <option value="<?php echo $category->id; ?>" selected>
                    <?php echo $category->name; ?>
                </option>
            <?php else:?>
                <option value="<?php $category->id;?>">
            <?php echo $category->name;?> </option>
            <?php endif;?>

            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>
            Job Title
        </label>
        <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
    </div>

    <div class="form-group">
        <label>
            description
        </label>
        <textarea type="text" class="form-control" name="description" value="<?php echo $job->description; ?>"></textarea>
    </div>

    <div class="form-group">
        <label>
            Location
        </label>
        <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
    </div>

    <div class="form-group">
        <label>
            Salary
        </label>
        <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
    </div>

    <div class="form-group">
        <label>
            Contact User
        </label>
        <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
    </div>

    <div class="form-group">
        <label>
            Contact Email
        </label>
        <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
    </div>
    <input type="submit" class="btn btn-default" value="Submit" name="submit">
</form>
<?php include 'include/footer.php'; ?>
