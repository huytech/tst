<?php

/**
 * Template name: Blog
 */
get_header();
?>
<section class="bg-[#F0F0F4]">
    <div class="w-[1200px] mx-auto">
        <div class="py-10 text-[17px] space-y-3 w-2/3 mx-auto">
            <h3 class="uppercase font-bold text-xl text-center"><span>Travel tips</span></h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore autem quis blanditiis minima error placeat cumque ipsum vitae ab? Assumenda aut, quia nobis illo quos maxime sequi quaerat amet doloremque.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, delectus atque fuga quas porro a minima et exercitationem reprehenderit ex dolore sint eum? Nobis earum similique, aliquam repellendus numquam nihil.
                Dolores eaque eligendi quidem quibusdam reprehenderit! Quod odio laborum dolores repellat doloremque officiis fugiat est facilis amet earum? Quaerat voluptatibus placeat ratione, fugit mollitia quae praesentium? Vitae accusamus cum dolores!
                Inventore ratione quisquam repellat voluptatum harum, minus dolores numquam ad asperiores sunt veniam saepe et culpa eveniet cum odit exercitationem nam aspernatur rerum delectus ipsum? Pariatur libero fugit ipsa reprehenderit.
            </p>

        </div>
    </div>
</section>
<section class="bg-[#F0F0F4] py-10">
    <div class="w-[1200px] mx-auto">
        <h3 class="uppercase font-bold text-xl text-center"><span>Travel news</span></h3>
        <div class="flex -mx-3 w-full mt-4" id="news">
            <?php for ($i = 1; $i < 10; $i++) : ?>
                <div class="w-1/4 px-3">
                    <div class="card bg-base-100 shadow-xl">
                        <figure><img src="https://www.tsttourist.com/vnt_upload/news/03_2024/thumbs/(575x382)__78db8f79ed9d41c3188c.jpg" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">Bài viết số <?= $i + 1 ?></h2>

                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<section class="bg-[#F0F0F4] py-10">
    <div class="w-[1200px] mx-auto">
        <h3 class="uppercase font-bold text-xl text-center"><span>Travel Suggestion</span></h3>
        <video autoplay="" loop="" muted="" playsinline="" class="mt-3" poster="https://www.jacadatravel.com/wp-content/uploads/2024/01/Homepage-Header-Frame.jpg">
            <source src="https://www.jacadatravel.com/wp-content/uploads/2024/01/Jacada-Homepage-video-global-updated2024.mp4" type="video/mp4">
        </video>
    </div>
</section>
<?php
get_footer();
