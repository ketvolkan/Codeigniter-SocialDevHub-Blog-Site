<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/includes/header.php"); ?>
<?php $this->load->view("admin/includes/navbar.php") ?>
<?php $this->load->view("admin/includes/sidebar.php") ?>

<div class="content-wrapper">
    <?php $this->load->view("admin/includes/content_header.php"); ?>
    <section class="content">
        <div class="card card-dark">
            <?php if ($this->input->get("status") != null) {
                if ($this->input->get("status") == true) {
            ?>
                    <div class="alert alert-success" role="alert">
                        Ekleme Başarılı
                    </div>

                <?php
                } else {
                ?>
                    <div class="alert alert-ganger" role="alert">
                        Ekleme Başarısız
                    </div>
            <?php
                }
            } ?>
            <form action="<?php echo base_url("Admin/User/insertUser") ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Ad</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Soyad</label>
                        <input type="text" class="form-control" id="surname" name="surname" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Başlık Girin">
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="row justify-content-center"> <button type="submit" class="btn btn-outline-dark" style="width: 30%;">Ekle</button></div>

                </div>
            </form>
        </div>
    </section>

</div>

<?php $this->load->view("admin/includes/footer.php"); ?>