<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>AmarVasha</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,500&display=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/css/query.css', 'resources/js/app.js'])

</head>

<body>
    <nav>
        <div class="container">
            <div class="img_logo">
                <img src="{{ url('img/logo.png') }}" alt="logo" />
            </div>
            <div class="nav_links" id="nav_links">
                <ul class="nav_menu">
                    <li class="nav_link">
                        <a href="">Why Us </a>
                    </li>
                    <li class="nav_link">
                        <a href="">Criculam </a>
                    </li>
                    <li class="nav_link">
                        <a href="">pricing </a>
                    </li>
                    <li class="nav_login nav_link >
                  <a href="">Login </a>
                    </li>
                    <li class="nav_trial nav_link">
                        <a href="">Get Free Trial </a>
                    </li>
                </ul>
                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="main_container">
            <div class="left_section">
                <div class="Membership">
                    <h2>Membership</h2>
                    <p>Make your own plan and stay connectd with Amar Vasha Family</p>
                    <div class="options">
                        <label for="">Prepaid</label>
                        <label for="">Postpaid</label>
                    </div>
                </div>
                <div class="class_per_week">
                    <div class="week_title">
                        <h2>Class per week</h2>
                        <p>3 classes per week</p>
                    </div>
                    <div class="class_days">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </div>
                </div>
                <div class="Number_of_months">
                    <div class="number_title">
                        <h2>Number of month For membership</h2>
                        <p>0 month membership</p>
                    </div>
                    <div class="number_options">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                        </ul>
                    </div>
                </div>
                <div class="renewale">
                    <input type="checkbox" value="check" />
                    <label for="">Turn ON Auto Renewal</label>
                </div>
            </div>

            <div class="mid_section">
                <hr class="divider">
            </div>
            <div class="right_section">
                <div class="informations">
                    <div class="class_info">
                        <p>Class per week</p>
                        <p>3</p>
                    </div>
                    <div class="membership_info">
                        <p>Membership <br> months</p>
                        <p>0</p>
                    </div>
                    <div class="divider2"></div>
                    <div class="currency">
                        <p>0$</p>
                        <h4>Per class</h4>
                    </div>
                    <div class="pay_container">
                        <div class="total">
                            <p>Total</p>
                            <p>0 <span>$</span></p>
                        </div>
                        <p>If you click on this button you will be redirected to checkout payment gateway</p>
                        <button class="btn"type="submit">Pay in USD</button>
                    </div>
                    <div class="divider2"></div>
                </div>
            </div>
    </main>
</body>

</html>
