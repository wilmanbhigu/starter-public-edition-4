<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

        <section>

            <div class="container">

                <div class="row">

                    <div class="col-md-12">


<?php

if ($error_message != '') {

?>

                        <div class="alert alert-warning text-center"><?php echo $error_message; ?></div>

<?php

} else {

?>

                    <div class="wrapper">

                        <h1>Facebook PHP SDK for CodeIgniter</h1>
                        <h3>Redirect login example</h3>

                        <p>
                            Simple example how you can use the Facebook PHP SDK for CodeIgniter and the Web Redirect login method.
                        </p>

                        <p>
                            <strong>
                                For this example to work, make sure you have set 'facebook_login_type' as 'web' and specified login and logout redirect links in the config file.
                            </strong>
                        </p>

                        <p>
                            This example code do 3 things
                            <ol>
                                <li>Check if a user is logged in on page load.</li>
                                <li>If user are logged in, displayes some basic information about the user and a logout button.</li>
                                <li>If user is not logged in, display login button.</li>
                            </ol>
                        </p>

                        <?php if ( ! $this->facebook->is_authenticated()) : ?>

                            <div class="login">
                                <a href="<?php echo $this->facebook->login_url(); ?>">Login</a>
                            </div>

                        <?php else : ?>

                            <div class="user-info">

                                <p><strong>User information</strong></p>

                                <ul>
                                    <?php foreach ($user as $key => $value) : ?>

                                        <li><?php echo $key; ?> : <?php echo $value; ?></li>

                                    <?php endforeach; ?>
                                </ul>

                                <p>
                                    <a href="<?php echo $this->facebook->logout_url(); ?>">Logout</a>
                                </p>

                            </div>

                                    <div class="upload-form">
                                            <?php if ($this->input->post('imageFile')) {
                                                    $response = $this->facebook->user_upload_request(
                                                            $this->input->post('imageFile'),
                                                            ['message' => 'This is a test']
                                                    );

                                                    var_dump($response);
                                            } ?>

                                            <form method="POST">
                                                    <input type="text" name="imageFile" value="<?php echo APPPATH; ?>MM8354_GrandCanyon.jpg"/>
                                                    <input type="submit" name="upload" value="Upload"/>
                                            </form>
                                    </div>

                        <?php endif; ?>

                    </div>

<?php

}

?>

                    </div>

                </div>

            </div>

        </section>
