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
                <div class="card-body table-responsive p-0" style="height: 750px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ad Soyad</th>
                                <th>Discord</th>
                                <th>Email</th>
                                <th width="100%">Mesaj</th>
                                <th width="20%">Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($messages as $message) {

                                $viewData = [
                                    "message" => $message
                                ];
                                $this->load->view("admin/message/list_message_table_row", $viewData);
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