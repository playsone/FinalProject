<!-- show login page -->
 <!-- send info after click login -->
  <!-- send to login post in route -->
<section class="container mt-5">
    <h1 class="text-center mb-4">เข้าสู่ระบบ</h1>

    <form action="/login" method="post" class="shadow p-4 rounded bg-light w-50 mx-auto">
        <div class="mb-3">
            <label for="email" class="form-label">อีเมล:</label>
            <input type="text" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="d-flex justify-content-center mb-3">
            <button type="submit" class="btn btn-primary w-20">เข้าสู่ระบบ</button>
        </div>
    </form>

    <!-- Session message -->
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-warning mt-3 text-center" role="alert">
            <?= $_SESSION['message']; ?>
        </div>
    <?php endif; ?>
</section>

<!-- Include Bootstrap CSS (optional if not already included) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
