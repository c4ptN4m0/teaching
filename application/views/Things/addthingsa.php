<form role="form" method="post" onsubmit="return form.req(this)" data-action="<?php echo $thingsa_details['action'] ?>" data-res="div.reload($('#thingsatbl')[0]);success.push('Data Updated Successfully!!');mohit.popup_close('<?php echo $thingsa_details['popup_close']  ?>');div.reload($('#thingsa_regform')[0]);">
  <input type="hidden" name="id" value="<?php echo $thingsa_details['id'] ?>">
  <div class="row">
    <div class="col-xs-12 col-md-6">
           <select  class="browser-default" name="category" >
        <?php if(!empty($thingsa_details['category'])): ?>
            <option value="<?php echo $thingsa_details['category']; ?>"selected><?php echo $thingsa_details['category']; ?></option>  
          <?php else: ?>
        <option value="" disabled="disabled" selected="selected">Category</option>
        <?php endif; ?>
        <option value="Money Transaction">Money Transaction</option>
        <option value="Student">Student</option>
        <option value="Teacher">Teacher</option>
        <option value="Planning">Planning</option>
        <option value="Marketing">Marketing</option>
        <option value="Team">Team</option>
        <option value="Website">Website</option>
        <option value="Funding">Funding</option>
        <option value="PR">PR</option>
        <option value="Admin">Admin</option>
        <option value="Study">Study</option>
        <option value="Buy">Buy</option>
        </select>
    </div>
    <div class="col-xs-12 col-md-6">
      <input type="text" name="details"  placeholder="Details" value="<?php echo $thingsa_details['details']; ?>">
    </div> 
  </div>
  <div class="row">
    <div class=" col-xs-12 col-md-6">
           <select  class="browser-default" name="responsibility" >
        <?php if(!empty($thingsa_details['responsibility'])): ?>
            <option value="<?php echo $thingsa_details['responsibility']; ?>"selected><?php echo $thingsa_details['responsibility']; ?></option>  
          <?php else: ?>
        <option value="" disabled="disabled" selected="selected">Responsibility</option>
        <?php endif; ?>
        <option value="Himanshu Jain">Himanshu Jain</option>
        <option value="Ashish Anand">Ashish Anand</option>
        <option value="Narayan">Narayan</option>
        <option value="Yogesh Saini">Yogesh Saini</option>
        <option value="Yogendra">Yogendra</option>
        <option value="Anupriya Jain">Anupriya Jain</option>
        </select>
    </div>
    <div class=" col-xs-12 col-md-6">
           <input type="date" class="browser-default" name="due_date" placeholder="Due Date" >
      </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6">
           <select  class="browser-default" name="status" >
        <?php if(!empty($thingsa_details['status'])): ?>
            <option value="<?php echo $thingsa_details['status']; ?>"selected><?php echo $thingsa_details['status']; ?></option>  
          <?php else: ?>
        <option value="" disabled="disabled" selected="selected">Status</option>
        <?php endif; ?>
        <option value="Started">Started </option>
        <option value="WIP">WIP</option>
        <option value="Completed">Completed </option>
        </select>
    </div>
        <div class="col-xs-12 col-md-6">
      <textarea name="comments" placeholder="Comment"><?php echo $thingsa_details['comment']; ?></textarea>
    </div>

  </div>
  <hr>
  <div class="row">
    <div class="col-xs-12 col-md-6 mt20">
      <button type="submit" class="btn">Submit</button>
    </div> 
  </div>
</form>