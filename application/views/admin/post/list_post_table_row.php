<tr>
    <td><?php echo $post->id; ?></td>
    <td><?php echo $post->title; ?></td>
    <td><?php
        if (strlen($post->description) >= 150) {
            echo substr($post->description, 0, 150) . "...";
        } else {
            echo $post->description;
        }
        ?></td>
    <td><?php echo $user->name . " " . $user->surname; ?></td>
    <td><?php echo $post->createdAt; ?></td>
    <td><a href="<?php echo base_url("Admin/Post/Update?id=$post->id"); ?>"><i class="fas fa-cogs " style="color:purple"></i></a></td>
    <td><a href="<?php echo base_url("Admin/Post/Delete?id=$post->id"); ?>"><i class="fas fa-trash " style="color:red"></i></a></td>
</tr>