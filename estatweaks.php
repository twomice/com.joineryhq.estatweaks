<?php

require_once 'estatweaks.civix.php';
use CRM_Estatweaks_ExtensionUtil as E;

/**
 * Implements hook_civicrm_check().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_check/
 */
function estatweaks_civicrm_check(&$messages) {
  $validCoreVersion = '5.28.3';
  $currentCoreVersion = CRM_Utils_System::version();
  if ($currentCoreVersion != $validCoreVersion) {
    $messages[] = new CRM_Utils_Check_Message(
      'estatweaks_coreversion',
      E::ts('The ESTA Tweaks extension includes overridden PHP files copied from CiviCRM %1, but this site is running CiviCRM %2; you should have a developer update those overridden files to match the current CiviCRM version.', [
        $validCoreVersion,
        $currentCoreVersion,
      ]),
      E::ts('CiviCRM Version Incompatible'),
      \Psr\Log\LogLevel::CRITICAL,
      'fa-flag'
    );
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function estatweaks_civicrm_config(&$config) {
  _estatweaks_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function estatweaks_civicrm_xmlMenu(&$files) {
  _estatweaks_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function estatweaks_civicrm_install() {
  _estatweaks_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function estatweaks_civicrm_postInstall() {
  _estatweaks_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function estatweaks_civicrm_uninstall() {
  _estatweaks_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function estatweaks_civicrm_enable() {
  _estatweaks_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function estatweaks_civicrm_disable() {
  _estatweaks_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function estatweaks_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _estatweaks_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function estatweaks_civicrm_managed(&$entities) {
  _estatweaks_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function estatweaks_civicrm_caseTypes(&$caseTypes) {
  _estatweaks_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function estatweaks_civicrm_angularModules(&$angularModules) {
  _estatweaks_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function estatweaks_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _estatweaks_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function estatweaks_civicrm_entityTypes(&$entityTypes) {
  _estatweaks_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function estatweaks_civicrm_themes(&$themes) {
  _estatweaks_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
// function estatweaks_civicrm_preProcess($formName, &$form) {

// } // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
// function estatweaks_civicrm_navigationMenu(&$menu) {
//   _estatweaks_civix_insert_navigation_menu($menu, 'Mailings', array(
//     'label' => E::ts('New subliminal message'),
//     'name' => 'mailing_subliminal_message',
//     'url' => 'civicrm/mailing/subliminal',
//     'permission' => 'access CiviMail',
//     'operator' => 'OR',
//     'separator' => 0,
//   ));
//   _estatweaks_civix_navigationMenu($menu);
// } // */
