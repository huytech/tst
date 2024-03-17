<?php

/**
 * Template name: Contact
 */
get_header();
?>
<div class="relative"><img src="https://singhaestate.co.th/assets/images/contact/banner.jpg">
    <div class="absolute bg-[#0006] w-full h-full top-0 flex items-center justify-start">
        <div class="w-[1200px] mx-auto">
            <h1 class="font-bold uppercase text-white text-2xl md:text-4xl px-4 md-px-0">Liên hệ</h1>
        </div>
    </div>
</div>
<section>
    <div class="w-[1200px] mx-auto">
        <div class="flex -mx-3">
            <div class="w-1/2 px-3">
                <div class="py-10">
                    <h3 class="uppercase font-bold text-xl text-center"><span>Yêu cầu hỗ trợ</span></h3>
                    <form action="" class="mt-4">
                        <form action="" class="mt-4"><label class="form-control w-full full">
                                <div class="label"><span class="label-text">Họ tên</span></div><input type="text" class="input input-bordered w-full">
                            </label>
                            <div class="mt-4 flex -mx-4">
                                <div class="w-1/2 px-4">
                                    <div><label class="form-control w-full full">
                                            <div class="label"><span class="label-text">Số điện thoại</span></div><input type="text" class="input input-bordered w-full">
                                        </label></div>
                                </div>
                                <div class="w-1/2 px-4">
                                    <div><label class="form-control w-full full">
                                            <div class="label"><span class="label-text">Địa chỉ email</span></div><input type="text" class="input input-bordered w-full">
                                        </label></div>
                                </div>
                            </div>
                            <div class="mt-4"><label class="form-control w-full full">
                                    <div class="label"><span class="label-text">Tiêu đề</span></div><input type="text" class="input input-bordered w-full">
                                </label></div>
                            <div class="mt-4"><label class="form-control w-full full">
                                    <div class="label"><span class="label-text">Nội dung</span></div><textarea class="textarea textarea-bordered w-full"></textarea>
                                </label></div>
                            <div class="mt-6 flex justify-center"><button class="btn btn-primary bg-[#f36f21] border-[#f36f21] hover:bg-[#f36f21] hover:border-[#f36f21] uppercase text-white"><span>Gửi yêu cầu</span></button></div>
                        </form>
                    </form>
                </div>
            </div>
            <div class="w-1/2 px-3">
                <div class="h-full bg-[#153050] pt-10 text-white">
                    <div class="flex flex-col items-center"><a href="#"><img src="https://www.tsttourist.com/vnt_upload/weblink/Logo_TST_tourist.png" alt="" class="w-40"></a>
                        <div class="mt-4 font-bold uppercase text-base">TSTtourist </div>
                    </div>
                    <div class="flex flex-col mt-4 px-6 space-y-4 divide-y">
                        <div class="flex flex-col">
                            <div class="uppercase font-bold">Địa chỉ</div>
                            <div class="mt-2 text-base">10 Tú Xương, P. Võ Thị Sáu, Q.3, TP.HCM </div>
                        </div>
                        <div class="flex flex-col pt-4">
                            <div class="uppercase font-bold">Email</div>
                            <div class="mt-2 text-base"> info@tsttourist.com</div>
                        </div>
                        <div class="flex flex-col pt-4">
                            <div class="uppercase font-bold">Số điện thoại</div>
                            <div class="mt-2 text-base"> (028) 39328328 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
