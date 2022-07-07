<?php
require_once "functions.php";
require_once "db.php";
register_user();
login_user();
saveReview();

$con = mysqli_connect('localhost', 'root', '', 'project');

$id = $_SESSION['ID'];
$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($con, $query);
$row =mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>New Home For your</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>


    <a href="#" class="title">Rent a home,<?php echo $row['name']?>!</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#forrent">For rent</a>
        <a href="#values">Our values</a>
        <a href="#apartments">Big deals</a>
        <a href="#review">Reviews</a>
        <a href="#contact">Leave a message</a>
    </nav>

    <div class="icons">
         <a href="logout.php" class="btn">Logout</a>
    </div>
</header>

<section class="home" id="home">

    <div class="image-container">
        <img src="images/cover.png" id="" ></img>
    </div>
</section>

<section class="forrent" id="forrent">

    <h1 class="heading">
        <span>Available apartamnets</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/a-2.jpg" alt="">
            <div class="content">
                <h3> </i> Sofia </h3>
                <p>Manastirski Livadi</p>
                <div class="price"> 600$</div>
                <a href = "apartment1.php" class ="btn">check</a>
            </div>
        </div>

        <div class="box">
            <img src="images/a-3.jpg" alt="">
            <div class="content">
                <h3> Varna </h3>
                <p>Mladost</p>
                <div class="price"> $400 </div>
                <a href = "apartment2.php" class ="btn">check</a>
            </div>
        </div>

        <div class="box">
            <img src="images/a-4.jpg" alt="">
            <div class="content">
                <h3> Bansko </h3>
                <p>city center</p>
                <div class="price">550$ </div>
                <a href = "apartment3.php" class ="btn">check</a>
            </div>
        </div>

        <div class="box">
            <img src="images/a-5.jpg" alt="">
            <div class="content">
                <h3> Las Vegas </h3>
                <p>Near the most winning casino</p>
                <div class="price"> 900$ </div>
                <a href = "apartment4.php" class ="btn">check</a>
            </div>
        </div>

        

    </div>

</section>

<section class="values" id="values">

    <h1 class="heading">
        <span>Our values and targets</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <h3>Variety apartments</h3>
            <p>You can choose from a variety of apartments.</p>
        </div>
        <div class="box">
            <h3>Food and drinks</h3>
            <p>If you are hungry, you can help yourself. You can find the healthiest vegetables in our fridges.</p>
        </div>
        <div class="box">
            <h3>Security</h3>
            <p>Our apartamnets are under everyday security and surveillance.</p>
        </div>
        <div class="box">
            <h3>Lowest prices</h3>
            <p>You will find the best prices here.</p>
        </div>
        <div class="box">
            <h3>Best Locations</h3>
            <p>Our apartamnets are located inkey point in the city.</p>
        </div>
        <div class="box">
            <h3>You can make money.</h3>
            <p>You can sell/loan your property.</p>
        </div>

    </div>

</section>

<section class="apartments" id="apartments">

    <h1 class="heading">
        <span>Big deals</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/b-1.jpg" alt="">
            <div class="content">
                <h3> Sofia </h3>
                <p>Lozenets</p>
                <p> 100000$</p>
                <a href = "deal1.php" class ="btn">Make an offer</a>
            </div>
        </div>
        <div class="box">
            <img src="images/b-2.jpg" alt="">
            <div class="content">
                <h3> Bansko </h3>
                <p>Near the church</p>
                <p> 25000$</p>
                <a href = "deal2.php" class ="btn">Make an offer</a>
            </div>
        </div>
        <div class="box">
            <img src="images/b-3.jpg" alt="">
            <div class="content">
                <h3> Sofia </h3>
                <p>Boyana</p>
                <p> 200000$</p>
                <a href = "deal3.php" class ="btn">Make an offer</a>
            </div>
        </div>
        <div class="box">
            <img src="images/b-4.jpg" alt="">
            <div class="content">
                <h3> Sofia </h3>
                <p>Benkovski</p>
                <p> 45000$</p>
                <a href = "deal4.php" class ="btn">Make an offer</a>
            </div>
        </div>
        <div class="box">
            <img src="images/b-5.jpg" alt="">
            <div class="content">
                <h3> Nesebar</h3>
                <p>Old town</p>
                <p> 70000$</p>
                <a href = "deal5.php" class ="btn">Make an offer</a>
            </div>
        </div>
        <div class="box">
            <img src="images/b-6.jpg" alt="">
            <div class="content">
                <h3> Sveti vlas </h3>
                <p>City center</p>
                <p> 130000$</p>
                <a href = "deal6.php" class ="btn">Make an offer</a>
            </div>
        </div>
        <div class="box">
            <img src="images/b-7.jpg" alt="">
            <div class="content">
                <h3> Burgas </h3>
                <p>Morska gradina</p>
                <p> 60000$</p>
                <a href = "deal7.php" class ="btn">Make an offer</a>
            </div>
        </div>
        <div class="box">
            <img src="images/b-8.jpg" alt="">
            <div class="content">
                <h3> Athens </h3>
                <p>City centre</p>
                <p> 260000$</p>
                <a href = "deal8.php" class ="btn">Make an offer</a>
            </div>
        </div>
        

    </div>

</section>

<section class="review" id="review">

    <h1 class="heading">
        <span>Reviews</span>
    </h1>

        <div class="box-container">
                <div class="box">
                    <h3>Maria</h3>
                    <p>"My dream came true. I bought my dream house!"</p>
                </div>
                <div class="box">
                    <h3>Ivan</h3>
                    <p>"Love this place"</p>
                </div>
                <div class="box">
                    <h3>Smith - CEO,CTO</h3>
                    <p>"That's how we do it"</p>
                </div>
        </div>


</section>

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>Leave a message</span>
    </h1>
  
    <div class="row">
        <form method ="POST">
            <textarea placeholder="message" name="text"></textarea>
            <input type="submit" class="btn" value="send-message" name="send-message">
        </form>

    </div>
    
</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>We find the best and dream home for everyone.</p>
        </div>
       
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=100002911070748">Facebook</a>
            <a href="https://www.instagram.com/don_ceci_/">Instagram</a>
            <a href="https://github.com/donceci2001">Github</a>
            <a href="https://www.linkedin.com/in/cvetozar-pavlov-8bb675216/">LinkedIn</a>
        </div>

    </div>

</section>

</body>
</html>