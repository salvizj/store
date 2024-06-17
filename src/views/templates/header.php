<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="logo">
            <a href="/store-php/<?php echo $selected_language; ?>"
                class="text-xl font-bold"><?php echo lang('website_name'); ?></a>
        </div>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/store-php/en" class="hover:text-gray-300">EN</a></li>
                <li><a href="/store-php/lv" class="hover:text-gray-300">LV</a></li>
            </ul>
            <ul class="flex space-x-4">
                <li><a href="/store-php/<?php echo $selected_language; ?>"
                        class="hover:text-gray-300"><?php echo lang('home'); ?></a></li>
            </ul>
        </nav>
    </div>
</header>