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
<html>

<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding-top: 20px;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            font-size: 2.5rem;
            margin: 0;
        }
        nav {
            background-color: #f8f9fa;
            padding: 15px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        nav a {
            margin: 0 20px;
            font-size: 1.2rem;
            text-decoration: none;
            color: #007bff;
            padding: 8px 16px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #007bff;
            color: white;
        }
        nav a.active {
            background-color: #0056b3;
            color: white;
        }

       
    </style>
    <script>
        function confirmWithdraw(event, element) {
            let confirmMessage = "คุณแน่ใจหรือไม่ว่าต้องการถอนรายวิชานี้?";
            if (!confirm(confirmMessage)) {
                event.preventDefault(); 
            }
        }
    </script>
    
</head>

<body>

    <!-- Header Section -->
    <header>
        <h1>ระบบกิจกรรม</h1>
    </header>

    <!-- Navigation Section -->
    <nav class="text-center">
        <a href="/" class="<?= (basename($_SERVER['REQUEST_URI']) == 'index.php') ? 'active' : ''; ?>">หน้าแรก</a>
        <?php
        if (isset($_SESSION['timestamp'])) {
        ?>
            <a href="/profile" class="<?= (basename($_SERVER['REQUEST_URI']) == 'profile.php') ? 'active' : ''; ?>">ข้อมูลนักเรียน</a>
            <a href="/courses" class="<?= (basename($_SERVER['REQUEST_URI']) == 'event.php') ? 'active' : ''; ?>">รายวิชา</a>
            <a href="/courses" class="<?= (basename($_SERVER['REQUEST_URI']) == 'event.php') ? 'active' : ''; ?>">รายวิชา</a>
            <a href="/logout" class="<?= (basename($_SERVER['REQUEST_URI']) == 'logout.php') ? 'active' : ''; ?>">ออกจากระบบ</a>
        <?php
        } else {
        ?>
            <a href="/login" class="<?= (basename($_SERVER['REQUEST_URI']) == 'login.php') ? 'active' : ''; ?>">เข้าสู่ระบบ</a>
            <a href="/register">ลงทะเบียน</a>
        <?php
        }
        ?>
    </nav>








