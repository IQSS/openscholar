<h3>New Sites</h3>
  <div id="search-person"></div>
  <div id="new-sites">

<?php foreach($sites as $site):?>
  <div class="new-site-block">
    <div class="photo">
      <?php print $site['photo'];?>
     </div>
   <h4><?php print $site['headline'];?></h4>
   <h5><?php print $site['sub_headline'];?></h5>
   </div>
<?php endforeach;?>


 