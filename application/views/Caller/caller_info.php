<?php 
// pagin var
$pagin_limit = 10;
?>
  	 <table class="table table-bordered" >
    <thead>
      <tr>

      </tr>
      <tr class="subhead">
      <td style="width:4%">
        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
        <label for="filled-in-box"></label>       
      </td>
        <td style="width:4%">ID</td>
        <td>Student Name</td>
        <td>Class </td>
        <td>Subject </td>
        <td>Phone No.</td>
        <td>Teacher Name</td>
        <td>Demo</td>
        <td>Last Comment</td> 
       <td>Comment Date</td>
        <th rowspan="2">View </th>
        <th rowspan="2">Edit </th>
        </tr>
    </thead>
    <tbody>
<?php  
$data = getpaginval($caller_info,$pagval,$pagin_limit);

foreach($data as $key=>$row) { ?>      
      <tr>
       <td>
	 	<input type="checkbox" class="filled-in" id="<?php echo $key; ?>" checked="checked" />
      	<label for="<?php echo $key; ?>"></label>
      	</td>
 	 	<td><?php echo $row['id']; ?></td>
 	 	<td><?php echo $row['name']; ?></td>
    <td><?php echo $row['class']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td ><?php echo $row['phone']; ?></td>
    <td><?php echo $row['teacher_name']; ?></td>    
    <td><?php echo $row['demo']; ?></td>
    <td><?php echo $row['comments']; ?></td>
    <td><?php if(!empty($row['caller_date'])) echo date("d-m-Y",$row['caller_date']); ?></td>

    <td><a href="<?php echo HOST.'caller/view/'.$row['id']; ?>" >view</a></td>
    <?php $popupdata = json_encode($row) ?>
    <td><a onclick='yogy.edit_callerinfo(this)' data-action="caller_editpopup" data-caller='<?php echo json_encode($row); ?>' >Edit</a></td>
    </tr>
 <?php } ?>     
      <tr><td colspan="15">
	      	<ul class="pagination">
<?php
    for($i=1;$i<=getpaginrows(count($caller_info),$pagin_limit);$i++):
 ?>
			<li><a onclick="div.pagin(this,$('#callertlb')[0]);" data-paginval="<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php endfor; ?>
      </ul>
		</td>
      </tr>
    </tbody>
  </table>
