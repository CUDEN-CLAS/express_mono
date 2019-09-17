<?php
  global $base_url;
  // Set brand bar color.
	$color = isset($logo_color) ? $logo_color : 'black';
	$logo = $base_url . '/' . drupal_get_path('theme', 'ucb') . '/images/cudenver/ucd-logo-black.png';

?>
<div class="brand-bar brand-bar-color-<?php print $color; ?> no-underline">
  <div class="container">
    <div class="brand-bar-container">
      <div class="brand-logo">
        <a href="http://www.ucdenver.edu" title="University of Colorado Denver | Anschutz Medical Campus"><img src="<?php print $logo; ?>" alt="CU Logo"></a>
        <h2 class="univtitle-lg">University of Colorado <strong>Denver</strong></h2>
        <h2 class="univtitle-sm"><strong>Denver</strong></h2>
      </div>
      <div class="brand-links">
      </div>
      <div class="search-toggle-wrapper">
        <a href="http://myemail.ucdenver.edu/" class="search-toggle-link">Webmail <span style="padding:0px 5px 0px 5px">|</span></a> <a href="https://portal.prod.cu.edu/UCDAccessFedAuthLogin.html" class="search-toggle-link">UCD Access <span style="padding:0px 5px 0px 5px">|</span></a> <a href="http://www.ucdenver.edu/courselogin" class="search-toggle-link">Canvas <span style="padding:0px 5px 0px 5px">|</span></a> <a href="https://clas.ucdenver.edu/university-search/" id="search-toggle" class="search-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="search" aria-label="Search"><i class="fa fa-search fa-fw"></i><span class="element-invisible">Search </span></a> <a id="search-toggle-quicklinks" href="javascript:void(0)" class="close-quicklinks"><span class="fas fa-times-circle" aria-label="minimize"></span>Quick Links</a>
        
      </div>
    </div>
  </div>
</div>