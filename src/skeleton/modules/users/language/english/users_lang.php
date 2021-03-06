<?php
/**
 * CodeIgniter Skeleton
 *
 * A ready-to-use CodeIgniter skeleton  with tons of new features
 * and a whole new concept of hooks (actions and filters) as well
 * as a ready-to-use and application-free theme and plugins system.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package 	CodeIgniter
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @copyright	Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 * @license 	http://opensource.org/licenses/MIT	MIT License
 * @link 		https://github.com/bkader
 * @since 		Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users Module - Users Language (English)
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Modules\Language
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @link 		https://github.com/bkader
 * @copyright	Copyright (c) 2018, Kader Bouyakoub (https://github.com/bkader)
 * @since 		Version 1.0.0
 * @version 	1.0.0
 */

// ------------------------------------------------------------------------
// Users Buttons.
// ------------------------------------------------------------------------
$lang['login']           = 'Sign In';
$lang['logout']          = 'Sign Out';
$lang['register']        = 'Register';
$lang['create_account']  = 'Create Account';
$lang['forgot_password'] = 'Forgot password?';
$lang['lost_password']   = 'Lost password';
$lang['send_link']       = 'Send link';
$lang['resend_link']     = 'Resend link';
$lang['restore_account'] = 'Restore account';

$lang['profile']      = 'Profile';
$lang['view_profile'] = 'View Profile';
$lang['edit_profile'] = 'Edit Profile';

// ------------------------------------------------------------------------
// General Inputs and Label.
// ------------------------------------------------------------------------
$lang['username']          = 'Username';
$lang['identity']          = 'Username or email address';

$lang['email_address']     = 'Email address';
$lang['new_email_address'] = 'New email address';

$lang['password']          = 'Password';
$lang['new_password']      = 'New password';
$lang['confirm_password']  = 'Confirm password';
$lang['current_password']  = 'Current password';

$lang['first_name']        = 'First name';
$lang['last_name']         = 'Last name';
$lang['full_name']         = 'Full name';

$lang['gender']            = 'Gender';
$lang['male']              = 'Male';
$lang['female']            = 'Female';

$lang['company']  = 'Company';
$lang['phone']    = 'Phone';
$lang['address']  = 'Address';
$lang['location'] = 'Location';

// ------------------------------------------------------------------------
// Registration page.
// ------------------------------------------------------------------------
$lang['us_register_title'] = 'Register';
$lang['us_register_heading'] = 'Create Account';

$lang['us_register_success'] = 'Account successfully created. You may now login.';
$lang['us_register_info']    = 'Account successfully created. The activation link was sent to you.';
$lang['us_register_error']   = 'Unable to create account.';

// ------------------------------------------------------------------------
// Account activation.
// ------------------------------------------------------------------------
$lang['us_activate_invalid_key'] = 'This account activation link is no longer valid.';
$lang['us_activate_error']       = 'Unable to activate account.';
$lang['us_activate_success']     = 'Account successfully activated. You may now login';

// ------------------------------------------------------------------------
// Resend activation link.
// ------------------------------------------------------------------------
$lang['us_resend_title'] = 'Resend Activation Link';
$lang['us_resend_heading'] = 'Resend Link';

$lang['us_resend_notice']  = 'Enter your username or email address and we will send you a link to activate your account.';
$lang['us_resend_error']   = 'Unable to resend account activation link.';
$lang['us_resend_enabled'] = 'This account is already enabled.';
$lang['us_resend_success'] = 'Account activation link successfully resent. Check your inbox or spam.';

// ------------------------------------------------------------------------
// Login page.
// ------------------------------------------------------------------------
$lang['us_login_title']   = 'Sign In';
$lang['us_login_heading'] = 'Member Login';
$lang['remember_me']      = 'Remember me';

$lang['us_wrong_credentials'] = 'Invalid username/email address and/or password.';
$lang['us_account_disabled']  = 'You account is not yet active. Use the link that was sent to you or %s to receive a new one.';
$lang['us_account_banned']    = 'This user is banned from the site.';
$lang['us_account_deleted']   = 'Your account has been deleted but not yet removed from database. %s if you wish to restore it.';

// ------------------------------------------------------------------------
// Lost password page.
// ------------------------------------------------------------------------
$lang['us_recover_title']   = 'Lost Password';
$lang['us_recover_heading'] = 'Lost Password';

$lang['us_recover_notice']  = 'Enter your username or email address and we will send you a link to reset your password.';
$lang['us_recover_success'] = 'Password reset link successfully sent.';
$lang['us_recover_error']   = 'Unable to send password reset link.';


// ------------------------------------------------------------------------
// Reset password page.
// ------------------------------------------------------------------------
$lang['us_reset_title']   = 'Reset Password';
$lang['us_reset_heading'] = 'Reset Password';

$lang['us_reset_invalid_key'] = 'This password reset link is no longer valid.';
$lang['us_reset_error']       = 'Unable to reset password.';
$lang['us_reset_success']     = 'Password successfully reset.';

// ------------------------------------------------------------------------
// Restore account page.
// ------------------------------------------------------------------------
$lang['us_restore_title']   = 'Restore Account';
$lang['us_restore_heading'] = 'Restore Account';

$lang['us_restore_notice']  = 'Enter your username/email address and password to restore your account.';
$lang['us_restore_deleted'] = 'Only deleted accounts can be restored.';
$lang['us_restore_error']   = 'Unable to restore account.';
$lang['us_restore_success'] = 'Account successfully restored. Welcome back!';
