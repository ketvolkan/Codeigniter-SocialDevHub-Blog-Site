<tr>
    <td><?php echo $message->id; ?></td>
    <td><?php echo $message->name; ?></td>
    <td><?php echo $message->discord; ?></td>
    <td><?php echo $message->email; ?></td>
    <td><?php echo substr($message->message, 0, 150); ?></td>
    <td><a href="<?php echo base_url("Admin/Contact/Delete?id=$message->id"); ?>"><i class="fas fa-trash " style="color:red"></i></a></td>
</tr>