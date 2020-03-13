<!DOCTYPE html>
<html lang="en">
    <!-- 

        Garnsuda Tongtae (12568857)
        POTI Assignment 1: http://www-student.it.uts.edu.au/~gtongtae/assg_1/index.php
        
    -->
<head>
    <title >POTI: Online Grocery Store</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        function showCategory(category){
            switch(category){
                case "frozenFood":
                    document.getElementById('frozen-food').style.display = 'block';
                    document.getElementById('fresh-food').style.display = 'none';
                    document.getElementById('beverages').style.display = 'none';
                    document.getElementById('home-health').style.display = 'none';
                    document.getElementById('pet-food').style.display = 'none';
                    break;
                case "freshFood":
                    document.getElementById('frozen-food').style.display = 'none';
                    document.getElementById('fresh-food').style.display = 'block';
                    document.getElementById('beverages').style.display = 'none';
                    document.getElementById('home-health').style.display = 'none';
                    document.getElementById('pet-food').style.display = 'none';
                    break;
                case "beverages":
                    document.getElementById('frozen-food').style.display = 'none';
                    document.getElementById('fresh-food').style.display = 'none';
                    document.getElementById('beverages').style.display = 'block';
                    document.getElementById('home-health').style.display = 'none';
                    document.getElementById('pet-food').style.display = 'none';
                    break;
                case "homeHealth":
                    document.getElementById('frozen-food').style.display = 'none';
                    document.getElementById('fresh-food').style.display = 'none';
                    document.getElementById('beverages').style.display = 'none';
                    document.getElementById('home-health').style.display = 'block';
                    document.getElementById('pet-food').style.display = 'none';
                    break;
                case "petFood":
                    document.getElementById('frozen-food').style.display = 'none';
                    document.getElementById('fresh-food').style.display = 'none';
                    document.getElementById('beverages').style.display = 'none';
                    document.getElementById('home-health').style.display = 'none';
                    document.getElementById('pet-food').style.display = 'block';
                    break;
            }
        }

    </script>

</head>

