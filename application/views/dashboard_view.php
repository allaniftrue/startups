<?php $this->load->view("header_view"); ?>
<?php $this->load->view("top_menu/top_nav_view"); ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <?php $this->load->view("sidebar/sidebar_profile_view"); ?>
        <div class="span9">
          <div class="row-fluid">
            <div class="span4 well well-small">
              <center>
                <h2>1,000</h2>
                <p>Statistic 1</p>
              </center>
            </div><!--/span-->
            <div class="span4 well well-small">
              <center>
                <h2>1,000</h2>
                <p>Statistic 1</p>
              </center>
            </div><!--/span-->
            <div class="span4 well well-small">
              <center>
                <h2>1,000</h2>
                <p>Statistic 1</p>
              </center>
            </div><!--/span-->
          </div><!--/row-->
          <div class="main">
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p><i class="icon-beaker"></i></p>
            </div><!--/span-->
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