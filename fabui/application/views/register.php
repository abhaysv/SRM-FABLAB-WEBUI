
<div id="container" class="cls-container">
		
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img" style="background-image: url(&quot;img/bg-img/bg-img-3.jpg&quot;);"></div>
		
		
		<!-- REGISTRATION FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-lg panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Create a New Account</h1>
                    <p>Come join the Nifty community! Let's set up your account.</p>
                    <?php 
                    $fattr = array('class' => 'form-signin');
                    echo form_open('/main/register', $fattr); ?>
		            </div>
		            <form action="NOW_U_SEE_ME_BRO">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <div class="form-group">
                              <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
                              <?php echo form_error('firstname');?>
		                        </div>
		                        <div class="form-group">
                              <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Reg No', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
                              <?php echo form_error('lastname');?>
		                        </div>
		                    </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
                              <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
                              <?php echo form_error('email');?>
		                        </div>
		                        <div class="form-group">
		                            
		                        </div>
		                    </div>
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link text-bold">Terms and Conditions</a></label>
		                </div>
                    <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
                    <?php echo form_close(); ?>
		            </form>
		        </div>
		        <div class="pad-all">
		            Already have an account ? <a href="<?php echo site_url();?>main/login" class="btn-link mar-rgt text-bold">Sign In</a>
		

		        </div>
		    </div>
		</div>
		<!--===================================================-->
		

		
		