<!-- after user input info and press submit btn info will send to this file by POST-->
<!-- insert info to database -->
<!-- send to register get in template-->
<!-- check duplicate username  hash password  check duplicate email -->

<?php
    if(isset($_POST["submit"])){
        if($_POST["pwd"] !== $_POST["pwd2"]){ 
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            renderView('register_get');
            exit();
        }

       // $result = getUser();
        foreach($result as $row){
            if($row['email'] == $_POST['email']){
                $_SESSION['error'] = 'มีผู้ใช้ที่อยู่อีเมลนี้แล้ว';
                renderView('register_get');
                exit();
            }
        }
     }
       // register_User($_POST['fname'], $_POST['lname'], $_POST['gender'], $_POST['phone'], $_POST['role'], $_POST['bod'], $_POST['email'],$_POST['pwd'],$_POST['saj'],$_POST['rd']);
        renderView('register_get',['data'=>$_POST]);
        exit();
    }
    ?>




