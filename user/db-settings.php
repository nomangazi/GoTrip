<?php
  session_start();
  require_once "../models/HeaderMeta.php";
  require_once "../models/Preloader.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?= HeaderMeta::getMeta() ?>

  <!-- Fonts -->
  <?= HeaderMeta::getFonts() ?>

  <!-- Stylesheets -->
  <?= HeaderMeta::getAssetsCss() ?>

  <title>Admin | GoTrip</title>
</head>

<body data-barba="wrapper">
  <div class="preloader js-preloader">
    <?= Preloader::getLoader() ?>
  </div>

  <div class="header-margin"></div>
  <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <?= HeaderMeta::getMenu(); ?>
  </header>


  <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <div class="dashboard__sidebar bg-white scroll-bar-1">


      <div class="sidebar -dashboard">

        <div class="sidebar__item">
          <div class="sidebar__button -is-active">
            <a href="db-dashboard.html" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="/gotrip/img/dashboard/sidebar/compass.svg" alt="image" class="mr-15">
              Dashboard
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="db-booking.html" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="/gotrip/img/dashboard/sidebar/booking.svg" alt="image" class="mr-15">
              Booking History
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="db-wishlist.html" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="/gotrip/img/dashboard/sidebar/bookmark.svg" alt="image" class="mr-15">
              Wishlist
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="db-settings.html" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="img/dashboard/sidebar/gear.svg" alt="image" class="mr-15">
              Settings
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="/gotrip/img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
              Logout
            </a>
          </div>
        </div>

      </div>


    </div>

    <div class="dashboard__main">
      <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Settings</h1>
            <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>

          </div>

          <div class="col-auto">

          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Personal Information</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-2">Location Information</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-3">Change Password</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="row y-gap-30 items-center">
                  <div class="col-auto">
                    <div class="d-flex ratio ratio-1:1 w-200">
                      <img src="/gotrip/img/misc/avatar-1.png" alt="image" class="img-ratio rounded-4">

                      <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                        <div class="align-items-center bg-white d-flex justify-content-center rounded-4 size-40">
                          <i class="icon-trash text-16"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <h4 class="text-16 fw-500">Your avatar</h4>
                    <div class="text-14 mt-5">PNG or JPG no bigger than 800px wide and tall.</div>

                    <div class="d-inline-block mt-15">
                      <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                        <i class="icon-upload-file text-20 mr-10"></i>
                        Browse
                      </button>
                    </div>
                  </div>
                </div>

                <div class="border-top-light mt-30 mb-30"></div>

                <div class="col-xl-9">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Business Name</label>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">User Name</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">First Name</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Last Name</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Email</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Phone Number</label>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Birthday</label>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <textarea required rows="5"></textarea>
                        <label class="lh-1 text-16 text-light-1">About Yourself</label>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="d-inline-block pt-30">

                  <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Save Changes <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>

              <div class="tabs__pane -tab-item-2">
                <div class="col-xl-9">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Address Line 1</label>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Address Line 2</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">City</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">State</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Select Country</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">ZIP Code</label>
                      </div>

                    </div>

                    <div class="col-12">
                      <div class="d-inline-block">

                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                          Save Changes <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tabs__pane -tab-item-3">
                <div class="col-xl-9">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Current Password</label>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">New Password</label>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">New Password Again</label>
                      </div>

                    </div>

                    <div class="col-12">
                      <div class="row x-gap-10 y-gap-10">
                        <div class="col-auto">

                          <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Save Changes <div class="icon-arrow-top-right ml-15"></div>
                          </a>

                        </div>

                        <div class="col-auto">
                          <button class="button h-50 px-24 -blue-1 bg-blue-1-05 text-blue-1">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <footer class="footer -dashboard mt-60">
          <div class="footer__row row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="row y-gap-20 items-center">
                <div class="col-auto">
                  <div class="text-14 lh-14 mr-30">© 2022 GoTrip LLC All rights reserved.</div>
                </div>

                <div class="col-auto">
                  <div class="row x-gap-20 y-gap-10 items-center text-14">
                    <div class="col-auto">
                      <a href="#" class="text-13 lh-1">Privacy</a>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="text-13 lh-1">Terms</a>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="text-13 lh-1">Site Map</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <div class="d-flex x-gap-5 y-gap-5 items-center">
                <button class="text-14 fw-500 underline">English (US)</button>
                <button class="text-14 fw-500 underline">USD</button>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <!--  Chart.js v3.7.1 -->


  
  <?= HeaderMeta::getAssetsJs() ?>
</body>


</html>