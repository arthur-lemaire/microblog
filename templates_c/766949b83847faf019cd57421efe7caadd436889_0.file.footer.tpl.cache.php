<?php
/* Smarty version 3.1.33, created on 2019-01-30 13:33:35
  from 'C:\wamp64\www\microblog\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51a7af735255_45448313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766949b83847faf019cd57421efe7caadd436889' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\footer.tpl',
      1 => 1548854897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51a7af735255_45448313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15556372765c51a7af730425_55510437';
?>
  <!-- Footer -->
  <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>A propos</h3>
                        <p>Micro blog est une application PHP basée sur le thème <a href="https://startbootstrap.com/template-overviews/freelancer/">Freelancer</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Theme JavaScript -->
    <?php echo '<script'; ?>
 src="js/freelancer.min.js"><?php echo '</script'; ?>
>
<?php }
}