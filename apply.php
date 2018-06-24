<?php
    if(isset($_POST['apply']))
    {
        include ("dbconnection.php"); 
        $name =$_POST['name'];
        $email =$_POST['email'];
        $contact =$_POST['contact'];
        $course_name =$_POST['course_name'];
        $course_duration =$_POST['course_duration'];
        $insert ="INSERT INTO `user_details`(`name`, `email`, `contact`, `course_name`, `course_duration`,`apply_date`) VALUES ('$name','$email','$contact','$course_name','$course_duration',NOW())";

        $run_insert =mysqli_query($con, $insert);
        if($run_insert)
        {
            echo "<script>alert('You applied successfully!!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Sorry Data cannot be submitted!!')</script>";
        }
    }                     
?>