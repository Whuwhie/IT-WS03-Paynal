<?php
$title = "Son of a Builder";
$pagetitle = "Savory Soul";
$author = "John Louie Dadiz (GPT_67)";

$body_start1 = "Music, to me, has never been just background noise or a filler for silence. It’s the pulse beneath my skin, the echo of emotions I struggle to name. When I first heard “Kanibalismo” by fiterkarma, it didn’t just play—it devoured me. The haunting rhythm felt like footsteps in a dark alley, each beat a reminder of something primal and unresolved. The lyrics, raw and unapologetic, didn’t ask for permission to enter my thoughts—they barged in, rearranged the furniture, and left me staring at the walls of my own vulnerability.";
$body_start2 = "It’s not just the song’s intensity that lingers—it’s the way it mirrors the chaos we often suppress. The distorted guitars, the guttural vocals, the poetic violence of its verses—they all speak to a part of me that craves honesty, even when it’s uncomfortable. “Kanibalismo” is not a song you listen to casually; it’s a confrontation, a mirror held up to the soul. It reminds me that music can be a battlefield, a sanctuary, and a confession booth all at once.";
$body_start3 = "I’ve found myself returning to it during moments of emotional disarray—not to find answers, but to feel understood. It’s the kind of track that doesn’t soothe; it scars. And in those scars, I find stories worth telling. Music like this doesn’t just entertain—it excavates. It digs into the marrow of who we are and dares us to look.";

$body_mid1 = "Cinema has always been my escape and my reckoning. “The Sadness” isn’t just a horror film—it’s a visceral descent into the darkest corridors of human nature. Watching it felt like being dragged through a nightmare with my eyes wide open. Its unapologetic visuals and relentless pacing don’t give you time to breathe, and that’s precisely its brilliance. It doesn’t want you to be comfortable—it wants you to confront.";
$body_mid2 = "The film’s audacity lies not in its gore, but in its emotional brutality. It strips away the veneer of civility and exposes the raw, unfiltered instincts that lurk beneath. Every frame is a dare, every scene a challenge to our moral compass. It’s not for the faint of heart, but for those willing to explore the edges of storytelling. “The Sadness” doesn’t just depict horror—it embodies it, making you question what separates us from the chaos we fear.";
$body_mid3 = "I admire its refusal to dilute its message. In a world where many films play it safe, this one leaps into the abyss. It’s a reminder that art isn’t always meant to comfort—it’s meant to provoke, to disturb, to awaken. And in its madness, I found clarity: that sometimes, the most terrifying stories are the ones closest to reality.";

$body_middle1 = "Food, in our home, is more than sustenance—it’s storytelling. “Dinuguan ni Papa” isn’t just a dish; it’s a legacy simmered in garlic, vinegar, and love. The aroma alone carries decades of memories—Sunday lunches, rainy afternoons, quiet celebrations. Each bite is a chapter in our family’s history, seasoned with laughter and the occasional tear.";
$body_middle2 = "Papa’s version is rich, unapologetically savory, and always made with intention. He doesn’t follow a recipe—he follows instinct. A pinch of salt here, a splash of vinegar there, and always that knowing smile as he stirs the pot. Watching him cook is like witnessing a ritual, a dance passed down through generations. It’s not just about flavor—it’s about connection.";
$body_middle3 = "I remember the first time I tried to recreate it. I had the ingredients, the steps, even Papa’s advice—but something was missing. It wasn’t until I understood that cooking isn’t just technical—it’s emotional—that I began to grasp its essence. Dinuguan, in our home, is a symbol of resilience, of warmth, of identity. It’s proof that love can be tasted, that heritage can be served on a plate.";

$body_end1 = "Our home, the Dadiz sanctuary, is more than walls and a roof—it’s the heartbeat of our shared existence. It’s where stories are born, where laughter echoes through hallways, and where silence is never lonely. The scent of old books, the creak of familiar floorboards, the hum of late-night conversations—all of it forms a tapestry of comfort and belonging.";
$body_end2 = "It’s the place where I learned to be myself, where vulnerability wasn’t weakness but welcome. The living room has witnessed debates, confessions, spontaneous dance-offs, and quiet moments of reflection. The kitchen is a stage for culinary experiments and midnight snacks. Every corner holds a memory, every object a story.";
$body_end3 = "Even when life pulls me in different directions, the thought of home grounds me. It’s my compass, my anchor, my refuge. The Dadlz home isn’t just a physical space—it’s a feeling. A reminder that no matter how far I wander, there’s a place where I am known, loved, and accepted without condition.";
$body_end4 = "And that, I believe, is the soul’s true nourishment—not just music, film, or food, but the people and places that make us feel whole.";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .font-title {
            font-family: Georgia, serif;
        }
        .font-body {
            font-family: "Futura Std", "Futura", Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-[#f6f1e8] text-[#7a1c1c] font-body">

<header class="text-center pt-10 pb-20">
    <h1 class="font-title italic text-4xl md:text-5xl lg:text-6xl tracking-tighter">
        <?= $title ?>
    </h1>
</header>

<main class="max-w-7xl mx-auto px-6 pb-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <section>
            <h2 class="font-title italic text-3xl mb-1 tracking-tighter">
                <?= $pagetitle ?>
            </h2>
            <p class="italic mb-8">
                <?= $author ?>
            </p>

            <?php
            $paragraphs = [
                $body_start1, $body_start2, $body_start3,
                $body_mid1, $body_mid2, $body_mid3,
                $body_middle1, $body_middle2, $body_middle3,
                $body_end1, $body_end2, $body_end3, $body_end4
            ];

            foreach ($paragraphs as $p) {
                echo '<p class="mb-6 leading-relaxed">' . $p . '</p>';
            }
            ?>
        </section>
        
        <section class="space-y-10">

            <div>
                <p class="font-title italic text-base ml-10 tracking-tighter">
                    Kanibalismo
                </p>
                <p class="text-sm italic mb-2 ml-10">by fiterkarma</p>
                <img src="/assets/Kanibalismo.png" alt="Kanibalismo"
                     class="max-w-lg w-full mx-auto shadow-md">
            </div>

            <div>
                <p class="font-title italic text-base ml-10 tracking-tighter">
                    The Sadness
                </p>
                <p class="text-sm italic mb-2 ml-10">directed by Rob Jabbaz</p>
                <img src="/assets/The Sadness.png" alt="The Sadness"
                     class="max-w-lg w-full mx-auto ml-10 shadow-md">
            </div>

            <div>
                <p class="font-title italic text-base ml-10 tracking-tighter">
                    Dadiz Home
                </p>
                <p class="text-sm italic mb-2 ml-10">home for me~</p>
                <img src="/assets/Dadiz Home.png" alt="Dadiz Home"
                     class="max-w-lg w-full mx-auto ml-10 shadow-md">
            </div>

            <div>
                <p class="font-title italic text-base ml-10 tracking-tighter">
                    Dinuguan
                </p>
                <p class="text-sm italic mb-2 ml-10">ni Papa</p>
                <img src="/assets/Dinuguan.png" alt="Dinuguan"
                     class="max-w-lg w-full mx-auto ml-10 shadow-md">
            </div>

        </section>

    </div>
</main>
</body>
</html>
