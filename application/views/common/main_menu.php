<script type="text/javascript">
  
            
    $(document).ready(function() {
            var megaConfig = {      
                interval: 200,  
                sensitivity: 3,  
                over: addMega, 
                timeout: 500,  
                out: removeMega  
            } 
		function addMega(){ 
				$($(this).find("#dropList ul#menu li")).addClass("hovering"); 
				$(this).addClass("hovering"); 
					} 
		function removeMega(){ 
				$($(this).find("#dropList ul#menu li")).removeClass("hovering"); 
				$(this).removeClass("hovering"); 						   
			
                $("#dropList ul#menu li.level1-li").hoverIntent(megaConfig);
                }
    });
</script>

<div id="top_stripe_bar">&nbsp;</div>

<div id="dropList">
<ul id="menu">
    <li class="level1-li"><a class="level1-a" href="<?= base_url();?>">About</a></li>
   
    <li class="level1-li sub">
        <a href="http://staff.library.tulane.edu/tdl_ttd/" class="level1-a">Collections</a>
            <div class="listHolder col1">
                <div class="listCol">
                    <ul>
                        <li><a href="/collections/recordedsound">Recorded Sound</a></li>
                        <li><a href="/collections/oralhistory">Oral History</a></li>
                        <li><a href="/collections/vertical">Vertical Files</a></li>
                        <li><a href="/collections/graphics">Graphics</a></li>
                        <li><a href="/collections/digital">Digital Collections</a></li>
                    </ul>
                </div>
            </div>
     </li>
    
   <li class="level1-li"><a class="level1-a" href="http://staff.library.tulane.edu/tdl_etd/">Theses &amp; Dissertations</a></li>
   <li class="level1-li"><a class="level1-a" href="http://staff.library.tulane.edu/journals/">Journals</a></li>   
</ul>
</div> 
