<?php
namespace ThomasWoehlke\PartnerListing\Controller;

/***
 *
 * This file is part of the "Partner Listing" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Thomas Woehlke <thomas@woehlke.org>, faktura gGmbH
 *
 ***/

/**
 * PartnerController
 */
class PartnerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * partnerRepository
     *
     * @var \ThomasWoehlke\PartnerListing\Domain\Repository\PartnerRepository
     * @inject
     */
    protected $partnerRepository = null;

    /**
     * action list
     * @param string $plz
     * @param string $search
     * @return void
     */
    public function listAction($plz=null,$search='')
    {
        if($plz==null && $search==''){
            $partners = $this->partnerRepository->findAll();
            $this->view->assign('partners', $partners);
        } else {
            if ($plz!=null) {
                if (ctype_digit($plz) && (strlen($plz) == 1)) {
                    $this->addFlashMessage($plz, 'PLZ', \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO, false);
                    $partners = $this->partnerRepository->findByPostCode($plz);
                    $this->view->assign('partners', $partners);
                }
            }
            if ($search!=''){
                $flashMessage = 'Suchergebnis';
                $this->addFlashMessage($flashMessage, $search , \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO, false);
                $partners = $this->partnerRepository->findBySearchterm($search);
                $this->view->assign('partners', $partners);
            }
        }
    }

    /**
     * action show
     *
     * @param \ThomasWoehlke\PartnerListing\Domain\Model\Partner $partner
     * @return void
     */
    public function showAction(\ThomasWoehlke\PartnerListing\Domain\Model\Partner $partner)
    {

        $googleApiKey = "AIzaSyD7zqRjUOb_Ycpn7g-2nIgKJXb2BDrUgZQ";
        $this->view->assign('googleApiKey', $googleApiKey);
        $this->view->assign('googleMap', $this->getGoogleMapForPartner($partner));
        $this->view->assign('partner', $partner);
    }

    /**
     * @param \ThomasWoehlke\PartnerListing\Domain\Model\Partner $partner
     * @return string
     */
    private function getGoogleMapForPartner(\ThomasWoehlke\PartnerListing\Domain\Model\Partner $partner)
    {
        $googleAddress = $partner->getStreet() . ',' . $partner->getPostCode() . ' ' . $partner->getCity() . ', Germany';
        $myHtml = "<script type=\"text/javascript\">\n";
        $myHtml .= "var map = null;\n";
        $myHtml .= "google.maps.event.addDomListener(window, 'load', initGoogleMap);\n";
        $myHtml .= "google.maps.event.addDomListener(window, 'resize', initGoogleMap);\n";
        $myHtml .= "var mapElement = document.getElementById('google-map');\n";
        $myHtml .= "function initGoogleMap() {\n";
        $myHtml .= "  var mapOptions = {\n";
        $myHtml .= "   zoom: 15,\n";
        $myHtml .= "   center: new google.maps.LatLng(52.4899342, 13.3586614),\n";
        $myHtml .= "   scrollwheel: false,\n";
        $myHtml .= "   draggable: false,\n";
        $myHtml .= "  }\n";
        $myHtml .= "  map = new google.maps.Map(mapElement,mapOptions);\n";
        $myHtml .= "  var image = 'fileadmin/template/img/map-marker.png';\n";
        $myHtml .= "  var geocoder = new google.maps.Geocoder();\n";
        $myHtml .= "  geocoder.geocode( { 'address': '";
        $myHtml .= $googleAddress;
        $myHtml .= "' }, function(results, status) {\n";
        $myHtml .= "    if (status == google.maps.GeocoderStatus.OK) {\n";
        $myHtml .= "      map.setCenter(results[0].geometry.location);\n";
        $myHtml .= "      var beachMarker = new google.maps.Marker({\n";
        $myHtml .= "        map: map,\n";
        $myHtml .= "        position: results[0].geometry.location,\n";
        $myHtml .= "        icon: image,\n";
        $myHtml .= "        title: '" . $partner->getName() . "',\n";
        $myHtml .= "      });\n";
        $myHtml .= "    } else {\n";
        $myHtml .= "      alert('Google konnte die Adresse nicht finden: ' + status);\n";
        $myHtml .= "    }\n";
        $myHtml .= "  });\n";
        $myHtml .= "}\n";
        $myHtml .= "</script>\n";
        return $myHtml;
    }

}
