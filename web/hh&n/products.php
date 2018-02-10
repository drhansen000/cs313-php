<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css" />
    <link rel="stylesheet" href="col.css" />
    <link rel="stylesheet" href="HH&N.css" />
    <link rel="stylesheet" href="products.css"/>
    <title>HH&N Products</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png"/>
    </div>
    <div id="description" class="col-8">
        <h1>Product Store</h1>
        <h2>Quality Guaranteed</h2> 
        <p id="TeaTree">
		  I want to make sure that you have the best products available to you. 
		  I sell many of the Paul Mitchell products including their luxury lines. 
		  Paul Mitchell is a company that will always be only in the professional 
		  market so you can be assured of their quality. 
        </p>
        <h2>Luxury Lines</h2>
        <h3>Tea Tree</h3>
        <p>
		  This Line of products cools and refreshes your hair and scalp. There is 
		  a slight tingling sensation from all the product. The Tea Tree Special 
		  products clean the hair of all impurities, the Lemon Sage adds volume 
		  and the Lavender Mint products add extra moisture to dry hair and skin. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Tea-Tree-Special-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Tea Tree Special: Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Tea Tree Special: Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Tea Tree Special: Conditioner</h5>
                16.9 oz<br />
                $20<br />
                <button onclick="addToCart('Tea Tree Special: Conditioner' , 20)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Tea-Tree-Special-Conditioner.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Tea-Tree-Special-Hair-and-Scalp-Treatment.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Tea Tea Tree Special: Hair and Scalp Treatment</h5>
                16.9 oz<br />
                $20<br />
                <button onclick="addToCart('Tea Tea Tree Special: Hair and Scalp Treatment' , 20)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Tea Tree Special: Body Bar</h5>
                5.3 oz<br />
                $9<br />
                <button onclick="addToCart('Tea Tree Special: Body Bar' , 9)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Tea-Tree-Special-Body-Bar.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Tea-Tree-Special-Aromatic-Oil.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Tea Tree Special: Aromatic Oil</h5>
                0.35 oz<br />
                $10<br />
                <button onclick="addToCart('Tea Tree Special: Aromatic Oil' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Lemon Sage: Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Lemon Sage: Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Lemon-Sage-Shampoo.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Lemon-Sage-Conditioner.PNG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Lemon Sage: Conditioner</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Lemon Sage: Conditioner' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Lavender Mint: Moisturizing Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Lavender Mint: Moisturizing Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Lavender-Mint-Moisturizing-Shampoo.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Lavender-Mint-Moisturizing-Conditioner.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Lavender Mint: Moisturizing Conditioner</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Lavender Mint: Moisturizing Conditioner' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Lavender Mint: Conditioning Leave-In Spray</h5>
                6.8 oz<br />
                $18<br />
                <button onclick="addToCart('Lavender Mint: Conditioning Leave-In Spray' , 18)">
                    Add to Cart
                </button><br />
            </div>
            <div id="MarulaOil" class="col-3">
                <img class="product-image" src="images/Lavender-Mint-Conditioning-Leave-In-Spray.JPG">
            </div>
        </div>
        <h3>MarulaOil</h3>
        <p>
		  This color safe shampoo replenishes hair with needed oils and helps 
		  to protect hair against damage from heat and chemicals. The new 
		  MarulaOil Light is for those with fine hair that could be weighed down 
		  by the regular MarulaOil products. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/MarulaOil-Rare-Oil-Replenishing-Shampoo.PNG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>MarulaOil: Rare Oil Replenishing Shampoo</h5>
                7.5 oz<br />
                $20<br />
                <button onclick="addToCart('MarulaOil: Rare Oil Replenishing Shampoo' , 20)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>MarulaOil: Rare Oil Replenishing Conditioner</h5>
                7.5 oz<br />
                $25<br />
                <button onclick="addToCart('MarulaOil: Rare Oil Replenishing Conditioner' , 25)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/MarulaOil-Rare-Oil-Replenishing-Conditioner.PNG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/MarulaOil-Light-Rare-Oil-Volumizing-Shampoo.PNG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>MarulaOil Light: Rare Oil Volumizing Shampoo</h5>
                24 oz<br />
                $20<br />
                <button onclick="addToCart('MarulaOil Light: Rare Oil Volumizing Shampoo' , 20)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>MarulaOil Light: Rare Oil Volumizing Conditioner</h5>
                7.5 oz<br />
                $25<br />
                <button onclick="addToCart('MarulaOil Light: Rare Oil Volumizing Conditioner' , 25)">
                    Add to Cart
                </button><br />
            </div>
            <div id="Awapuhi" class="col-3">
                <img class="product-image" src="images/MarulaOil-Light-Rare-Oil-Volumizing-Conditioner.PNG">
            </div>
        </div>
        <h3>Awapuhi</h3>
        <p>
		  The Awapuhi products help to Repair heat and chemically damaged skin. 
		  Paul Mitchell makes these products with awapuhi from their own farm on 
		  one of the Hawaii islands. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Awapuhi-Wild-Ginger-Repair-Moisturizing-Lather-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Awapuhi Wild Ginger Repair: Moisturizing Lather Shampoo</h5>
                8.5 oz<br />
                $15<br />
                <button onclick="addToCart('Awapuhi Wild Ginger Repair: Moisturizing Lather Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Awapuhi Wild Ginger Repair: Keratin Cream Rinse</h5>
                8.5 oz<br />
                $15<br />
                <button onclick="addToCart('Awapuhi Wild Ginger Repair: Keratin Cream Rinse' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Awapuhi-Wild-Ginger-Repair-Keratin-Cream-Rinse.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Awapuhi-Wild-Ginger-Repair-Keratin-Intensive-Treatment.PNG">
            </div>
            <div id="Original" class="product-spec col-9 left" >
                <h5>Awapuhi Wild Ginger Repair: Keratin Intensive Treatment</h5>
                5.1 oz<br />
                $20<br />
                <button onclick="addToCart('Awapuhi Wild Ginger Repair: Keratin Intensive Treatment' , 20)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        

        <h2>Basic Needs</h2>
        <h3>Original</h3>
        <p>
		  Sometimes something in readable specific in its purpose is needed. 
		  You can’t go wrong with the classics and professional grade hair 
		  products are always great quality. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Original-Awapuhi-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Original: Awapuhi Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Awapuhi Wild Ginger Repair: Moisturizing Lather Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Original: Shampoo One</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Original: Shampoo One' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Original-Shampoo-One.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Original-The-Conditioner.JPG">
            </div>
            <div id="Strength" class="product-spec col-9 left" >
                <h5>Original: The Conditioner</h5>
                3.4 oz<br />
                $10<br />
                <button onclick="addToCart('Original: The Conditioner' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <h3>Strength</h3>
        <p>
		  The sad truth is that there are so many things that can damage and 
		  weaken hair. The Strength products help to give your hair the nutrients 
		  it needs to hold up against everything that could damage it. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Strength-Super-Strong-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Strength: Super Strong Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Strength: Super Strong Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Strength: Super Strong Conditioner</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Strength: Super Strong Conditioner' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Strength-Super-Strong-Conditioner.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Strength-Super-Strong-Treatment.JPG">
            </div>
            <div id="ColorCare" class="product-spec col-9 left" >
                <h5>Strength: Super Strong Treatment</h5>
                6.8 oz<br />
                $10<br />
                <button onclick="addToCart('Strength: Super Strong Treatment' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <h3>Color Care</h3>
        <p>
		  Even though hair color and lightener have come a long way over the 
		  years they still cause damage to your hair. Nothing should keep you 
		  from the look you want. The Color Care products protect your hair from 
		  damage and also help to prevent the color you chose from fading. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Color-Care-Color-Protect-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Color Care: Color Protect Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Color Care: Color Protect Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Color Care: Color Protect Conditioner</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Color Care: Color Protect Conditioner' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Color-Care-Color-Protect-Conditioner.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Color-Care-Color-Protect-Reconstructive-Treatment.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Color Care: Color Protect Reconstructive Treatment</h5>
                5.1 oz<br />
                $10<br />
                <button onclick="addToCart('Color Care: Color Protect Reconstructive Treatment' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Color Care: Color Protect Locking Spray</h5>
                8.5 oz<br />
                $15<br />
                <button onclick="addToCart('Color Care: Color Protect Locking Spray' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div id="Moisture" class="col-3">
                <img class="product-image" src="images/Color-Care-Color-Protect-Locking-Spray.JPG">
            </div>
        </div>
        <h3>Moisture</h3>
        <p>
		  Dry hair and scalp is one of the most common problems that people have. 
		  These products are designed to give back the much needed moisture. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Moisture-Instant-Moisture-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Moisture: Instant Moisture Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Moisture: Instant Moisture Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Moisture: Instant Moisture Treatment</h5>
                6.8 oz<br />
                $10<br />
                <button onclick="addToCart('Moisture: Instant Moisture Treatment' , 10)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Moisture-Instant-Moisture-Treatment.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Moisture-Super-Charged-Moisturizer.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Moisture: Super-Charged Moisturizer</h5>
                6.8 oz<br />
                $10<br />
                <button onclick="addToCart('Moisture: Super-Charged Moisturizer' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Moisture: Awapuhi Moisture Mist</h5>
                16.9 oz<br />
                $20<br />
                <button onclick="addToCart('Moisture: Awapuhi Moisture Mist' , 20)">
                    Add to Cart
                </button><br />
            </div>
            <div id="Kids" class="col-3">
                <img class="product-image" src="images/Moisture-Awapuhi-Moisture-Mist.JPG">
            </div>
        </div>
        <h3>Kids</h3>
        <p>
		  These carefully made products are designed for kids, which have 
		  more delicate scalps. The shampoo will not sting if it happens to 
		  run into their eyes and the detangler works wonders on knotted hair. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Kids-Baby-Dont-Cry-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Kids: Baby Don’t Cry Shampoo</h5>
                10.14 oz<br />
                $10<br />
                <button onclick="addToCart('Kids: Baby Don’t Cry Shampoo' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Kids: Taming Spray</h5>
                8.5 oz<br />
                $8<br />
                <button onclick="addToCart('Kids: Taming Spray' , 8)">
                    Add to Cart
                </button><br />
            </div>
            <div id="Curls" class="col-3">
                <img class="product-image" src="images/Kids-Taming-Spray.JPG">
            </div>
        </div>
        <h3>Curls</h3>
        <p>
		  The Curls line is made for those with natural curl. These products help 
		  to make the curls manageable and reduce frizz. They also are a great 
		  help with separating the curls for a beach wave style or classic style. 
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Curls-Spring-Loaded-Frizz-Fighting-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Curls: Spring Loaded Frizz-Fighting Shampoo</h5>
                8.5 oz<br />
                $12<br />
                <button onclick="addToCart('Curls: Spring Loaded Frizz-Fighting Shampoo' , 12)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Curls: Spring Loaded Frizz-Fighting Conditioner</h5>
                6.8 oz<br />
                $10<br />
                <button onclick="addToCart('Curls: Spring Loaded Frizz-Fighting Conditioner' , 10)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Curls-Spring-Loaded-Frizz-Fighting-Conditioner.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Curls-Full-Circle-Leave-In-Treatment.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Curls: Full Circle Leave-In Treatment</h5>
                6.8 oz<br />
                $10<br />
                <button onclick="addToCart('Curls: Full Circle Leave-In Treatment' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Curls: Ultimate Wave</h5>
                5.1 oz<br />
                $10<br />
                <button onclick="addToCart('Curls: Ultimate Wave' , 10)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Curls-Ultimate-Wave.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Curls-Twirl-Around.JPG">
            </div>
            <div id="NeuroLiquid" class="product-spec col-9 left" >
                <h5>Curls: Twirl Around</h5>
                5.1 oz<br />
                $12<br />
                <button onclick="addToCart('Curls: Twirl Around' , 12)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <h3>Neuro Liquid</h3>
        <p>
		  Neuro Liquid product are specially designed to protect hair from 
		  thermal damage that happens with regular use of heat styling, such 
		  as the use of hair dryers, curlers, flatterers, etc.
        </p>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Neuro-Liquid-Lather-(Shampoo).JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Neuro Liquid: Lather (Shampoo)</h5>
                9.2 oz<br />
                $20<br />
                <button onclick="addToCart('Neuro Liquid: Lather (Shampoo)' , 20)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Neuro Liquid: Rinse (Conditioner)</h5>
                9.2 oz<br />
                $20<br />
                <button onclick="addToCart('Neuro Liquid: Rinse (Conditioner)' , 20)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Neuro-Liquid-Rinse-(Conditioner).JPG">
            </div>
        </div>
	    <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Neuro-Liquid-Repair.PNG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Neuro Liquid: Repair</h5>
                5.1 oz<br />
                $12<br />
                <button onclick="addToCart('Neuro Liquid: Repair' , 12)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Neuro Liquid: Prime</h5>
                4.7 oz<br />
                $12<br />
                <button onclick="addToCart('Neuro Liquid: Prime' , 12)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Neuro-Liquid-Prime.PNG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Neuro-Liquid-Protect.PNG">
            </div>
            <div id="Invisiblewear" class="product-spec col-9 left" >
                <h5>Neuro Liquid: Protect</h5>
                6 oz<br />
                $15<br />
                <button onclick="addToCart('Neuro Liquid: Protect' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <h2>Styling Needs</h2>
        <h3>Invisiblewear</h3>
        <p>
		  Invisiblewear is designed to look natural and bring out the natural 
		  beauty of the hair. This is mainly used for natural hair styles and it 
		  often used for the “messy” look. 
        </p>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Invisiblewear: Shampoo</h5>
                33.8 oz<br />
                $35<br />
                <button onclick="addToCart('Invisiblewear: Shampoo' , 35)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Invisiblewear-Shampoo.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Invisiblewear-Conditioner.PNG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Invisiblewear: Conditioner</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Invisiblewear: Conditioner' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Invisiblewear: Boomerang Restyling Mist</h5>
                8.5 oz<br />
                $12<br />
                <button onclick="addToCart('Invisiblewear: Boomerang Restyling Mist' , 12)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Invisiblewear-Boomerang-Restyling-Mist.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Invisiblewear-Blonde-Dry-Shampoo.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Invisiblewear: Blonde Dry Shampoo</h5>
                4.7 oz<br />
                $10<br />
                <button onclick="addToCart('Invisiblewear: Blonde Dry Shampoo' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
	   <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Invisiblewear: Brunette Dry Shampoo</h5>
                4.7 oz<br />
                $10<br />
                <button onclick="addToCart('Invisiblewear: Brunette Dry Shampoo' , 10)">
                    Add to Cart
                </button><br />
            </div>
            <div id="Neon" class="col-3">
                <img class="product-image" src="images/Invisiblewear-Brunette-Dry-Shampoo.JPG">
            </div>
        </div>
        <h3>Neon</h3>
        <p>
		  Neon is a product line geared mainly towards teens. The natural sugar 
		  in the products help to give the hair a healthy shine and boost confidence. 
        </p>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Neon: Sugar Cleanse</h5>
                10.14 oz<br />
                $12<br />
                <button onclick="addToCart('Neon: Sugar Cleanse' , 12)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Neon-Sugar-Cleanse.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Neon-Sugar-Twist.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Neon: Sugar Twist</h5>
                6.8 oz<br />
                $10<br />
                <button onclick="addToCart('Neon: Sugar Twist' , 10)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Neon: Sugar Cream</h5>
                6.8 oz<br />
                $10<br />
                <button onclick="addToCart('Neon: Sugar Cream' , 10)">
                    Add to Cart
                </button><br />
            </div>
            <div id="Smoothing" class="col-3">
                <img class="product-image" src="images/Neon-Sugar-Cream.JPG">
            </div>
        </div>
        <h3>Smoothing</h3>
        <p>
		  Super Skinny is one of the most popular of the Paul Mitchell products 
		  that helps to keep hair shinny, smooth, and manageable. 
        </p>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Smoothing: Super Skinny Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Smoothing: Super Skinny Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/SmoothingSuperSkinnyShampoo.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Smoothing-Super-Skinny-Treatment.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Smoothing: Super Skinny Treatment</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Smoothing: Super Skinny Treatment' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Smoothing: Super Skinny Serum</h5>
                5.1 oz<br />
                $15<br />
                <button onclick="addToCart('Smoothing: Super Skinny Serum' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div id="Extra-Body" class="col-3">
                <img class="product-image" src="images/Smoothing-Super-Skinny-Serum.JPG">
            </div>
        </div>
        <h3>Extra-Body</h3>
        <p>
		  Extra-Body helps me to give volume to hair without weighing it down.
        </p>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Extra-Body: Shampoo</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Extra-Body: Shampoo' , 15)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Extra-Body-Shampoo.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Extra-Body-Rinse.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Extra-Body: Rinse</h5>
                10.14 oz<br />
                $15<br />
                <button onclick="addToCart('Extra-Body: Rinse' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Extra-Body: Boost</h5>
                8.5 oz<br />
                $12<br />
                <button onclick="addToCart('Extra-Body: Boost' , 12)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Extra-Body-Boost.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Extra-Body-Firm-Finishing-Spray.JPG">
            </div>
            <div id="Mitch" class="product-spec col-9 left" >
                <h5>Extra-Body: Firm Finishing Spray</h5>
                3.8 oz<br />
                $12<br />
                <button onclick="addToCart('Extra-Body: Firm Finishing Spray' , 12)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <h3>Mitch</h3>
        <p>
		This line of product is designed especially for men. 
        </p>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Mitch: Double Hitter</h5>
                8.5 oz<br />
                $16<br />
                <button onclick="addToCart('Mitch: Double Hitter' , 16)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Mitch-Double-Hitter.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Mitch-Hardwired.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Mitch: Hardwired</h5>
                2.5 oz<br />
                $15<br />
                <button onclick="addToCart('Mitch: Hardwired' , 15)">
                    Add to Cart
                </button><br />
            </div>
        </div>
        <div class="product-item col-12">
            <div class="product-spec col-9 right" >
                <h5>Mitch: Reformer</h5>
                3 oz<br />
                $18<br />
                <button onclick="addToCart('Mitch: Reformer' , 18)">
                    Add to Cart
                </button><br />
            </div>
            <div class="col-3">
                <img class="product-image" src="images/Mitch-Reformer.JPG">
            </div>
        </div>
        <div class="product-item col-12">
            <div class="col-3">
                <img class="product-image" src="images/Mitch-Barber-Classic.JPG">
            </div>
            <div class="product-spec col-9 left" >
                <h5>Mitch: Barber’s Classic</h5>
                3 oz<br />
                $18<br />
                <button onclick="addToCart('Mitch: Barber’s Classic' , 18)">
                    Add to Cart
                </button><br />
            </div>
        </div>
    </div>
    <div class="col-2">
        <img class="panel-image" src="images/side-plant.png" />
    </div>
</body>
</html>

<script>
    function addToCart(itemName, itemPrice)
    {
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function () 
        {
            if (this.readyState == 4 && this.status == 200)
            {
                //change number of items in navbar
                document.getElementById("numberInCart").innerHTML = this.responseText + " In Cart";
            }
            else if (this.readyState == 4) 
            {
                alert("Failure trying to open file to write. Status is: " + this.statusText);
            }
        };
        
        httpRequest.open("POST","addToCart.php", true);
        //this is required for post method only
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpRequest.send("itemName=" + itemName + "&itemPrice=" + itemPrice);
    }
</script>
