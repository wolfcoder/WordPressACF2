<?php 
echo '
<style>
/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 350px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 35000; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  // background-color:  #00B287; /* Black*/
  // overflow: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  display: flex;
  align-items:center;
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 14px;
  color: #cccccc;
  display: block;
  transition: 0.3s;
}

.nav-link-sidebar {
  overflow-y: auto
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: white;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

.myside-nav .active {
  color: white
}

.myside-nav {
  background-color: #00B287;
  height: 100%;
  width:0;
  overflow-y: auto;
  padding-top: 60px;
  transition: all 0.5s;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.btn-open {
  padding: 25px;
  font-size: 30px;
  color:white;
  background-color: #00B287;
  cursor: pointer;
}
</style>
';

?>

<div id="mySidenav" class="sidenav">
  <div id="sidebar-menu" class="myside-nav">
    <a href="#home_banner" class="active">Home Banner</a>
    <a href="#cta">CTA</a>
    <a href="#horizontal-tabs">Horizontal Tabs</a>
    <a href="#home-testimonials">Home Testimonials</a>
    <a href="#home-api">Home API</a>
    <a href="#blog-news-event">Blog News Event</a>
    <a href="#text-half-form">Text Half Form</a>
    <a href="#page-banner-large-content">Page Banner</a>
    <a href="#services-tabs">Service Tabs</a>
    <a href="#text-two-column">Text Two Column</a>
    <a href="#half-form-overlap">Half Form Overlap</a>
    <a href="#banner-half-img">Banner Half Image</a>
    <a href="#number-highlight">Number Highlight</a>
    <a href="#service-feature">Service Feature</a>
    <a href="#half-img">Half Image</a>
    <a href="#testimonial">Testimonial</a>
    <a href="#other-services">Other Services</a>
    <a href="#half-image">Anchor Sections</a>
    <a href="#two-column-overlap">Two Column Overlap</a>
    <a href="#page-banner-text">Page Banner Text</a>
    <a href="#half-text-with-bg">Half Text With Background</a>
    <a href="#testimonial-image">Testimonial image</a>
    <a href="#half-list-overlap">Half List Overlap</a>
    <a href="#benefit">Benefits</a>
    <a href="#banner-drive">Banner Drive</a>
    <a href="#get-started-form">Get Started Form</a>
    <a href="#drive-us-content">Drive Us Content</a>
    <a href="#text-half">Text Half</a>
    <a href="#contact-form">Contact Form</a>
    <a href="#gmaps-embed">Gmaps Embed</a>
    <a href="#text-only">Text Only</a>
    <a href="#info-text">Info Text</a>
    <a href="#sign-up-selector">Sign Up Selector</a>
    <a href="#sign-up-form">Sign Up Form</a>
    <a href="#investor-partner">Investor Partner</a>
  </div>
  <span class="btn-open active">></span>
</div>

<section id="home_banner" class="home-banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-banner-content">
          <div class="text-area">
            <h1>On-demand capacity <br class="d-none d-xl-block">for an <span class="green"><span class="d-inline-block">on-demand</span> world.</span></h1>
            <h3>Cargomatic solves local freight, connecting shippers with a marketplace of more than 14,000 drivers.</h3>
            <div class="media-mobile d-lg-none">
              <div class="main-media">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/home-banner-1-mobile.png" alt="main-img" class="img-fluid">
              </div>
            </div>
            <div class="button-area">
              <a href="#" class="btn btn-secondary">Ship With Us</a>
              <a href="#" class="btn btn-primary">Drive With Us</a>
            </div>
          </div>
          <div class="media-area d-none d-lg-block">
            <div class="main-media">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/home-banner-1.png" alt="main-img" class="img-fluid">
            </div>
            <div class="small-media">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/home-banner-2.png" alt="small-img" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="home-banner-shippers">
          <h4>Cargomatic is trusted by 1000+ shippers</h4>
          <div class="image-area">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/sherpa-capital.png" alt="shipper" class="img-fluid">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/structure-capital.png" alt="shipper" class="img-fluid">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/canaan.png" alt="shipper" class="img-fluid">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/tranztec.png" alt="shipper" class="img-fluid">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/volvo-group.png" alt="shipper" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta" class="cta">
  <div class="cta-bg">
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/cta-bg.jpg" alt="cta-bg" class="img-fluid d-none d-md-block">
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/cta-bg-mobile.jpg" alt="cta-bg-mobile" class="img-fluid d-md-none">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="cta-content">
          <h3>For fleets and drivers looking to move loads, click here to learn more</h3>
          <a href="#" class="btn btn-primary">Drive With Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="horizontal-tabs" class="horizontal-tabs section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="horizontal-tabs-content">
          <h2>Choose your <span class="green">own destiny.</span></h2>
          <ul class="nav nav-tabs justify-content-center" id="HorizontalTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="enterprise-tab" data-toggle="tab" href="#enterprise" role="tab" aria-controls="enterprise" aria-selected="true">Enterprise Shipper Customers</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="smb-tab" data-toggle="tab" href="#smb" role="tab" aria-controls="smb" aria-selected="false">SMB Shippers</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="bcos-tab" data-toggle="tab" href="#bcos" role="tab" aria-controls="bcos" aria-selected="false">BCOs Customer</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="freight-tab" data-toggle="tab" href="#freight" role="tab" aria-controls="freight" aria-selected="false">Freight Forward Customers</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false">3PL Customer</a>
            </li>
          </ul>
          <div class="tab-content" id="HorizontalTabsContent">
            <div class="tab-pane fade show active" id="enterprise" role="tabpanel" aria-labelledby="enterprise-tab">
              <div class="mobile-toggle-area-hrz-tabs d-lg-none active">
                Enterprise Shipper Customers <span>></span>
              </div>
              <div class="content-area mobile-active">
                <h3 class="title">Facilis est et expedita distinctio.</h3>
                <div class="text-area">
                  <p>Praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa.</p>
                  <p>Qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                </div>
                <div class="button-area">
                  <a href="#" class="btn btn-secondary">Hot Assets</a>
                  <a href="#" class="btn btn-primary">More Information</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="smb" role="tabpanel" aria-labelledby="smb-tab">
              <div class="mobile-toggle-area-hrz-tabs d-lg-none">
                SMB Shippers <span>></span>
              </div>
              <div class="content-area">
                <h3 class="title">Facilis est et expedita distinctio.</h3>
                <div class="text-area">
                  <p>Praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa.</p>
                  <p>Qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                </div>
                <div class="button-area">
                  <a href="#" class="btn btn-secondary">Hot Assets</a>
                  <a href="#" class="btn btn-primary">More Information</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="bcos" role="tabpanel" aria-labelledby="bcos-tab">
              <div class="mobile-toggle-area-hrz-tabs d-lg-none">
                BCOs Customer <span>></span>
              </div>
              <div class="content-area">
                <h3 class="title">Facilis est et expedita distinctio.</h3>
                <div class="text-area">
                  <p>Praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa.</p>
                  <p>Qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                </div>
                <div class="button-area">
                  <a href="#" class="btn btn-secondary">Hot Assets</a>
                  <a href="#" class="btn btn-primary">More Information</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="freight" role="tabpanel" aria-labelledby="freight-tab">
              <div class="mobile-toggle-area-hrz-tabs d-lg-none">
                Freight Forward Customers <span>></span>
              </div>
              <div class="content-area">
                <h3 class="title">Facilis est et expedita distinctio.</h3>
                <div class="text-area">
                  <p>Praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa.</p>
                  <p>Qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                </div>
                <div class="button-area">
                  <a href="#" class="btn btn-secondary">Hot Assets</a>
                  <a href="#" class="btn btn-primary">More Information</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
              <div class="mobile-toggle-area-hrz-tabs d-lg-none">
                3PL Customer <span>></span>
              </div>
              <div class="content-area">
                <h3 class="title">Facilis est et expedita distinctio.</h3>
                <div class="text-area">
                  <p>Praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa.</p>
                  <p>Qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                </div>
                <div class="button-area">
                  <a href="#" class="btn btn-secondary">Hot Assets</a>
                  <a href="#" class="btn btn-primary">More Information</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="home-testimonials" class="home-testimonials">
  <div class="home-testimonials-bg">
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/home-testimonials-bg.jpg" alt="bg" class="img-fluid d-none d-md-block">
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/home-testimonials-bg-mobile.jpg" alt="bg" class="img-fluid d-md-none">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-testimonials-content text-md-center">
          <h2>Trusted by customers <span class="green">accross the globe.</span></h2>
          <h3>Cargomatic is very helpful for drivers. You just look at your phone and start getting jobs automatically.</h3>
          <h4>Andres Espinoza, Independant Trucker with Cargomatic.</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="home-api" class="home-api">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-api-content">
          <h2><span class="green">Powerful APIs</span> for easy integration.</h2>
          <div class="media-area">
            <div class="code-area" data-aos="fade-up" data-aos-id="typing">
              <pre id="typewriter">
                <span class="green">--data-raw '{</span>
                &emsp;"action": "add",
                &emsp;"shipment": {
                &emsp;&emsp;"shipment_type": "shorthaul",
                &emsp;&emsp;"shipper": "5bd346c4bb75c40012c68fd2",
                &emsp;&emsp;"reference_numbers": [{
                &emsp;&emsp;&emsp;"name": "My Primary Reference",
                &emsp;&emsp;&emsp;"value": "cargomatic123",
                &emsp;&emsp;&emsp;"primary": <span class="green">true</span>
                &emsp;&emsp;}, {
                &emsp;&emsp;&emsp;"name": "My Secondary Reference",
                &emsp;&emsp;&emsp;"value": "cargomatic12345"
                &emsp;&emsp;}],
              </pre>
            </div>
            <div class="image-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/home-api.jpg" alt="home api" class="img-fluid">
            </div>

          </div>
          <div class="text-area">
            <h3>Our API is a seemless, powerful solution for integratiting Cargomatic into your platform.</h3>
            <p><a href="#" class="animated-arrow">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog-news-event" class="blog-news-event">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="blog-news-event-content">
          <div class="title-area">
            <h2><span class="green">Blog, news</span> & events.</h2>
            <h3>What's new. What we're thinking about. And, where we can meet up!</h3>
          </div>
          <div class="highlight-blog">
            <a href="#" class="stretched-link"></a>
            <div class="image-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/02/home-blog.jpg" alt="image" class="img-fluid d-none d-md-block">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/02/home-blog-mobile.jpg" alt="image" class="img-fluid d-md-none">
            </div>
            <div class="text-area">
              <h3>The Top 3 Things Our Community of Truck Drivers Love About Their Job</h3>
              <p>As you might have read in our past blogs and as you’re currently seeing with our Cargomatic, “Daniel, America’s Road Warrior” Comic Series, Truckers face a lot of challenges in the industry. There is a lot that can drive truckers crazy. So we wanted to take a look at the other side of the road.</p>
              <p class="read-more"><a href="#" class="animated-arrow">Read More</a></p>
            </div>
          </div>
          <div class="list-blog">
            <div class="blog-box">
              <a href="#" class="stretched-link"></a>
              <h3>How to Address Local LTL Shipping Challenges</h3>
              <a href="#" class="animated-arrow">Read More</a>
            </div>
            <div class="blog-box">
              <a href="#" class="stretched-link"></a>
              <h3>Unexpected Partners: LTL Carriers and <br class="d-md-none">The Cargomatic Marketplace</h3>
              <a href="#" class="animated-arrow">Read More</a>
            </div>
            <div class="blog-box">
              <a href="#" class="stretched-link"></a>
              <h3>Freight Broker, Load Board and Freight Marketplace…Do You Know The Difference?</h3>
              <a href="#" class="animated-arrow">Read More</a>
            </div>
          </div>
          <div class="button-all">
            <a href="#" class="btn btn-primary">All News & Events</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="text-half-form" class="text-half-form">
  <div class="text-half-form-bg">
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/home-bottom-bg.jpg" alt="bg" class="img-fluid">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-half-form-content">
          <div class="text-area">
            <h2>Stay ahead <span class="d-none d-md-block"><span class="green">of the competition.</span></span> <span class="d-md-none">of <br><span class="green">the competition.</span></span></h2>
            <h3>Don’t miss important trade shows or industry news. Let Cargomatic keep you up-to-date and ahead of the competition.</h3>
          </div>
          <div class="form-area">
            <form action="#">
              <input type="text" placeholder="Name">
              <input type="email" placeholder="Email">
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p>By submitting this form, you agree you’d like to receive emails about news & updates from Cargomatic.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="page-banner-large-content" class="page-banner large-content">
  <!-- add class large-content on page-banner for larger content -->
  <div class="banner-bg radial-overlay">
    <!-- add class radial-overlay on banner-bg for radial overlay -->
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/services-bg.jpg" alt="banner-bg" class="img-fluid">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-banner-content">
          <h1>Services</h1>
          <h2><span class="green">Meeting the</span> needs of shippers.</h2>
          <h3>Cargomatic powers local freight with a wide range of services that address the needs of shippers. Throughout the entire portfolio, we serve shippers via our marketplace, which offers access to a pool of more than 14,000 professional, insured drivers with impeccable driving records.</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services-tabs" class="services-tabs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="services-tabs-content">
          <ul class="nav nav-tabs justify-content-center" id="HorizontalTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link  active" id="drayage-tab" data-toggle="tab" href="#drayage" role="tab" aria-controls="drayage" aria-selected="true">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drayage.svg" alt="icon" class="img-fluid inactive" width="61px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drayage-1.svg" alt="icon" class="img-fluid active" width="61px">
                </div>
                Drayage
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="landbridge-tab" data-toggle="tab" href="#landbridge" role="tab" aria-controls="landbridge" aria-selected="true">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-landbridge-1.svg" alt="icon" class="img-fluid inactive" width="68px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-landbridge.svg" alt="icon" class="img-fluid active" width="68px">
                </div>
                Landbridge
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="ltl-tab" data-toggle="tab" href="#ltl" role="tab" aria-controls="ltl" aria-selected="false">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-ltl-1.svg" alt="icon" class="img-fluid inactive" width="55px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-ltl.svg" alt="icon" class="img-fluid active" width="55px">
                </div>
                LTL
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="ftl-tab" data-toggle="tab" href="#ftl" role="tab" aria-controls="ftl" aria-selected="false">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-ftl-1.svg" alt="icon" class="img-fluid inactive" width="66px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-ftl.svg" alt="icon" class="img-fluid active" width="66px">
                </div>
                FTL
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="final50-tab" data-toggle="tab" href="#final50" role="tab" aria-controls="final50" aria-selected="false">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-final50-1.svg" alt="icon" class="img-fluid inactive" width="52px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-final50.svg" alt="icon" class="img-fluid active" width="52px">
                </div>
                Final 50
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="intermodal-tab" data-toggle="tab" href="#intermodal" role="tab" aria-controls="intermodal" aria-selected="false">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-intermodal-1.svg" alt="icon" class="img-fluid inactive" width="66px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-intermodal.svg" alt="icon" class="img-fluid active" width="66px">
                </div>
                Intermodal
              </a>
            </li>
          </ul>
          <div class="tab-content" id="HorizontalTabsContent">
            <div class="tab-pane fade show active" id="drayage" role="tabpanel" aria-labelledby="drayage-tab">
              <div class="content-area">
                <div class="image-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/service-img-1.jpg" alt="image" class="img-fluid">
                </div>
                <div class="text-area">
                  <h3>Drayage</h3>
                  <p>Our flexible less-than-truckload offerings match shippers with the right equipment and capacity to ensure goods are delivered on time, and in the most environmentally friendly manner possible. Depending on the flexibility of when goods are needed, Cargomatic’s smart routing and bundling technology can bundle loads with multiple shippers to garner efficiencies and reduce costs.</p>
                  <a href="#" class="animated-arrow">Learn More</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="landbridge" role="tabpanel" aria-labelledby="landbridge-tab">
              <div class="content-area">
                <div class="image-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/service-img-1.jpg" alt="image" class="img-fluid">
                </div>
                <div class="text-area">
                  <h3>Landbridge</h3>
                  <p>Our flexible less-than-truckload offerings match shippers with the right equipment and capacity to ensure goods are delivered on time, and in the most environmentally friendly manner possible. Depending on the flexibility of when goods are needed, Cargomatic’s smart routing and bundling technology can bundle loads with multiple shippers to garner efficiencies and reduce costs.</p>
                  <a href="#" class="animated-arrow">Learn More</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="ltl" role="tabpanel" aria-labelledby="ltl-tab">
              <div class="content-area">
                <div class="image-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/service-img-1.jpg" alt="image" class="img-fluid">
                </div>
                <div class="text-area">
                  <h3>Less Than Truckload</h3>
                  <p>Our flexible less-than-truckload offerings match shippers with the right equipment and capacity to ensure goods are delivered on time, and in the most environmentally friendly manner possible. Depending on the flexibility of when goods are needed, Cargomatic’s smart routing and bundling technology can bundle loads with multiple shippers to garner efficiencies and reduce costs.</p>
                  <a href="#" class="animated-arrow">Learn More</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="ftl" role="tabpanel" aria-labelledby="ftl-tab">
              <div class="content-area">
                <div class="image-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/service-img-1.jpg" alt="image" class="img-fluid">
                </div>
                <div class="text-area">
                  <h3>FTL</h3>
                  <p>Our flexible less-than-truckload offerings match shippers with the right equipment and capacity to ensure goods are delivered on time, and in the most environmentally friendly manner possible. Depending on the flexibility of when goods are needed, Cargomatic’s smart routing and bundling technology can bundle loads with multiple shippers to garner efficiencies and reduce costs.</p>
                  <a href="#" class="animated-arrow">Learn More</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="final50" role="tabpanel" aria-labelledby="final50-tab">
              <div class="content-area">
                <div class="image-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/service-img-1.jpg" alt="image" class="img-fluid">
                </div>
                <div class="text-area">
                  <h3>Final 50</h3>
                  <p>Our flexible less-than-truckload offerings match shippers with the right equipment and capacity to ensure goods are delivered on time, and in the most environmentally friendly manner possible. Depending on the flexibility of when goods are needed, Cargomatic’s smart routing and bundling technology can bundle loads with multiple shippers to garner efficiencies and reduce costs.</p>
                  <a href="#" class="animated-arrow">Learn More</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="intermodal" role="tabpanel" aria-labelledby="intermodal-tab">
              <div class="content-area">
                <div class="image-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/service-img-1.jpg" alt="image" class="img-fluid">
                </div>
                <div class="text-area">
                  <h3>Intermodal</h3>
                  <p>Our flexible less-than-truckload offerings match shippers with the right equipment and capacity to ensure goods are delivered on time, and in the most environmentally friendly manner possible. Depending on the flexibility of when goods are needed, Cargomatic’s smart routing and bundling technology can bundle loads with multiple shippers to garner efficiencies and reduce costs.</p>
                  <a href="#" class="animated-arrow">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="text-two-column" class="text-two-column">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-two-column-content">
          <h2>Shipping <span class="green">made easy.</span></h2>
          <h4>Increase Efficiency With Cargomatic</h4>
          <div class="text-column">
            <div class="left-area">
              <p>Our comprehensive approach meets the needs of nearly every shipper, moving goods through ports and out of containers, into trailers or trucks for delivery at warehouse locations, on to physical retailers, and even into customer’s homes through our Final 50 programs.</p>
            </div>
            <div class="right-area">
              <p>Through a robust partnership ecosystem, we can help shippers increase their efficiency, layering in data and booking capabilities with railroads and steamships lines as appropriate, while offering visibility and transparency solutions that ensure those who need to know, are in the know. </p>
            </div>
          </div>
          <div class="btn-area text-center">
            <a href="#" class="btn btn-primary">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="half-form-overlap" class="half-form-overlap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-form-overlap-content">
          <div class="left-area">
            <div class="title-area">
              <h2>Stay ahead <span class="green">of the competition.</span></h2>
              <h3>Don’t miss important trade shows or industry news. <br>
                Let Cargomatic keep you up-to-date and ahead of the competition.</h3>
            </div>
            <div class="form-area">
              <form action="#">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <p>By submitting this form, you agree you’d like to receive emails about news & updates from Cargomatic.</p>
            </div>
          </div>
          <div class="right-area">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/service-img-2.jpg" alt="image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="banner-half-img" class="banner-half-img">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-half-img-content">
          <!-- add class image-left on banner-half-img-content to set image on left -->
          <div class="image-area">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/individual-service-img-1.jpg" alt="image" class="img-fluid">
          </div>
          <div class="text-area">
            <div class="breadcrumb-area">
              <p><a href="#">Services</a> > LTL</p>
            </div>
            <h1>Pioneering LTL <span class="green">frieght solutions.</span></h1>
            <h5>For nearly a decade, Cargomatic has pioneered flexible, on-demand approaches to less than truckload (LTL) freight solutions that range from same-day pickup and delivery, through bundling that saves companies costs and reduces greenhouse gas.</h5>
            <a href="#" class="btn btn-primary">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="number-highlight" class="number-highlight section-padding-bottom clip-top no-geometry-right">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="number-highlight-content text-center">
          <h2>Taking responsibility, <span class="green">driving change.</span></h2>
          <h5>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</h5>
          <div class="number-area">
            <div class="number-box">
              <h3 class="number">122<span>m</span></h3>
              <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
            </div>
            <div class="number-box">
              <h3 class="number">98<span>%</span></h3>
              <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
            </div>
            <div class="number-box">
              <h3 class="number">6<span>k</span></h3>
              <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="service-feature" class="service-feature">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="service-feature-content">
          <div class="title-area">
            <h2>The Future <span class="green">of LTL</span></h2>
            <h5>We’ve moved millions of LTL loads, connecting spokes and hubs for independent retailers and Fortune 50 companies. We go to great lengths to identify the right drivers in each of the 40 markets we serve, with those markets ensuring our shippers have access to near blanket coverage for LTL services across the US.</h5>
          </div>
          <div class="service-boxes four-column">
            <!-- add class four-column or three-column to service-boxes -->
            <div class="service-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-instant-capacity.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-instant-capacity-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h3>Instant <br>Capacity</h3>
              <p>Connecting local shippers and carriers is the cornerstone of our business.</p>
            </div>
            <div class="service-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-gps-track.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-gps-track-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h3>GPS Tracks <br>Drivers & Freight</h3>
              <p>Always know where your trucks and freight are.</p>
            </div>
            <div class="service-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-realtime-status.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-realtime-status-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h3>Real-Time <br>Status Updates</h3>
              <p>Real-time, all the time right <span class="d-inline-block">on your phone</span> or computer.</p>
            </div>
            <div class="service-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-pricing-fair.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-pricing-fair-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h3>Pricing is Fair <br>& Transparent</h3>
              <p>Cargomatic applies the <span class="d-inline-block">tenets of the</span> “sharing economy” to local trucking.</p>
            </div>
          </div>
          <div class="service-boxes three-column">
            <!-- add class four-column or three-column to service-boxes -->
            <div class="service-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-just-in-time.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-just-in-time-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h3>Just in Time Delivery</h3>
              <p>Two hour pickup & <br>dropoff windows.</p>
            </div>
            <div class="service-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-nodeadhead.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-nodeadhead-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h3>No Dead-Head Miles</h3>
              <p>Get paid both ways.</p>
            </div>
            <div class="service-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-paperless-billing.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-paperless-billing-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h3>Paperless Billing</h3>
              <p>We handle all the billing and paperwork for you online, in real-time.</p>
            </div>
          </div>
          <div class="individual-cta">
            <div class="left-area">
              <h2>Trusted <span class="green">nationwide.</span></h2>
              <a href="#" class="btn btn-primary">Sign Up</a>
            </div>
            <div class="right-area">
              <h4>Transparency & Visibility Along Every Mile</h4>
              <p>We’re trusted nationwide to handle loads of all shapes and sizes, with cargo ranging from high value, fragile goods through toilet paper. 18 of the 25 companies that Gartner recognized in its 2020 supply chains to watch report are companies that rely on Cargomatic to move freight, with transparency and visibility along every mile of a shipment’s path.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="half-img" class="half-img">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-img-content">
          <!-- add class image-left on half-img-content to set image on left -->
          <div class="image-area">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/individual-service-img-2.jpg" alt="image" class="img-fluid">
          </div>
          <div class="text-area">
            <h2>The Challenges of <span class="green">Local LTL Shipping.</span></h2>
            <h4>Find Loads & Start Shipping</h4>
            <p>Whether you’re trying to fill up the rest of your truck or looking for a trucker to move a couple pallets across town, it’s tough for truckers and shippers to find each other…until now.</p>
            <h4>Flexible, On-Demand Capacity</h4>
            <p>Our Marketplace connects truckers with a network of shippers who have local LTL loads available to haul.</p>
            <h4>Job Tracking & Handling</h4>
            <p>Once the trucker accepts the job and the connection is made, we track the job’s progress and handle all of the billing and paperwork for you online in real-time.</p>
            <h4>Quick Payments</h4>
            <p>LTL shipments get delivered as prescribed by vetted, professional truckers who then get paid within days of delivering the job.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="testimonial" class="testimonial no-geometry-right">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area">
          <h2>Local shipping <span class="green">made easy.</span></h2>
          <h3>We now offer service in most major port cities and their surrounding areas.</h3>
        </div>
        <div class="testimonial-area">
          <div class="testimonial-box">
            <h4>Aeye Sasson, Signal Brands</h4>
            <h3>We get online. We book a pickup and in 30 seconds <span class="d-inline-block">I know that this product</span> is going to leave my dock and <span class="d-inline-block">I can use</span> that space for other things. I’m saving money and time and space… it doesn’t get any better than that.</h3>
          </div>
          <div class="testimonial-box">
            <h4>Aeye Sasson, Signal Brands 2</h4>
            <h3>We get online. We book a pickup and in 30 seconds <span class="d-inline-block">I know that this product</span> is going to leave my dock and <span class="d-inline-block">I can use</span> that space for other things. I’m saving money and time and space… it doesn’t get any better than that.</h3>
          </div>
          <div class="testimonial-box 3">
            <h4>Aeye Sasson, Signal Brands 3</h4>
            <h3>We get online. We book a pickup and in 30 seconds <span class="d-inline-block">I know that this product</span> is going to leave my dock and <span class="d-inline-block">I can use</span> that space for other things. I’m saving money and time and space… it doesn’t get any better than that.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="other-services" class="other-services">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="other-services-content">
          <div class="title">
            <h2>Now explore <span class="green">one of our other services.</span></h2>
          </div>
          <div class="services-area">
            <div class="service-box">
              <a href="#">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drayage.svg" alt="icon" class="img-fluid inactive" width="61px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drayage-1.svg" alt="icon" class="img-fluid active" width="61px">
                </div>
                Drayage
              </a>
            </div>
            <div class="service-box">
              <a href="#">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-landbridge-1.svg" alt="icon" class="img-fluid inactive" width="68px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-landbridge.svg" alt="icon" class="img-fluid active" width="68px">
                </div>
                Landbridge
              </a>
            </div>
            <div class="service-box">
              <a href="#">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-ftl-1.svg" alt="icon" class="img-fluid inactive" width="66px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-ftl.svg" alt="icon" class="img-fluid active" width="66px">
                </div>
                FTL
              </a>
            </div>
            <div class="service-box">
              <a href="#">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-final50-1.svg" alt="icon" class="img-fluid inactive" width="52px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-final50.svg" alt="icon" class="img-fluid active" width="52px">
                </div>
                Final 50
              </a>
            </div>
            <div class="service-box">
              <a href="#">
                <div class="icon-area">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-intermodal-1.svg" alt="icon" class="img-fluid inactive" width="66px">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-intermodal.svg" alt="icon" class="img-fluid active" width="66px">
                </div>
                Intermodal
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section id="page-banner" class="page-banner">
  <div class="banner-bg">
    add class radial-overlay on banner-bg for radial overlay
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/banner-corporate-social-responsibility.jpg" alt="banner-bg" class="img-fluid">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-banner-content">
          add class large-content on page-banner-content for larger content
          <h1>Corporate Social Responsibility</h1>
          <h2>Driving us to change <span class="green">the way we work.</span></h2>
          <h4><a href="#csr-1" class="animated-arrow smoothscroll">At vero eos et accusamus</a></h4>
          <h4><a href="#csr-2" class="animated-arrow smoothscroll">Et iusto odio dignissimos</a></h4>
          <h4><a href="#csr-3" class="animated-arrow smoothscroll">Ducimus qui blanditiis praesentium</a></h4>
          <h4><a href="#csr-4" class="animated-arrow smoothscroll">Quis autem vel eum iure</a></h4>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- <section id="number-highlight" class="number-highlight section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="number-highlight-content text-center">
          <h2>Taking responsibility, <span class="green">driving change.</span></h2>
          <h5>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</h5>
          <div class="number-area">
            <div class="number-box">
              <h3 class="number">122<span>m</span></h3>
              <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
            </div>
            <div class="number-box">
              <h3 class="number">98<span>%</span></h3>
              <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
            </div>
            <div class="number-box">
              <h3 class="number">6<span>k</span></h3>
              <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section id="half-image" class="half-image">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-image-content">
          <h2>These are <span class="green">anchor sections.</span></h2>

          <div class="anchor" id="csr-1"></div>
          <div class="half-image-box image-right">
            <!-- add class image-right on half-image-box for image position on right -->
            <div class="img-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/csr-img-1.jpg" alt="image" class="img-fluid">
            </div>
            <div class="text-area">
              <h3>At Vero Eos Et Accusamus</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
          </div>

          <div class="anchor" id="csr-2"></div>
          <div class="half-image-box">
            <!-- add class image-right on half-image-box for image position on right -->
            <div class="img-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/csr-img-2.jpg" alt="image" class="img-fluid">
            </div>
            <div class="text-area">
              <h3>Et Iusto Odio Dignissimos</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
          </div>

          <div class="anchor" id="csr-3"></div>
          <div class="half-image-box image-right">
            <!-- add class image-right on half-image-box for image position on right -->
            <div class="img-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/csr-img-3.jpg" alt="image" class="img-fluid">
            </div>
            <div class="text-area">
              <h3>Ducimus Qui Blanditiis Praesentium</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
          </div>

          <div class="anchor" id="csr-4"></div>
          <div class="half-image-box">
            <!-- add class image-right on half-image-box for image position on right -->
            <div class="img-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/csr-img-4.jpg" alt="image" class="img-fluid">
            </div>
            <div class="text-area">
              <h3>Quis Autem Vel Eum Iure</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="two-column-overlap" class="two-column-overlap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="two-column-overlap-content">
          <div class="left-area">
            <div class="title-area">
              <h2>Join our <span class="green">award-winning team.</span></h2>
              <h3>Cargomatic is always looking to augment our award-winning team with candidates that can meaningfully help the company grow and meet our shipper and driver needs.</h3>
            </div>
            <p class="pr-lg-3">We operate a balancing act, creating symmetry between a growing collection of blue-chip shippers and a robust pool of professional drivers, all across a rapidly expanding geographic footprint. </p>
            <p class="green pr-lg-5"><b>Are you a candidate whose experience and passion align with our core values? If so, tell us more.</b></p>
            <ul>
              <li>Sustainability</li>
              <li>Modesty</li>
              <li>Transparency</li>
              <li>Partnership</li>
              <li>Accountability</li>
            </ul>

            <p class="green"><b>Experiance & Cutting Edge Technology</b></p>
            <p>Cargomatic’s team blends extensive experience in transportation and supply chain with cutting edge technologists and programmers with the goal of solving a trillion dollar industry. We’re backed by visionaries in technology and logistics alike, including Warburg Pincus and Volvo, investors that have committed more than $35 million into our mission of powering local freight.</p>
          </div>
          <div class="right-area">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/csr-img-5.jpg" alt="image" class="img-fluid">
            <p class="green"><b>Cargomatic Benefits</b></p>
            <p class="pr-lg-4">Our benefits are among the top in the industry; we’ve implemented some of the best perks tech companies have to offer while maintaining a mission-critical stance and posture that keeps the top shippers in the US coming back to our marketplace.</p>
            <a href="#" class="btn btn-primary mt-3">Current Openings</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="page-banner-text" class="page-banner-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-banner-text-content">
          <h1>Contact Cargomatic</h1>
          <h2>Change the way <span class="green">things move.</span></h2>
          <h3>We're on standby to hear from you at any time.</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="half-text-with-bg" class="half-text-with-bg">
  <div class="bg-image">
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/careers-img-1.jpg" alt="bg" class="img-fluid">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area">
          <div class="title-area">
            <h2>Who <span class="green">we are.</span></h2>
          </div>
          <div class="subtitle">
            <h3>Inovation & Transportation</h3>
          </div>
          <div class="text-area">
            <div class="left-area">
              <p>We operate a balancing act, creating symmetry between a growing collection of blue-chip shippers and a robust pool of professional drivers, all across a rapidly expanding geographic footprint.</p>
              <p>Cargomatic’s team blends extensive experience in transportation and supply chain with cutting edge technologists and programmers with the goal of solving a trillion dollar industry.</p>
            </div>
            <div class="right-area">
              <p>We’re backed by visionaries in technology and logistics alike, including Warburg Pincus and Volvo, investors that have committed more than $35 million into our mission of powering local freight.</p>
              <p>Our benefits are among the top in the industry; we’ve implemented some of the best perks tech companies have to offer while maintaining a mission-critical stance and posture that keeps the top shippers in the US coming back to our marketplace.</p>
            </div>
          </div>
          <div class="bottom-area">
            <div class="info-area">
              <h5>Change the way things move by solving complex, real-world problems.</h5>
            </div>
            <div class="btn-area">
              <a href="#" class="btn btn-primary">Current Openings</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="testimonial-image" class="testimonial-image">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area text-center">
          <h2>Life at <span class="green">Cargomatic.</span></h2>
          <h4>What’s it like working at Cargomatic? Find out from our team members.</h4>
        </div>
        <div class="testimonial-img-area">
          <div class="testimonial-img-box">
            <div class="testi-container">
              <div class="img-area">
                <div class="img-box">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/careers-img-2.jpg" alt="">
                </div>
              </div>
              <div class="text-area">
                <p>Claudia Lopez, Cargomatic Operations.</p>
                <h5>Before joining the Cargomatic Ops team, I worked my way up from Cashier to maintaining the codebase as Operations Manager at an independent bookstore chain in NYC. I built everything from bookcases to their very own point of sale system.</h5>
                <div class="toggle">
                  <a class="testi-img-prev"></a>
                  <a class="testi-img-next"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-img-box">
            <div class="testi-container">
              <div class="img-area">
                <div class="img-box">
                  <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/careers-img-2.jpg" alt="">
                </div>
              </div>
              <div class="text-area">
                <p>Claudia Lopez, Cargomatic Operations.</p>
                <h5>Before joining the Cargomatic Ops team, I worked my way up from Cashier to maintaining the codebase as Operations Manager at an independent bookstore chain in NYC. I built everything from bookcases to their very own point of sale system.</h5>
                <div class="toggle">
                  <a class="testi-img-prev"></a>
                  <a class="testi-img-next"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="half-list-overlap" class="half-list-overlap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-list-overlap-content">
          <div class="left-area">
            <div class="title-area">
              <h2>We could be <span class="green">looking for you.</span></h2>
              <h3>We’re looking for people who see complexity as an opportunity to do things better. Our ideal candidate is intellectually curious, passionate about what they do and knows what it takes to get things done.</h3>
            </div>
            <div class="list-area">
              <p class="green"><b>Are you a candidate whose experience and passion align with our core values? If so, tell us more.</b></p>
              <ul>
                <li>Sustainability</li>
                <li>Transparency</li>
                <li>Accountability</li>
                <li>Modesty</li>
                <li>Partnership</li>
              </ul>
              <a href="#" class="btn btn-primary">Current Openings</a>
            </div>
          </div>
          <div class="right-area">
            <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/careers-img-3.jpg" alt="image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="benefit" class="benefit clip-top">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="benefit-content">
          <div class="title-area text-center">
            <h2>The <span class="green">benefits.</span></h2>
            <h4>At Cargomatic, our employees enjoy a great package of benefits.</h4>
          </div>
          <div class="icon-boxes">
            <div class="icon-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-1.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-1-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h5>Competitive <br>Salary</h5>
            </div>
            <div class="icon-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-2.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-2-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h5>401K <br>Match</h5>
            </div>
            <div class="icon-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-3.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-3-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h5>Flexible <br>PTO</h5>
            </div>
            <div class="icon-box">
              <div class="icon-area">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-4.svg" alt="icon" class="img-fluid inactive">
                <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-benefit-4-1.svg" alt="icon" class="img-fluid active">
              </div>
              <h5>Company Sponsored Life Insurance</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="banner-drive" class="banner-drive">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-drive-content">
          <div class="text-area">
            <h1>Drive With Us</h1>
            <h2>Trucking <span class="green">made easy.</span></h2>
            <h5>With more than 14,000 drivers using our marketplace, there's no way to call ourselves a “secret weapon” for many tremendously successful trucking companies. However, it’s how we got here, and what we’re planning next, that matters.</h5>
            <a href="#" class="btn btn-primary">Sign Up</a>
          </div>
          <div class="media-area">
            <iframe width="100%" height="385" src="https://www.youtube.com/embed/X06q76Bo10A?autoplay=1&controls=0&mute=1&loop=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="get-started-form" class="get-started-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area">
          <h2>Get started <span class="green">today.</span></h2>
          <h4>If you're a trucker, get started in 3 easy steps! <br>Our compliance team will reach out to you.</h4>
        </div>
        <div class="form-content">
          <div class="step-area">
            <div class="step-box step-1 active">
              <div class="number">1</div>
              <h3>Your Details</h3>
            </div>
            <div class="step-box step-2">
              <div class="number">2</div>
              <h3>Location</h3>
            </div>
            <div class="step-box step-3">
              <div class="number">3</div>
              <h3>Account Setup</h3>
            </div>
          </div>
          <div class="form-area">
            <div class="form-box form-1 active">
              <div class="input-area">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Phone">
              </div>
              <div class="button-area">
                <a href="#" class="btn btn-primary">Next ></a>
              </div>
            </div>
            <div class="form-box form-2">
              <div class="input-area">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Phone">
              </div>
              <div class="button-area">
                <a href="#" class="btn btn-primary">Next ></a>
              </div>
            </div>
            <div class="form-box form-3">
              <div class="input-area">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Phone">
              </div>
              <div class="button-area">
                <a href="#" class="btn btn-primary">Next ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="drive-us-content" class="drive-us-content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area">
          <div class="left-area">
            <h2>Making connections <span class="green">happen.</span></h2>
          </div>
          <div class="right-area">
            <h5>Our commitment to being a partner of choice to trucking companies is unwavering, and we’re continually looking at ways to keep the tires spinning, while also making things easier for drivers and fleet owners.</h5>
          </div>
        </div>
        <div class="nav-area">
          <div class="nav-box">
            <a href="#quality-loads" class="stretched-link smoothscroll"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-1.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-1-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Quality Loads</h5>
          </div>
          <div class="nav-box">
            <a href="#locality" class="stretched-link smoothscroll"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-2.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-2-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Locality</h5>
          </div>
          <div class="nav-box">
            <a href="#streamlined-business" class="stretched-link smoothscroll"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-3.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-3-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Streamlined Business</h5>
          </div>
          <div class="nav-box">
            <a href="#flexibility" class="stretched-link smoothscroll"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-4.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-4-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Flexibility</h5>
          </div>
          <div class="nav-box">
            <a href="#user-benefits" class="stretched-link smoothscroll"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-5.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-drive-5-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>User Benefits</h5>
          </div>
        </div>
        <div class="content-area">
          <div class="content-box image-right">
            <a class="anchor" id="quality-loads"></a>
            <div class="image-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/drive-img-1.png" alt="image" class="img-fluid" width="180">
            </div>
            <div class="text-area large-width">
              <h5>Quality Loads</h5>
              <p>We offer carriers access to loads from bluechip shippers. This ensures that there are always desirable loads available in our marketplace; drivers across the US are electing to move more than 1,500 loads for us every day.</p>
            </div>
          </div>
          <div class="content-box">
            <a class="anchor" id="locality"></a>
            <div class="image-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/drive-img-2.png" alt="image" class="img-fluid" width="413">
            </div>
            <div class="text-area">
              <h5>Locality</h5>
              <p>We power local freight (less than 250 miles). We empower truckers to spend as much time as they want with their families and sleep in their own beds.</p>
            </div>
          </div>
          <div class="content-box image-right">
            <a class="anchor" id="streamlined-business"></a>
            <div class="image-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/drive-img-3.png" alt="image" class="img-fluid" width="294">
            </div>
            <div class="text-area">
              <h5>Streamlined Business</h5>
              <p>Our proactive notifications help fleet owners and drivers handle the day-to-day operations of their businesses; besides simply tracking paperwork to ensure PODs and uploaded into our system, drivers rely on Cargomatic to reminders on various renewals, like insurance and drivers’ licensing. We aim to handle as much back-office work as possible to let our carriers focus on driving. </p>
            </div>
          </div>
          <div class="content-box">
            <a class="anchor" id="flexibility"></a>
            <div class="image-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/drive-img-1.png" alt="image" class="img-fluid" width="178">
            </div>
            <div class="text-area small-width">
              <h5>Flexibility</h5>
              <p>We have a wide range of load types available for all types of equipment. From box trucks to full trailers pulled by Class 8 trucks, we offer access to loads for every type of trucking company. </p>
            </div>
          </div>
          <div class="content-box image-right">
            <a class="anchor" id="user-benefits"></a>
            <div class="image-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/drive-img-2.png" alt="image" class="img-fluid" width="408">
            </div>
            <div class="text-area small-width">
              <h5>User Benefits</h5>
              <p>We’re just getting started. In late 2020, we launched a loyalty and wellness program that goes beyond the basics of trucking. Naturally, we have gas and tire discounts, but we’re also focusing on driver wellness and proactive health. Click here to see the ever-expanding pool of benefits we bring to our user-base.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-geometry"></div>
</section>

<section id="text-half" class="text-half">
  <div class="text-half-bg">
    <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/drive-with-us-bottom.jpg" alt="bg" class="img-fluid">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-half-content">
          <div class="text-area">
            <h2>Start driving <br><span class="green">with Cargomatic.</span></h2>
            <h3>Trucking is a tough business, but being able to fill your trucks and make more money definitely helps. Our Marketplace connects you with a network of shippers who have jobs available for you to haul.</h3>
            <a href="#" class="btn btn-primary">Sign Up Today</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact-form" class="contact-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="contact-link">
          <div class="link-box">
            <a href="#" class="stretched-link"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-1.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-1-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Visit</h5>
            <p>Long Beach, CA 90802</p>
          </div>
          <div class="link-box">
            <a href="#" class="stretched-link"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-2.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-2-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Call</h5>
            <p>866-513-2343</p>
          </div>
          <div class="link-box">
            <a href="#" class="stretched-link"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-3.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-3-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Mail</h5>
            <p>support@cargomatic.com</p>
          </div>
          <div class="link-box">
            <a href="#" class="stretched-link"></a>
            <div class="icon-area">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-4.svg" alt="icon" class="img-fluid inactive">
              <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/icon-contact-4-1.svg" alt="icon" class="img-fluid active">
            </div>
            <h5>Work With Us</h5>
            <p>Careers ></p>
          </div>
        </div>
        <div class="contact-form-content">
          <form action="#">
            <input type="text" placeholder="First Name*" required class="half-input">
            <input type="text" placeholder="Last Name*" required class="half-input">
            <input type="email" placeholder="Email*" required class="half-input">
            <input type="text" placeholder="Phone" class="half-input">
            <textarea rows="6" placeholder="Message*" required></textarea>
            <input type="submit" value="Submit" class="btn btn-primary mx-auto d-block">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="gmaps-embed" class="gmaps-embed" style="height: 400px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1698166.855954251!2d-118.190721!3d33.767587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd313bd1ac6c47%3A0x6d02dea05165a740!2s211%20E%20Ocean%20Blvd%20Suite%20%23350%2C%20Long%20Beach%2C%20CA%2090802!5e0!3m2!1sen!2sus!4v1610737285120!5m2!1sen!2sus" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<section id="text-only" class="text-only">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-only-content text-center">
          <h2>Taking responsibility, <span class="green">driving change.</span></h2>
          <h5>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="info-text" class="info-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="info-text-content">
          <div class="left-area">
            <h2>Trusted <span class="green">nationwide.</span></h2>
          </div>
          <div class="right-area">
            <h6>Transparency & Visibility Along Every Mile</h6>
            <p>We’re trusted nationwide to handle loads of all shapes and sizes, with cargo ranging from high value, fragile goods through toilet paper. 18 of the 25 companies that Gartner recognized in its 2020 supply chains to watch report are companies that rely on Cargomatic to move freight, with transparency and visibility along every mile of a shipment’s path.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sign-up-selector" class="sign-up-selector">
  <div class="content-area">
    <div class="left-area text-center">
      <div class="bg-area">
        <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/shipper-bg.jpg" alt="bg" class="img-fluid">
      </div>
      <h4>Stay ahead of the competition.</h4>
      <h2>I am a Shipper</h2>
      <a href="#" class="btn btn-primary">Sign Up</a>
    </div>
    <div class="right-area text-center">
      <div class="bg-area">
        <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/carrier-bg.jpg" alt="bg" class="img-fluid">
      </div>
      <h4>Choose your own destiny.</h4>
      <h2>I am a Carrier</h2>
      <a href="#" class="btn btn-primary">Sign Up</a>
    </div>
  </div>
</section>

<section id="sign-up-form" class="sign-up-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="form-area">
          <form action="#">
            <input type="text" placeholder="First name*" required class="half-input">
            <input type="text" placeholder="Last name*" required class="half-input">
            <input type="text" placeholder="Company name*" required class="half-input">
            <input type="text" placeholder="Phone" required class="half-input">
            <input type="text" placeholder="City" class="half-input">
            <input type="text" placeholder="State" class="half-input">
            <input type="email" placeholder="Email*" required class="half-input">
            <input type="password" placeholder="Create Password*" class="half-input">
            <p class="terms text-center">By submitting this form, I agree to the Terms of Service.</p>
            <input type="submit" value="Submit" class="btn btn-primary mx-auto d-block">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="investor-partner" class="investor-partner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area text-center">
          <h5>Investors & Partners</h5>
        </div>
        <div class="logo-area">
          <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/investor-partner-1.png" alt="img" class="img-fluid">
          <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/investor-partner-2.png" alt="img" class="img-fluid">
          <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/investor-partner-3.png" alt="img" class="img-fluid">
          <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/investor-partner-4.png" alt="img" class="img-fluid">
          <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/investor-partner-5.png" alt="img" class="img-fluid">
          <img src="<?php echo site_url('/') ?>wp-content/uploads/2021/01/investor-partner-6.png" alt="img" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<script>
/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("sidebar-menu").style.width = "350px";
}
/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("sidebar-menu").style.width = "0";
}

jQuery(".btn-open").click(function(){
  jQuery(this).toggleClass('active');
  if(jQuery(".btn-open").hasClass('active')){
    closeNav();
    jQuery(this).text("<")
  } else {
    jQuery(this).text(">")
    openNav()
  }

});

// Cache selectors
var lastId,
    topMenu = $("#sidebar-menu"),
    topMenuHeight = topMenu.outerHeight()-400,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) {
         return item; 
        }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 250);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       console.log(menuItems);
       menuItems
         .parent().find('a').removeClass("active")
         .find('a').end().filter("[href='#"+id+"']").addClass("active");
   }                   
});
</script>