<!-- check duplicate reg -->
 <!-- insert data to db -->
  <!-- send to event get in template -->

  <?php
if (isset($_POST["submit"])) {
    $cid = $_POST["cid"];
    

    $stmt = $conn->prepare("SELECT * FROM cus_reg_event WHERE cid = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = 'คุณได้ลงทะเบียนเข้าร่วมกิจกรรมนี้แล้ว!';
        renderView('eventReg_get');
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO registrations (rid, eid, cid, status,) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiii", $rid, $eid, $cid, $status);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'ลงทะเบียนสำเร็จ!';
        renderView('register_get',['data'=>$_POST]);
        exit();
    } else {
        $_SESSION['error'] = 'เกิดข้อผิดพลาด กรุณาลองใหม่!';
        renderView('eventReg_get');
        exit();
    }
}
?>
