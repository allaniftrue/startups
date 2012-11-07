<?php $this->load->view("header_view"); ?>
<?php $this->load->view("top_menu/top_nav_view"); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <?php $this->load->view("sidebar/sidebar_profile_view"); ?>
    <div class="span9">
      <div class="main">
        <div class="row-fluid">
          
          <h2>Public Profile</h2>
          <form method="POST" action="">
            <p>
              <span for="avatar"><strong>Avatar</strong></span><br />
              <div clas="" id="avatar-holder" data-original-title="Click to change avatar.  Size is 160x160">
                <div id="uploader"><center><i class="icon-upload icon-white"></i> File Select</center></div>
                <?php $img = ! empty($profile[0]->picture) ? $profile[0]->picture : "default.gif"; ?>
                <img src="<?=base_url()?>profile/<?=$img?>" class="img-polaroid" />
              </div> 
              <div id="messages"></div>
              <br />
            </p>
            
            <p>
              <span for="lastname"><strong>Lastname</strong></span><br />
              <input type="text" class="input input-large span5" id="lastname" name="lastname" />
            </p>

            <p>
              <span for="firstname"><strong>Firstname</strong></span><br />
              <input type="text" class="input input-large span5" id="firstname" name="firstname" />
            </p>

            <p>
              <span for="email"><strong>Email</strong></span><br />
              <input type="text" class="input input-large span5" id="email" name="email" />
            </p>
            
            <p>
              <span for="contact"><strong>Contact Number</strong></span><br />
              <input type="text" class="input input-large span5" id="contact" name="contact" />
            </p>

            <p>
              <span for="address"><strong>Address</strong></span><br />
              <input type="text" class="input input-large span5" id="address" name="address" />
            </p>

            <p>
              <button class="btn btn-success" type="submit" id="save">Save Profile</button>
            </p>
          </form>
        </div><!--/row-->
      </div><!--/main-->
    </div><!--/span-->
  </div><!--/row-->
  <hr>
  <footer>
    <p>&copy; Company 2012</p>
  </footer>
</div><!--/.fluid-container-->
    <?php $this->load->view("footer_view"); ?>