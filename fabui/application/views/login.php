

	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		
		<div id="bg-overlay" class="bg-img" style="background-image: url(&quot;<?php echo base_url()."assets/";?>img/bg-img/bg-img-3.jpg&quot;);"></div>
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
                        <h1 class="h3">Account Login</h1>
                        <?php $fattr = array('class' => 'form-signin');
                        echo form_open(site_url().'main/login/', $fattr); ?>
		                <p>Sign In to your account</p>
		            </div>
		            <form action="NOW_U_SEE_ME_BRO">
		                <div class="form-group">
                        <?php echo form_input(array(
                        'name'=>'email', 
                        'id'=> 'email', 
                        'placeholder'=>'SRM Official Email', 
                        'class'=>'form-control', 
                        'value'=> set_value('email'))); ?>
                        <?php echo form_error('email') ?>
		                </div>
		                <div class="form-group">
                        <?php echo form_password(array(
                        'name'=>'password', 
                        'id'=> 'password', 
                        'placeholder'=>'Password', 
                        'class'=>'form-control', 
                        'value'=> set_value('password'))); ?>
                        <?php echo form_error('password') ?>
                        </div>
                        
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">Remember me</label>
		                </div>
		                <?php echo form_submit(array('value'=>'Let me in!', 'class'=>'btn btn-primary btn-lg btn-block')); ?>
                        <?php echo form_close(); ?>
		            </form>
		        </div>
		
		        <div class="pad-all">
		            <a href="<?php echo site_url();?>main/forgot" class="btn-link mar-rgt">Forgot password ?</a>
		            <a href="<?php echo site_url();?>main/register" class="btn-link mar-lft">Create a new account</a>
		
		            
		        </div>
		    </div>
		</div>