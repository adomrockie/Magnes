<?
$CurrentSecc = $this->uri->segment(1, 0);
if($CurrentSecc===0){
	$CurrentSecc = "front";
}
?>

<div style="clear:both"></div>
<div class="row-fluid" style="">
  <div class="span12" style="margin: auto auto;">
  <hr/>
    <div class="alert" id="footer_alert" style="margin-bottom: 20px; background: transparent; border: none; font-size: 10px; color: #666;">
      <b>TheMagnes.com does not claim ownership or copyright of any media posted on this site.</b>
      <br>TheMagnes.com is in compliance with 17 U.S.C. § 512 and the Digital Millennium Copyright Act ("DMCA"). It is our policy to respond to any infringement notices and take appropriate actions under the Digital Millennium Copyright Act ("DMCA") and other applicable intellectual property laws.
      <br>If your copyrighted material has been posted on TheMagnes.comg or if hyperlinks to your copyrighted material are returned through our search engine and you want this material removed, you must provide a written communication that details the information listed in the following section. Please be aware that you will be liable for damages (including costs and attorneys' fees) if you misrepresent information listed on our site that is infringing on your copyrights. We suggest that you first contact an attorney for legal assistance on this matter. 
      <br> The files themselves are hosted by private or public third-parties. We do not DIRECTLY host any media. Files should only be used for promotional uses. You must delete them after 24 hours of downloading.
      We do not encourage copyrighting. You should support the Artists/Producers/Others for their work. If enjoy the music , we highly encourage you to acquire original copies to support the industry or artists.
    </div>
  </div>
</div>

</div>
</div>
    <script type="text/javascript"> 
      var CI = { 
        'base_url': '<?php echo base_url(); ?>', 
      }; 
    </script> 

    <script src="<? echo base_url('lib/jquery-2.0.2.min.js');?>"></script>
    <script src="<? echo base_url('lib/bootstrap.min.js');?>"></script>
    <script src="<? echo base_url('lib/bootstrap-datepicker.js');?>"></script>
    <script src="<? echo base_url('lib/jquery-ui-1.10.2.custom.min.js');?>"></script>
    <script src="<? echo base_url('lib/jail.js');?>"></script>

    <script src="<? echo base_url('js/theme.js');?>"></script>

    <? if ($CurrentSecc=="send"){ ?>

    <script src="<? echo base_url('lib/fuelux.wizard.js');?>"></script>
    <script src="<? echo base_url('js/sendRelease.js');?>"></script>
    <script src="<? echo base_url('js/linkChecker.js');?>"></script>

    <? } if ($CurrentSecc=="edit"){ ?>

    <script src="<? echo base_url('js/adminEdit.js');?>"></script>

    <? } if ($CurrentSecc=="artist"){ ?>

    <script src="<? echo base_url('js/soundCloudSearch.js');?>"></script>
    <script src="<? echo base_url('js/youtubeSearch.js');?>"></script>


    <? } if ($CurrentSecc=="release"){ ?>

    <script type="text/javascript" src="<? echo base_url('lib/jquery.pnotify.min.js');?>"></script>

    <script src="<? echo base_url('js/linkChecker.js');?>"></script>
    <script src="<? echo base_url('js/soundCloudSearch.js');?>"></script>
    <script src="<? echo base_url('js/youtubeSearch.js');?>"></script>

      <? if ($this->ion_auth->is_admin()) { ?>
      <script src="<? echo base_url('js/editRelease.js');?>"></script>
      <? }

  } if ($CurrentSecc=="search"){  ?>

  <script type="text/javascript">
    $('#search_input').val('<? echo str_replace('-',' ',$search_name); ?>');
    $('#search_input').focus();
  </script>

<? } if ($CurrentSecc=="auth"){ ?>

  <script type="text/javascript">
    $("#account_submenu").slideDown("fast");
  </script>
  
 <? } if ($CurrentSecc=="user"){ ?>

  <script src="<? echo base_url('lib/jquery.form.js');?>"></script>
  <script type="text/javascript" src="<? echo base_url('lib/jquery.pnotify.min.js');?>"></script>
  <link rel="styesheet" href="<? echo base_url('css/lib/jquery.pnotify.default.css'); ?>" type="text/css" media="screen" > 
  <script src="<? echo base_url('js/userEdit.js');?>"></script>

<? } ?>

<? if ($this->ion_auth->logged_in()) { ?>
  <script src="<? echo base_url('js/userActions.js');?>"></script>

<? } ?>

                        <script type="text/javascript">
                        //<![CDATA[
                          (function() {
                            var shr = document.createElement('script');
                            shr.setAttribute('data-cfasync', 'false');
                            shr.src = '//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js';
                            shr.type = 'text/javascript'; shr.async = 'true';
                            shr.onload = shr.onreadystatechange = function() {
                              var rs = this.readyState;
                              if (rs && rs != 'complete' && rs != 'loaded') return;
                              var site_id = '9de1183f31169e1bc13dce6dd7bb689b';
                              try { Shareaholic.init(site_id); } catch (e) {}
                            };
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(shr, s);
                          })();
                        //]]>
                        </script>

</body>
</html>