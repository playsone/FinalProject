<!-- have back btn send to main_get in template -->
<!-- if submit info send to register POST  in route-->

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0099FF;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #33AAFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 600px;
            color: white;
        }
        h2 {
            text-align: center;
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
        }
        .form-row {
            display: flex;
            gap: 10px;
        }
        .form-row .form-group {
            flex: 1;
        }
        .role {
            display: flex;
            gap: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: white;
            color: black;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #dddddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ลงทะเบียน</h2>
        <form action="/register" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label>คำนำหน้า</label>
                    <input type="text" name="prefix">
                </div>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" name="fname" required>
                </div>
                <div class="form-group">
                    <label>นามสกุล</label>
                    <input type="text" name="lname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>อีเมล</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>เบอร์โทร</label>
                    <input type="tel" name="tel" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>อายุ</label>
                    <input type="number" name="age" required>
                </div>
                <div class="form-group">
                    <label>เพศ</label>
                    <input type="text" name="gender">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>วัน / เดือน / ปีเกิด</label>
                    <input type="date" name="dob" required>
                </div>
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <input type="text" name="address">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>ชื่อผู้ใช้</label>
                    <input type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label>รหัสผ่าน</label>
                    <input type="password" name="password" required>
                </div>
            </div>
            <div class="form-group role">
                <label>บทบาท</label>
                <label><input type="radio" name="role" value="organizer"> ผู้จัดงาน</label>
                <label><input type="radio" name="role" value="participant"> ผู้เข้าร่วม</label>
            </div>
            <button type="submit">ตกลง</button>
        </form>
    </div>
</body>
</html>
