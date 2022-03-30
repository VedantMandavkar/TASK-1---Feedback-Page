   <?php
        $server = "127.0.0.1:3308";
        $username ="root";
        $password = "";
        $dbname ="complaints";


        $conn = mysqli_connect($server ,$password ,$username ,$dbname );

        if(isset($_POST['submit']))

        {

                $email = $_POST['email'];
                $name = $_POST['name'];
                $roll_number = $_POST['roll_number'];
                $department = $_POST['department'];
                $shift = $_POST['shift'];
                $description = $_POST['description'];

                $query = "insert into feedback values ('$email' , '$name' , '$roll_number' , '$department' , '$shift' , '$description')";

                $run = mysqli_query($conn,$query) ;

                if($run){
                    echo "Form submitted successfully!!!"; 
                    
                }
                else{

                    echo "Form not submitted!!!";
                }

            // }
            // else{ 
            //     echo "all fields required";
            // }

        }


     ?>