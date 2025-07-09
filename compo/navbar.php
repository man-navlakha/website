<!-- Desktop Navbar -->
<nav class="hidden md:flex items-center justify-between px-6 py-4 shadow-sm">
  <!-- Left: Logo -->
  <div class="flex items-center space-x-6">
    <div class="flex items-center space-x-1">
      <img src="<?php echo $logo; ?>" alt="<?php echo $site; ?>" class="w-8 h-8 object-contain" />
      <span class="text-xl font-medium text-gray-700"><?php  echo $site; ?></span>
    </div>
    <!-- Dynamic Nav Links -->
    <ul class="flex items-center space-x-6 text-gray-600 font-medium">
      <?php foreach ($desktopItems as $item): ?>
        <li class="<?= htmlspecialchars($item['css_styles']) ?>" <?= $item['javascript_code'] ? 'onclick="'.htmlspecialchars($item['javascript_code']).'"' : '' ?>>
          <?= $item['svg_code'] ?><?= htmlspecialchars($item['element_name']) ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

    <!-- Right Section -->
    <div class="flex items-center space-x-6">
      <!-- Search -->
      <button class="text-gray-600 hover:text-black">
        <svg  class="h-6 w-6 mb-1" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 20L15.8033 15.8033C15.8033 15.8033 14 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5C18 11.0137 17.9484 11.5153 17.85 12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      </button>

      <!-- Cart -->
      <button class="text-gray-600 hover:text-black">
       <svg class="h-6 w-6 mb-1" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
      </button>

      <!-- Profile -->
      <img src="https://i.pravatar.cc/30" alt="Profile" class="w-8 h-8 rounded-full object-cover" />
    </div>
  </nav>

  <!-- Mobile Navbar -->
  <nav class="flex md:hidden items-center justify-between px-4 py-3 shadow-sm">
    <!-- Left: Brand Dilation Logo -->
    <div class="flex items-center space-x-1">
      <img src="<?php echo $logo; ?>" alt="Brand Dilation" class="w-8 h-8 object-contain" />
      <span class="text-xl font-medium text-gray-700"><?php  echo $site; ?></span>
    </div>

    <!-- Right Section -->
    <div class="flex items-center space-x-6">
      <!-- Search -->
      <button class="text-gray-600 hover:text-black">
        <svg  class="h-6 w-6 mb-1" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 20L15.8033 15.8033C15.8033 15.8033 14 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5C18 11.0137 17.9484 11.5153 17.85 12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      </button>

      <!-- Cart -->
      <button class="text-gray-600 hover:text-black">
       <svg class="h-6 w-6 mb-1" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
      </button>

    </div>
  </nav>

  <!-- Mobile Bottom Navigation -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t shadow md:hidden">
  <div class="flex justify-around py-2 text-xs text-gray-600">
    <?php foreach ($mobileItems as $item): ?>
      <button class="flex flex-col items-center <?= htmlspecialchars($item['css_styles']) ?>" <?= $item['javascript_code'] ? 'onclick="'.htmlspecialchars($item['javascript_code']).'"' : '' ?>>
        <?= $item['svg_code'] ?>
        <span><?= htmlspecialchars($item['element_name']) ?></span>
      </button>
    <?php endforeach; ?>
  </div>
</div>
