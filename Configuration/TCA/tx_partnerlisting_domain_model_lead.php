<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => 1,
		'versioningWS' => 2,
        'versioning_followPages' => true,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
        'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,email,street,post_code_and_city,phone,fax,message,receiver,',
        'iconfile' => 'EXT:partner_listing/Resources/Public/Icons/tx_partnerlisting_domain_model_lead.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, email, street, post_code_and_city, phone, fax, message, receiver',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, email, street, post_code_and_city, phone, fax, message, receiver, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages'
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_partnerlisting_domain_model_lead',
                'foreign_table_where' => 'AND tx_partnerlisting_domain_model_lead.pid=###CURRENT_PID### AND tx_partnerlisting_domain_model_lead.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],

	    'name' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'email' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'street' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'post_code_and_city' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.post_code_and_city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'phone' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.phone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'fax' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.fax',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'message' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.message',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	        
	    ],
	    'receiver' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:partner_listing/Resources/Private/Language/locallang_db.xlf:tx_partnerlisting_domain_model_lead.receiver',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_partnerlisting_domain_model_partner',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	        
	    ],
        
    ],
];
