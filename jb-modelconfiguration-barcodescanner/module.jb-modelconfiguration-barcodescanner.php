<?php

/**
 * @copyright   Copyright (C) 2021 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-04-19 11:20:52
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jb-modelconfiguration-barcodescanner/2.6.210419',
        array(
                // Identification
                //
                'label' => 'Datamodel: Model Configuration - Barcode Scanner',
                'category' => 'business',

                // Setup
                //
                'dependencies' => array(
					'itop-config-mgmt/2.6.0',
					'itop-endusers-devices/2.6.0',
					'jb-barcodescanner/2.6.0',
                ),
                'mandatory' => false,
				'visible' => true, // To prevent auto-install but shall not be listed in the install wizard
				'auto_select' => 'SetupInfo::ModuleIsSelected("jb-barcodescanner") && SetupInfo::ModuleIsSelected("jb-modelconfiguration-main")',


                // Components
                //
                'datamodel' => array(
					'model.jb-modelconfiguration-barcodescanner.php'
                ),
                'webservice' => array(

                ),
                'data.struct' => array(
					// add your 'structure' definition XML files here,
                ),
                'data.sample' => array(
					// add your sample data XML files here,
                ),

                // Documentation
                //
                'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
                'doc.more_information' => '', // hyperlink to more information, if any

                // Default settings
                //
                'settings' => array(
                        // Module specific settings go here, if any
                ),
        )
);




