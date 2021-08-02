<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#Procedimento1" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('Procedimento1');?>
                    	</a></li>
			<li>
            	<a href="#Procedimento2" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('Procedimento2');?>
                    	</a></li>
			<li>
            	<a href="#Procedimento3" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('Procedimento3');?>
                    	</a></li>
			<li>
            	<a href="#other" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('other');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('add_report');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content padded">
		<div class="tab-content">            
            <!----OPERATION LISTING STARTS--->
            <div class="tab-pane box active" id="Procedimento1">
				
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('profissional');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'Procedimento1'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('profissional',$row['profissional_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?profissional/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----OPERATION LISTING ENDS--->
            
            <!----BIRTH LISTING STARTS--->
            <div class="tab-pane box" id="Procedimento2">
				
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('profissional');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'Procedimento2'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('profissional',$row['profissional_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?profissional/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----BIRTH LISTING ENDS--->
            
            <!----DEATH LISTING STARTS--->
            <div class="tab-pane box" id="Procedimento3">
				
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('profissional');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'Procedimento3'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('profissional',$row['profissional_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?profissional/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----DEATH LISTING ENDS--->
            
            <!----OTHER LISTING STARTS--->
            <div class="tab-pane box" id="other">
				
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('profissional');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'other'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('profissional',$row['profissional_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?profissional/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----OTHER LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open('profissional/manage_report/create/' , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('type');?></label>
                                <div class="controls">
                                    <select name="type" class="uniform" style="width:100%;">
                                    	<option value="Procedimento1"><?php echo get_phrase('Procedimento1');?></option>
                                    	<option value="Procedimento2"><?php echo get_phrase('Procedimento2');?></option>
                                    	<option value="Procedimento3"><?php echo get_phrase('Procedimento3');?></option>
                                    	<option value="other"><?php echo get_phrase('other');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('description');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="description"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="timestamp"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('profissional');?></label>
                                <div class="controls">
                                    <select class="chzn-select" name="profissional_id">
                                    		<option value="">select</option>
										<?php 
										$profissionals	=	$this->db->get('profissional')->result_array();
										foreach($profissionals as $row2):
										?>
                                        	<option value="<?php echo $row2['profissional_id'];?>" ><?php echo $row2['name'];?></option>
                                        <?php
										endforeach;
										?>
									</select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('patient');?></label>
                                <div class="controls">
                                    <select class="chzn-select" name="patient_id">
                                    		<option value="">select</option>
										<?php 
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
									</select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('add_schedule');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>