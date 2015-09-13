Edit your notes:


<h1>Note</h1>

<form method="post" action="<?php echo URL; ?>note/create">
  <label>title</label><input type="text" name="title"/><br/>
  <label>content</label><textarea name="content"></textarea><br/>
  <label>&nbsp;</label><input type="submit"/>
</form>

<hr/>

<table class="table table-striped">
<thead>
<th>Title</th>
<th>Date Added</th>
<th colspan="2">Actions</th>
</thead>
<tbody>
  <?php
  foreach ($this->noteList as $key => $value) {
    ?>
    <tr>
      <td><?php echo $value['title']; ?></td>
      <td><?php echo $value['date_added']; ?></td>
      <td><a href="<?php echo URL . 'note/edit/' . $value['noteid']; ?>">Edit</a></td>
      <td><a class="delete" href="<?php echo URL . 'note/delete/' . $value['noteid']; ?>">Delete</a></td>
    </tr>
  <?php
  }
  ?>
</tbody>
</table>

<script>
  $(function () {

    $('.delete').click(function (e) {
      var c = confirm("Are you sure you want to delete?");
      if (c == false) return false;

    });

  });
</script>