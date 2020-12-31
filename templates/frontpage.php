<?php include 'include/header.php' ?>


<div class="bg-light">
    <h1>Find a Job</h1>
    <form action="GET" action="index.ph">
        <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id;?> ">
                <?php echo $category->name;?></option>
                <?php endforeach;?>
        </select>
        <br>
        <input type="submit" class="btn btn-lg btn-success" value="FIND">
    </form>
    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
            <img class="me-3" src="/docs/5.0/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1"><?php echo SITE_TITLE ?></h1>
                <small>Since 2001</small>
            </div>
        </div>

        <!-- st 1  -->
        <!-- here bleow ist foreach loop to fetch all job from Database,  ref Job Class ( ref job.php) und $template->job in( index.php) -->

                <h3><?php echo $title; ?></h3>
        <?php 
        foreach($jobs as $job): ?>
        <div class="container">
            <div class="row">
                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <div class="d-flex text-muted pt-3">
                        <div class="col-md-10">
                            <h4><?php echo $job->job_title; ?></h4>
                            <p> <?php echo $job->description; ?> </p>
                        </div>
                        <div class="col-md-2">
                            <a href="job.php?id=<?php echo $job->id?>" class="btn btn-default">View </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- st closed -->

        <!-- st 1  -->
        <div class="container">
            <div class="row">
                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <div class="d-flex text-muted pt-3">
                        <div class="col-md-10">
                            <h4>Subheading</h4>
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi optio accusantium atque praesentium saepe nostrum. </p>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-default">View </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- st closed -->




    </main>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="offcanvas.js"></script>

</div>

<?php include 'include/footer.php' ?>