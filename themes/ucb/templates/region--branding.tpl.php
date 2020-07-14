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
        <a href="https://www.ucdenver.edu" title="University of Colorado Denver | Anschutz Medical Campus"><img src="<?php print $logo; ?>" alt="CU Logo"></a>
        <h2 class="univtitle-lg">University of Colorado <strong>Denver</strong></h2>
        <h2 class="univtitle-sm"><strong>Denver</strong></h2>
      </div>
      <div class="brand-links">
      </div>
      <div class="search-toggle-wrapper">
        <a href="http://myemail.ucdenver.edu/" class="search-toggle-link">Webmail <span style="padding:0px 5px 0px 5px">|</span></a> <a href="https://portal.prod.cu.edu/UCDAccessFedAuthLogin.html" class="search-toggle-link">UCD Access <span style="padding:0px 5px 0px 5px">|</span></a> <a href="https://www.ucdenver.edu/courselogin" class="search-toggle-link">Canvas <span style="padding:0px 5px 0px 5px">|</span></a> <a href="https://clas.ucdenver.edu/university-search/" id="search-toggle" class="search-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="search" aria-label="Search"><i class="fa fa-search fa-fw"></i><span class="element-invisible">Search </span></a> <a id="search-toggle-quicklinks" href="javascript:void(0)" class="close-quicklinks"><span class="fas fa-times-circle" aria-label="minimize"></span>Quick Links</a>
        
      </div>
    </div>
  </div>
  <div class="u-mask">
          <div class="t-contentBlock u-mask">

           <div id="quickLinks" class="t-quickLinks" aria-label="Quick links navigation" aria-hidden="true" aria-expanded="false">
             <div class="container">
               <div class="col-md-3" style="float:left">
               <h3>Locations</h3>
               <ul class="list-unstyled">
                 <li><a href="https://www.ucdenver.edu/">CU Denver</a></li>
                 <li><a href="https://www.cuanschutz.edu">CU Anschutz Medical Campus</a></li>
                 <li><a href="https://southdenver.cu.edu">CU South Denver</a></li>
                 <li><a href="https://www1.ucdenver.edu/online">CU Online</a></li>
               </ul>
               </div>
               <div class="col-md-3" style="float:left">
               <h3>Tools</h3>
               <ul class="list-unstyled">
                 <li><a href="http://myemail.ucdenver.edu/">Webmail</a></li>
                 <li><a href="https://portal.prod.cu.edu/UCDAccessFedAuthLogin.html">UCDAccess</a></li>
                 <li><a href="https://www.ucdenver.edu/courselogin">Canvas</a></li>
                 <li><a href="https://directory.ucdenver.edu/">Directory</a></li>
                 <li><a href="https://www.ucdenver.edu/AZIndex/Pages/A-ZIndex.aspx">A-Z</a></li>
                 <li><a href="https://www.ucdenver.edu/faculty-staff/">Faculty &amp; Staff</a></li>
                 <li><a href="https://library.auraria.edu/">Auraria Library</a></li>
                 <li><a href="https://hslibrary.ucdenver.edu/">Health Sciences Library</a></li>
               </ul>
               </div>
               <div class="col-md-6">
               <h3>Schools and Colleges</h3>
               <div class="row">
                 <div class="col-md-6" style="float:left">
                   <h4>CU Denver</h4>
                   <ul class="list-unstyled">
                     <li><a href="https://architectureandplanning.ucdenver.edu/">College of Architecture and Planning</a></li>
                     <li><a href="https://artsandmedia.ucdenver.edu">College of Arts and Media</a></li>
                     <li><a href="https://business.ucdenver.edu">Business School</a></li>
                     <li><a href="https://education.ucdenver.edu">School of Education and Human Development</a></li>
                     <li><a href="https://engineering.ucdenver.edu">College of Engineering and Applied Science</a></li>
                     <li><a href="https://www.ucdenver.edu/academics/colleges/Graduate-School/">Graduate School</a></li>
                     <li><a href="https://clas.ucdenver.edu">College of Liberal Arts and Sciences</a></li>
                     <li><a href="https://publicaffairs.ucdenver.edu">School of Public Affairs</a></li>
                   </ul>
                 </div>
                 <div class="col-md-6">
                   <h4>CU Anschutz Medical Campus</h4>
                   <ul class="list-unstyled">
                     <li><a href="https://www.ucdenver.edu/academics/colleges/dentalmedicine/">School of Dental Medicine</a></li>
                     <li><a href="https://www.ucdenver.edu/academics/colleges/Graduate-School/">Graduate School</a></li>
                     <li><a href="https://medschool.cuanschutz.edu">School of Medicine</a></li>
                     <li><a href="https://www.ucdenver.edu/academics/colleges/nursing/">College of Nursing</a></li>
                     <li><a href="https://www.ucdenver.edu/academics/colleges/pharmacy/">Skaggs School of Pharmacy and Pharmaceutical Sciences</a></li>
                     <li><a href="https://www.ucdenver.edu/academics/colleges/PublicHealth/">Colorado School of Public Health</a></li>
                   </ul>
                 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>