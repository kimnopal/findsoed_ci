<html>

<head>
  <title>Findsoed</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Findsoed</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories">Kategori</a></li>
          <?php if (!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Masuk</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Daftar</a></li>
          <?php endif; ?>
          <?php if ($this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Buat Post</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Buat Kategori</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Keluar</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <?php if ($this->session->flashdata('success_register_user')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_register_user') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success_create_post')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_create_post') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success_update_post')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_update_post') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success_create_category')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_create_category') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success_delete_post')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_delete_post') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error_user_login')): ?>
      <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('error_user_login') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success_user_login')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_user_login') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success_user_logout')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_user_logout') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success_delete_category')): ?>
      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('success_delete_category') . '</p>'; ?>
    <?php endif; ?>