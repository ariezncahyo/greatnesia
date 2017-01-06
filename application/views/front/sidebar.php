<div class="span4">
   <div class="sidebar">
      <!-- Widget -->
      <div class="widget">
         <h4>Login</h4>
         <?php echo form_open('ucp/login/proses'); ?>
            <label>Username</label><input type="text" class="" id="username" name="username" placeholder="Username" required>
            <label>Password</label><input type="password" class="" id="password" name="password" placeholder="Password" required>
            <br/><input type="submit" name="login" value="Login" class="btn"> | <a href="<?php echo site_url('daftar'); ?>">Belum punya akun? Daftar disini</a>
         </form>
      </div>
    </div>
   <div class="sidebar">
      <!-- Widget -->
      <div class="widget">
         <h4>Tulisan Lainnya</h4>
         <ul>
            <?php if($lain->num_rows() > 0) : ?>
            <?php foreach($lain->result() as $ln) : ?>
              <li><a href="<?php echo site_url('artikel/baca/'.$ln->artikel_id.'/'.$ln->url); ?>"><?php echo $ln->judul; ?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
         </ul>
      </div>                                                  
   </div>                                                
</div>