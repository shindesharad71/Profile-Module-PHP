<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <title>Login and Sign up</title>
</head>

<body>
    <div class="wrapper">
        <h1>Login and Sign up form</h1>
        <h3>by Sharad Shinde</h3>
        <div id="big-form-wrapper">
            <div id="form1">
                <div class="form-wrapper">
                    <div id="form-header">
                        <h1>* Sign in</h1>
                    </div>
                    <form method="post" action="login.php">
                        <div class="data">
                            <input type="text" required placeholder="Username" name="username">
                            <span id="username1"></span>
                            <div class="clear"></div>
                        </div>
                        <div class="data">
                            <input type="password" required placeholder="Password" name="password">
                            <span id="key"></span>
                            <div class="clear"></div>
                        </div>
                        <div class="data">
                            <button id="btn" type="submit" type="submit" name="login" value="login">Sign in</button>
                            <span id="login"></span>
                            <div class="clear"></div>
                        </div>
                        <a class="forgotlink" href="forgot.html">forgot password?</a>
                    </form>
                </div>
            </div>


            <div id="form1">
                <div class="form-wrapper">
                    <div id="form-header">
                        <h1>* Sign up</h1>
                    </div>

                    <form method="post" action="post.php">
                        <div class="data">
                            <input type="text" required placeholder="Your Name" name="name">
                            <span id="username1"></span>
                            <div class="clear"></div>
                        </div>
                        <div class="data">
                            <input type="email" placeholder="Email" name="email">
                            <span id="mail"></span>
                            <div class="clear"></div>
                        </div>
                        <div class="data">
                            <input type="text" required placeholder="Username" name="username">
                            <span id="username1"></span>
                            <div class="clear"></div>
                        </div>
                        <div class="data">
                            <input type="password" required placeholder="Password" name="password">
                            <span id=""></span>
                            <div class="clear"></div>
                        </div>
                        <div class="data">
                            <button id="btn" value="signup" name="signup">Sign up</button>
                            <span id="signup"></span>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</body>

</html>