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
