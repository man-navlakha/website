<?php
function getWebsiteName($conn) {
    $sql = "SELECT website_name FROM website_settings ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    if ($result && $row = $result->fetch_assoc()) {
        return $row['website_name'];
    }
    return "My Website";
}

 $site=getWebsiteName($conn); 

function getlogo($conn) {
    $sql = "SELECT logo_url FROM website_settings ORDER BY id DESC LIMIT 1";
    $resul1t = $conn->query($sql);
    if ($resul1t && $row = $resul1t->fetch_assoc()) {
        return $row['logo_url'];
    }
    return "http://localhost/website/assets/img/logo.png";
}

$logo = getlogo($conn);

// Fetch navbar items
function getNavbarItems($conn, $type = 'desktop') {
    $stmt = $conn->prepare("SELECT element_name, svg_code, css_styles, javascript_code FROM navbar WHERE element_type = ?");
    $stmt->bind_param("s", $type);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}
function getFooterMenus($conn, $type = 'both') {
    $footerMenus = [];

    $sql = "
        SELECT c.id AS category_id, c.category_name, i.item_text, i.item_url,
               c.display_order AS cat_order, i.display_order AS item_order
        FROM footer_menu_categories c
        JOIN footer_menu_items i ON c.id = i.category_id
        ORDER BY c.display_order, i.display_order
    ";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $footerMenus[$row['category_name']][] = [
                'text' => $row['item_text'],
                'url'  => $row['item_url']
            ];
        }
    }

    return $footerMenus; // ✅ This was missing
}

$footerMenus = getFooterMenus($conn);

$desktopItems = getNavbarItems($conn, 'desktop');
$mobileItems = getNavbarItems($conn, 'mobile');

?>
