<!-- show section of header -->
 <!-- have search link box send to searchEvent get in route -->
  <!-- have register link send to register get in route-->
   <!-- have login link send to login get in route -->

   <!-- show profile icon after login and hide register , login link -->
    <!-- after click profile show list order box have account link send to account get in route -->
    <!-- your event link send to eventpage get in route -->
    <!-- logout link send to home get page and hide profile and show register link, login link -->
    

    <!-- Organizer role -->
    <!-- after login role is organizer show menu request -->
     <!-- after click request menu send to reqEvent_get in route -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav>
        <div>
            <form action="/searchEvent" method="get">
                <input type="text" placeholder="Search Box..." name="searchBox">
                <button type="submit" name="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div>
            <?php
                if (isset($_SESSION['timestamp'])) {
                ?>
                
                <div>
                    <span></span>
                    <div>
                        <a href="#">
                           <img src="" alt=""> 
                        </a>
                    </div>
                </div>

                <div>
                    <a href="/account">ข้อมูลผู้ใช้</a>
                    <a href="/userEvent">กิจกรรมของผู้ใช้</a>
                    <a href="/logout">ออกจากระบบ</a>
                </div>

                <?php
                } else {
                ?>
                    <a href="/login">เข้าสู่ระบบ</a>
                    <a href="/register">ลงทะเบียน</a>
                <?php
                }
            ?>
        </div>

        
        <div>
            <a href="#">
                <img src="" alt="">
            </a>

            <span>
                
            </span>

            <span>

            </span>
        </div>

        <!-- organ role -->
       <div>
            <a href="#">คำขอ</a>
       </div> 
    </nav>



