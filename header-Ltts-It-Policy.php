
<header id="header" class="header header-sticky-top-lg">

<?php include('./data/getmenudata-Ltts-It-Policy.php');?>
<script>
  document.querySelector('.ndfHFb-c4YZDc-Wrql6b')?.remove();
</script>
<style>
  .hidebtn {
    position: absolute;
display: flex;
justify-content: center;
align-items: center;
    margin:1.6rem;width:60px;height:60px;top:0;right:0;background-color:#21325b
}

.maxhight{
  max-height: calc(100vh - 250px);
  overflow-y: scroll;
}



@media(max-width:700px){
  .hidebtn {
    width:53px;height:53px;
}

}
  .ndfHFb-c4YZDc-Wrql6b{
    display: none!important;
    opacity: 0!important;
  }
.nav:not(.nav-pills) .nav-item.active .nav-link, .nav:not(.nav-pills) .nav-link.active {
  background-color: #21325b;
  color: #fff!important;
}
.nav:not(.nav-pills) .nav-item.active .nav-link, .nav:not(.nav-pills) .nav-link.active .media .media-body h6 {

  color: #fff!important;
}

</style>
  <div class="header-section navbar-dark bg-dark">


    <div id="logoAndNav" class="container">
      <!-- Nav -->
      <nav class="js-mega-menu navbar navbar-expand-lg navbar-dark ">
        <!-- Logo -->
        <a class="navbar-brand" href="./Index-Ltts-It-Policy.php" aria-label="Front">
          <img src="./assets/svg/logos/logo-white.svg" alt="Logo">
        </a>
        <!-- End Logo -->

        <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn btn-dark btn-icon btn-sm rounded-circle"
          aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse"
          data-target="#navBar">
          <span class="navbar-toggler-default">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor"
                d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
            </svg>
          </span>
          <span class="navbar-toggler-toggled">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor"
                d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
            </svg>
          </span>
        </button>
        <!-- End Responsive Toggle Button -->

        <!-- Navigation -->
        <div id="navBar" class="collapse navbar-collapse">
          <div class="navbar-body header-abs-top-inner">
            <ul class="navbar-nav">
              <!-- Home -->
              <li class="navbar-nav-item">
				<a href="./Index-Ltts-It-Policy.php" class=" nav-link  " aria-haspopup="false" aria-expanded="false">Home</a>
              </li>
              <!-- End Home -->




              <!-- Demos -->
              <li class=" navbar-nav-item policymenu">
                <!-- <a id="homeMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" -->
                  <!-- aria-haspopup="true" aria-expanded="false">Policy Menu</a> -->

                <!-- Home - Mega Menu -->
                <div id="manu" class="hs-mega-menu dropdown-menu w-100 hs-mega-menu-desktop-lg animated closingmenudiv" aria-labelledby="homeMegaMenu" style="animation-duration: 300ms; display: none;" >
                  <div class="row no-gutters closingmenudiv"  >


                    <div class="col-lg-12 closingmenudiv">
                      <div class="w-90  mx-auto mt-3 closingmenudiv">
         
                          <input  id="searchinputform"  class="form-control closingmenudiv" placeholder="Search Keywords (Eg: Leave/Car)"
                            aria-label="Search Menu items">
                          <!-- <div class="input-group-append">
                            <button type="button" class="btn btn-primary">Search</button>
                          </div> -->
                       
                      </div>
                      <!-- Features Section -->
                      <div class=" mega-menu-body closingmenudiv"  style='display:none' >
                          <div class="mb-3 closingmenudiv" id="search-menu" style="height: 70vh; overflow-y:auto">   
                            
                          </div>
                          
                   
                      </div>
                      <div class="container space-1 px-3 d-none d-lg-block closingmenudiv">
                        <div class="row " id="dis-list">
                          <div class="col-lg-8 order-lg-2 closingmenudiv">
                            <!-- Tab Content -->
                            <div class="tab-content pr-lg-4 maxhight closingmenudiv">
                            <?php


                           foreach($menutitles as $keys=>$menu)

                            {
                    
                          
                            ?>
                              <div class="tab-pane fade show <?php if ($keys==0) {
    echo "active";
} ?>" id="pills-one-code-features-example<?php echo($keys);?>"
                                role="tabpanel" aria-labelledby="pills-one-code-features-example<?php echo($keys);?>-tab">
                                <a class="h4 font-weight-bold d-block text-primary"><?php echo($menu);?></a>
