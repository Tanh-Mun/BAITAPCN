<?php
$name = "Trần Tuấn Anh"; // Thay bằng tên của bạn
$student_id = "224001771"; // Thay bằng Mã sinh viên
$class = "Công nghệ thông tin";
$bio = "Đam mê lập trình web, thiết kế giao diện và phát triển các hệ thống quản lý.";

$projects = [
    [
        "title" => "Hệ thống Quản lý Thư viện (Library Management)",
        "tech" => "PHP, MySQL, HTML/CSS, Bootstrap",
        "description" => "Website hỗ trợ quản lý sách, độc giả, mượn/trả sách và thống kê báo cáo theo chuẩn 3NF.",
        "link" => "#"
    ],
    [
        "title" => "Website Dịch vụ Du lịch Đà Nẵng",
        "tech" => "HTML5, CSS3, JavaScript, PHP",
        "description" => "Trang web đặt tour du lịch, thuê xe tự lái và tìm kiếm các điểm đến nổi tiếng tại Đà Nẵng.",
        "link" => "#"
    ],
    [
        "title" => "Ứng dụng Quản lý Kho Hàng (Inventory Management)",
        "tech" => "Java, JSP/Servlet, MVC Architecture",
        "description" => "Hệ thống quản lý hàng tồn kho, nhập/xuất kho và phân quyền người dùng.",
        "link" => "#"
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu bản thân - <?php echo $name; ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; color: #333; line-height: 1.6; padding: 20px; }
        .container { max-width: 900px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; border-bottom: 3px solid #3498db; padding-bottom: 10px; margin-bottom: 20px; }
        h2 { color: #2980b9; margin-top: 30px; margin-bottom: 15px; }
        .profile-info p { font-size: 1.1em; margin-bottom: 8px; }
        .profile-info strong { color: #34495e; }
        .project-card { background: #f8f9fa; border-left: 4px solid #3498db; padding: 15px; margin-bottom: 15px; border-radius: 0 5px 5px 0; }
        .project-card h3 { color: #2c3e50; margin-bottom: 5px; }
        .project-card .tech { font-weight: bold; color: #e67e22; font-size: 0.9em; margin-bottom: 8px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Hồ sơ Cá nhân</h1>
    
    <div class="profile-info">
        <p><strong>Họ và tên:</strong> <?php echo $name; ?></p>
        <p><strong>Mã sinh viên:</strong> <?php echo $student_id; ?></p>
        <p><strong>Lớp/Chuyên ngành:</strong> <?php echo $class; ?></p>
        <p><strong>Giới thiệu:</strong> <?php echo $bio; ?></p>
    </div>

    <h2>Các dự án Lập trình Web & Phần mềm đã thực hiện</h2>
    
    <?php foreach ($projects as $project): ?>
        <div class="project-card">
            <h3><?php echo $project['title']; ?></h3>
            <div class="tech">Công nghệ: <?php echo $project['tech']; ?></div>
            <p><?php echo $project['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>