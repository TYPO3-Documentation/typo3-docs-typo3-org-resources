<?php

// REMEMBER: PHP/5.3.3-7+squeeze29 !!!

// Redirect Handling
call_user_func(function () {
    // Configuration
    $mapping = array(
    // Redirects for FluidViewHelper from Extbase guide.
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Alias.html' => '/typo3cms/ViewHelperReference/typo3fluid/fluid/latest/Alias.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Base.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Base.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Buttons/Csh.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Buttons/Csh.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Buttons/Index.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Buttons/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Buttons/Shortcut.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Buttons/Shortcut.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Container.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Container.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Index.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/InfoBox.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Infobox.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Menus/ActionMenu.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Menus/ActionMenu.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Menus/ActionMenuItem.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Menus/ActionMenuItem.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Menus/ActionMenuItemGroup.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Menus/ActionMenuItemGroup.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Menus/Index.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Menus/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/PageInfo.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/PageInfo.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/PagePath.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/PagePath.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/PageRenderer.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/PageRenderer.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Security/IfAuthenticated.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Security/IfAuthenticated.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Security/IfHasRole.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Security/IfHasRole.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Security/Index.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Security/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/TableList.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/TableList.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Widget/Index.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Widget/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Be/Widget/Paginate.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Be/Widget/Paginate.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/CObject.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/CObject.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Case.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Base.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Comment.html' => '/typo3cms/ViewHelperReference/typo3fluid/fluid/latest/Comment.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Count.html' => '/typo3cms/ViewHelperReference/typo3fluid/fluid/latest/Count.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Cycle.html' => '/typo3cms/ViewHelperReference/typo3fluid/fluid/latest/Cycle.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Debug.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Debug.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Debug/Index.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Debug/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Debug/Render.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Debug/Render.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/DefaultCase.html' => '/typo3cms/ViewHelperReference/typo3fluid/fluid/latest/DefaultCase.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Else.html' => '/typo3cms/ViewHelperReference/typo3fluid/fluid/latest/Else.html',
        // Does not exist?
        // '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Escape.html' => '',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/FlashMessages.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/FlashMessages.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/For.html' => '/typo3cms/ViewHelperReference/typo3fluid/fluid/latest/For.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Form.html',
        // Does not exist
        // '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/AbstractForm.html' => '',
        // '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/AbstractFormField.html' => '',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Button.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Button.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Checkbox.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Checkbox.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Hidden.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Hidden.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Index.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/Form/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Password.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Password.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Radio.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Radio.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Select.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Select.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Select/Index.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Select/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Select/Optgroup.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Select/Optgroup.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Select/Option.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Select/Option.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Submit.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Submit.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Textarea.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Textarea.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Textfield.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Textfield.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/Upload.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/Upload.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Form/ValidationResults.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Form/ValidationResults.html',
        // Does not exist
        // '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/AbstractEncoding.html' => '',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Bytes.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Bytes.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Case.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Case.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Crop.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Crop.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Currency.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Currency.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Date.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Date.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Html.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Html.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Htmlentities.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Htmlentities.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/HtmlentitiesDecode.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/HtmlentitiesDecode.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Index.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Json.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Json.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Nl2br.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Nl2br.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Number.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Number.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Padding.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Padding.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/StripTags.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/StripTags.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Format/Urlencode.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Format/Urlencode.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/GroupedFor.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/GroupedFor.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/If.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/If.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Image.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Image.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Index.html' => '/typo3cms/ViewHelperReference/latest/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Layout.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Layout.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Link/Action.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Link/Action.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Link/Email.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Link/Email.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Link/External.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Link/External.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Link/Index.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Link/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Link/Page.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Link/Page.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Link/Typolink.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Link/Typolink.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Or.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Or.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Render.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Render.html',
        // Does not exist
        // '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/RenderChildren.html' => '',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/RenderFlashMessages.html' => '/typo3cms/ViewHelperReference/typo3/fluid/latest/FlashMessages.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Section.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Section.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Security/IfAuthenticated.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Security/IfAuthenticated.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Security/IfHasRole.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Security/IfHasRole.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Security/Index.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Security/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Spaceless.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Spaceless.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Switch.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Switch.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Then.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Then.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Translate.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Translate.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/Action.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/Action.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/Email.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/Email.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/External.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/External.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/Image.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/Image.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/Index.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/Page.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/Page.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/Resource.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/Resource.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Uri/Typolink.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Uri/Typolink.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Variable.html' => '/typo3cms/ViewHelperReference/latest/typo3fluid/fluid/latest/Variable.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Widget/Autocomplete.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Widget/Autocomplete.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Widget/Index.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Widget/Index.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Widget/Link.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Widget/Link.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Widget/Paginate.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Widget/Paginate.html',
        '/typo3cms/ExtbaseGuide/Fluid/ViewHelper/Widget/Uri.html' => '/typo3cms/ViewHelperReference/latest/typo3/fluid/latest/Widget/Uri.html',
    // Redirects for TCAReference
        '/typo3cms/TCAReference/ColumnsConfig/Behaviour/AllowLanguageSynchronization.html' => '/typo3cms/TCAReference/search.html?q=AllowLanguageSynchronization&check_keywords=yes&area=default',
    // Redirects for SecurityGuideTCAReference
        '/typo3cms/SecurityGuide/Backups/BackupLocation/Index.html' => '/typo3cms/CoreApiReference/Security/Backups/Index.html',
        '/typo3cms/SecurityGuide/Backups/BackupLocation/Index.html' => '/typo3cms/CoreApiReference/Security/Backups/Index.html',
        '/typo3cms/SecurityGuide/Backups/Components/Index.html' => '/typo3cms/CoreApiReference/Security/Backups/Index.html',
        '/typo3cms/SecurityGuide/Backups/FurtherConsiderations/Index.html' => '/typo3cms/CoreApiReference/Security/Backups/Index.html',
        '/typo3cms/SecurityGuide/Backups/Index.html' => '/typo3cms/CoreApiReference/Security/Backups/Index.html',
        '/typo3cms/SecurityGuide/Backups/TimePlan/Index.html' => '/typo3cms/CoreApiReference/Security/Backups/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/Communication/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/OperatingSystemAndBrowser/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/ReactQuickly/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/SecurePasswords/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/StagingServers/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/Typo3Core/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralGuidelines/Typo3Extensions/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralGuidelines/Index.html',
        '/typo3cms/SecurityGuide/GeneralInformation/AnnouncementOfUpdates/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralInformation/Index.html',
        '/typo3cms/SecurityGuide/GeneralInformation/CoreAndExtensions/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralInformation/Index.html',
        '/typo3cms/SecurityGuide/GeneralInformation/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralInformation/Index.html',
        '/typo3cms/SecurityGuide/GeneralInformation/SecurityBulletins/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralInformation/Index.html',
        '/typo3cms/SecurityGuide/GeneralInformation/Typo3Versions/Index.html' => '/typo3cms/CoreApiReference/Security/GeneralInformation/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/DatabaseAccess/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/DirectoryIndexing/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/EncryptedCommunication/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/FileDirectoryPermissions/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/FurtherActions/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/GeneralRules/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/IntegrityOfTypo3Packages/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/OtherServices/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/RestrictAccessToFiles/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesAdministrators/RoleDefinition/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesAdministrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesEditors/BackendAccess/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesEditors/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesEditors/GeneralRules/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesEditors/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesEditors/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesEditors/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesEditors/Logout/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesEditors/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesEditors/RequiredFunctions/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesEditors/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesEditors/RoleDefinition/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesEditors/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesEditors/SecureConnection/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesEditors/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/AccessPrivileges/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/ContentElements/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/EncryptionKey/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/Extensions/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/GeneralRules/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/GlobalTypo3Options/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/InstallTool/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/ReportsAndLogs/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/RoleDefinition/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/SecurityWarningsAfterLogin/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/GuidelinesIntegrators/Typoscript/Index.html' => '/typo3cms/CoreApiReference/Security/GuidelinesIntegrators/Index.html',
        '/typo3cms/SecurityGuide/HackedSite/Analyze/Index.html' => '/typo3cms/CoreApiReference/Security/HackedSite/Index.html',
        '/typo3cms/SecurityGuide/HackedSite/Detect/Index.html' => '/typo3cms/CoreApiReference/Security/HackedSite/Index.html',
        '/typo3cms/SecurityGuide/HackedSite/FurtherActions/Index.html' => '/typo3cms/CoreApiReference/Security/HackedSite/Index.html',
        '/typo3cms/SecurityGuide/HackedSite/Index.html' => '/typo3cms/CoreApiReference/Security/HackedSite/Index.html',
        '/typo3cms/SecurityGuide/HackedSite/RepairRestore/Index.html' => '/typo3cms/CoreApiReference/Security/HackedSite/Index.html',
        '/typo3cms/SecurityGuide/HackedSite/TakeOffline/Index.html' => '/typo3cms/CoreApiReference/Security/HackedSite/Index.html',
        '/typo3cms/SecurityGuide/Introduction/About/Index.html' => '/typo3cms/CoreApiReference/Security/Introduction/Index.html',
        '/typo3cms/SecurityGuide/Introduction/Credits/Index.html' => '/typo3cms/CoreApiReference/Security/Introduction/Index.html',
        '/typo3cms/SecurityGuide/Introduction/Feedback/Index.html' => '/typo3cms/CoreApiReference/Security/Introduction/Index.html',
        '/typo3cms/SecurityGuide/Introduction/History/Index.html' => '/typo3cms/CoreApiReference/Security/Introduction/Index.html',
        '/typo3cms/SecurityGuide/Introduction/Index.html' => '/typo3cms/CoreApiReference/Security/Introduction/Index.html',
        '/typo3cms/SecurityGuide/Introduction/TargetAudience/Index.html' => '/typo3cms/CoreApiReference/Security/Introduction/Index.html',
        '/typo3cms/SecurityGuide/SecurityTeam/Contact/Index.html' => '/typo3cms/CoreApiReference/Security/SecurityTeam/Index.html',
        '/typo3cms/SecurityGuide/SecurityTeam/IncidentHandling/Index.html' => '/typo3cms/CoreApiReference/Security/SecurityTeam/Index.html',
        '/typo3cms/SecurityGuide/SecurityTeam/Index.html' => '/typo3cms/CoreApiReference/Security/SecurityTeam/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/AuthorizationBypass/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/CodeInjection/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/CrossSiteRequestForgery/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/CrossSiteScripting/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/IdentityTheft/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/InformationDisclosure/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
        '/typo3cms/SecurityGuide/TypesOfThreats/SqlInjection/Index.html' => '/typo3cms/CoreApiReference/Security/TypesOfThreats/Index.html',
    // Redirects for ext:form
        '/typo3cms/extensions/form/Concepts/Index.html' => '/typo3cms/extensions/form/I/Concepts/Index.html',
        '/typo3cms/extensions/form/Config/Index.html' => '/typo3cms/extensions/form/I/Config/Index.html',
        '/typo3cms/extensions/form/ApiReference/Index.html' => '/typo3cms/extensions/form/I/ApiReference/Index.html',
        '/typo3cms/extensions/form/FAQ/Index.html' => '/typo3cms/extensions/form/I/FAQ/Index.html',
    );

    $url = $_SERVER['REQUEST_URI'];
    if (isset($mapping[$url])) {
        header('Location: ' . $mapping[$url], true, 302);
        exit();
    }
});

function getSpecific404File($path, $fileName404)
{
    while ($path !== '/') {
        $path = dirname($path);
        $pathFor404 = $path . '/' . $fileName404;
        if (is_file($pathFor404)) {
            return $pathFor404;
        }
    }

    return '';
}

// 404 Handling
call_user_func(function () {
    // Configuration
    $documentRoot = '/home/mbless/public_html/';
    $relativeFilePath404 = '404.html';
    $baseTagContent = 'https://docs.typo3.org/';

    // Detect more specific 404
    $absolute404Path = $documentRoot . $relativeFilePath404;
    if (isset($_SERVER['REDIRECT_URL'])) {
        $specificFile = getSpecific404File($documentRoot . $_SERVER['REDIRECT_URL'], $relativeFilePath404);
        if ($specificFile !== '') {
            $absolute404Path = $specificFile;
        }
    }

    $content = file_get_contents($absolute404Path);
    $baseTag = '<base href="' . $baseTagContent . '">';

    // Search for content, and append base tag
    $content = str_replace('<meta charset="utf-8"/>', '<meta charset="utf-8"/>' . PHP_EOL . $baseTag, $content);

    echo $content;
    exit();
});
