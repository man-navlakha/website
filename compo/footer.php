
<div class="bg-gradient-to-b from-white to-blue-100 p-4 bottom-0 md:mb-6">
    <footer class="-mt-20 p-10 bg-white shadow-lg rounded-xl">
        <div class="my-6 flex justify-center border-b border-gray-300">
            <img src="<?php echo $logo; ?>" alt="Brand Dilation" class="w-24 h-24 my-3 object-contain" />
        </div>
       <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
    <?php foreach ($footerMenus as $category => $items): ?>
        <div>
            <h5 class="text-lg font-semibold"><?= htmlspecialchars($category) ?></h5>
            <?php if ($category !== 'Social Media Links'): ?>
                <ul class="mt-2 space-y-1">
                    <?php foreach ($items as $item): ?>
                        <li><a href="<?= htmlspecialchars($item['url']) ?>" class="text-gray-600 hover:underline">
                            <?= htmlspecialchars($item['text']) ?>
                        </a></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <ul class="mt-2 flex space-x-4">
                    <?php foreach ($items as $item): ?>
                        <li><a href="#"><img src="<?= htmlspecialchars($item['url']) ?>" alt="<?= htmlspecialchars($item['text']) ?>" class="h-6 w-6" /></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>


</div>
</footer>
<div class=" mt-10 pt-5 mb-16 text-center text-gray-500">
    <p>&copy; <?php echo date("Y"); ?> <?php  echo $site; ?>.  All rights reserved - Powered by Man Navlakha</p>
</div>
      </div>

</html>