<hr/>
                                <?php
                           foreach($result1 as $item)
                            {
                              if($menu==$item['title']){
                             
                          
                            ?>
                            
                             <a class="dropdown-item " href="<?php echo($item['link']);?>"><i class="bi bi-menu-button-wide-fill mr-2"></i><?php echo($item['value']);?></a>
                  
                             <?php
                              }
                          }
                            ?>   
                            
                   
              
                                             
                            
                               
                          
                                
               
                             
                              </div>
                              
                              <?php
                          }
                            ?>
                      
                            </div>
                            <!-- End Tab Content -->
                          </div>
                          <div class="col-lg-4 order-lg-1 mb-7 mb-lg-0 border-left maxhight closingmenudiv">
                            <!-- Nav -->
                            <ul class="nav nav-box p-2 overflow-hidden closingmenudiv" style="background-color:#3a7fff17 !important;border-radius:10px" role="tablist">
                            <?php
                            foreach ($menutitles as $keys=>$i) 
                            {
                          
                          
                            ?>
                             <li class="nav-item w-100 mx-0  ">
                                <a class="nav-link closingmenudiv px-4 py-3 <?php if ($keys==0) {
    echo "active";
} ?>" id="pills-one-code-features-example<?php echo($keys)?>-tab"
                                  data-toggle="pill" href="#pills-one-code-features-example<?php echo($keys)?>" role="tab"
                                  aria-controls="pills-one-code-features-example<?php echo($keys)?>" aria-selected="true">
                                  <div class="media align-items-center align-items-lg-start closingmenudiv">
                                    <div class="media-body ">
                                      <h6 class="mb-0 h5 font-weight-bold closingmenudiv"><?php echo($i)?></h6>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            <?php } ?>
                            

                          
                            </ul>
                            <!-- End Nav -->
                          </div>


                        </div>
                      </div>
   


                      <div class="row mega-menu-body   d-md-none" id="mob-list">
                      
                        <?php 
                        foreach($menutitles as $keys=>$menu){
                          ?>
                          <div class="col-sm-12 mb-3 col-lg-4 mb-sm-0">
                          <div class="mb-3">
                          <a class="h5 d-block"><?php echo($menu);?></a>
                          <?php 
                        foreach($result1 as $item){
                          if($menu==$item['title']){
                              
                          ?>
                            <a class="dropdown-item " href="<?php echo($item['link']);?>"><?php echo($item['value']);?></a>
                            <?php 
                                  }
                        }
                        ?>
                            
                          </div>
                          
                        </div>

                          <?php 
                        }
                        ?>
                       
                      


                      </div>
                  
                    </div>
                  </div>
                </div>
                <!-- End Home - Mega Menu -->
              </li>
              <!-- End Demos -->

                    <!-- back buttons -->
                    <!-- <li class="navbar-nav-item"> -->
                      <!-- <button type="button" class="btn btn-ghost-secondary " id="zoomin" data-toggle="tooltip" data-placement="bottom" title="Zoom In">
                        <i style="font-size: 18px;"  class="fa fa-chevron-left"  aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-ghost-secondary " id="zoomin" data-toggle="tooltip" data-placement="bottom" title="Zoom In">
                        <i style="font-size: 18px;"  class="fa fa-chevron-right"  aria-hidden="true"></i>
                      </button> -->
                      <!-- <div class="row">
                        <div class="col text-left">
                          <button type="button" class="btn btn-ghost-secondary " id="PreviousPage" data-toggle="tooltip" data-placement="bottom" title="Previous">
                            <i style="font-size: 18px;"  class="fa fa-chevron-left"  aria-hidden="true"></i>
                          </button>
                        </div>
                        <div class="col text-right">
                          <button type="button" class="btn btn-ghost-secondary " id="NextPage" data-toggle="tooltip" data-placement="bottom" title="Next">
                            <i style="font-size: 18px;"  class="fa fa-chevron-right"  aria-hidden="true"></i>
                          </button> 
                        </div>
                      </div> -->
                    
                    <!-- </li> -->
      
                    <!--end back button  -->




            </ul>
          </div>
        </div>
        <!-- End Navigation -->
      </nav>
      <!-- End Nav -->
    </div>
  </div>
</header>


<!-- Add New Card Modal -->
<div class="modal fade " id="addNewCardModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="addNewCardModalTitle">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="addNewCardModalTitle" class="modal-title">Add card</h4>
        <div class="modal-close">
          <span>
            <button type="button" class="btn btn-ghost-secondary " id="zoomin" data-toggle="tooltip" data-placement="bottom" title="Zoom In">
              <i style="font-size: 18px;"  class="fa fa-search-plus "  aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-ghost-secondary " id="zoomout" data-toggle="tooltip" data-placement="bottom" title="Zoom Out">
              <i style="font-size: 18px;" class="fa fa-search-minus"  aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-icon  btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </button>
          </span>
  
        </div>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="zoomcontrol" style="position:relative; overflow: scroll; height: 90vh;">
        <div class="modal-body position-relative d-flex justify-content-center" style="transform: scale(1);  transform-origin:0% 0%;" data-zoom="1">
     

        </div>
      </div>

      <!-- End Body -->
    </div>
  </div>
</div>
<!-- End Add New Card Modal -->

<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
