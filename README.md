# ci-toastr

[![Build Status](https://travis-ci.org/joshuachinemezu/ci-toastr.svg?branch=master)](https://travis-ci.org/joshuachinemezu/ci-toastr)

A CodeIgniter Library to integrate javascript toastr

Have you ever been in a situation that you need to send timed notifications to your client view, notifications that you want to expire within a certain period of time.

PHP(Codeigniter) allows that feature by flashing messages to the session but in most cases, the issue is to display such sessions in a fashionable and user friendly way. Wooooh I got you on this. XD

Example Scenario:
You only just want to display the message with custom colors pertaining to each message
This library will help you in doing such query in a very easy to use interface.

## Requirements

- PHP >= 5.2
- CodeIgniter Application
- Valid loading of the session library

## Installation

The easiest way to install this is to clone the repo in your local disk.
Then copy the src/Toaster.php file in your application/libraries Folder.

You can then load it like any other library

    $this->load->library('toastr');

Create a file in your application/views folder and name it "alert.php". Paste the following code in it.

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


        <script type="text/javascript">


        <?php if ($this->session->flashdata('success')) {?>
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        <?php } else if ($this->session->flashdata('error')) {?>
            toastr.error("<?php echo $this->session->flashdata('error'); ?>");
        <?php } else if ($this->session->flashdata('warning')) {?>
            toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
        <?php } else if ($this->session->flashdata('info')) {?>
            toastr.info("<?php echo $this->session->flashdata('info'); ?>");
        <?php }?>


        </script>

---

Ooooh it's getting complicated right? Don't worry one more step and we are done here

Create another file in your application/views folder and name it flash.php (Just for consistency but you can name it anything if you know your way around here). Paste the code below in it

        <!DOCTYPE html>
        <html>
        <head>
        <!-- <title>My Pages for Alert</title> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
        </head>
        <body>


        <div>
        <?php
        $this->load->view('alert');
        ?>
        </div>


        </body>
        </html>

Yeah we are through with installation. lol

## Usage

Using it is very easy

In your controller after a task is completed, you can use any of the codes below in regards to the code flow

-- for successful message

        $this->flash->success('Your account was created successfully');

-- for info message

        $this->flash->info('Please check your mail to activate account');

-- for warning message

        $this->flash->warning('Email is required');

-- for error message

        $this->flash->error('Error in creating account');

------- In the controller where you want the session(toastr) message to display, add
--------the code below:

        $this->load->view('flash');

-----\***\* flash is the name of the file you created in application/views folder \*\*\***----

Using the code above will display a toastr message

You see very easy to use
