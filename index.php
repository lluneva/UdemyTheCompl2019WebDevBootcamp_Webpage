<?php
include_once 'head_menu.php';

$page = isset($_GET['page']) ? $_GET['page'] : 0;

switch ($page) {
 default:
  include_once 'indexBody.php';
  break;
 case 'index':
  include_once 'indexBody.php';
  break;
 case 'contactUs':
  include_once 'ContactUs.php';
  break;
 case 'pricingAndOrdering':
  include_once 'pricingAndOrdering.php';
  break;

}

include_once 'footer.php';
