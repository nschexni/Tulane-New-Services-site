 
<!--// link to the JavaScript files (hoverIntent is optional) -->
<script type="text/javascript"  src="<?=base_url()?>assets/js/custom/jquery_hoverIntent.js"></script> 
<script type="text/javascript"  src="<?=base_url()?>assets/js/custom/jquery_superfish.js"></script> 

<script>
    $(document).ready(function(){
        
        $("li.nav_top_level ul li a").hover(
            function () {
                    $("li.nav_top_level").css("color", "#224568")
                    //$('this').css('color', 'red')
               },
            function () {
                $("li.nav_top_level").css("color", "#fff");
                    //$(this).css('color', 'green')
               }
         );
    });    
</script> 


    <div id="top_stripe_bar">&nbsp;</div>
    <ul class="sf-menu">
            <li class="nav_top_level">
                <a href="<?= base_url();?>">home</a>
            </li>
            
            <li class="nav_top_level">
                <a href="http://digitallibrary.tulane.edu">digital library</a>
            </li>

            <li class="nav_top_level">
                    <a href="http://theses.tulane.edu">theses &amp; dissertations</a>
                     
            </li>	

            <li class="nav_top_level">
                    <a href="http://journals.tulane.edu">journals</a>                     
            </li>
    </ul>

    <ul class="sf-menu services">
        <li class="nav_top_level"><a href="http://staff.library.tulane.edu/journals/">publishing services</a>
        <li class="nav_top_level"><a href="http://researchers.tulane.edu">researcher services</a>
    </ul>
                    

