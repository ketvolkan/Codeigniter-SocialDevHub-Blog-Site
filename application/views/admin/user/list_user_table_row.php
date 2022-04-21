<tr>
    <td>
        <?php
        if ($user->image_url == "") {
        ?>
            <img src="https://i.pinimg.com/474x/d4/1b/b1/d41bb1d779eed0b998a4f67845d12898.jpg" width="50" height="50" style="border-radius:100%" alt="">
        <?php
        } else {
        ?>
            <img src="<?php echo $user->image_url; ?>" width="50" height="50" style="border-radius:100%" alt="">
        <?php
        }
        ?>
    </td>
    <td><?php echo $user->id; ?></td>
    <td><?php echo $user->email; ?></td>
    <td><?php echo $user->name . " " . $user->surname; ?></td>

    <td><a href="<?php echo base_url("Admin/User/Delete?id=$user->id"); ?>"><i class="fas fa-trash " style="color:red"></i></a></td>
</tr>