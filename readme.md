# jb-modelconfiguration-main
Copyright (C) 2021 Jeffrey Bostoen

[![License](https://img.shields.io/github/license/jbostoen/iTop-custom-extensions)](https://github.com/jbostoen/iTop-custom-extensions/blob/master/license.md)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/jbostoen)
🍻 ☕


Need assistance with iTop or one of its extensions?  
Need custom development?  
Please get in touch to discuss the terms: **jbostoen.itop@outlook.com**

## What?
Adds model configuration. This extends upon limited model information and allows to keep a more detailed configuration report.  
For intance, a certain model of a PC can have multiple configurations (different ports, hard disks, video cable slots, ...)

Even for models with only one configuration, this detailed information can be handy to have.

The modelconfiguration_id is added to every PhysicalDevice, but so far only visible to:

vanilla iTop classes:
* PC

Supported custom iTop classes:
* Barcode Scanner [jb-barcodescanner](https://github.com/jbostoen/itop-jb-barcodescanner)
* Docking Station [jb-dockingstation](https://github.com/jbostoen/itop-jb-dockingstation)
* Monitor [jb-monitor](https://github.com/jbostoen/itop-jb-monitor)

Hint: by changing iTop's configuration file, you could add attachments to this class such as product sheets, quick start guides, ...


## Cookbook

XML:
* new iTop class
* install additional (hidden) extensions based on user selection choices during setup wizard





