<?php
load_view("Template/top.php");
load_view("Template/navbarnew.php");
?>

  <main>
    <div class="container">
    <div class="section">
    <div class="row">
    <div class="col s12  l12">
        <div class="card-panel  grey lighten-2 ">
            <div class="row">
                <div class="col l3">
        <img class="materialboxed" width="200" src="images/facebook.png">
                </div>
                <div class="col l1">    
            <div class="fixed-action-btn" >
    <a class="btn-floating btn-small red">
      <i class="large mdi-navigation-apps"></i>
    </a>
    <ul>
        <li><a data-position="right" data-delay="50" data-tooltip="Add Image" class="btn-floating red darken-1 tooltipped"><i class="large mdi-social-group-add"></i></a></li>
        <li><a  data-position="right" data-delay="50" data-tooltip="Edit Text" class="btn-floating blue darken-1 tooltipped"><i class="large mdi-editor-border-color"></i></a></li>      
        <li><a data-position="right" data-delay="50" data-tooltip="Edit Profile" class="btn-floating  tooltipped green"><i class="large mdi-image-edit"></i></a></li>
    </ul>
  </div>
        </div>
                <div class="col l5 offset-l2">
                <div class="card-panel_sub grey lighten-3">
                    Hi,I'm Pranav
                    </div>
                     
                </div>
            </div>
        </div>
        </div>

    <div class="col s12 l12">
      <ul class="tabs teal-text text-lighten-1 ">
        <li class="tab col s3"><a href="#test1">Profile</a></li>
        <li class="tab col s3"><a  href="#test2">Calender</a></li>
        <li class="tab col s3"><a  href="#test3">Topic</a></li>
        <li class="tab col s3"><a  href="#test4">My Classes</a></li>     
      </ul>
    </div>
       </div>
       </div>
</main>
        <div id="test1" class="col s12">
          <?php
            load_view("profileabout.php");
          ?>
        </div>
        <div id="test2" class="col s12">
          <?php
            load_view("cal.php",$calinfo);
          ?>
        </div>
        <div id="test3" class="col s12"></div>
        <div id="test4" class="col s12"></div>
        </div>

<?php
load_view("Template/footernew.php");
load_view("popup.php",array("name"=>"timeslot"));
load_view("Template/bottom.php");
?>