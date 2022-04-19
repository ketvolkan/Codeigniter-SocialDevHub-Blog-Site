<tr>
    <td><?php echo $post->id; ?></td>
    <td><?php echo $post->title; ?></td>
    <td><?php echo substr($post->description, 0, 150) . "..."; ?></td>
    <td><?php echo $user->name . " " . $user->surname; ?></td>
    <td><?php echo $post->createdAt; ?></td>
</tr>