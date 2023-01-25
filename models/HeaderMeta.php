<?php
class HeaderMeta
{
  public static function getFonts(): string
  {
    return "
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap\" rel=\"stylesheet\">
    ";
  }
  public static function getMeta(): string
  {
    return "
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
    
    ";
  }
  public static function getAssetsCss(): string
  {
    return "
      <link rel=\"stylesheet\" href=\"/gotrip/css/vendors.css\">
      <link rel=\"stylesheet\" href=\"/gotrip/css/main.css\">
      ";
  }

  public static function getMenu(): string
  {
    $dbConn = new mysqli("localhost", "root", "", "gotrip");

    if ($dbConn->connect_error) {
      die("Connection failed: " . $dbConn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE id = {$_SESSION['id']}";

    $userArr = $dbConn->query($sql)->fetch_all(MYSQLI_ASSOC);

    return "
            <div data-aim=\"fade\" class=\"header__container px-30 sm:px-20 is-in-view\">
              <div class=\"row justify-between items-center\">
                    <div class=\"col-auto\">
                        <div class=\"d-flex items-center\">
                          <a href=\"/gotrip\" class=\"header__logo mr-20\">
                            <img src=\"/gotrip/img/general/logo-light.svg\" alt=\"GoTrip\">
                          </a>
                          <div class=\"header-menu\" data-x=\"mobile-menu\" data-x-toggle=\"is-menu-active\">
                              <div class=\"menu js-navList\">
                                    <ul class=\"menu__nav text-white -is-active\">
                                        <li class=\"\">
                                            <a href=\"/gotrip\">
                                              <span class=\"mr-10 text-white\">Home</span>
                                            </a>
                                        </li>
                                        <!--  Categories Menu Item-->
                                        <li class=\"menu-item-has-children\">
                                          <a data-barba=\"\">
                                            <span class=\"mr-10\">Categories</span>
                                            <i class=\"icon icon-chevron-sm-down\"></i>
                                          </a>
                                          <!-- Categories Menu's sub items-->
                                          <ul class=\"subnav\">
                                            <li class=\"menu-item-has-children\">
                                              <a data-barba=\"\" class=\"text-dark\">
                                                <span class=\"mr-10\">Hotels</span>
                                                <i class=\"icon icon-chevron-right\"></i>
                                              </a>
                                              <ul class=\"subnav\">
                                               <!-- 
                                                <li>
                                                  <a href=\"\">Hotel Booking</a>
                                                </li>
                                                -->
                                                <li>
                                                  <a href=\"/gotrip/hotel-map.php\">Hotel Map</a>
                                                </li>
                                                <li>
                                                  <a href=\"\">Hotel List</a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li class=\"menu-item-has-children\">
                                              <a data-barba=\"\" class=\"text-dark\">
                                                <span class=\"mr-10\">Tour</span>
                                                <i class=\"icon icon-chevron-right\"></i>
                                              </a>
                                              <ul class=\"subnav\">
                                                <li>
                                                  <a href=\"\">Tour Map</a>
                                                </li>
                                                <li>
                                                  <a href=\"\">Tour List</a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li class=\"menu-item-has-children\">
                                              <a data-barba=\"\" class=\"text-dark\">
                                                <span class=\"mr-10\">Holiday Rental</span>
                                                <i class=\"icon icon-chevron-right\"></i>
                                              </a>
                                              <ul class=\"subnav\">
                                                <li>
                                                  <a href=\"\">Rental List</a>
                                                </li>
                                                <li>
                                                  <a href=\"\">Rental Map</a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li class=\"menu-item-has-children\">
                                              <a data-barba=\"\" class=\"text-dark\">
                                                <span class=\"mr-10\">Car's</span>
                                                <i class=\"icon icon-chevron-right\"></i>
                                              </a>
                                              <ul class=\"subnav\">
                                                <!-- 
                                                <li>
                                                  <a href=\"\">Car List</a>
                                                </li>
                                                -->
                                                <li>
                                                  <a href=\"/gotrip/car-map.php\">Car Map</a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li class=\"menu-item-has-children\">
                                              <a data-barba=\"\" class=\"text-dark\">
                                                <span class=\"mr-10\">Cruise</span>
                                                <i class=\"icon icon-chevron-right\"></i>
                                              </a>
                                              <ul class=\"subnav\">
                                                <li>
                                                  <a href=\"\">Cruise List</a>
                                                </li>
                                                <li>
                                                  <a href=\"\">Cruise Map</a>
                                                </li>
                                                <li>
                                                  <a href=\"\">Cruise Hotel</a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li class=\"menu-item-has-children\">
                                              <a data-barba=\"\" class=\"text-dark\">
                                                <span class=\"mr-10\">Flight</span>
                                                <i class=\"icon icon-chevron-right\"></i>
                                              </a>
                                              <ul class=\"subnav\">
                                                <li>
                                                  <a href=\"\">Flight List</a>
                                                </li>
                                                <li>
                                                  <a href=\"\">Flight Map</a>
                                                </li>
                                                <li>
                                                  <a href=\"\">Flight History</a>
                                                </li>
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                        <li class=\"\">
                                            <a href=\"/gotrip/blog.php\">
                                              <span class=\"mr-10 text-white\">Blog</span>
                                            </a>
                                        </li>
                                        <li class=\"\">
                                            <a href=\"/gotrip/contact.php\">
                                              <span class=\"mr-10 text-white\">Contact</span>
                                            </a>
                                        </li>
                                        <li class=\"\">
                                            <a href=\"/gotrip/about.php\">
                                              <span class=\"mr-10 text-white\">About</span>
                                            </a>
                                        </li>
                                      </ul>
                                </div>
                          </div>
                        </div>
                      </div>
                    <div class=\"col-auto\">
                      <div class=\"d-flex items-center\">
                        <div class=\"row x-gap-20 items-center xxl:d-none\">
                          <div class=\"col-auto\">
                            <button class=\"d-flex items-center text-14 text-white\" data-x-click=\"currency\">
                              <span class=\"js-currencyMenu-mainTitle\">USD</span>
                            </button>
                          </div>
                          <div class=\"col-auto\">
                            <button class=\"d-flex items-center text-14 text-white\" data-x-click=\"language\">
                              <img src=\"/gotrip/img/general/lang.png\" alt=\"United Kingdom\" class=\"rounded-full mr-10\">
                              <span class=\"js-languageMenu-mainTitle\">United Kingdom</span>
                            </button>
                          </div>
                        </div>

                        <!-- Login/Register section-->
                         " . (isset($_SESSION['id']) ? "
                          <div class=\"d-flex items-center ml-20 is-menu-opened-hide md:d-none\">
                            <a href=\"/gotrip/user/profile.php\" class=\"button px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1\">
                              <img src=\"/gotrip/" . $userArr[0]['img_url'] . "\" alt=\"\" class=\"rounded-full mr-10\">
                              " . $_SESSION['name'] . "
                            </a>
                            <a href=\"/gotrip/user/logout.php\" class=\"button px-30 fw-400 text-14 border-white -blue-1 h-50 text-white ml-20\">Logout</a>
                          </div>
                          " : "
                          <div class=\"d-flex items-center ml-20 is-menu-opened-hide md:d-none\">
                            <a href=\"/gotrip/user/login.php\" class=\"button px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1\">Become An Expert</a>
                            <a href=\"/gotrip/user/signin.php\" class=\"button px-30 fw-400 text-14 border-white -blue-1 h-50 text-white ml-20\">Sign In / Register</a>
                          </div>
                        ") . "
                      </div>
                    </div>
                </div>
            </div>
        ";
  }

  public static function getAssetsJs(): string
  {
    return "
       <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM\"></script>
       <script src=\"https://unpkg.com/@googlemaps/markerclusterer@2.0.15/dist/index.min.js\"></script>
     
       <script src=\"/gotrip/js/vendors.js\"></script>
       <script src=\"/gotrip/js/main.js\"></script>
       ";
  }
}
