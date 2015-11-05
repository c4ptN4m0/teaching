<?php //print_r($teaching_info); ?><div class="well mt10">
<div class="row">
			<div class="col-sm-3">
				<h4>Personal Details:</h4>
				 	<div class="row">
					 	<div class="col-sm-5">
					 		Name :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['name']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Mobile No :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['phone']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Email-Id :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['email']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Created :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php if(!empty($caller_info['created_at'])) echo date("d-M-Y",$caller_info['created_at']); ?>
					 	</div>
					</div>
			</div>
			<div class="col-sm-3">
			 	<h4>Academic Details:</h4>
			 		<div class="row">
					 	<div class="col-sm-5">
					 		Class :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['class']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Subject :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['subject']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Board :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['board']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Tution Type :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['tution_type']; ?>
					 	</div>
					</div>
			</div>
			<div class="col-sm-3">
			 	<h4>Teacher Details:</h4>
			 		<div class="row">
					 	<div class="col-sm-5">
					 		Name :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $teaching_info['name']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Mobile No. :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $teaching_info['phone']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Email-Id  :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $teaching_info['email']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		City  :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $teaching_info['city']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Demo :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $teaching_info['demo']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Fees :
					 	</div>
					 	<div class="col-sm-7">
					 		Rs. <?php echo $teaching_info['fees']; ?>
					 	</div>
					</div>

			</div>
			<div class="col-sm-3">
			 	<h4>Caller Details:</h4>
			 		<div class="row">
					 	<div class="col-sm-5">
					 		Caller Name :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['caller_name']; ?>
					 	</div>
					</div>
					<div class="row">
					 	<div class="col-sm-5">
					 		Relation :
					 	</div>
					 	<div class="col-sm-7">
					 		<?php echo $caller_info['caller_rel']; ?>
					 	</div>
					</div>
			</div>
		</div>
</div>
<div class="well">
	<div class="row">
	<div class="col-xs-5">
		<h4 style="margin-top:-10px">Add New Call Comment:</h4>
		<form role="form" method="post" onsubmit="return form.req(this)" data-action="calldetails" data-res="success.push('Call Details Added Successfully!!');mohit.popup_close('callerhistorypopup');div.reload($('#calldetail')[0]);div.reload($('#caller_basic_info')[0]);">
			<input type="hidden" name="st_id" value="<?php echo $caller_info['id']; ?>">
			<div class="row">
	    		<div class="col-xs-12">
	      			<label>Comments:</label>
	      			<textarea name="comments" ></textarea>
	    		</div>
			  </div><div class="row mt10">			
    <div class="col-xs-4">
    	<label>Demo:</label>
      <select  class="browser-default" name="demo">
        <option value="" disabled="disabled" selected="selected">Demo Fixed</option>
        <?php if(!empty($teaching_info['demo'])): ?>
        <option value="<?php echo $teaching_info['demo']; ?>" selected="selected"><?php echo $teaching_info['demo']; ?></option>	
        <?php endif; ?>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        <option value="Accepted">Accepted</option>
        <option value="Rejected">Rejected</option>
        <option value="Rescheduled">Rescheduled</option>
        <option value="Others">Others</option>
      </select>    
    </div> 
    <div class="col-xs-4">
      <label>Teacher:</label>
      <select  class="browser-default" name="teacher_id">
        <?php if(!empty($teaching_info['name'])): ?>
        <option value="<?php echo $teaching_info['teacher_id']; ?>" selected><?php echo $teaching_info['name']; ?> </option>
        <?php else: ?>
        <option value="" disabled="disabled" selected="selected">Select A teacher</option>
        <?php endif; ?>	
        <?php foreach($teacher_info as $row): ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>
        <?php endforeach; ?>
      </select>  

    </div>
     <div class="col-xs-4">
     	<label>Fees agreed:</label>
       <input type="text" name="fees"  value="<?php echo $teaching_info['fees']; ?>">
    </div>
    </div><div class="row mt10">
    <div class="col-xs-12">
      		<button type="submit" class="btn">Submit</button>
    </div> 
  </div>	

</form>
	</div>
	<div class="col-xs-4">
		<h4 style="margin-top:-10px">Send A Message:</h4>
    <form role="form" method="post" onsubmit="return form.req(this)" data-action="caller_sendmsg" data-res="success.push('Message Sent Successfully!!');">
		<div class="row">
    
    </div>
    <div class="row">
      <div class="col-xs-12">
      <label>Subject:</label>
      <input type="text" name="sub">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
      <label>Message</label>
  	      	<textarea name="msg" ></textarea>
  	   </div>
			</div>
        <div class="row mt10">			
        <div class="col-xs-3">
       <input type="checkbox" class="filled-in" id="sms" name="sms" checked />
        <label for="sms">SMS</label>
    </div>
    <div class="col-xs-3">
       <input type="checkbox" class="filled-in" id="email" name="email" checked />
        <label for="email">Email</label>
    </div>
        <div class="col-xs-5">
      		<button type="submit" class="btn">Send</button>

	</div>
	</div>
</form>
</div>
<div class="col-xs-3">
<h4 style="margin-top:-10px">Send Prefix Mails:</h4>
<?php $sdetails = array("name"=>$caller_info['name'],"email"=>$caller_info['email']);
	  $tdetails = array("name"=>$teaching_info['name'],"email"=>$teaching_info['email']);	
 ?>
<form role="form" method="post" onsubmit="return form.req(this)" data-action="caller_prefixmails" data-res="success.push('Mail Sent Successfully!!');" >
    <input type="hidden" name="sdetails" value='<?php echo json_encode($sdetails);?>'>
    <input type="hidden" name="tdetails" value='<?php echo json_encode($tdetails);?>'>
    <div class="row">
      <div class="col-xs-12">
      <select class="browser-default" name="mailtype" >
        <option value="intro">Introduction</option>
        <option value="demoschedule">Demo Class Schedule</option>
        <option value="demoaccepted">Demo Class Accepted</option>
        <option value="demorejected">Demo Class Rejected</option>
        <option value="feedbackp">Feedback Positive</option>
        <option value="feedbackn">Feedback Nagitave</option>
        <option value="pymntsmry">Payment Summery</option>
      </select>
    </div>
</div>
    <div class="row mt20">
    <div class="col-xs-6 ">
       <input type="checkbox" class="filled-in" id="teacherc" name="teacherc" checked />
        <label for="teacherc">Teacher</label>
    </div>
    <div class="col-xs-6">
       <input type="checkbox" class="filled-in" id="studentc" name="studentc" checked />
        <label for="studentc">Student</label>
    </div>
    </div>
    <div class="row mt20">
          <div class="col-xs-12">
          <button type="submit" class="btn">Send</button>
          </div>
    </div>
   </form>
</div>
</div>
</div>
