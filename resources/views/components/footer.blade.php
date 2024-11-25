<style>
    #Footer {
        background: linear-gradient(to top,
                rgb(75, 116, 34) 5%,
                rgb(53, 73, 31) 55%,
                #1e1e1e);
    }
</style>
<footer id="Footer" class="text-white">
    <div class="mx-auto w-full max-w-screen-xl px-8 py-5 xl:py-5">
        <div class="xl:flex xl:justify-between">
            <!-- Grid Container -->
            <div class="grid grid-cols-2 gap-5 xl:grid-cols-3 xl:gap-72 items-start">
                <!-- Logo -->
                <div class="flex justify-start col-span-2 xl:col-span-1">
                    <a href="#">
                        <img src="{{ asset('storage/logo/logo.png') }}" alt="Logo"
                            class="object-contain h-[60px] w-[60px] xl:h-[80px] xl:w-[80px]" />
                    </a>
                </div>
                <!-- Created By -->
                <div>
                    <h2 class="mb-1 xl:mb-4 text-sm font-semibold xl:font-bold uppercase">Created By</h2>
                    <ul class="text-gray-400 font-sm">
                        <li class="mb-0 xl:mb-2">
                            <a href="https://www.instagram.com/mhmmd.frgii/?hl=id" target="_blank"
                                class="hover:underline">
                                <span class="uppercase font-normal text-sm xl:font-inter">Firgi</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/satria_kunn/?hl=id" target="_blank"
                                class="hover:underline">
                                <span class="uppercase font-normal text-sm xl:font-inter">Satria</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div>
                    <h2 class="mb-1 xl:mb-4 text-sm font-semibold xl:font-bold uppercase">Follow Us</h2>
                    <ul class="text-gray-400 font-sm">
                        <li class="mb-0 xl:mb-2">
                            <a href="https://www.instagram.com/xii.erpeel_/?hl=id" class="hover:underline"
                                target="_blank">
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@smkn1lumajangtv797" class="hover:underline"
                                target="_blank">
                                Youtube
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <hr class="my-2 border-gray-200 dark:border-gray-700 xl:my-5" />
        <div class="flex justify-center mt-4">
            <p class="text-[0.5rem] xl:text-[0.7rem] opacity-70">
                © {{ date('Y') }} Kelas XII RPL | Di Kelola Oleh Siswa RPL
            </p>
        </div>
    </div>
</footer>
