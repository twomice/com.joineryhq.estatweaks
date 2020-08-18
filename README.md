# ESTA Tweaks
## com.joineryhq.estatweaks

Custom CiviCRM modifications for ESTA:

* On membership contribution pages, allows user to select existing current lifetime memberships
  (whereas native CiviCRM behavior is to hide options for lifetime membership types if the user
  has a current membership of that type.)
* Shows a critical alert in CiviCRM System Status if CiviCRM version doesn't match that of PHP
  file overrides used by this extension.

## Caveats

This extension makes use of PHP file overrides. Developer support will be needed for any 
upgrade of CiviCRM, to prevent misbehavior from mismatching file versions.

## Requirements

* PHP v7.0+
* CiviCRM 5.26.2

## Usage

No configuration is needed.

## Known Issues

Use of PHP file overrides is considered risky with regard to future CiviCRM upgrades,
for reasons stated above. Please consult a developer if you have questions about these
risks.

## Support
![screenshot](/images/joinery-logo.png)

Joinery provides services for CiviCRM including custom extension development, training, data migrations, and more. We aim to keep this extension in good working order, and will do our best to respond appropriately to issues reported on its [github issue queue](https://github.com/twomice/com.joineryhq.estatweaks/issues). In addition, if you require urgent or highly customized improvements to this extension, we may suggest conducting a fee-based project under our standard commercial terms.  In any case, the place to start is the [github issue queue](https://github.com/twomice/com.joineryhq.estatweaks/issues) -- let us hear what you need and we'll be glad to help however we can.

And, if you need help with any other aspect of CiviCRM -- from hosting to custom development to strategic consultation and more -- please contact us directly via https://joineryhq.com
