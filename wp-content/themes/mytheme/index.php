<?php
get_header();
?>
<main>
    <section>
        <img class="w-full" src="https://saffrontravel.net/wp-content/uploads/2023/07/HOMEPAGE-2.gif" alt="">
    </section>
    <section class="mt-[60px]">
        <div class="w-[1200px] mx-auto">
            <h2 class="text-[45px] text-center">Why book with Jacada?</h2>
            <div class="mt-[3rem]">
                <div class="flex -mx-4">
                    <div class="w-1/3 px-4">
                        <div class="flex flex-col items-center">
                            <div class="max-w-[18rem]">
                                <img src="https://www.jacadatravel.com/wp-content/uploads/fly-images/390823/jacada-personalized-600x600.png" alt="">
                            </div>
                            <h3 class="text-2xl">Personalised design</h3>
                            <div class="mt-3 text-center">
                                We’ll plan your trip around your specific interests, tastes and preferences, providing helpful tips and honest advice based on first-hand knowledge of the destination.
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 px-4">
                        <div class="flex flex-col items-center">
                            <div class="max-w-[18rem]">
                                <img src="https://www.jacadatravel.com/wp-content/uploads/fly-images/390824/jacada-authentic-experiences-600x600.png" alt="">
                            </div>
                            <h3 class="text-2xl">Authentic experiences</h3>
                            <div class="mt-3 text-center">
                                Our expert guides and brilliant travel concierges are hand-picked to provide a genuine experience, bringing your destination to life with care and passion.

                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 px-4">
                        <div class="flex flex-col items-center">
                            <div class="max-w-[18rem]">
                                <img src="https://www.jacadatravel.com/wp-content/uploads/fly-images/390825/jacada-responsible-travel-600x600.png" alt="">
                            </div>
                            <h3 class="text-2xl">Responsible travel</h3>
                            <div class="mt-3 text-center">

                                Our luxury trips are designed with responsible travel principles that prioritise travel experiences that are both good for you and good for the planet.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-[60px]">
        <div class="w-[1200px] mx-auto">
            <h2 class="text-[32px] font-bold text-[#313033] text-center">Tại sao chọn chúng tôi?</h2>
            <div class="mt-6">
                <div class="flex -mx-4">
                    <div class="w-1/4 px-4">
                        <div class="flex flex-col items-center">
                            <div>
                                <img src="https://saffrontravel.net/wp-content/uploads/2023/03/17.png" alt="">
                            </div>
                            <h3 class="font-semibold text-[#313033] text-[1.375rem]">Reliable</h3>
                        </div>
                    </div>
                    <div class="w-1/4 px-4">
                        <div class="flex flex-col items-center">
                            <div>
                                <img src="https://saffrontravel.net/wp-content/uploads/2023/03/choose2.png" alt="">
                            </div>
                            <h3 class="font-semibold text-[#313033] text-[1.375rem]">Highly Experienced</h3>
                        </div>
                    </div>
                    <div class="w-1/4 px-4">
                        <div class="flex flex-col items-center">
                            <div>
                                <img src="https://saffrontravel.net/wp-content/uploads/2023/03/choose3.png" alt="">
                            </div>
                            <h3 class="font-semibold text-[#313033] text-[1.375rem]">Innovative Ideas</h3>
                        </div>
                    </div>
                    <div class="w-1/4 px-4">
                        <div class="flex flex-col items-center">
                            <div>
                                <img src="https://saffrontravel.net/wp-content/uploads/2023/03/choose4.png" alt="">
                            </div>
                            <h3 class="font-semibold text-[#313033] text-[1.375rem]">Responsive & Personalized</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-[60px]">
        <div class="w-[1200px] mx-auto">
            <h2 class="text-[32px] font-bold text-[#313033] text-center">Giải thưởng</h2>
            <div class="mt-6">
                <div class="flex -mx-4 w-full" id="award">
                    <?php for ($i = 1; $i < 6; $i++) : ?>
                        <div class="w-1/4 px-4">
                            <div class="text-center">
                                <div class="w-[150px] mx-auto">
                                    <img src="https://saffrontravel.net/wp-content/uploads/2023/03/18.png" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-[60px]">
        <div class="w-[1200px] mx-auto">
            <h2 class="text-[32px] font-bold text-[#313033] text-center">Đối tác</h2>
            <div class="mt-6">
                <div class="flex -mx-4 w-full" id="award">
                    <?php for ($i = 1; $i < 6; $i++) : ?>
                        <div class="w-1/4 px-4">
                            <div class="text-center">
                                <div class="w-[150px] mx-auto">
                                    <img src="https://saffrontravel.net/wp-content/uploads/2023/03/18.png" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-[60px]">
        <div class="w-[1200px] mx-auto">
            <video autoplay="" loop="" muted="" playsinline="" class="hero-bg-video" poster="https://www.jacadatravel.com/wp-content/uploads/2024/01/Homepage-Header-Frame.jpg">
                <source src="https://www.jacadatravel.com/wp-content/uploads/2024/01/Jacada-Homepage-video-global-updated2024.mp4" type="video/mp4">
            </video>
        </div>
    </section>
</main>
<?php
get_footer();
