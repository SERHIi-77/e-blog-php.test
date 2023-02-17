<?php
$username = 'elen';
//check for cookies and which user is logged in
if(isset($_COOKIE['user'])):
    // var_dump ($_COOKIE['user']);
    $userSQL = 'SELECT * FROM users WHERE id='. $_COOKIE['user'];
    $userResult = $conn->query($userSQL);
    if ($userResult):
        $user = $userResult->fetch_assoc();
        $username = $user['username'];
    endif;
endif;
?>
<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
    <h1 id="colorlib-logo"><a href="index.php"><?php echo $username ?><span>.</span></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> class="colorlib-active" <?php endif ?>><a href="/?p=home">Home</a></li>
            <li <?php if(isset($_GET['p']) && $_GET['p'] == 'photography'): ?> class="colorlib-active" <?php endif ?>><a href="/?p=photography">Photography</a></li>
            <li <?php if(isset($_GET['p']) && $_GET['p'] == 'travel'): ?> class="colorlib-active" <?php endif ?>><a href="/?p=travel">Travel</a></li>
            <li <?php if(isset($_GET['p']) && $_GET['p'] == 'fashion'): ?> class="colorlib-active" <?php endif ?>><a href="/?p=fashion">Fashion</a></li>
            <li <?php if(isset($_GET['p']) && $_GET['p'] == 'about'): ?> class="colorlib-active" <?php endif ?>><a href="/?p=about">About</a></li>
            <li <?php if(isset($_GET['p']) && $_GET['p'] == 'contact'): ?> class="colorlib-active" <?php endif ?>><a href="/?p=contact">Contact</a></li>
            <li <?php if(isset($_GET['p']) && $_GET['p'] == 'login'): ?> class="colorlib-active" <?php endif ?>><a href="/?p=login">Login</a></li>
        </ul>
    </nav>

    <div class="colorlib-footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
            <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <ul>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</aside> <!-- END COLORLIB-ASIDE -->