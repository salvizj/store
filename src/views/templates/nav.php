<div class="bg-gray-800 text-white py-4 pointer">
    <div class="container mx-auto flex items-center justify-between">
        <div class="logo">
            <a href="/store-php/" class="text-4xl font-bold"><?php echo lang('website_name'); ?></a>
        </div>
        <nav class="flex items-center">
            <ul class="flex">
                <li>
                    <a href="/store-php/" class="hover:text-gray-300 px-4 py-2 block"><?php echo lang('home'); ?></a>
                </li>
                <li>
                    <a href="/store-php/sign-up"
                        class="hover:text-gray-300 px-4 py-2 block"><?php echo lang('sign_up'); ?></a>
                </li>
                <li>
                    <a href="/store-php/sign-in"
                        class="hover:text-gray-300 px-4 py-2 block"><?php echo lang('sign_in'); ?></a>
                </li>
            </ul>
            <ul class="flex">
                <li>
                    <a class="hover:text-gray-300 px-4 py-2 block" onclick="switchLanguage('en')">EN</a>
                </li>
                <li>
                    <a class="hover:text-gray-300 px-4 py-2 block" onclick="switchLanguage('lv')">LV</a>
                </li>
            </ul>
        </nav>
    </div>
</div>