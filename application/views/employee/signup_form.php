<style type="text/css">
   body { background:#DEE1DD;}
</style>
<script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });
      </script>
<div class="container">			
      <div class="row" >
            <div class="span2"></div>
            <div class="span8">
                <div class="well">
             <?php echo form_open('login/create_member'); ?>
             <fieldset>
              <legend> Personal Information </legend>  
                <label for="fname" class="uname" data-icon="u" > First Name</label>
                <input id="fname" name="fname" required="required" type="text" placeholder="-- First Name --" value="<?php echo set_value('fname'); ?>"/>
                <label for="lastname" class="lastname"> Last Name </label>
                <input id="lname" name="lname" required="required" type="text" placeholder="-- Last Name --" value="<?php echo set_value('lname'); ?>"/>
                <label for="contact" class="contact"> Contact No. </label>
                <input id="contact" name="contact" required="required" type="text" placeholder="-- 9830415732 --"  value="<?php echo set_value('contact'); ?>"/>
                <label for="email" class="email">Email. </label>
                <input id="email" name="email" required="required" type="email" placeholder="-- mymail@mail.com --"  value="<?php echo set_value('email'); ?>"/>
                <div style="color:red"><?php echo form_error('email'); ?></div>
               <label for="dob" class="dob">date Of Birth </label>
                <input type="date" name="dob" />
                <br/>
             </fieldset>  
              <fieldset>
                <legend> Login Information </legend>
                <div style="color:red"><?php echo form_error('username'); ?></div>
                <label for="username" class="uname"  > Choose Your Username </label>
                <input id="username" name="username" required="required" type="text" placeholder="myusername" value="<?php echo set_value('username'); ?>"/>
                <label for="password" class="youpasswd" > Your password </label>
                <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                <label for="con_password" class="youpasswd" > Confirm  password </label>
                <input id="passconf" name="passconf" required="required" type="password" placeholder="eg. X8df!90EO" /><br/>                            
                <button class="btn" type="submit">Create Account</button>
                <?php echo form_error('username'); ?>
              <div style="color:red">  <?php echo form_error('password'); ?></div>
               </fieldset>
             <?php echo form_close();?> 
                </div>
            </div>
            <div class="span2"></div>
        </div>            
</div>