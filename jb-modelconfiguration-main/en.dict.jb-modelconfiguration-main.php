<?php
/**
 * @copyright   Copyright (C) 2021 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-04-19 11:20:52
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(

	//	'Class:SomeClass' => 'Class name',
	//	'Class:SomeClass+' => 'More info on class name',
	//	'Class:SomeClass/Attribute:some_attribute' => 'your translation for the label',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value' => 'your translation for a value',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value+' => 'your translation for more info on the value',
    //	'SomeClass/Some:Fieldset' => 'Fieldset',
	
	'Class:ModelConfiguration' => 'Model Configuration',
	'Class:ModelConfiguration+' => 'Detailed info on the configuration of this specific model.',
	'Class:ModelConfiguration/Attribute:name' => 'Name',
	'Class:ModelConfiguration/Attribute:model_id' => 'Model',
	'Class:ModelConfiguration/Attribute:model_name' => 'Model name',
	'Class:ModelConfiguration/Attribute:model_brand_id' => 'Brand',
	'Class:ModelConfiguration/Attribute:model_brand_name' => 'Brand name',
	'Class:ModelConfiguration/Attribute:configuration' => 'Configuration',
	'Class:ModelConfiguration/Attribute:configuration+' => 'Specific configuration: how many USB ports, video ports, hard disks, memory, ...',
	'Class:ModelConfiguration/Attribute:physicaldevices_list' => 'Devices',
	'Class:ModelConfiguration/Attribute:physicaldevices_list+' => 'List of devices having this model configuration.',
	
	'Class:Model/Attribute:modelconfigurations_list' => 'Configurations',
	
	'Class:PhysicalDevice/Attribute:modelconfiguration_id' => 'Model configuration',
	
	
));



