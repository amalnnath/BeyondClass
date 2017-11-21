<?php
/*
 * The registration form, the user uses it to register as an official member
 * of the computer science club.
 *
 * DEPENDENCIES
 * ------------
 * 
 * This template uses an array of error messages, or a new_member session variable
 * to display notifications.
 *
 *  - $_SESSION['errors']
 *  - $_SESSION['new_member'] (if new member successfully registered)
 *
 */
?>
<section id="register">
    <div class="page-header">
        <h1>Registration Form</h1>
    </div>
    <div class="row">
        <div class="span8">
            <!--  Display an error if they entered invalid credentials -->
            <?php
                if (isset($_SESSION['errors']))
                {
                    echo '<div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>';

                    foreach ($_SESSION['errors'] as $error)
                    {
                        echo '<p>' . $error . '</p>';
                    }
                    echo '</div>';
                }
                else if (isset($_SESSION['new_member']))
                {
                    echo '<div id="active" class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Account Created!</strong> You are now an official CS Club member, 
                            you may now use the username and password you provided to access club services.
                          </div>';
                }
                else
                {
                    echo '<div id="activeinfo" class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p>
                                Please submit the following pieces of information about yourself to register
                                as as a new club member.
                            </p>
                            <p>
                                <strong>If you do not have a passphrase</strong> please contact the 
                                <a target="_blank" href="mailto:admin@cs-club.ca">Club Executives</a>
                                to receive a passphrase!
                            </p>
                          </div>';
                }
            ?>
            <form class="well form-horizontal" action="register.php" method="post" accept-charset="UTF-8">
                <fieldset>
                    <!-- Passphrase -->
                    <div class="control-group">
                        <label for="passphrase" class="control-label"><strong>Passphrase:</strong></label>                
                        <div class="controls">
                            <input id="passphrase" name="passphrase" required type="text" maxlength="64" pattern="^[a-z]+$" placeholder="Enter a passphrase..."/>            
                        </div>
                    </div>
                    <!--  First & Last Name -->
                    <div class="control-group">
                        <label for="first_name" class="control-label">First Name:</label>                
                        <div class="controls">
                            <input id="first_name" name="first_name" required type="text" maxlength="31" pattern="^(([A-Za-z]+)|\s{1}[A-Za-z]+)+$" placeholder="First name..."/>            
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="last_name" class="control-label">Last Name:</label>             
                        <div class="controls">
                            <input id="last_name" name="last_name" required type="text" maxlength="31" pattern="^(([A-Za-z]+)|\s{1}[A-Za-z]+)+$" placeholder="Last name..."/>                       
                        </div>
                    </div>
                    <!-- Enter your student number... -->
                    <div class="control-group">
                        <label for="student_number" class="control-label">Student Number:</label>               
                        <div class="controls">
                            <input id="student_number" name="student_number" required type="text" maxlength="9" pattern="^\d{9}$" placeholder="100123456..."/>              
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="control-group">
                        <label for="email" class="control-label">Email:</label>               
                        <div class="controls">
                            <input id="email" name="email" required type="email" maxlength="63" placeholder="your@email.com..."/>              
                        </div>
                    </div>
                    <!-- Username -->
                    <div class="control-group">
                        <label for="username" class="control-label">Username:</label>               
                        <div class="controls">
                            <input id="username" name="username" required type="text" maxlength="31" pattern="^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$" placeholder="Username..."/>              
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="control-group">
                        <label for="password" class="control-label">Password:</label>               
                        <div class="controls">
                            <input id="password" name="password" type="password" maxlength="31" pattern="^[a-zA-Z0-9\`\~\!\@\#\$\%\^\&amp;\*\(\)\-\_\=\+\|\&lt;\&gt;\?]{6,31}$" placeholder="Password..."/>              
                        </div>
                    </div>
                    <!-- Submit as Active User -->
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" id="submit" name="submit" class="btn btn-inverse">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
