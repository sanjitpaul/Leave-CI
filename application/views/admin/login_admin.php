<style type="text/css">
   body { background:#DEE1DD;}
</style>
<div class="container">			
      <div class="row" >
            <div class="span2"></div>
            <div class="span8">
                <div class="well">
                  <div style="color:red"><?php echo $this->session->flashdata('msg');?></div>
             <fieldset>
              <legend>Admin Login</legend>  
                <?php echo form_open('admin/login_verify'); ?>
                <label for="username" class="uname" data-icon="u" > Your email </label>
                <input id="email" name="email" required="required" type="text" placeholder="mymail@mail.com"/>
                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /><br/>                            
                <button class="btn" type="submit">Sign in</button>
                <?php echo form_close();?> 
             </fieldset>   
                </div>
            </div>
            <div class="span2"></div>  
      </div>            
</div>