<?php
load_view("Template/top.php",$inp);
load_view("Template/navbarnew.php",$inp);
?>
	<main class="profile">
		<div class="container">
			<ul id="profiletabs" class="row" role="tablist">
				<li role="presentation" class="active col-md-3 col-xs-6">
					<a id="profiletabs1" href="#tab_profile" aria-controls="Profile" role="tab" data-toggle="tab">
						Profile
					</a>
				</li>
				<li role="presentation" class="col-md-3 col-xs-6">
					<a id="profiletabs2" href="#tab_classes" aria-controls="Classes" role="tab" data-toggle="tab">
						Classes
					</a>
				</li>
				<li role="presentation" class="col-md-3 col-xs-6">
					<a id="profiletabs3" href="#tab_reviews" aria-controls="Reviews" role="tab" data-toggle="tab">
						Reviews
					</a>
				</li>
				<li role="presentation" class="col-md-3 col-xs-6">
					<a id="profiletabs4" href="#tab_account" aria-controls="Account" role="tab" data-toggle="tab">
						Account
					</a>
				</li>
			</ul>
			<div class="tab-content row">
				<div id="tab_profile" class="active tab-pane col-xs-12" role="tabpanel">
				<?php
					load_view("Template/studentprofile_about.php", $inp);
				?>
				</div>
				<div id="tab_classes" class="tab-pane col-xs-12" role="tabpanel">
				<?php
					load_view("Template/studentprofile_classes.php", $inp);
				?>
				</div>
				<div id="tab_reviews" class="tab-pane col-xs-12" role="tabpanel">
				<?php
					load_view("Template/studentprofile_reviews.php", Fun::mergeifunset($inp, array("reviewname" => "teachername")));
				?>
				</div>
				<div id="tab_account" class="tab-pane col-xs-12" role="tabpanel">
				<?php
					load_view("Template/moneyaccount.php", $inp);
				?>
				</div>
			</div>
		</div>
	</main>

<?php
load_view("Template/footer.php",$inp);
load_view("popup.php", array("name" => "writereview", "body" => "Template/reviewform.php", "divs" => "padding:0px;"));

load_view("Template/bottom.php",Fun::mergeifunset($inp,array("needbody"=>false)));
?>
	<script src="js/studentprofile.js"></script>
	<script type="text/javascript">
		$("#review_stars").raty();
	</script>
</body>
</html>