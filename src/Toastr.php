<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  Javascript Toastr Library for CodeIgniter
 *
 * A codeigniter library that integrates javscript toastr and displays messages flashed
 * to the session
 *
 * @package Toastr
 * @version 1.0.1
 * @author Joshua Chinemezu <joshuachinemezu@gmail.com>
 * @link https://twitter.com/poeticdev
 */
class Toastr
{

    /**
     *  Checks if the file is present.
     *
     *
     *  @param string $CI Create an instance of Codeigniter global
     *  @param string $ftp_username the ftp username
     *  @param string $ftp_password the ftp password
     *
     *  @return array
     */
    protected $CI;

    /**
     * Manage __construct, create an of the codeigniter global object
     * Load codeigniter session library for session handling and management
     *
     */
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('session');
    }

    /**
     * success method
     *
     * The success method is used when you an operation or task was completed successfully (i.e) the task was completed with no error nor warning.
     *
     * @param string $msg Custom message you want to send to the toastr (Message displayed to the toastr)
     *
     * @return bool
     */

    public function success($msg)
    {
        // Flash message to the session
        $this->CI->session->set_flashdata('success', $msg);
        // returns response when session is successfully set
        return true;
    }

    /**
     * error method
     *
     * The error method is used when you an operation or task was not completed successfully (i.e) the task was completed with an error.
     *
     * @param string $msg Custom message you want to send to the toastr (Message displayed to the toastr)
     *
     * @return bool
     */

    public function error($msg)
    {
        // Flash message to the session
        $this->CI->session->set_flashdata('error', $msg);
        // returns response when session is successfully set
        return true;
    }

    /**
     * warning method
     *
     * The warning method is used when you an operation or task was not completed successfully (i.e) the task was completed with a warning.
     *
     * @param string $msg Custom message you want to send to the toastr (Message displayed to the toastr)
     *
     * @return bool
     */

    public function warning($msg)
    {
        // Flash message to the session
        $this->CI->session->set_flashdata('warning', $msg);
        // returns response when session is successfully set
        return true;
    }

    /**
     * info method
     *
     * The info method is used to send an important information to the user
     *
     * @param string $msg Custom message you want to send to the toastr (Message displayed to the toastr)
     *
     * @return bool
     */

    public function info($msg)
    {
        // Flash message to the session
        $this->CI->session->set_flashdata('info', $msg);
        // returns response when session is successfully set
        return true;
    }
}
