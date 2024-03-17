<?php

/**
 * Template name: Destination
 */
get_header();
?>
<section class="bg-[#F0F0F4]">
    <div class="w-[1200px] mx-auto">
        <div class="py-10 text-[17px] space-y-3 w-2/3 mx-auto">
            <h3 class="uppercase font-bold text-xl text-center"><span>The north</span></h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore autem quis blanditiis minima error placeat cumque ipsum vitae ab? Assumenda aut, quia nobis illo quos maxime sequi quaerat amet doloremque.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, delectus atque fuga quas porro a minima et exercitationem reprehenderit ex dolore sint eum? Nobis earum similique, aliquam repellendus numquam nihil.
                Dolores eaque eligendi quidem quibusdam reprehenderit! Quod odio laborum dolores repellat doloremque officiis fugiat est facilis amet earum? Quaerat voluptatibus placeat ratione, fugit mollitia quae praesentium? Vitae accusamus cum dolores!
                Inventore ratione quisquam repellat voluptatum harum, minus dolores numquam ad asperiores sunt veniam saepe et culpa eveniet cum odit exercitationem nam aspernatur rerum delectus ipsum? Pariatur libero fugit ipsa reprehenderit.
            </p>

        </div>
    </div>
</section>
<section class="bg-[#F0F0F4] py-10">
    <!-- <div class="w-[1200px] mx-auto"> -->
    <h3 class="uppercase font-bold text-xl text-center"><span>Travel news</span></h3>
    <div class="w-full mt-4">
        <img src="https://saffrontravel.net/wp-content/uploads/2023/07/HOMEPAGE-2.gif" alt="" class="w-full">
    </div>
    <!-- </div> -->
</section>
<section class="bg-[#F0F0F4] py-10">
    <div class="w-[1200px] mx-auto">
        <div class="flex -mx-4">
            <div class="w-1/4 px-4">
                <div class="space-y-3">
                    <h3 class="uppercase p-4 text-xl font-bold text-center">HaNoi</h3>
                    <div><img src="https://www.tsttourist.com/vnt_upload/news/03_2024/thumbs/(575x382)__78db8f79ed9d41c3188c.jpg" alt="Shoes" /></div>
                </div>
            </div>
            <div class="w-1/4 px-4">
                <div class="space-y-3">
                    <h3 class="uppercase p-4 text-xl font-bold text-center">Ha Long Bay</h3>
                    <div><img src="https://www.tsttourist.com/vnt_upload/news/03_2024/thumbs/(575x382)__78db8f79ed9d41c3188c.jpg" alt="Shoes" /></div>
                </div>
            </div>
            <div class="w-1/4 px-4">
                <div class="space-y-3">
                    <h3 class="uppercase p-4 text-xl font-bold text-center">Ninh Binh</h3>
                    <div><img src="https://www.tsttourist.com/vnt_upload/news/03_2024/thumbs/(575x382)__78db8f79ed9d41c3188c.jpg" alt="Shoes" /></div>
                </div>
            </div>
            <div class="w-1/4 px-4">
                <div class="space-y-3">
                    <h3 class="uppercase p-4 text-xl font-bold text-center">Sapa</h3>
                    <div><img src="https://www.tsttourist.com/vnt_upload/news/03_2024/thumbs/(575x382)__78db8f79ed9d41c3188c.jpg" alt="Shoes" /></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="bg-[#F0F0F4] py-10">
    <div class="w-[1200px] mx-auto">
        <h3 class="uppercase font-bold text-xl text-center"><span>Package tour</span></h3>
        <div class="w-full mt-6">
            <div class="flex -mx-4">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="w-1/4 px-4">
                        <div class="flex flex-col bg-white">
                            <div class="overflow-hidden">
                                <img class="hover:scale-125 transition-all transition-delay-300" src="https://saffrontravel.net/wp-content/uploads/2023/04/Vietnam-Voyage-VCT01.png" alt="Shoes" />
                            </div>
                            <div class="py-4 px-6 ">
                                <div class="flex-col flex items-center space-y-3">
                                    <div class="uppercase text-lg text-semibold text-center">Vietnam voyage</div>
                                    <div class="flex items-center text-[90%]">
                                        <ion-icon name="calendar-outline"></ion-icon>
                                        <span class="ml-2">10 days 9 nights</span>
                                    </div>
                                    <div class="text-[90%] text-center">
                                        <ion-icon name="navigate-outline" class="text-lg"></ion-icon> Ha Noi - Ha Long - Hue - Hoi An - Da Nang - Ho Chi Minh - Mekong Delta
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <button class="btn w-full rounded-none bg-[#f36f21] text-white uppercase font-bold">Book now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
