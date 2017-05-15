=== Plugin Name ===
Contributors: webheadllc
Donate Link: http://webheadcoder.com/donate-cf7-multi-step-forms
Tags: contact form 7, multistep form, form, multiple pages, store form
Requires at least: 3.4.1
Tested up to: 4.4.2
Stable tag: 2.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables the Contact Form 7 plugin to create multi-page, multi-step forms.

== Description ==

I needed a contact form that spanned across multiple pages and in the end would send an email with all the info collected.  This plugin does just that.  This plugin requires the Contact Form 7 Wordpress plugin.

Sample of this working is at [http://webheadcoder.com/contact-form-7-multi-step-form/](http://webheadcoder.com/contact-form-7-multi-step-form/)

**Usage**

1. Create a contact form 7 form as you normally would.

1. Place your cursor at the end of the form.

1. On the "Form" tab of the Contact Form 7 form, click on the button named "multistep".

1. In the popup, type in the current step and total steps in your multi-step process.  For example, if this is the first form in a total of 3 forms, type in "1" for Current Step and "3" in Total Steps.

1. The Next Page URL is the url that contains your next form.  If this form is the last step, you can leave it blank or fill it in to redirect the user to another page.

1.  Click "Insert Tag"

1.  Repeat for each form in your multi-step form process.  


**Additional Tags**
`[multiform "your-name"]` - The `multiform` form-tag can be used to display a field from a previous step.  Replace `your-name` with the name of your field.

`[previous "Go Back"]` - The `previous` form-tag can be used to display a button to go to a previous step.  Replace `Go Back` with text you want to show in the button.


**What this plugin DOES NOT do:**  

* This plugin does not support file uploads on every form.  If you need to use file uploads make sure to place it on the last step.

* This plugin does not load another form on the same page.  It only works when the forms are on separate pages.  Many have asked to make it load via ajax so all forms can reside on one page.  This plugin does not support that.

* This plugin does not support large forms with many steps.  See [http://webheadcoder.com/too-many-cookies/](http://webheadcoder.com/too-many-cookies/) for more details and suggestions.


**pre 2.0 Instructions:**

The instructions below are only for older versions of the plugin.  This is only kept here for reference and will be removed in the next release.

1. Create a contact form 7 form as you normally would.

1. Add a hidden tag named "step" with the value being <current_step>-<total-steps>.  For example, if you have a 5-step form and you are creating the first step, the form would need: `[hidden step "1-5"]`.  The last form in this example would need: `[hidden step "5-5"]`

1. In the "Additional Settings" textarea at the bottom of the form editing page, add in the location of the next form.
If the next form is located on my-second-page on example.com you would add the following all on one line to "Additional Settings":  `on_sent_ok: "location.replace('http://example.com/my-second-page/');"` 

1. Repeat steps 1 - 3.  On the form that will actually send a email, do not do step 3 unless you want the form to redirect 
the user to another page.

In a contact form, to retrieve fields from previous forms you can use something like `[form your-email]` where "your-email" is the name of the field from the previous form.  This would be useful on the last step where it is confirming all the info from previous forms.

In a contact form you users may want to go back to a previous step to change some info they entered.  To allow the user to go back, add the `[back "Previous Step"]` button to the form.

The hidden field is taken directly from the "Contact Form 7 Modules".  If you have that installed, the Multi-Step plugin will use that.




== Frequently Asked Questions ==


= Why "place your cursor at the end of the form" before inserting the multistep tag? =

The `multistep` form tag is a hidden field and tries not to add any spacing to your form.  In this effort, anything directly after this tag may be hidden.  To prevent this, add a carriage return after the `multistep` form tag, or just follow the directions and place the form tag at the end of the form.


= I keep getting the "Please fill out the form on the previous page" message.  What's wrong? =

If you have everything set up correctly and you get a message saying, "Please fill out the form on the previous page" after submitting the first form, then it's probably your caching system not allowing cookies to be set in the normal way.  No workarounds or fixes are planned at this time.  You will need to turn off caching for the affected pages.


= How can I show a summary of what the user entered or show fields from previous steps? =

`[multiform "your-name"]` - The multiform form-tag can be used to display a field from a previous step.  Replace `your-name` with the name of your field.

= My form values aren't being sent in the email.  I get [multiform "your-name"] instead of the actual person's name. =

The multiform form-tag should only be used on the Form tab.  On the Mail tab follow the instructions from the Contact Fom 7 documentation.  So if you wanted to show the `your-name` field, type `[your-name]`.


== Changelog ==

= 2.0.1 = 
Minor fix to detecting if previous form was filled.  


= 2.0 = 
Added Form Tags to Form Tag Generator.  No more needing to update the Additional Settings tab.  
Added error alert when form is too large.  
Fixed Deprecated: preg_replace() error message.  
Fixed certain instances where the "Please fill out the form on the previous page" messages displayed unexpectedly.
Fixed issue where it was possible to type in the url of the next step after receiving validation errors on the current step.  


= 1.6 =
Added support for when contact form 7 ajax is disabled.

= 1.5 =
Added support for free_text in checkboxes and radio buttons.

= 1.4.4 =
fix empty checkboxes causing javascript error when going back.

= 1.4.3 =
fix exclusive checkboxes not saving on back.  added version to javascript.

= 1.4.2 =
fix radio button not saving on back. make sure its the last step before clearing cookies.

= 1.4.1 =
Fixed bug where tapping the Submit button on the final step submits form even with validation errors.

= 1.4 =
Updated to be compatible with Contact Form 7 version 3.9.

= 1.3.6 =
Updated readme to be more readable.
Fixed issue for servers with magic quotes turned off.  Fixes "Please fill out the form on the previous page" error.

= 1.3.5 =
Fix:  Also detect contact-form-7-3rd-party-integration/hidden.php so no conflicts arise if both are activated.

= 1.3.4 =
Fix:  Better detection of contact-form-7-modules plugin so no conflicts arise if both are activated.

= 1.3.3 =
Fixed back button functionality.

= 1.3.2 =
Some people are having trouble with cookies.  added 'cf7msm_force_session' filter to force to use session.

= 1.3.1 =
Added checks to prevent errors when contact form 7 is not installed.

= 1.3 =
Confused with the version numbers.  apparently 1.02 is greater than 1.1?

= 1.1 =
renamed all function names to be more consistent.
use cookies before falling back to session.
added back shortcode so users can go back to previous step.

= 1.02 =
updated version numbers.

= 1.01 =
updated readme.

= 1.0 =
Initial release.
