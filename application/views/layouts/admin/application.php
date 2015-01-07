<!DOCTYPE html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
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
