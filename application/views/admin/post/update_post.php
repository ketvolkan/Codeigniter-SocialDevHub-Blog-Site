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
            } ?>
            <form action="<?php echo base_url("Admin/Post/updatePost") ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $post->title;  ?>" name="title" required placeholder="Başlık Girin">
                    </div>


                    <div class="form-group">
                        <label for="tinymce">İçerik</label>

                        <textarea name="description" id="description"><?php echo $post->description;  ?></textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $post->id;  ?>">
        </div>

        <div class="card-footer ">
            <div class="row justify-content-center"> <button type="submit" class="btn btn-outline-dark" style="width: 30%;">Güncelle</button></div>

        </div>
        </form>
</div>
</section>
<script>
    tinymce.init({
        selector: '#description'
    });
</script>
</div>
<?php $this->load->view("admin/includes/footer.php"); ?>