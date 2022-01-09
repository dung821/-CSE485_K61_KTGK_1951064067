<div style="color: red">
    <?php echo $error; ?>
</div>
<form action="" method="post">
    Name:
    <input type="text"
           name="name"
           value="<?php
           echo isset($_POST['maduan']) ? $_POST['tenduan'] : $duan['tenduan']?>"
    />
    <br />
    <input type="submit" name="submit" value="Update" />
</form>