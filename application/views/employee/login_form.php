<style type="text/css">
   body { background:#DEE1DD;}
</style>
<div class="container">			
      <div class="row" >
            <div class="span2"></div>
            <div class="span8">
                <div class="well">
                    <?php 
                    if (isset($_GET['msg'])=='success') {
                     ?>
                    <div style="color:red"><h3><?php echo "Successfully Registered ! Please Wait For Admin Authorization. " ?></h3></div>
                    <?php } ?>
                    <div style="color:red"><?php echo $this->session->flashdata('message');?></div>
             <fieldset>
              <legend>Login Here </legend>  
                <?php echo form_open('login/credentials'); ?>
                <label for="username" class="uname" data-icon="u" > Your email or username </label>
                <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /><br/>                            
                <button class="btn" type="submit">Sign in</button>
                <?php echo anchor('login/signup','Create account');?>
                
                <?php echo form_close();?> 
             </fieldset>   
                </div>
            </div>
            <div class="span2"></div>
            
        </div>            
</div>