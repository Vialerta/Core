<?php


//That an abstraction over how session variables are stored.

function store_in_session($key, $value)
{
    if (isset($_SESSION)) {
        $_SESSION[$key] = $value;
    }
}
function unset_session($key)
{
    $_SESSION[$key] = ' ';
    unset($_SESSION[$key]);
}
function get_from_session($key)
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    } else {
        return false;
    }
}

// ----------------------------------------------------------

/*
Creates a random secure one-time CSRF token.
If SHA512 is available, it is used, otherwise a 512 bit random
string in the same format is generated. This function also
stores the generated token under a unique name in session variable.
*/

function csrfguard_generate_token($unique_form_name)
{
    $token = random_bytes(64); // PHP 7
    store_in_session($unique_form_name, $token);

    return $token;
}

// ----------------------------------------------------------

/*
The validate function, checks under the unique name for the token.
There are three states:

    -Sessions not active: validate succeeds
    -Token found but not the same, or token not found: validation fails
    -Token found and the same: validation succeeds

Either case, this function removes the token from sessions,
ensuring one-timeness.

*/

function csrfguard_validate_token($unique_form_name, $token_value)
{
    $token = get_from_session($unique_form_name);
    if (!is_string($token_value)) {
    }
    $result = hash_equals($token, $token_value);
    unset_session($unique_form_name);

    return $result;
}

 // receives a portion of html data, finds all <form> occurrences
 // and adds two hidden fields to them: CSRFName and CSRFToken.

    function csrfguard_replace_forms($form_data_html)
    {
        $count = preg_match_all('/<form(.*?)>(.*?)<\\/form>/is',
        $form_data_html, $matches, PREG_SET_ORDER);
        if (is_array($matches)) {
            foreach ($matches as $m) {
                if (strpos($m[1], 'nocsrf') !== false) {
                    continue;
                }
                $name = 'CSRFGuard_'.mt_rand(0, mt_getrandmax());
                $token = csrfguard_generate_token($name);
                $form_data_html = str_replace($m[0],
                    "<form{$m[1]}>
    <input type='hidden' name='CSRFName' value='{$name}' />
    <input type='hidden' name='CSRFToken' value='{$token}' />{$m[2]}</form>",
     $form_data_html);
            }
        }

        return $form_data_html;
    }

// ----------------------------------------------------------

    function csrfguard_inject()
    {
        $data = ob_get_clean();
        $data = csrfguard_replace_forms($data);
        echo $data;
    }

// ----------------------------------------------------------

    function csrfguard_start()
    {
        if (count($_POST)) {
            if (!isset($_POST['CSRFName']) or !isset($_POST['CSRFToken'])) {
                trigger_error('No CSRFName found, probable invalid request.',
                 E_USER_ERROR);
            }
            $name = $_POST['CSRFName'];
            $token = $_POST['CSRFToken'];
            if (!csrfguard_validate_token($name, $token)) {
                throw new Exception('Invalid CSRF token.');
            }
        }
        ob_start();

        register_shutdown_function('csrfguard_inject');
    }

    // ----------------------------------------------------------
    csrfguard_start();


?>
