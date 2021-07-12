<header>
    <span id="brand">tunivisuals</span>

    <nav>
        <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='index.php?controller=staticpages&action=aboutus'>About us</a></li>
            <li><a href='index.php?controller=staticpages&action=shots'>Our shots</a></li>
            <?php
                session_start();
                if(!isset($_SESSION['cin'])&& !isset($_SESSION['code']))
                {
                    echo "<li><a href='index.php?controller=client&action=create'>Sign up</a></li>";
                    echo "<li><a href='index.php?controller=client&action=connect'>Log in (client)</a></li>";
                    echo "<li><a href='index.php?controller=admin&action=connect'>Log in (admin)</a></li>";
                }    
                if(isset($_SESSION['cin']))
                {
                    echo"<li><a href='index.php?controller=client&action=loggedout'>Log out</a></li>";
                    echo"<li>".$_SESSION['name']."</li>";
                }  
                if(isset($_SESSION['code']))
                {
                    echo"<li><a href='index.php?controller=admin&action=loggedout'>Log out </a></li>";
                    echo" <li>".$_SESSION['name']."(as admin)</li>";
                }  
            ?>
        </ul>
    </nav>
</header>
