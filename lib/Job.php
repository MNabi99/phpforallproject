<?php 
   class Job{

    private $db;
    public function __construct(){
        $this->db = new Database;

    }
    // make function to gett all job or fetch all job
    // Get all jobs

    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname
            FROM jobs 
            INNER JOIN categories
            ON jobs.category_id = categories.id
            ORDER BY post_date DESC"
        );

        //  here Set a resultSet or Assign a result to the above and use it in INDEX.PHP.
        $results = $this->db->resultSet();
        return $results;
        //  now take this to index.php 
    }
    public function getCategories(){
        $this->db->query("SELECT *FROM categories.name ");
       
        $results = $this->db->resultSet();
        return $results;

    }
    //  Get Jobs By Category
    public function getByCategory($category){
        $this->db->query("SELECT jobs.*, categories.name AS cname
            FROM jobs 
            INNER JOIN categories
            ON jobs.category_id = categories.id
            WHERE jobs.category_id = $category 
            ORDER BY post_date DESC");

        //  here Set a resultSet or Assign a result to the above and use it in INDEX.PHP.
        $results = $this->db->resultSet();
        return $results;
    }
        //  Get Category

    public function getCategory ($category){
        $this->db->query("SELECT * FROM getCategories WHERE id = :category-id");

        $this->db->bind(':category_id', $category_id);

        $row = $this->db->single();
        return $row;
    }

    // Get Job 
    public function getJob($id){
        $this->db->query("SELECT * FROM jobs WHERE id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    //  Create Job
    public function create($data){
        // Insert a voll Query about insert data in form Below
        $this->db->query("INSERT INTO jobs ( category_id, job_title, company, description, loacation, 
        salary, contct_user, contact_email )
        VALUES( :category_if, :job_title, :company, :description, :location,
        :salary, :contact_user, :contact_email )
        ");

        // Bind Data
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':job_title', $data['job_title']);
            $this->db->bind(':company', $data['company']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':loaction', $data['loaction']);
            $this->db->bind(':salary', $data['salary']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);
            // Execute

            if($this->db->execute()){
                return true;
            
            } else{
                return false;
            }

    }

    public function delete($id){
        // Insert a voll Query about insert data in form Below
        $this->db->query("DELETE FROM jobs WHERE id = $id");

        // Execute

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    // Update Job
    public function update($id, $data)
    {
        // Insert a voll Query about insert data in form Below
        $this->db->query(" UPDATE jobs 
        SET 
        category_id = :category_id,
        job_title = :job_title,
        company = :company,
        description = description,
        location = location,
        salary = salary,
        contact_email = contact_email
        WHERE id = $id
        ");

        // Bind Data
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':loaction', $data['loaction']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);
        // Execute

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}





?>