<body>
   <div id="heading" >
        <h2>Welcome to the POTI Online Grocery Store</h2>
    </div> 

    <div id="grid-layout">
        
        <div id="hide">Cannot add products during checkout. To continue shopping, click <span style="font-weight: bold">cancel</span>.</div>

            <div id="grocery-menu" >

                <!-- Grocery Categories:  -->
                <img id="grocery-categories" src="img/top_half.png" width="500" height="181" orgWidth="500" orgHeight="181" usemap="#categoriesMap" />
                <map name="categoriesMap" id="grocery-categories">
                <area id="frozen_food" alt="" title="frozen_food" shape="rect" coords="6,140,89,180" style="outline:none;" target="product" onmouseover="showCategory('frozenFood')"/>
                <area id="fresh_food" alt="" title="fresh_food" shape="rect" coords="101,139,184,181" style="outline:none;" target="product" onmouseover="showCategory('freshFood')" />
                <area id="beverages_category" alt="" title="beverages" shape="rect" coords="196,139,279,181" style="outline:none;" target="product" onmouseover="showCategory('beverages')" />
                <area id="home_health" alt="" title="home_health" shape="rect" coords="291,140,374,181" style="outline:none;" target="product" onmouseover="showCategory('homeHealth')" />
                <area id="pet_food" alt="" title="pet_food" shape="rect" coords="386,139,468,181" style="outline:none;" target="product" onmouseover="showCategory('petFood')" />
                <area shape="rect" coords="498,179,500,181" alt="Image Map" style="outline:none;" title="Image Map" />
                </map>


                <!-- Frozen Food:  -->
                <img class="options" id="frozen-food" src="img/frozen_food.png" width="500" height="339" orgWidth="500" orgHeight="339" usemap="#frozenFoodMap" />
                <map name="frozenFoodMap" id="frozen-food">
                <area id="hamburger-patties" href="product-data?id=1002" title="Hamburger Patties" shape="rect" coords="5,130,88,172" style="outline:none;" target="product" />
                <area id="fish-fingers-500" href="product-data?id=1000"title="Fish Fingers 500g" shape="rect" coords="61,249,144,290" style="outline:none;" target="product" />
                <area id="shelled-prawns" href="product-data?id=1003" title="Shelled Prawns" shape="rect" coords="195,133,277,174" style="outline:none;" target="product" />
                <area id="ice-cream-1L" href="product-data?id=1004" title="Ice Cream 1 Litre" shape="rect" coords="253,247,335,288" style="outline:none;" target="product" />
                <area id="fish-fingers-1000" href="product-data?id=1001" title="Fish Fingers 1000g" shape="rect" coords="155,249,237,290" style="outline:none;" target="product" />
                <area id="ice-cream-2L" href="product-data?id=1005" title="Ice Cream 2L" shape="rect" coords="347,249,429,290" style="outline:none;" target="product" />
                <area shape="rect" coords="498,337,500,339" alt="Image Map" style="outline:none;" title="Image Map" />
                </map>

                <!-- Fresh Food: -->
                <img class="options" id="fresh-food" src="img/fresh_food.png" width="500" height="339" orgWidth="500" orgHeight="339" usemap="#freshFoodMap" />
                <map name="freshFoodMap" id="fresh-food">
                <area id="t-bone-steak" href="product-data?id=3002" title="T'Bone Steak" shape="rect" coords="4,129,68,171" style="outline:none;" target="product" />
                <area id="cheddar-500g" href="product-data?id=3000" title="Cheddar Cheese 500g" shape="rect" coords="34,249,115,291" style="outline:none;" target="product" />
                <area id="cheddar-1000g" href="product-data?id=3001" title="Cheddar Cheese 1000g" shape="rect" coords="128,249,209,291" style="outline:none;" target="product" />
                <area id="navel-oranges" href="product-data?id=3003" title="Navel Oranges" shape="rect" coords="141,130,206,172" style="outline:none;" target="product"  />
                <area id="bananas" href="product-data?id=3004" title="Bananas" shape="rect" coords="211,130,276,172" style="outline:none;" target="product" />
                <area id="grapes" href="product-data?id=3006" title="Grapes" shape="rect" coords="281,130,346,170" style="outline:none;" target="product" />
                <area id="apples" href="product-data?id=3007" title="Apples" shape="rect" coords="351,130,416,170" style="outline:none;" target="product" />
                <area id="peaches" href="product-data?id=3005" title="Peaches" shape="rect" coords="419,130,484,170" style="outline:none;" target="product" />
                <area shape="rect" coords="498,337,500,339" alt="Image Map" style="outline:none;" title="Image Map" />
                </map>

                <!-- Beverages: -->
                <img class="options" id="beverages" src="img/beverages.png" width="500" height="339" orgWidth="500" orgHeight="339" usemap="#beveragesMap" />
                <map name="beveragesMap" id="beverages">
                <area id="coffee-200g" href="product-data?id=4003" title="Coffee 200g" shape="rect" coords="19,244,84,284" style="outline:none;" target="product" />
                <area id="coffee-500g" href="product-data?id=4004" title="Coffee 500g" shape="rect" coords="89,244,154,285" style="outline:none;" target="product" />
                <area id="earl-grey-pack-25" href="product-data?id=4000" title="Earl Grey - Pack 25" shape="rect" coords="159,244,224,285" style="outline:none;" target="product" />
                <area id="earl-grey-pack-100" href="product-data?id=4001" title="Earl Grey - Pack 100" shape="rect" coords="228,243,293,284" style="outline:none;" target="product" />
                <area id="earl-grey-pack-200" href="product-data?id=4002" title="Earl Grey - Pack 200" shape="rect" coords="299,244,364,285" style="outline:none;" target="product"/>
                <area id="chocolate-bar" href="product-data?id=4005" title="Chocolate Bar" shape="rect" coords="393,136,474,177" style="outline:none;" target="product" />
                <area shape="rect" coords="498,337,500,339" alt="Image Map" style="outline:none;" title="Image Map" />
                </map>

                <!-- Home Health: -->
                <img class="options" id="home-health" src="img/home_health.png" width="500" height="339" orgWidth="500" orgHeight="339" usemap="#homeHealthMap"  />
                <map name="homeHealthMap" id="home-health">
                <area id="bath-soap" href="product-data?id=2002" title="Bath Soap" shape="rect" coords="6,130,89,170" style="outline:none;" target="product" >
                <area id="panadol-pack-24" href="product-data?id=2000" title="Panadol - Pack 24" shape="rect" coords="61,249,144,290" style="outline:none;" target="product" />
                <area id="panadol-bottle-50" href="product-data?id=2001" title="Panadol - Bottle 50" shape="rect" coords="155,249,238,290" style="outline:none;" target="product" />
                <area id="washing-powder" href="product-data?id=2005" title="Washing Powder" shape="rect" coords="196,130,279,171" style="outline:none;" target="product" />
                <area id="garbage-bags-small" href="product-data?id=2003" title="Garbage Bags - Small" shape="rect" coords="254,248,337,289" style="outline:none;" target="product" />
                <area id="garbage-bags-large" href="product-data?id=2004" title="Garbage Bags - Large" shape="rect" coords="348,248,431,289" style="outline:none;" target="product" />
                <area id="laundry-bleach" href="product-data?id=2006" title="Laundry Bleach" shape="rect" coords="387,130,470,171" style="outline:none;" target="product" />
                <area shape="rect" coords="498,337,500,339" alt="Image Map" style="outline:none;" title="Image Map" />
                </map>

                <!-- Pet Food: -->
                <img class="options" id="pet-food" src="img/pet_food.png" width="500" height="339" orgWidth="500" orgHeight="339" usemap="#petFoodMap" />
                <map name="petFoodMap" id="pet-food">
                <area id="bird-food" href="product-data?id=5002" title="Bird Food" shape="rect" coords="102,130,184,171" style="outline:none;" target="product" />
                <area id="cat-food" href="product-data?id=5003" title="Cat Food" shape="rect" coords="197,130,279,171" style="outline:none;" target="product" />
                <area id="dog-food-1kg" href="product-data?id=5001" title="Dog Food - 1kg" shape="rect" coords="255,248,337,289" style="outline:none;" target="product" />
                <area id="dog-food-5kg" href="product-data?id=5000" title="Dog Food - 5kg" shape="rect" coords="349,248,431,289" style="outline:none;" target="product"  />
                <area id="fish-food" href="product-data?id=5004" title="Fish Food" shape="rect" coords="388,130,470,171" style="outline:none;" target="product" />
                <area shape="rect" coords="498,337,500,339" alt="Image Map" style="outline:none;" title="Image Map" />
                </map>
                

            </div>
    
            <div id="display-product">
                <iframe id="product-frame" src="product-data.php" frameborder="0" style="position: relative; height: 100%; width: 100%;" name="product"></iframe>
            
            </div>

            <div id="checkout">
                <iframe id="cart-frame" src="shopping-cart.php" frameborder="0" style="position: relative; height: 100%; width: 100%;" name="cart"></iframe>
            </div>

    </div>
   

</body>

</html>