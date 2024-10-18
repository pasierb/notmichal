<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Products</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="https://chromewebstore.google.com/detail/purposely/facckbkggkelmjcbilhoemegpcnnaake?utm_source=notmichal&utm_medium=referral"
                                    target="_blank"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">Purposely.so</a>
                            </li>
                            <li>
                                <a href="https://getlaunchsoon.com/?utm_source=notmichal&utm_medium=referral"
                                    target="_blank"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">Launch Soon</a>
                            </li>
                            <li>
                                <a href="https://firstwifimoney.com/?utm_source=notmichal&utm_medium=referral"
                                    target="_blank"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">First WiFi Money</a>
                            </li>
                        </ul>
                    </div>
                    <!--
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">Documentation</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Guides</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">API
                                    Status</a>
                            </li>
                        </ul>
                    </div>
                    -->
                </div>
                <!--
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
                -->
            </div>
            <div class="mt-10 xl:mt-0">
                <h3 class="text-sm font-semibold leading-6 text-gray-900">Subscribe to my newsletter</h3>
                <p class="mt-2 text-sm leading-6 text-gray-600">
                    Weekly<sup>*</sup> dose of thoughts, ideas, and dad jokes, sent straight to your inbox.
                </p>
                <p class="mt-2 text-xs leading-6 text-gray-600">
                    <sup>*</sup>unless you unsubscribe, then you're on your own
                </p>
                <iframe src="https://notmichal.substack.com/embed" width="320" height="150"
                    style="background:white;" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div
            class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
            <div class="flex space-x-6 md:order-2">
                <a href="{{ config('app.social_media.twitter') }}" class="text-gray-400 hover:text-gray-500"
                    target="_blank">
                    <span class="sr-only">X</span>
                    <x-fab-x-twitter class="h-6 w-6" />
                </a>
                <a href="{{ config('app.social_media.youtube') }}" class="text-gray-400 hover:text-gray-500"
                    target="_blank">
                    <span class="sr-only">YouTube</span>
                    <x-fab-youtube class="h-6 w-6" />
                </a>
                <a href="{{ config('app.social_media.linkedin') }}" class="text-gray-400 hover:text-gray-500"
                    target="_blank">
                    <span class="sr-only">LinkedIn</span>
                    <x-fab-linkedin class="h-6 w-6" />
                </a>
            </div>
            <p class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0">&copy; 2024 Michal Pasierbski. All
                rights reserved. (Whatever that means)</p>
        </div>
    </div>
</footer>
