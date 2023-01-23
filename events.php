<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/headerfooter.css">
    <link rel="stylesheet" href="styles/events.min.css">
    <title>Events</title>
</head>
<body>

    <?php include './Pages/header.php' ?>

        <script>
            const events = document.createElement("main");
            events.classList.add("events");
            const cards = document.createElement("section");
            cards.classList.add("cards");

            const cardData = [
            {
                image: ["./images/Events/NewYear300.png", "./images/Events/NewYear600.png", "./images/Events/NewYear1000.png", "./images/Events/NewYear.png"],
                title: "ARK: Happy New Year!",
                date: "January 1st - January 2nd",
                description : "Servers running the event will be bombarded with raining gifts in a hail of fireworks. These gifts will contain a collection of skins and rare Chibis from past events that are currently unavailable. The drop rate is dialled to over 9000!",
            },
            {
                image: ["./images/Events/LoveEvolved300.png", "./images/Events/LoveEvolved600.png", "./images/Events/LoveEvolved1000.png", "./images/Events/LoveEvolved.png"],
                title: "ARK: Love Evolved",
                date: "February 11th - February 18th",
                description : "From Wednesday, February 11th through Wednesday, February 18th, love will fill the air as we celebrate Valentine's Day with Love Evolved.  While ARK is under Cupid's spell, go fishing for love and gain a chance at new skins, items, and five new chibi pets to collect!",
            },
            {
                image: ["./images/Events/EggcellentAdventure300.png", "./images/Events/EggcellentAdventure600.png", "./images/Events/EggcellentAdventure1000.png", "./images/Events/EggcellentAdventure.png"],
                title: "ARK: Eggcellent Adventure",
                date: "March 31st - April 14th",
                description : "Follow the trails of wild Bunny Dodo's and Bunny Oviraptor's to gather Bunny Eggs for special event loot. Place down Bunny Eggs to paint on them, or use them in a Crafting Pot to craft special holiday-themed cosmetics including 5 new chibi's and a full-body bunny suit costume!",
            },
            {
                image: ["./images/Events/SummerBash300.png", "./images/Events/SummerBash600.png", "./images/Events/SummerBash1000.png", "./images/Events/SummerBash.png"],
                title: "ARK: Summer Bash",
                date: "June 30th - July 21st",
                description : "Get ready to soak in some sun and have some fun with a community-favorite ARK event. Relax by the beach with your tribemates or go on the hunt for newly released chibi pets! However you choose to spend your summer in ARK, Summer Bash is bound to cook up a lot of entertainment.",
            },
            {
                image: ["./images/Events/FearEvolved300.png", "./images/Events/FearEvolved600.png", "./images/Events/FearEvolved1000.png", "./images/Events/FearEvolved.png"],
                title: "ARK: Fear Evolved",
                date: "October 26th - November 9th",
                description : "From October 26th to November 9th, ARK will be teeming with spook-tackular new chibis making their ARK debut, cutting edge fashion, and eerie event creatures all resplendent in moonlit pumpkin patches and Hallow's Eve festivities!",
            },
            {
                image: ["./images/Events/ExtraLife300.png", "./images/Events/ExtraLife600.png", "./images/Events/ExtraLife1000.png", "./images/Events/ExtraLife.png"],
                title: "ARK: Extra Life",
                date: "November 6th - November 7th",
                description : "We are going live from our Seattle Studio to bring 24 hours of entertainment, giveaways, Collector’s Edition boxes, game keys, and much more! You don't want to miss out because we will be sharing juicy ARK details and teasers.",
            },
            {
                image: ["./images/Events/TurkeyTrial300.png", "./images/Events/TurkeyTrial600.png", "./images/Events/TurkeyTrial1000.png", "./images/Events/TurkeyTrial.png"],
                title: "ARK: Turkey Trial",
                date: "November 23rd - December 7th",
                description : "By harvesting Super Turkey Wishbones from these ruthless, genetically-modified creatures, you can craft your very own fashionable Turkey Costume, Ugly Sweater skins, or choose to summon the devastating DodoRex creature to do your bidding for a limited period of time.",
            },
            {
                image: ["./images/Events/WinterWonderland300.png", "./images/Events/WinterWonderland600.png", "./images/Events/WinterWonderland1000.png", "./images/Events/WinterWonderland.png"],
                title: "ARK: Winter Wonderland",
                date: "December 14th - January 6th",
                description : "RaptorClaus will be sailing across the star-filled night sky in his sleigh, dropping off presents filled with high-end loot as well as Mistletoe, and Coal for those naughty Survivors.  You'll be able to catch RaptorClaus flying across the skies at midnight (game time) on all maps.",
            },
            ];

            for (let i = 0; i < cardData.length; i++) {
                const card = document.createElement("div");
                card.classList.add("card");

                const cardContainer = document.createElement("div");
                cardContainer.classList.add("card_container");

                const picture = document.createElement("picture");

                const source1 = document.createElement("source");
                source1.type = "image/png";
                source1.media = "(max-width: 800px)";
                source1.srcset = cardData[i].image[0];

                const source2 = document.createElement("source");
                source2.type = "image/png";
                source2.media = "(min-width: 800px) and (max-width: 1200px)";
                source2.srcset = cardData[i].image[1];

                const source3 = document.createElement("source");
                source3.type = "image/png";
                source3.media = "(min-width: 1200px) and (max-width: 1799px)";
                source3.srcset = cardData[i].image[2];

                const image = document.createElement("img");
                image.src = cardData[i].image[3];
                image.alt = cardData[i].title;

                picture.appendChild(source1);
                picture.appendChild(source2);
                picture.appendChild(source3);
                picture.appendChild(image);

                const cardContent = document.createElement("div");
                cardContent.classList.add("card_content");

                const titleContent = document.createElement("h3");
                titleContent.classList.add("text_content");
                titleContent.innerText = cardData[i].title;

                const textContent = document.createElement("p");
                textContent.classList.add("text_content");
                textContent.innerText = cardData[i].description;

                cardContent.appendChild(titleContent);
                cardContent.appendChild(textContent);
                cardContainer.appendChild(picture);
                card.appendChild(cardContainer);
                card.appendChild(cardContent);

                cards.appendChild(card);
            }

            events.appendChild(cards);
            document.body.appendChild(events);
        </script>

    <?php include './Pages/footer.php' ?>

</body>
</html>