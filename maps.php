<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Materialize -->
    <link rel="stylesheet" href="styles/materialize.css">
    <script src="scripts/materialize.js"></script>
    <!-- CSS Normal -->
    <link rel="stylesheet" href="styles/style.css">
    <title>Maps</title>
</head>
<body>

    <?php include './Pages/header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="titulo"> Mapas</h1>

                <div class="carousel center-align">

                    <div class="carousel-item">
                        <h2 class="subtitulo">The Island</h2>
                        <!-- <img src="images/Maps/TheIsland.png" alt="TheIsland"> -->
                        <img src="images/Maps/SmallSize/TheIsland.png" alt="TheIsland">
                        <input type="button" onclick="showMore('TheIsland')" id="Button-TheIsland" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> TheCenter</h2>
                        <!-- <img src="images/Maps/TheCenter.png" alt="TheCenter"> -->
                        <img src="images/Maps/SmallSize/TheCenter.png" alt="TheCenter">
                        <input type="button" onclick="showMore('TheCenter')" id="Button-TheCenter" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Valguero</h2>
                        <!-- <img src="images/Maps/Valguero.webp" alt="Valguero"> -->
                        <img src="images/Maps/SmallSize/Valguero.png" alt="Valguero">
                        <input type="button" onclick="showMore('Valguero')" id="Button-Valguero" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Scorched </h2>
                        <!-- <img src="images/Maps/Scorched.jpg" alt="Scorched"> -->
                        <img src="images/Maps/SmallSize/Se.png" alt="Scorched">
                        <input type="button" onclick="showMore('Scorched')" id="Button-Scorched" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Ragnarok</h2>
                        <!-- <img src="images/Maps/Ragnarok.png" alt="Ragnarok"> -->
                        <img src="images/Maps/SmallSize/Ragna.png" alt="Ragnarok">
                        <input type="button" onclick="showMore('Ragnarok')" id="Button-Ragnarok" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Extincion </h2>
                        <!-- <img src="images/Maps/Extincion.jpg" alt="Extincion"> -->
                        <img src="images/Maps/SmallSize/Ext.png" alt="Extincion">
                        <input type="button" onclick="showMore('Extincion')" id="Button-Extincion" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Aberration </h2>
                        <!-- <img src="images/Maps/Aberration.jpg" alt="Aberration"> -->
                        <img src="images/Maps/SmallSize/Abe.png" alt="Aberration">
                        <input type="button" onclick="showMore('Aberration')" id="Button-Aberration" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> CrystalIsles </h2>
                        <!-- <img src="images/Maps/CrystalIsles.png" alt="CrystalIsles"> -->
                        <img src="images/Maps/SmallSize/Crystal.png" alt="CrystalIsles">
                        <input type="button" onclick="showMore('CrystalIsles')" id="Button-CrystalIsles" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Genesis </h2>
                        <!-- <img src="images/Maps/Genesis.jpg" alt="Genesis"> -->
                        <img src="images/Maps/SmallSize/Gen.png" alt="Genesis">
                        <input type="button" onclick="showMore('Genesis')" id="Button-Genesis" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Genesis2 </h2>
                        <!-- <img src="images/Maps/Genesis2.png" alt="Genesis2"> -->
                        <img src="images/Maps/SmallSize/Gen2.png" alt="Genesis2">
                        <input type="button" onclick="showMore('Genesis2')" id="Button-Genesis2" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> LostIsland </h2>
                        <!-- <img src="images/Maps/Lost Island.png" alt="LostIsland"> -->
                        <img src="images/Maps/SmallSize/Lost.png" alt="LostIsland">
                        <input type="button" onclick="showMore('LostIsland')" id="Button-LostIsland" value="Read More"/>
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo"> Fjordur </h2>
                        <!-- <img src="images/Maps/Fjordur.png" alt="Fjordur"> -->
                        <img src="images/Maps/SmallSize/Fjor.png" alt="Fjordur">
                        <input type="button" onclick="showMore('Fjordur')" id="Button-Fjordur" value="Read More"/>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="info-mapas">
        <div class="oculto" id='TheIsland'>
            <h1> The Island </h1>
            <section>
                <h2>Description</h2>
                <p>The Island is a map included with the base game. It is the first known ARK and is the first map that follows with the storyline.</p>
                <h2>Regions</h2>
                <p>The Island is a large landmass with several smaller islands surrounding the central island. Resources become more common as one travels farther inland, but so do the dangers. Some areas are higher in temperature while others are lower which can be life threatening.
                On the Island there are two types of weather, rain and fog. When it rains, you will hydrate and can fill your  Waterskin,  Water Jar, or  Canteen with rainwater, furthermore crop plots will also increase their water amount. When fog rolls in, it is hard to see very far.</p>
            </section>
        </div>
        <div class="oculto" id='TheCenter'>
            <h1>TheCenter</h1>
            <section>
                <h2>Description</h2>
                <p>The Center originated as a custom map by modder Ben EvilMrFrank Burkart.
                The Center DLC has a default difficulty level of 5.0 which means wild dinos up to level 150 and better loot quality from  supply drops. Prior to January 2017,  Giganotosaurus had an extremely rare chance to spawn anywhere on the map; now Giganotosaurus will only spawn in a few areas such as the Lava Biome and Northern Snowy Mountain.</p>
                <h2>Regions</h2>
                <p>The Center consists of multiple climatic and geological regions, including several that are not featured on The Island map. The map's most notable feature, a colossal floating island, can be found to the West of the map surrounded by treacherous swamps. To the far North, an active volcanic island can be found covered in basalt, lava, and dangerous predators. Numerous islands covered in jungles, tropical shorelines, mountains, and ancient ruins dot the varied archipelago. A unique set of caves push survivors to their limits in search of the Artifacts and their hidden rewards. Descend into Jules Verne's Journey to the Center of the Earth where survivors will find themselves in a self-sufficient underground ecosystem far beneath the lush jungles. Similarly, survivors can dive down to either of two underwater domes to build their own naval bases of Atlantean proportions!</p>
            </section>
        </div>
        <div class="oculto" id='Valguero'>
            <h1>Valguero</h1>
            <section>
                <h2>Description</h2>
                <p>Survivors, come explore a vast and diverse 63 km2 map with a multitude of new terrains to build on! Observe familiar ARK creatures in a vast environment and meet Deinonychus, the newest ARK feathered theropod found only in Valguero.
                    Explore new heights and hidden depths; whether it's creating your foundations in the White Cliffs or discovering the secrets of the pit of Aberration, Valguero offers a new experience of the ARK universe. With new biomes, a formidable dungeon boss and mysterious ruins to discover, there is always something exciting - and dangerous - in Valguero. Among its more than 60 square kilometers, you'll find everything from lush jungles to environmental hazards, from snowfields to lava flows, to savannas and hot springs.</p>
                <h2>Regions</h2>
                <p>Rainbows across the map.
                    Occasional auroras at night.
                    Shooting stars at night.
                    Freezing air in the snow desert.
                    An underground ocean called The Abyss.
                    Ichthyosaurus and  Carbonemys corpses scattered along the lake.
                    There is also an underground biome called the aberration trench cave.
                    Mushrooms on the emerald forest that can be harvested for  Flowers,  Rare Mushrooms and  Bio Toxin.
                    Radiation area called the Unknown.
                    Deinonychus nests on the The Paradise, Chalk Hills.
                    An Underground Volcanic  Wyvern Trench, to get  Fire Wyvern Eggs.
                    Wild  Broodmothers</p>
            </section>
        </div>
        <div class="oculto" id='Scorched'>
            <h1>Scorched</h1>
            <section>
                <h2>Description</h2>
                <p>Scorched Earth adds 12 new creatures with 5 variations, 60 new engrams, a new boss, and a whole new map.
                Creatures tamed and items received can be brought to the vanilla island and used by people with and without the expansion. Items from the DLC can also be spawned manually if you don't own the expansion pack. Three of the new creatures have multiple variations, namely the  Jugbug (Water and Oil), the  Wyvern (Fire, Lightning, and Poison) and the  Rock Elemental (Rock and Rubble).</p>
                <h2>Regions</h2>
                <p>Being entirely a desert rather than an island surrounded by water, water collection becomes a more challenging obstacle. Natural water sources are rare, requiring the collection of water from other sources, such as  cactus,  water wells,  Jugbugs, or  Morellatops. Heat stroke is a potential side effect of too much heat exposure, having a similar effect to being  drunk. Also the naturally harsh environment damages generators and certain structures.
                Scorched Earth has three unique weather patterns: Sandstorms radically reduce visibility and drain stamina, Superheat will drain your water at a much faster rate than normal heat and induce Heat Stroke fairly quickly, while electrical storms will temporarily shut down electrical devices and prevent firearms (and Tek Saddles) from firing. The  Electrical Generator and the  Chemistry Bench will not turn off if the item Structures are covered.</p>
            </section>
        </div>
        <div class="oculto" id='Ragnarok'>
            <h1>Ragnarok</h1>
            <section>
                <h2>Description</h2>
                <p>Ragnarok adds several new creatures, such as the  Ice Wyvern,  Iceworm Male,  Dire Polar Bear, and  Griffin, as well as 4 new dungeon bosses: the  Spirit Dire Bear and  Spirit Direwolf, the  Iceworm Queen and the  Lava Elemental. It's a whole new map that boasts an expansive 144 sq. kilometer environment, an active volcano, species from Scorched Earth, and higher than average spawn rates of  Megalania and  Ovis (creatures that are harder to find on other maps). On Ragnarok there are unique  Beaver Dams; they are bigger and look more like beaver dams in real life.  Beavers can live in the dams, too.</p>
                <h2>Regions</h2>
                <p>An active volcano that will erupt creating lava flows and cause meteors to rain down.
                    Basilosaurus corpses scattered along the beaches.
                    Boxes scattered around the beaches that can be broken to get equipment.
                    Massive beaver dams.
                    Ruins and sunken Viking boats scattered around the map including a castle overlooking Viking Bay.
                    Occasional wind storms.
                    Various easter eggs such as a Shrek hut and Jats face scattered around the map.
                    Hot springs with stone benches on which you can sit and get the rested buff.</p>
            </section>
        </div>
        <div class="oculto" id='Extincion'>
            <h1>Extincion</h1>
            <section>
                <h2>Description</h2>
                <p>This map, set on Ravaged Earth rather than an ARK up in space, forces players to survive an Earth unfamiliar to us: one of strange features and stranger creatures. In the center of the map lies an abandoned city, usually referred to as the Great City or Sanctuary. It is the remains of some great technologically advanced civilization, the same one that built the ARKs. Outside of the city borders, pockets of life can be hard to find among the corrupted wasteland. They are still there, however, in the protective borders of the Proto-ARKs. To the southeast, the desert Proto-ARK exists. To the north, the Snow Dome, a second Proto-ARK. Another exists to the northwest, called the Sunken Forest, which was supposed to be another ARK but failed when it collapsed into the ground, presumably due to there being a large sinkhole underneath it. Strangely enough, the Proto-ARKs represent past challenges the survivor has faced: the Sanctuary and Snow Dome vaguely representing The Island, the Desert Dome representing Scorched Earth, and the Sunken Forest bearing similarities to Aberration.</p>
                <h2>Regions</h2>
                <p>Three proto-Arks which house three biomes: Desert, Snow and Forest.
                    Eclipses that temporarily dim the light.
                    Geysers that launch survivors and Creatures into the air.
                    Meteor showers where meteors rain down upon the land and destroy structures and kill Creatures.
                    Orbital Supply Drops that fall from the sky and  Element Nodes that rise from the ground that, when activated, start PvE horde-styled events. The orbital supply drops are also attacked by the corrupted dinosaurs</p>
            </section>
        </div>
        <div class="oculto" id='Aberration'>
            <h1>Aberration</h1>
            <section>
                <h2>Description</h2>
                <p>Aberration places survivors on a damaged ARK: its internal atmosphere has leaked away, resulting in a harsh surface with intense radiation, and a plethora of lush biomes underground. With the maintenance systems of this ARK malfunctioning, the many hazards, creatures, and nature of the environment present a thrilling new world to explore and master.</p>
                <h2>Regions</h2>
                <p> Nameless and  Reaper never spawn here, if they follow you from a surface entrance or other region, they will remain until they lose aggravation, then immediately burrow underground out of sight (possibly) when they reach this region.
                    Dizzy Spores most often happens around this region.
                    Red-Capped Red-stemmed Mushroom and Green Gem cluster are present around the region.</p>
            </section>
        </div>
        <div class="oculto" id='CrystalIsles'>
            <h1>CrystalIsles</h1>
            <section>
                <h2>Description</h2>
                <p>The map Crystal Isles, formerly known as ISO: Crystal Isles, is a free, official, non-canonical DLC expansion map for ARK: Survival Evolved. It was originally developed by Isolde Gaming, Lillian, and iSPEZZ.
                    Every new creature in Crystal Isles holds a surprise, from the explosive  Tropeognathus to the glowing  Crystal Wyvern. Furthermore, Crystal Isles adds a new boss called the  Crystal Wyvern Queen. The  Crystal Wyvern Queen spawns minions called the  Crystal Wyvern Heir.
                </p>
                <h2>Regions</h2>
                <p>Large Crystals coating the map giving it its namesake.
                    An island constantly engulfed in darkness and thunder known as Eldritch Isle with floating water bubbles and an abundance of rare resources.
                    A massive cluster of floating islands known as Apotheosis.
                    An enormous bee hive in the form of a cave filled with honey and home to  Giant Worker Bees and  Dire Bears.
                    Bogs filled with rotting corpses that inflict a  Torpor-inducing debuff.
                    A cave within the desert that acts as a hive for Crystal Wyverns.</p>
            </section>
        </div>
        <div class="oculto" id='Genesis'>
            <h1>Genesis</h1>
            <section>
                <h2>Description</h2>
                <p>Genesis: Part 1 is a simulation across 5 distinct biomes in the form of mini maps: Bog, Arctic, Ocean, Volcanic, and Lunar. Survivors can teleport between these areas using the HLNA Biome Teleportation menu (using beds will drop any items making teleporting with HLN-A recommended). Survivors can select a biome and a cardinal direction to spawn in at any time. The player will retain any items in their inventory and any nearby tames will teleport with the player.</p>
                <h2>Regions</h2>
                <p>An ash-laden Volcanic Hellscape home to the Magmasaurs and the occasional eruption.
                    An expansive Ocean with deep underwater trenches, swirling whirlpools, colossal Vaccum Compartments and gigantic oxygen bubbles.
                    Frigid Mountain Peaks with frequent avalanches, blizzards and a completely whited-out Eastern section where the formidable Ferox reside.
                    An Alien Moon with low gravity, thin atmospheric density, oxygen vents, Element fog, and solar rays that will slowly kill exposed Survivors. The majestic Astrocetus patrol this Biome.
                    A massive, connected series of Bogs and Swamps containing enourmous Titan Trees, towering Flowers and bloodthirsty Bloodstalkers.</p>
            </section>
        </div>
        <div class="oculto" id='Genesis2'>
            <h1>Genesis2</h1>
            <section>
                <h2>Description</h2>
                <p>Genesis: Part 2 has survivors exploring a vast world filled with strange new biomes, story missions, and exotic creatures. The map is set aboard the massive Genesis-Ship with two rings: on the right side is a regular ring with green terrain as well as normal creatures and the left side is a corrupted ring full of purple terrain and horrifying creatures. The ship is traveling through deep space looking for a habitable planet.</p>
                <h2>Regions</h2>
                <p>The map contains various new creatures, from a unusual but helpful  Maewing down to a small but horrifying  Noglin, the smart and curious  Astrodelphis that wanders space, the robotic and ever-searching  Stryder to be tamed, the sneaky  Shadowmane that can turn invisible at will, the flying robotic sentries known as  Voidwyrms, and the horrifying  Summoner that can spawn other creatures to aid themselves.
                    Moreover a brand new variant of creatures called  R-Creatures can be found across the ship, each possessing boosted stats from their original counterpart.</p>
            </section>
        </div>
        <div class="oculto" id='LostIsland'>
            <h1>LostIsland</h1>
            <section>
                <h2>Description</h2>
                <p>This is the first free DLC map to introduce Three unique creatures, as opposed to one.
                    This is the first map to have a contest to decide which creature to be added into the map, with players coming up with a real life creature and voting on it to appear on the map. The voting was started with Community Crunch 276 and ended July 23rd, with both Dinopithecus and Carcharodontosaurus receiving mostly equal votes, and eventually, the Dinopithecus winning by 1% against the Carcharodontosaurus.
                    This map is visibly a replica of the Tamriel map from the famous Bethesda gaming franchise, The Elder Scrolls.
                    The map is 150 square kilometers big.</p>
                <h2>Regions</h2>
                <p>A Huge ruined City within the Redwood Biome.
                    Various Ships scattered within the ocean as well as in a cave.
                    Lava Pools/Streams, similar to those on The Center and Genesis: Part 1, though these do considerably less damage compared to the other maps.
                    A Wyvern Trench containing many more nesting places than the Scorched Earth, Ragnarok or Crystal Isles versions is found close to the Red Obelisk, although wyverns are seemingly less spread out, resulting in fewer actual nests.
                    An Ice Wyvern Trench containing nests which is found close to the Blue Obelisk.
                    Magmasaur Caves can be found nearby the trench, towards the Red Obelisk. These caves contain few Magmasaurs, and eggs can often be found inside.
                    Packs of Stegos scattered along the map.
                    A lake filled with nothing but Black Pearls
                    Loud roars of the boss in the northwest part
                    Random Onyc calls in Kesler Inlet</p>
            </section>
        </div>
        <div class="oculto" id='Fjordur'>
            <h1>Fjordur</h1>
            <section>
                <h2>Description</h2>
                <p>The Fjordur map officially spans an area over 140 square kilometers, 3.5 times that of The Island, which has an area of roughly 40 sq kilometers. The map is smaller than Ragnarok. However it contains nearly 50 cave systems, some of them very large. Additionally, there are 3 sub-maps accessible via portals. These sub maps are each have a similar setup to the domes in Extinction, or the separated biomes of Genesis Pt. 1 but do not appear on any maps. All together these additional hidden areas, while difficult to confirm exact numbers, could nearly double the map’s actual area compared to the official size.</p>
                <h2>Regions</h2>
                <p>The Map contains an area that includes 3 portals to 3 different realms.
                    Vanaheim is a luscious forest based realm.
                    Asgard is a realm of large vibrant fields and abandoned buildings.
                    Unique Obelisks in the form of massive floating runestones.
                    Unique supply drops that look like totem poles
                    Various ruins around the map including things such as-
                    There are several fortresses scattered around the map, located in each biome
                    Several deserted wooden houses are strewn about the map, some with wooden palisade walls, some of these houses are accessible whilst others remain bolted shut.</p>
            </section>
        </div>
    </div>


    <!-- JS Main -->
    <script src="scripts/main.js"></script>

    <?php include './Pages/footer.php' ?>

</body>
</html>