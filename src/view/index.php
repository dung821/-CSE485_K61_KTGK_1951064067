<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/message.php';
?>

<a href="index.php?controller=book&action=add">
    Thêm mới dự án
</a>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>maduan</th>
        <th>ten</th>
        <th></th>
    </tr>
    <?php if (!empty($duan)): ?>
        <?php foreach ($duan AS $book) : ?>
            <tr>
                <td><?php echo $book['maduan'] ?></td>
                <td><?php echo $book['tenduan'] ?></td>
                <td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=duan&action=detail&id=" . $duan['maduan'];
                    $urlEdit =
                        "index.php?controller=duan&action=edit&id=" . $duan['maduan'];
                    $urlDelete =
                        "index.php?controller=duan&action=delete&id=" . $duan['maduan'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>