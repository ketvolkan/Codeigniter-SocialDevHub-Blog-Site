<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/includes/header.php"); ?>
<?php $this->load->view("admin/includes/navbar.php") ?>
<?php $this->load->view("admin/includes/sidebar.php") ?>

<div class="content-wrapper">
    <?php $this->load->view("admin/includes/content_header.php"); ?>
    <section class="content">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Yükleyen Kullanıcı</th>
                                <th>Oluşturulma Tarihi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($posts as $post) {
                                $user;
                                foreach ($users as $currentUser) {
                                    if ($currentUser->id == $post->id) {
                                        $user = $currentUser;
                                    }
                                }
                                $viewData = [
                                    "user" => $user,
                                    "post" => $post
                                ];

                                $this->load->view("admin/post/list_post_table_row", $viewData);
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>

</div>

<?php $this->load->view("admin/includes/footer.php"); ?>