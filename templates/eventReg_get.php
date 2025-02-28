<!-- have back btn send to event get in template -->
<!-- show form for register in event -->
 <!-- after click submit send to eventReg post in route -->

 <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="form-title">แบบฟอร์มลงทะเบียน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0099FF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .header {
            width: 100%;
            background: #0066CC;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 18px;
        }
        .header span {
            margin-left: 10px;
        }
        .container {
            background: #DDDDDD;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 700px;
            color: black;
            margin-top: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 15px;
            color: black;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background: #0099FF;
            color: white;
        }
        .form-row {
            display: flex;
            gap: 10px;
        }
        .form-row .form-group {
            flex: 1;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #0099FF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background: #0077CC;
        }
    </style>
    <script>
        function updateFormTitle(activity) {
            document.getElementById("form-title").innerText = "แบบฟอร์มลงทะเบียน " + activity;
            document.getElementById("form-header").innerText = "แบบฟอร์มลงทะเบียน " + activity;
        }
    </script>
</head>
<body onload="updateFormTitle('แข่งขันวิ่งมาราธอน')">
    <div class="header">
        <span>⬅ MARATHON</span>
        <span>Bonshai <img src="profile.jpg" alt="Profile" width="30" height="30" style="border-radius: 50%;"></span>
    </div>
    <div class="container">
       <h2 id="form-header">แบบฟอร์มลงทะเบียนแข่งขันวิ่งมาราธอน</h2>
        <form action="/EventReg" method="POST">
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
            <a href="/cus_reg_event?cid=<?= $cus_reg_event['cid'] ?>" 
                class="btn btn-success btn-sm"
                onclick="return confirm('คุณต้องการลงทะเบียนในวิชา <?= htmlspecialchars($event['e_name']) ?> ใช่หรือไม่?');">
                 ลงทะเบียน
             </a>
        </form>
    </div>
</body>
</html>
