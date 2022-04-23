<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/includes/header.php"); ?>
<?php $this->load->view("admin/includes/navbar.php") ?>
<?php $this->load->view("admin/includes/sidebar.php") ?>

<div class="content-wrapper">
    <?php $this->load->view("admin/includes/content_header.php"); ?> <section class="content">
        <div class="card card-dark">
            <?php if ($this->input->get("status") != null) {
                if ($this->input->get("status") == true) {
            ?>
                    <div class="alert alert-success" role="alert">
                        Güncelleme Başarılı
                    </div>

                <?php
                } else {
                ?>
                    <div class="alert alert-ganger" role="alert">
                        Güncelleme Başarısız
                    </div>
            <?php
                }
            } ?> <form action="<?php echo base_url("Admin/Setting/updateSite") ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Site Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->site_title ?>" name="site_title" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Masthead Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->masthead_title ?>" name="masthead_title" required placeholder="Başlık Girin">
                    </div>

                    <div class="form-group">
                        <label for="tinymce">Masthead Açıklama</label>

                        <textarea name="masthead_description" id="description"><?php echo $setting->masthead_description ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">Post Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->post_title ?>" name="post_title" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Hakkımızda Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->about_title ?>" name="about_title" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="tinymce">Hakkımızda Açıklama</label>

                        <textarea name="about_description" id="description"><?php echo $setting->about_description ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Discord Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->discord_title ?>" name="discord_title" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="tinymce">Discord Açıklama</label>

                        <textarea name="discord_description" id="description"><?php echo $setting->discord_description ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Discord URL</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->discord_url ?>" name="discord_url" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">İletişim Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->contact_title ?>" name="contact_title" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">İnstagram</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->instagram ?>" name="instagram" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Github</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->github ?>" name="github" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Tiktok</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->tiktok ?>" name="tiktok" required placeholder="Başlık Girin">
                    </div>
                    <div class="card-footer ">
                        <div class="row justify-content-center"> <button type="submit" class="btn btn-outline-dark" style="width: 30%;">Güncelle</button></div>

                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    tinymce.init({
        selector: '#description'
    });
</script>
<?php $this->load->view("admin/includes/footer.php"); ?>