





<div id="background" class="relative w-full">
        <div class="absolute w-full h-[300px] bg-[linear-gradient(0deg,#4EB6F5_0%,#5B8CE9_100%)] -z-10"></div>
    </div>
    <section id="Content" class="w-full max-w-[1280px] mx-auto px-[52px] mt-16 mb-[100px]">
        <div class="flex flex-col gap-16">
            <div class="flex flex-col items-center gap-1">
                <p class="font-bold text-[32px] leading-[48px] capitalize text-white">Booking Workshop</p>
                <div class="flex items-center gap-2 text-white">
                    <a class="last:font-semibold">Homepage</a>
                    <span>></span>
                    <a class="last:font-semibold">Workshop Details</a>
                    <span>></span>
                    <a class="last:font-semibold">Booking Workshop</a>
                    <span>></span>
                    <a class="last:font-semibold">Confirmation Payment</a>
                </div>
            </div>
            <main class="flex gap-8">
                <section id="Sidebar" class="group flex flex-col w-[420px] h-fit rounded-3xl p-8 bg-white">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Workshop Details</h2>
                        <div class="thumbnail-container relative h-[240px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                            <img src="{{asset('assets/images/thumbnails/thumbnail1.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="card-detail flex flex-col gap-2">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <img src="{{asset('assets/images/icons/calendar-2.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                                    <span class="font-medium text-aktiv-grey">Tue, 30 May 2024</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <img src="{{asset('assets/images/icons/timer.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                                    <span class="font-medium text-aktiv-grey">09:30 AM - Finish</span>
                                </div>
                            </div>
                            <h3 class="font-Neue-Plak-bold text-xl">Mastering the Art of Public Speaking: Practical Tips and Powerful Techniques</h3>
                        </div>
                    </div>
                    <div id="closes-section" class="accordion flex flex-col gap-8 transition-all duration-300 mt-8 group-has-[:checked]:mt-0 group-has-[:checked]:!h-0 overflow-hidden">
                        <div class="flex flex-col gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Instructor Details</h2>
                            <div class="flex items-center gap-3 rounded-xl border border-[#E6E7EB] p-4">
                                <div class="flex w-16 h-16 shrink-0 rounded-full overflow-hidden bg-[#D9D9D9]">
                                    <img src="{{asset('assets/images/photos/photo3.png')}}" class="w-full h-full object-cover" alt="photo">
                                </div>
                                <div class="flex flex-col gap-[2px] flex-1">
                                    <p class="font-semibold text-lg leading-[27px]">Megamore S Qie</p>
                                    <p class="font-medium text-aktiv-grey">Motivator Intructor</p>
                                </div>
                                <img src="{{asset('assets/images/icons/verify.svg')}}" class="flex w-[62px] h-[62px] shrink-0" alt="icon">
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">This workshop will teach</h2>
                            <div class="flex flex-col gap-6">
                                <div class="flex items-center gap-2">
                                    <img src="{{asset('assets/images/icons/tick-circle.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                                    <p class="font-semibold text-lg leading-[27px]">Crafting Compelling Messages</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{asset('assets/images/icons/tick-circle.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                                    <p class="font-semibold text-lg leading-[27px]">Enhancing Delivery Skills</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{asset('assets/images/icons/tick-circle.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                                    <p class="font-semibold text-lg leading-[27px]">Engaging Your Audience</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{asset('assets/images/icons/tick-circle.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                                    <p class="font-semibold text-lg leading-[27px]">Practical Exercises</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{asset('assets/images/icons/tick-circle.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                                    <p class="font-semibold text-lg leading-[27px]">Personal Development Plan</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Location Details</h2>
                            <div class="flex flex-col gap-4 rounded-xl border border-[#E6E7EB] p-5 pb-[21px]">
                                <div class="flex w-full h-[180px] rounded-xl overflow-hidden">
                                    <img src="{{asset('assets/images/thumbnails/location.png')}}" class="w-full h-full object-cover" alt="location">
                                </div>
                                <div class="flex flex-col gap-3">
                                    <p class="font-medium leading-[25.6px] text-aktiv-grey">101 Cendrawasih Road, Melati, Bandung Wetan, Bandung, West Java, 40116, Indonesia</p>
                                    <a href="#" class="font-semibold text-aktiv-orange">View in Google Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label class="group mt-8">
                        <input type="checkbox" class="hidden">
                        <p class="before:content-['Show_Less'] group-has-[:checked]:before:content-['Show_More'] before:font-semibold before:text-lg before:leading-[27px] flex items-center justify-center gap-[6px]">
                            <img src="{{asset('assets/images/icons/arrow-up.svg')}}" class="w-6 h-6 group-has-[:checked]:rotate-180 transition-all duration-300" alt="icon">
                        </p>
                    </label>
                </section>
                <form id="Form" method="POST" enctype="multipart/form-data" action="{{route('front.payment_store')}}"class="flex flex-col w-[724px] gap-8">
                    <div class="flex flex-col rounded-3xl p-8 gap-8 bg-white">
                        <div class="flex flex-col gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Payments Details</h2>
                            <div class="flex flex-col rounded-xl border border-[#E6E7EB] p-5 gap-4">
                                <div class="flex items-center justify-between">
                                    <p class="font-medium text-aktiv-grey">Quantity</p>
                                    <p class="font-semibold text-lg leading-[27px] text-right">
                                        {{$orderData['quantity']}}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="font-medium text-aktiv-grey">Price</p>
                                    <p class="font-semibold text-lg leading-[27px] text-right">
                                        Rp {{number_format($orderData['sub_total_amount'], 0, ',', '.')}}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="font-medium text-aktiv-grey">PPN 11%</p>
                                    <p class="font-semibold text-lg leading-[27px] text-right">
                                        Rp {{number_format($orderData['total_tax'], 0, ',', '.')}}
                                    </p>
                                </div>
                                <hr class="border-[#E6E7EB]">
                                <div class="flex items-center justify-between">
                                    <p class="font-medium text-aktiv-grey">Rp {{number_format($orderData['total_amount'], 0, ',', '.')}}</p>
                                    <p class="font-semibold text-lg leading-[27px] text-right text-aktiv-red"> Rp319.680</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Your Bank Account</h2>
                            <div class="flex flex-col gap-6">
                                <label class="flex flex-col gap-4">
                                    <p class="font-medium text-aktiv-grey">Select Bank Type</p>
                                    <div class="group input-wrapper flex items-center rounded-xl p-4 gap-2 bg-[#FBFBFB] overflow-hidden">
                                        <img src="{{asset('assets/images/icons/bank.svg')}}" class="w-6 h-6 flex shrink-0 group-focus-within:hidden group-has-[:valid]:hidden" alt="icon">
                                        <img src="{{asset('assets/images/icons/bank-black.svg')}}" class="w-6 h-6 shrink-0 hidden group-focus-within:flex group-has-[:valid]:flex" alt="icon">
                                        <input type="text" name="customer_bank_name" id="bankname" class="appearance-none bg-transparent w-full outline-none text-lg leading-[27px] font-semibold placeholder:font-medium placeholder:text-aktiv-grey" placeholder="What is the name of the bank you use?" required>
                                    </div>
                                </label>
                                <label class="flex flex-col gap-4">
                                    <p class="font-medium text-aktiv-grey">Full Name</p>
                                    <div class="group input-wrapper flex items-center rounded-xl p-4 gap-2 bg-[#FBFBFB] overflow-hidden">
                                        <img src="{{asset('assets/images/icons/profile-circle.svg')}}" class="w-6 h-6 flex shrink-0 group-focus-within:hidden group-has-[:valid]:hidden" alt="icon">
                                        <img src="{{asset('assets/images/icons/profile-circle-black.svg')}}" class="w-6 h-6 shrink-0 hidden group-focus-within:flex group-has-[:valid]:flex" alt="icon">
                                        <input type="text" name="customer_bank_account" id="fullname" class="appearance-none bg-transparent w-full outline-none text-lg leading-[27px] font-semibold placeholder:font-medium placeholder:text-aktiv-grey" placeholder="Under whose name is this bank account?" required>
                                    </div>
                                </label>
                                <label class="flex flex-col gap-4">
                                    <p class="font-medium text-aktiv-grey">Bank account number</p>
                                    <div class="group input-wrapper flex items-center rounded-xl p-4 gap-2 bg-[#FBFBFB] overflow-hidden">
                                        <img src="{{asset('assets/images/icons/card-edit.svg')}}" class="w-6 h-6 flex shrink-0 group-focus-within:hidden group-has-[:valid]:hidden" alt="icon">
                                        <img src="{{asset('assets/images/icons/card-edit-black.svg')}}" class="w-6 h-6 shrink-0 hidden group-focus-within:flex group-has-[:valid]:flex" alt="icon">
                                        <input type="text" name="customer_bank_number" id="banknumber" class="appearance-none bg-transparent w-full outline-none text-lg leading-[27px] font-semibold placeholder:font-medium placeholder:text-aktiv-grey" placeholder="What is the bank account number?" required>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Transfer Details</h2>
                            <div class="flex flex-col rounded-xl border border-[#E6E7EB]">
                                <p class="text-center py-7 px-8 w-full font-semibold text-lg leading-[27px]">Transfer Bank</p>
                                <hr class="border-[#E6E7EB]">
                                <div class="flex flex-col py-5 px-8 gap-8">
                                    <div class="flex items-center justify-between gap-8">
                                        <div class="flex w-[78px] h-[53px] shrink-0 overflow-hidden">
                                            <img src="{{asset('assets/images/logos/bca.svg')}}" class="object-contain" alt="bank logo">
                                        </div>
                                        <div class="flex flex-col gap-[2px] w-full">
                                            <p class="font-medium text-aktiv-grey">BCA Activ Bank</p>
                                            <p class="font-semibold text-lg leading-[27px]">1935 0009 1200</p>
                                        </div>
                                        <button type="button" class="align-middle font-semibold text-lg leading-[27px] text-aktiv-orange">Copy</button>
                                    </div>
                                    <div class="flex items-center justify-between gap-8">
                                        <div class="flex w-[78px] h-[53px] shrink-0 overflow-hidden">
                                            <img src="{{asset('assets/images/logos/bni.svg')}}" class="object-contain" alt="bank logo">
                                        </div>
                                        <div class="flex flex-col gap-[2px] w-full">
                                            <p class="font-medium text-aktiv-grey">BNI Activ Bank</p>
                                            <p class="font-semibold text-lg leading-[27px]">1200 1935 0009</p>
                                        </div>
                                        <button type="button" class="align-middle font-semibold text-lg leading-[27px] text-aktiv-orange">Copy</button>
                                    </div>
                                    <div class="flex items-center justify-between gap-8">
                                        <div class="flex w-[78px] h-[53px] shrink-0 overflow-hidden">
                                            <img src="{{asset('assets/images/logos/bri.svg')}}" class="object-contain" alt="bank logo">
                                        </div>
                                        <div class="flex flex-col gap-[2px] w-full">
                                            <p class="font-medium text-aktiv-grey">BRI Activ Bank</p>
                                            <p class="font-semibold text-lg leading-[27px]">0009 1200 1935</p>
                                        </div>
                                        <button type="button" class="align-middle font-semibold text-lg leading-[27px] text-aktiv-orange">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Upload Proof of payment</h2>
                            <label class="flex flex-col gap-4">
                                <div class="group flex items-center rounded-xl p-4 gap-2 bg-[#FBFBFB] overflow-hidden">
                                    <div class="flex items-center w-full gap-2 text-aktiv-grey group-has-[:valid]:text-aktiv-black transition-all duration-300">
                                        <img src="{{asset('assets/images/icons/gallery.svg')}}" class="w-6 h-6 flex shrink-0 group-focus-within:hidden group-has-[:valid]:hidden" alt="icon">
                                        <img src="{{asset('assets/images/icons/gallery-black.svg')}}" class="w-6 h-6 shrink-0 hidden group-focus-within:flex group-has-[:valid]:flex" alt="icon">
                                        <p id="Upload-btn" class="font-medium text-lg leading-[27px] group-has-[:valid]:font-semibold">Upload file</p>   
                                    </div>
                                    <p class="font-semibold text-lg leading-[27px] text-aktiv-black text-nowrap">Browse file</p>        
                                    <input type="file" name="proof" id="Proof" class="peer absolute -z-10 opacity-0 w-[10px]" required>
                                </div>
                            </label>
                        </div>
                        <button type="submit" class="w-full rounded-xl h-16 px-6 text-center bg-aktiv-orange font-semibold text-lg leading-[27px] text-white">Continue to Checkout</button>
                            <div class="flex flex-col items-center w-full min-h-screen">
        <div class="flex flex-col max-w-[856px] rounded-6 p-8 gap-8 bg-white my-auto">
            <div class="flex flex-col gap-6">
                <img src="assets/images/icons/receipt-2.svg" class="w-[72px] h-[72px] flex shrink-0 mx-auto" alt="icon">
                <h1 class="font-bold text-[32px] leading-[48px] text-center">Booking Succes, well done 🙌🏻</h1>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex justify-between w-full rounded-full border border-[#E6E7EB] p-3 pl-8">
                    <div class="flex items-center gap-2">
                        <img src="assets/images/icons/receipt.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                        <p class="font-medium text-lg leading-[27px] text-aktiv-grey">Booking ID:</p>
                        <p class="font-bold text-lg leading-[27px]">H4L04CTIVE</p>
                    </div>
                    <a href="e-ticket.html" class="flex items-center shrink-0 gap-2 rounded-full py-4 px-8 bg-aktiv-orange">
                        <img src="assets/images/icons/search-normal.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                        <span class="font-semibold text-lg leading-[27px] text-white text-nowrap">View My Booking</span>
                    </a>
                </div>
                <p class="font-medium leading-[25.6px] text-center text-aktiv-grey">Your workshop booking is confirmed. We will check the payment and  send the receipt to your email address</p>
            </div>
        </div>
        <a href="index.html" class="font-semibold mb-[52px] mt-4">Back to Homepage</a>
    </div>
                    </div>
                </form>
            </main>
        </div>
    </section>

    <script src="js/accodion.js"></script>
    <script src="js/upload-file.js"></script>