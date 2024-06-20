<div class="bg-gray-800 text-white py-4 pointer">
    <div class="container mx-auto flex items-center justify-between">
        <div class="logo">
            <a href="/store-php/" class="text-4xl font-bold"><?php echo lang('website_name'); ?></a>
        </div>
        <nav class="flex items-center">
            <ul class="flex">
                <li>
                    <a href="/store-php/"
                        class="hover:text-gray-300 px-4 py-2 block <?php echo ($_SERVER['REQUEST_URI'] == '/store-php/') ? 'font-bold' : ''; ?>"><?php echo lang('home'); ?></a>
                </li>
                <li>
                    <a href="/store-php/sign-up"
                        class="hover:text-gray-300 px-4 py-2 block <?php echo ($_SERVER['REQUEST_URI'] == '/store-php/sign-up') ? 'font-bold' : ''; ?>"><?php echo lang('sign_up'); ?></a>
                </li>
                <li>
                    <a href="/store-php/sign-in"
                        class="hover:text-gray-300 px-4 py-2 block <?php echo ($_SERVER['REQUEST_URI'] == '/store-php/sign-in') ? 'font-bold' : ''; ?>"><?php echo lang('sign_in'); ?></a>
                </li>
            </ul>
            <div class="relative inline-block text-left">
                <div>
                    <button id="dropdownButton" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 ">
                        <?php echo $selected_language ?>
                    </button>
                </div>

                <div id="dropdownContent"
                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 hidden">
                    <div class="py-1">
                        <a href="?lang=en&redirect=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100
                        <?php echo ($selected_language == 'en') ? 'font-bold' : ''; ?>">EN</a>
                        <a href="?lang=lv&redirect=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 <?php echo ($selected_language == 'lv') ? 'font-bold' : ''; ?>">LV</a>
                    </div>
                </div>
            </div>

        </nav>
    </div>
</div>