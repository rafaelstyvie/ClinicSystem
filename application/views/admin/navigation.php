<div class="sidebar-background">
	<div class="primary-sidebar-background">
	</div>
</div>
<div class="primary-sidebar">
	<!-- Main nav -->
    <br />
    <div style="text-align:center;">
    	<a href="<?php echo base_url();?>">
        	<img src="<?php echo base_url();?>uploads/logo.png"  style="max-height:100px; max-width:100px;"/>
        </a>
    </div>
   	<br />
	<ul class="nav nav-collapse collapse nav-collapse-primary">
    
        
        <!------dashboard----->
		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/dashboard" >
					<i class="icon-desktop icon-2x"></i>
					<span><?php echo get_phrase('dashboard');?></span>
				</a>
		</li>
        
        <!------Especialidade----->
		<li class="<?php if($page_name == 'manage_especialidade')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_especialidade" >
					<i class="icon-sitemap icon-2x"></i>
					<span><?php echo get_phrase('Especialidade');?></span>
				</a>
		</li>
        
        <!------Profissional----->
		<li class="<?php if($page_name == 'manage_profissional')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_profissional" >
					<i class="icon-user-md icon-2x"></i>
					<span><?php echo get_phrase('Profissionais');?></span>
				</a>
		</li>
        
        <!------patient----->
		<li class="<?php if($page_name == 'manage_patient')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_patient" >
					<i class="icon-user icon-2x"></i>
					<span><?php echo get_phrase('Paciente');?></span>
				</a>
		</li>
        
        <!------steticist----->
		
        
     
		
        
        <!------accountant----->
		<li class="<?php if($page_name == 'manage_accountant')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_accountant" >
					<i class="icon-money icon-2x"></i>
					<span><?php echo get_phrase('accountant');?></span>
				</a>
		</li>
        
        
		<!------Gerenciar Clinica------>
		<li class="dark-nav <?php if(	$page_name == 'view_appointment' 	|| 
										$page_name == 'view_payment' 		|| 	
										$page_name == 'view_report'  )echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#view_hospital_submenu" >
                <i class="icon-screenshot icon-2x"></i>
                <span><?php echo get_phrase('Monitoramento');?><i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="view_hospital_submenu" class="collapse <?php if(	$page_name == 'view_appointment' 	|| 
																		$page_name == 'view_payment' 		|| 
																		$page_name == 'view_report'  )echo 'in';?>">
                <li class="<?php if($page_name == 'view_appointment')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/view_appointment">
                      <i class="icon-exchange"></i> <?php echo get_phrase('view_appointment');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'view_payment')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/view_payment">
                      <i class="icon-money"></i> <?php echo get_phrase('view_payment');?>
                  </a>
                </li>
              
                <li class="<?php if($page_name == 'view_report' && $report_type	==	'operation')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/view_report/operation">
                      <i class="icon-reorder"></i> <?php echo get_phrase('view_operation');?>
                  </a>
                </li>
              
               
            </ul>
		</li>
        
        
        <!------system settings------>
		<li class="dark-nav <?php if(	$page_name == 'manage_email_template' 	|| 
										$page_name == 'manage_noticeboard' 		||
										$page_name == 'system_settings' 		|| 
										$page_name == 'manage_language' 		|| 
										$page_name == 'backup_restore' )echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu" >
                <i class="icon-wrench icon-2x"></i>
                <span><?php echo get_phrase('settings');?><i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="settings_submenu" class="collapse <?php if(	$page_name == 'manage_email_template' 	|| 
																$page_name == 'manage_noticeboard' 		||
																$page_name == 'system_settings' 		|| 
																$page_name == 'manage_language' 		|| 
																$page_name == 'backup_restore' )echo 'in';?>">
                <!--<li class="<?php if($page_name == 'manage_email_template')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/manage_email_template">
                      <i class="icon-envelope"></i> <?php echo get_phrase('manage_email_template');?>
                  </a>
                </li>-->
                <li class="<?php if($page_name == 'manage_noticeboard')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/manage_noticeboard">
                      <i class="icon-columns"></i> <?php echo get_phrase('manage_noticeboard');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'system_settings')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/system_settings">
                      <i class="icon-cog"></i> <?php echo get_phrase('system_settings');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'manage_language')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/manage_language">
                      <i class="icon-globe"></i> <?php echo get_phrase('manage_language');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'backup_restore')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/backup_restore">
                      <i class="icon-download-alt"></i> <?php echo get_phrase('backup_restore');?>
                  </a>
                </li>
            </ul>
		</li>

		<!------manage own profile--->
		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_profile" >
					<i class="icon-lock icon-2x"></i>
					<span><?php echo get_phrase('profile');?></span>
				</a>
		</li>
		
	</ul>
	
</div>