<?php //

if ($strLive == TRUE)
    {
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
    }
else
    {

        echo '<script src="' . ENV_ROOTURL . 'assets/js/jquery-1.12.3.min.js"></script>';
    };
?>


<script>
    window.onscroll = function() {
      growShrinkLogo()
    };

    function growShrinkLogo() {
      var Logo = document.getElementById("logo")
      if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
//        Logo.style.width = '50px';
        $("#logo").addClass("shrink");
      } else {
//        Logo.style.width = '200px';
        $("#logo").removeClass("shrink");
      }
    }
</script>


<script src="<?php echo ENV_ROOTURL; ?>assets/js/plugins.js"></script>
<script src="<?php echo ENV_ROOTURL; ?>assets/js/core.js"></script>









