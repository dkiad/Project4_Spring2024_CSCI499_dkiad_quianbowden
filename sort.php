<html>

    <head>
        
        <title> THE ARCADE </title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <style type="text/css">
        
            #draggable {
                
                width: 100px;
                height: 100px;
                background-color: blue;
                
            }
        
            #droppable {
                
                width: 300px;
                height: 300px;
                background-color: red;
                
            }

            #bannerimage {
                width: 100%;
                background-image: url("Game Judge The Arcade.gif");
                height: 300px;
                background-color: purple;
                background-position: center;
                background-repeat: no-repeat;
                background-size:cover;
            }
        </style>
        
    </head>

    <body>

        <div id="bannerimage"></div>
        
        <div id="accordion">
        
            <h3> Call of Duty </h3>
            <div>
            
                <p>Call of Duty is like diving headfirst into an action-packed blockbuster movie, but with you as the star! Picture this: 
                    you're armed to the teeth, adrenaline pumping, and dropped into heart-pounding battlegrounds where every corner hides a new challenge. 
                    Whether you're dodging bullets, unleashing epic kill streaks, or teaming up with friends for some intense multiplayer mayhem, Call of Duty is your ticket to the ultimate gaming thrill ride. So gear up, soldier! 
                    It's time to answer the call and unleash your inner hero in the most epic gaming experience of your life!!
                </p>
                     <img src="cod.jpeg" alt=" Call of Duty ">

            </div>
        
            <h3> Grad Theft Auto </h3>
            <div>
            
                <p>it's a wild, adrenaline-fueled rollercoaster ride through a chaotic world where the only rule is to have a blast! Picture yourself cruising down the neon-lit streets of a sprawling metropolis,
                     with the wind in your hair and your favorite tunes blasting on the radio. But wait, there's more! 
                    In GTA, you're not just a player—you're a master of mayhem, a daredevil driver, and a cunning criminal all rolled into one.
                </p>
                    <img src="images.jpeg" alt =" Grand Theft Auto "> 
                
            </div>
        
            <h3> 2K </h3>
            <div>
            
                <p> 2K is like stepping onto the court or into the ring with your favorite sports superstars and living out your ultimate sports fantasies in the most electrifying way possible! 
                    It's the thrill of sinking that buzzer-beating three-pointer in NBA 2K, feeling the rush of adrenaline as you slam-dunk over your opponents, 
                    and celebrating victory with your teammates.
                </p>
                    <img src="2k.jpeg" alt =" Basketball 2K ">

            </div>
        
            <h3> Roblox </h3>
            <div>
            
                <p>Roblox is like stepping into a boundless universe where your imagination is the only limit! 
                    Picture yourself as a master builder, game developer, fashion designer, and virtual explorer all rolled into one. In Roblox, you can create your own unique worlds, 
                    design incredible games, and bring your wildest dreams to life with just a few clicks.
                </p>
                    <img src="roblox.jpeg" alt =" Roblox ">

            </div>
        
            <h3> Minecraft </h3>
            <div>
            
                <p> Whether you're mining deep into the earth's core, constructing towering castles fit for a king, or just wrangling some pixelated farm animals, Minecraft is your canvas and your pickaxe is your brush.
                     It's a world where you can build towering skyscrapers, 
                    intricate redstone contraptions, or even a humble dirt hut - the choice is yours!
                </p>

                    <img src="minecraft.jpeg" alt =" Minecraft " >
            </div>
        
            <h3> The Sims 4 </h3>
            <div>
            
                <p>
                    Welcome to The Sims 4, where you're not just playing with virtual dolls, you're shaping the lives of digital dynasties! It's like having your own personal universe in a computer, 
                    where you're the puppeteer and every Sim is a potential drama llama waiting to happen.
                </p>
                
                    <img src="sims.jpeg" atl =" The Sims 4 " >
                
            </div>
        
        
        </div>
        
        <script type="text/javascript">
            
            $("#accordion").accordion();
            
            $("#sortable").sortable();
            
        </script>
        
    </body>

</html>
