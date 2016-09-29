
plugin.tx_partnerlisting_partnerlisting {
  view {
    templateRootPaths.0 = EXT:partner_listing/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_partnerlisting_partnerlisting.view.templateRootPath}
    partialRootPaths.0 = EXT:partner_listing/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_partnerlisting_partnerlisting.view.partialRootPath}
    layoutRootPaths.0 = EXT:partner_listing/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_partnerlisting_partnerlisting.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_partnerlisting_partnerlisting.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_partnerlisting._CSS_DEFAULT_STYLE (
  #tx-partner-listing-microsite #info-image img,
  #tx-partner-listing-microsite #service-image img,
  #tx-partner-listing-microsite #contact-image img {
    float: left;
    width: 34%;
    height: auto;
    margin-right: 30px;
  }
)
