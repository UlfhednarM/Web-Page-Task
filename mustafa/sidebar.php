
<?php 


$page = $_GET['page'];


?>



		<div id="sidebar-left" class="col-md-4">
					<h3 id="sidebar-title" class="text-center">Explore<br> by category</h3>

					<br>
					<ul class="list-group ">
					
					  <li class="list-group-item <?php if($page == "business"){ echo "list-active"; }?>"><a href="content.php?page=business">Business development </a></li>

					  <li class="list-group-item <?php if($page == "customer"){ echo "list-active"; }?>"><a href="content.php?page=customer">Customer support</a></li>

					  <li class="list-group-item <?php if($page == "developer"){ echo "list-active"; }?>"><a href="content.php?page=developer">Developer</a></li>

					  <li class="list-group-item <?php if($page == "design"){ echo "list-active"; }?>"><a href="content.php?page=design">Design</a></li>

					  <li class="list-group-item <?php if($page == "finance"){ echo "list-active"; }?>"><a href="content.php?page=finance">Finance</a></li>

					  <li class="list-group-item <?php if($page == "hr"){ echo "list-active"; }?>"><a href="content.php?page=hr">HR</a></li>

					  <li class="list-group-item <?php if($page == "marketing"){ echo "list-active"; }?>"><a href="content.php?page=marketing">Marketing & communication</a></li>

					  <li class="list-group-item <?php if($page == "project"){ echo "list-active"; }?>"><a href="content.php?page=project">Project management</a></li>
					  

					  <li class="list-group-item <?php if($page == "sales"){ echo "list-active"; }?>"><a href="content.php?page=sales">Sales</a></li>

					</ul>

				</div>