<!DOCTYPE html>
<head>
<title>Admin Panel</title>

</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('layouts/admin/_header'); ?>
        <?php $this->load->view('layouts/admin/_navigation'); ?>
            <?= $body ?>
        <?php $this->load->view('layouts/admin/_footer'); ?>
    </div>
</body>
</html>
