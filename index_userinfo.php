<div class="row">
		<div class="col-12">
				<br/>
			<a href="user_info_add.php" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i> &nbsp; Add User Info</a>
<br/><br/>

			<table class="table">
  <thead>
    <tr>

     <th scope="col">Username</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
    
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(UserInfo::find_all() as $info ) : ?>
        <?php $user = User::find_by_id($info->user_id); ?>
        <tr>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $info->address; ?></td>
            <td><?php echo $info->contact_numbers; ?></td>
            <td>
            <a href="student_edit.php?id=<?php echo $info->id; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen"></i>&nbsp; Edit</a>
            <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> &nbsp; Delete</button>
            </td>
            
        </tr>

        <?php endforeach; ?>
   
    
  </tbody>
</table>
		</div>
	</div>
</div>