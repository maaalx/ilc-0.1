      <link rel="shortcut icon" type="image/x-icon" href="https://secretivepleasures.com/images/favicon.ico">
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              
            </div>
            
          </div>
          <!-- search form -->
        
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			<?php 
			if($user_data['photo']!=''){ ?>
					<li><img style="width:90%" src="upload/profiles/<?php echo $user_data['photo']; ?>"></li> 
			<?php } ?>
           <li class="treeview">
              <a href="index.php">
         <span>Dashboard</span> <i class="fa fa-dashboard"></i>
              </a>
			  
			  <?php if($user_data['user_type']==2){ ?>
						<a href="edit_profile.php" ><span>Edit Profile</span> <i class="fa fa-fw fa-edit"></i></a>
					<?php }elseif($user_data['user_type']==3){ ?>
						<a href="edit_profile_doctor.php" ><span>Edit Profile</span> <i class="fa fa-fw fa-edit"></i></a>
					<?php }elseif($user_data['user_type']==4){ ?>
						<a href="edit_profile_researcher.php" ><span>Edit Profile</span> <i class="fa fa-fw fa-edit"></i></a>
					<?php } ?>
					
			
          </li>  
		  
		  <?php if(checkPermissions($_SESSION['admin_user_id'],array(5))){ ?>
            <li class="treeview">
              <a href="#">
				<i class="ion ion-person-add"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="add-user.php"><i class="fa fa-circle-o"></i> Add User</a></li>
                <li><a href="user-list.php"><i class="fa fa-circle-o"></i> all Users</a></li>
               
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
				<i class="ion ion-person-add"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li class="active"><a href="admin_all_articles.php"><i class="fa fa-circle-o"></i>Article List</a></li>
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
				<i class="ion ion-person-add"></i> <span>Treatment</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li class="active"><a href="admin_active_treatments.php"><i class="fa fa-circle-o"></i>Active Treatment List</a></li>
				<li class="active"><a href="admin_inactive_treatments.php"><i class="fa fa-circle-o"></i>Inative Treatment List</a></li>
				
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
				<i class="fa fa-fw fa-angle-right"></i> <span>Vivo</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li class="active"><a href="admin_active_vivo.php"><i class="fa fa-circle-o"></i>Active Vivo Experiment</a></li>
				<li class="active"><a href="admin_inactive_vivo.php"><i class="fa fa-circle-o"></i>Inative Vovo Experiment</a></li>
				
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
				<i class="fa fa-fw fa-angle-right"></i> <span>Vitro</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li class="active"><a href="admin_active_vitro.php"><i class="fa fa-circle-o"></i>Active Vitro Experiment</a></li>
				<li class="active"><a href="admin_inactive_vitro.php"><i class="fa fa-circle-o"></i>Inative Vitro Experiment</a></li>
				
              </ul>
            </li>
			

			
		<?php } ?>
		
	
		
		<?php if(checkPermissions($_SESSION['admin_user_id'],array(2))){ ?>
            <li class="treeview">
              <a href="#">
	      <i class="ion ion-person-add"></i> <span>Treatments</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="add_patient_history.php"><i class="fa fa-circle-o"></i> Add Treatment</a></li>
				<li class="active"><a href="patient-treatments-list.php"><i class="fa fa-circle-o"></i> My Treatments</a></li>
				
					<li><a href="add_followups.php"><i class="fa fa-circle-o"></i> Add FollowUp</a></li>
				
               
              </ul>
            </li>
		<?php } ?>
		
		<?php if(checkPermissions($_SESSION['admin_user_id'],array(3))){ ?>
            <li class="treeview">
              <a href="#">
	      <i class="ion ion-person-add"></i> <span>Patients</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="my-patients.php"><i class="fa fa-circle-o"></i> My Patients</a></li>
				
				
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
	      <i class="ion ion-person-add"></i> <span>Treatments</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               
				<li><a href="my-treatments.php"><i class="fa fa-circle-o"></i>My Treatments List</a></li>
				<!--<li><a href="all-treatments.php"><i class="fa fa-circle-o"></i>All Treatments List</a></li>-->
              </ul>
            </li>
		<?php } ?>
		
		<?php if(checkPermissions($_SESSION['admin_user_id'],array(4))){ ?>
            <li class="treeview">
              <a href="#">
	      <i class="ion ion-person-add"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="add_article.php"><i class="fa fa-circle-o"></i> Add Article</a></li>
				<li class="active"><a href="all_articles.php"><i class="fa fa-circle-o"></i>Article List</a></li>
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
	      <i class="ion ion-person-add"></i> <span>Treatments</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               
				<li><a href="doctor_add_patient_history.php"><i class="fa fa-circle-o"></i>Add Treatment</a></li>
				<li><a href="researcher_treatments.php"><i class="fa fa-circle-o"></i>My Treatments List</a></li>
              </ul>
            </li>
			
			<li class="treeview">
              <a href="add_vivo_experiment.php">
					<i class="fa fa-fw fa-angle-right"></i> <span>Add Vivo Experiment</span> <i class="fa  pull-right"></i>
              </a>
			</li>  
			
			<li class="treeview">
              <a href="add_vitro_experiment.php">
					<i class="fa fa-fw fa-angle-right"></i> <span>Add Vitro Experiment</span> <i class="fa  pull-right"></i>
              </a>
			</li>
		<?php } ?>

          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

     