<?php require_once ("header.php"); ?>

<?php require_once ("sidebar.php"); ?>

<?php 

$title = null;
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else {
	$page = null;
}

if($page == "business"){
	$title = "Business development";
}
if($page == "customer"){
	$title = "Customer support";
}
if($page == "developer"){
	$title = "Developer";
}
if($page == "design"){
	$title = "Design";
}
if($page == "finance"){
	$title = "Finance";
}
if($page == "hr"){
	$title = "HR";
}
if($page == "marketing"){
	$title = "Marketing & communication";
}
if($page == "project"){
	$title = "Project management";
}
if($page == "sales"){
	$title = "Sales";
}

?>

				<div id="box" class="col-md-8">

					<div class="col-md-8 col-md-offset-3 ">
						<h3 id="box-title"> Find a job <span id="header-title-color"><?php echo $title;?></span> </h3>
					</div>

					<div class="col-md-4">
					    <div class="thumbnail">
					      
					      <div class="caption">
					      	
					        <p style="color: rgba(0,0,0,0.5);"> </i>&nbsp Copenhagen &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Full-Time</p>
					        <h3 style="text-align: left;padding-left: 4px;">Fintech Start-up looking for an IOS lead developer</h3>
					        <p style="text-align: left;padding-left: 4px;"><i style='font-size:24px' class='fas'>&#xf6be;</i> <b> MyMonii</b>
					            </p> <footer style="text-align: left;padding-left: 25px;"><small> 5 days ago</small></footer>
					      </div>
					    </div>
					  </div>

					  <div class="col-md-4">
					    <div class="thumbnail">
					      
					      <div class="caption">
					        <p style="color: rgba(0,0,0,0.5);"> </i>&nbsp Copenhagen &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Full-Time</p>
					        <h3 style="text-align: left;padding-left: 4px;">Backend Developer -LAMP and MEAN stack</h3>
					        <p style="text-align: left;padding-left: 4px;"><i style='font-size:24px' class='fas'>&#xf578;</i> <b> Spacero</b>
					            </p> <footer style="text-align: left;padding-left: 25px;"><small> 5 days ago</small></footer>
					      </div>
					    </div>
					  </div>

					  <div class="col-md-4">
					    <div class="thumbnail">
					      
					      <div class="caption">
					        <p style="color: rgba(0,0,0,0.5);"> </i>&nbsp Copenhagen &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Full-Time</p>
					        <h3 style="text-align: left;padding-left: 4px;">Quality Assurance Developer (Student Intern)</h3>
					        <p style="text-align: left;padding-left: 4px;"><i style='font-size:24px' class='fas'>&#xf4ba;</i> <b> Ideanote</b>
					            </p> <footer style="text-align: left;padding-left: 25px;"><small> 5 days ago</small></footer>
					        
					      </div>
					    </div>
					  </div>


					  <div class="col-md-4">
					    <div class="thumbnail">
					      
					      <div class="caption">
					        <p style="color: rgba(0,0,0,0.5);"> </i>&nbsp Copenhagen &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Full-Time</p>
					        <h3 style="text-align: left;padding-left: 4px;">Student Backend Developer for Agraba</h3>
					        <p style="text-align: left;padding-left: 4px;"><i style='font-size:24px' class='fas'>&#xf6d5;</i> <b> Agraba</b>
					            </p> <footer style="text-align: left;padding-left: 25px;"><small> 5 days ago</small></footer>
					      </div>
					    </div>
					  </div>

					  <div class="col-md-4">
					    <div class="thumbnail">
					      
					      <div class="caption">
					        <p style="color: rgba(0,0,0,0.5);"> </i>&nbsp Copenhagen &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Full-Time</p>
					        <h3 style="text-align: left;padding-left: 4px;">Partner/Co-Founder for bike tech B2C</h3>
					        <p style="text-align: left;padding-left: 4px;"><i style='font-size:24px' class='fas'>&#xf6f0;</i> <b> Team ZWATT</b>
					            </p> <footer style="text-align: left;padding-left: 25px;"><small> 5 days ago</small></footer>
					      </div>
					    </div>
					  </div>

					  <div class="col-md-4">
					    <div class="thumbnail">
					      
					      <div class="caption">
					        <p style="color: rgba(0,0,0,0.5);"> </i>&nbsp Copenhagen &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Full-Time</p>
					        <h3 style="text-align: left;padding-left: 4px;">Senior Full-Stack Developer with Co-Founder potential</h3>
					        <p style="text-align: left;padding-left: 4px;"><i style='font-size:24px' class='fas'>&#xf520;</i> <b> LifeX</b>
					            </p> <footer style="text-align: left;padding-left: 25px;"><small> 5 days ago</small></footer>
					      </div>
					    </div>
					  </div>


				</div>


<?php require_once ("footer.php"); ?>			