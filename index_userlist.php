 <div class="row">
		<div class="col-12">
				<br/>
			<a href="student_add.php" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i> &nbsp; Add User</a>
<br/><br/>

			<table class="table">
  <thead>
    <tr>

     <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(User::find_all() as $user ) { ?>
    

    <tr>
       <td><?php echo $user->id; ?></td>
      <th scope="row"><?php echo $user->username; ?></th>
      <td><?php echo $user->password; ?></td>
      <td>
      	<a href="student_edit.php?id=<?php echo $user->id; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen"></i>&nbsp; Edit</a>
      	<button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> &nbsp; Delete</button>
      </td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
		</div>
	</div>
</div>