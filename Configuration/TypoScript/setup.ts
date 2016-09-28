
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
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-partner-listing table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-partner-listing table th {
        font-weight:bold;
    }

    .tx-partner-listing table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
