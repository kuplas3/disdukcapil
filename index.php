<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
    echo "The requested URL/badpage was not found on this server";
}

if (isset($_GET['products'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['products']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $BRANDS ?>

* GANTI URL PATH DENGAN INI
<?php echo $urlPath ?>

* SAMA GANTI REDIRECT LOGIN/REGISTER

*/

?>
<!-- Script Landing Page -->

<!doctype html>
    <html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is Squarespace. --><!-- snail-poodle-h3jd -->
<base href="">
<meta charset="utf-8">
<title><?php echo $BRANDS ?>: Link Alternatif Resmi Slot88 Hanya Tersedia Disini !</title>

<link rel="amphtml" href="https://kontolkuda.pages.dev/disdukcapil/">
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model">
<link rel="icon" type="image/x-icon" href="https://ik.imagekit.io/assets168/Gado2/shopee-icon-png.png?updatedAt=1707618456834">
<link rel="canonical" href="https://pkk.banjarkab.go.id/wp-content/themes/?products=<?php echo $BRANDS ?>">
<meta property="og:site_name" content="<?php echo $BRANDS ?>">
<meta property="og:title" content="<?php echo $BRANDS ?>: Link Alternatif Resmi Slot88 Hanya Tersedia Disini !">
<meta property="og:url" content="https://pkk.banjarkab.go.id/wp-content/themes/?products=<?php echo $BRANDS ?>">
<meta property="og:type" content="product">
<meta property="og:description" content="<?php echo $BRANDS ?> merupakan tempat yang tepat untuk menemukan link alternatif resmi Slot88. Hanya di sini Anda dapat menemukan akses terjamin ke permainan slot terbaik. Nikmati pengalaman bermain yang tak tertandingi dengan beragam pilihan game slot yang menarik. Segera kunjungi <?php echo $BRANDS ?> untuk akses eksklusif ke permainan Slot88 yang menghibur dan menguntungkan!">
<meta property="og:image" 
content="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=1500w">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="800">
<meta property="product:price:amount" content="30.000,00">
<meta property="product:price:currency" content="IDR">
<meta property="product:availability" content="instock">
<meta itemprop="name" content="<?php echo $BRANDS ?>: Link Alternatif Resmi Slot88 Hanya Tersedia Disini !">
<meta itemprop="url" content="https://pkk.banjarkab.go.id/wp-content/themes/?products=<?php echo $BRANDS ?>">
<meta itemprop="description" content="<?php echo $BRANDS ?> merupakan tempat yang tepat untuk menemukan link alternatif resmi Slot88. Hanya di sini Anda dapat menemukan akses terjamin ke permainan slot terbaik. Nikmati pengalaman bermain yang tak tertandingi dengan beragam pilihan game slot yang menarik. Segera kunjungi <?php echo $BRANDS ?> untuk akses eksklusif ke permainan Slot88 yang menghibur dan menguntungkan!">
<meta itemprop="thumbnailUrl" 
content="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=1500w">
<link rel="image_src" 
href="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=1500w">
<meta itemprop="image" 
content="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=1500w">
<meta name="google-site-verification" content="9yx-XmDUDWVSzsfVo8kRyycDw7JkDGQjWlxhWfyuONg" />
<meta name="twitter:title" content="<?php echo $BRANDS ?>: Link Alternatif Resmi Slot88 Hanya Tersedia Disini !">
<meta name="twitter:image" 
content="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=1500w">
<meta name="twitter:url" content="https://pkk.banjarkab.go.id/wp-content/themes/?products=<?php echo $BRANDS ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="<?php echo $BRANDS ?> merupakan tempat yang tepat untuk menemukan link alternatif resmi Slot88. Hanya di sini Anda dapat menemukan akses terjamin ke permainan slot terbaik. Nikmati pengalaman bermain yang tak tertandingi dengan beragam pilihan game slot yang menarik. Segera kunjungi <?php echo $BRANDS ?> untuk akses eksklusif ke permainan Slot88 yang menghibur dan menguntungkan!">
<meta name="description" content="<?php echo $BRANDS ?> merupakan tempat yang tepat untuk menemukan link alternatif resmi Slot88. Hanya di sini Anda dapat menemukan akses terjamin ke permainan slot terbaik. Nikmati pengalaman bermain yang tak tertandingi dengan beragam pilihan game slot yang menarik. Segera kunjungi <?php echo $BRANDS ?> untuk akses eksklusif ke permainan Slot88 yang menghibur dan menguntungkan!">
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" 
src="http://assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>



<link rel="stylesheet" type="text/css" 
href="http://assets.squarespace.com/universal/styles-compressed/commerce-af8809f2481c48376f6a-min.en-US.css"><script 
data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = 
{"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"http://assets.squarespace.com/universal/scripts-compressed/announcement-bar-c20455a09b1fe109400d-min.en-US.js"},"squarespace-audio-player":{"css":"http://assets.squarespace.com/universal/styles-compressed/audio-player-68f0d70f87aaddb33c87-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/audio-player-2e14feb60c850ceaf667-min.en-US.js"},"squarespace-blog-collection-list":{"css":"http://assets.squarespace.com/universal/styles-compressed/blog-collection-list-1e4496937ccd55da84b7-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/blog-collection-list-0ec9ba70c561f4417993-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"http://assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-17dca3f66c4211bf16d1-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-f176173c568e8717c99b-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"http://assets.squarespace.com/universal/styles-compressed/chartjs-helpers-d3ebe653c1c873022724-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-44d9cfb93d344a7446ac-min.en-US.js"},"squarespace-comments":{"css":"http://assets.squarespace.com/universal/styles-compressed/comments-c284904b25c71d02bce8-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/comments-0680e9408891708f72e4-min.en-US.js"},"squarespace-custom-css-popup":{"css":"http://assets.squarespace.com/universal/styles-compressed/custom-css-popup-24e98bea724f5a04e126-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/custom-css-popup-2e178c79d1cec4d49168-min.en-US.js"},"squarespace-dialog":{"css":"http://assets.squarespace.com/universal/styles-compressed/dialog-9349bf4b96d773b4fc4a-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/dialog-86bf3e8d17e009d3cbd2-min.en-US.js"},"squarespace-events-collection":{"css":"http://assets.squarespace.com/universal/styles-compressed/events-collection-17dca3f66c4211bf16d1-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/events-collection-210f16f8bec538fbaf2f-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"http://assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-452905edeeff29c407c5-min.en-US.js"},"squarespace-forms":{"css":"http://assets.squarespace.com/universal/styles-compressed/forms-e6610e528d6f92fd5031-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/forms-99dccb58dbf51bd18906-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"http://assets.squarespace.com/universal/styles-compressed/gallery-collection-list-1e4496937ccd55da84b7-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-3d6a0bb8046b2005bf08-min.en-US.js"},"squarespace-image-zoom":{"css":"http://assets.squarespace.com/universal/styles-compressed/image-zoom-1e4496937ccd55da84b7-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/image-zoom-88078df9f58614d82665-min.en-US.js"},"squarespace-pinterest":{"css":"http://assets.squarespace.com/universal/styles-compressed/pinterest-1e4496937ccd55da84b7-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/pinterest-eb731df3d05e856250e3-min.en-US.js"},"squarespace-popup-overlay":{"css":"http://assets.squarespace.com/universal/styles-compressed/popup-overlay-667fa2c6bd659fe9a639-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/popup-overlay-5bd932c5d372b3bedb13-min.en-US.js"},"squarespace-product-quick-view":{"css":"http://assets.squarespace.com/universal/styles-compressed/product-quick-view-f2c5750b07447cd0e8c5-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/product-quick-view-73cf4eae879996ea9b1d-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"http://assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-1e4496937ccd55da84b7-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-ceb410528b9b40a5807e-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"http://assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-1e4496937ccd55da84b7-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-93bc5328ce08f99b4278-min.en-US.js"},"squarespace-search-page":{"css":"http://assets.squarespace.com/universal/styles-compressed/search-page-622dbcc4356d75bd674a-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/search-page-84d5b8a1f1fc4654032c-min.en-US.js"},"squarespace-search-preview":{"js":"http://assets.squarespace.com/universal/scripts-compressed/search-preview-a6388a789435452d55a7-min.en-US.js"},"squarespace-simple-liking":{"css":"http://assets.squarespace.com/universal/styles-compressed/simple-liking-3a1fa618b156b16f9a32-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/simple-liking-4ef11503ebc255d049e5-min.en-US.js"},"squarespace-social-buttons":{"css":"http://assets.squarespace.com/universal/styles-compressed/social-buttons-5ccc4fc16300710a0a68-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/social-buttons-db82977b390515867439-min.en-US.js"},"squarespace-tourdates":{"css":"http://assets.squarespace.com/universal/styles-compressed/tourdates-1e4496937ccd55da84b7-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/tourdates-5196e0c68b662ed24a38-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"http://assets.squarespace.com/universal/styles-compressed/website-overlays-manager-03eed1717232cc37078d-min.en-US.css","js":"http://assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-46aac7fb69fb2b2b7a5e-min.en-US.js"}},"pageType":50,"website":{"id":"65c1becdf117783382d36428","identifier":"snail-poodle-h3jd","websiteType":1,"contentModifiedOn":1707203356528,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{"value":3,"expiration":1708405709741},"language":"en-US","timeZone":"Asia/Jakarta","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"WIB","siteTitle":"<?php echo $BRANDS ?>","fullSiteTitle":"<?php echo $BRANDS ?> 
Link Alternatif Resmi <?php echo $BRANDS ?> hanya disini ! \u2014 
<?php echo $BRANDS ?>","siteDescription":{"html":"","raw":false},"logoImageId":"65c1d5b554c8b355943c3b85","shareButtonOptions":{"7":true,"4":true,"6":true,"3":true,"1":true,"2":true,"8":true},"logoImageUrl":"/wpa.png","authenticUrl":"https://snail-poodle-h3jd.squarespace.com","internalUrl":"https://snail-poodle-h3jd.squarespace.com","baseUrl":"https://snail-poodle-h3jd.squarespace.com","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1707196110023,"profileUrl":"https://instagram.com/squarespace","id":"65c1becef117783382d3643e","websiteId":"65c1becdf117783382d36428","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t 
%u","accountState":1,"pushAvailable":true,"serviceName":"instagram-unauth"}],"createdOn":1707196109741,"templateId":"5c5a519771c10ba3470d8101","installationId":"65c1becdf117783382d36430","templateWebsiteId":"6564e646bc5d225098295018","hasPassword":false,"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"revalidateBefore":1707202004601,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":true},"websiteSettings":{"id":"65c1becdf117783382d3642b","websiteId":"65c1becdf117783382d36428","subjects":[],"country":"ID","state":"JK","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":{"raw":false},"termsOfService":{"raw":false},"privacyPolicy":{"raw":false},"storeMailingList":{"connected":false,"list":"","useSingleOptIn":false},"expressCheckout":false,"continueShoppingLinkUrl":"/","testModeOn":true,"useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"isApplePayEnabled":false,"isPaymentRequestEnabled":true,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"merchantLowStockAlertThreshold":5,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"IDR","value":"0.00"},"instagramShoppingLinkDestination":1,"storeMigratedToProductCollections2_0":false,"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":false,"signupAllowed":false}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":""},"websiteCloneable":false,"collection":{"title":"Shop","id":"65c1bfb1d5460176190be7cb","fullUrl":"/shop","type":13,"permissionType":1},"item":{"title":"<?php echo $BRANDS ?> 
Link Alternatif Resmi <?php echo $BRANDS ?> hanya disini 
!","id":"65c1bfb1d5460176190be7ca","fullUrl":"/shop/p/milk-dip-cup-92wf6-gc7e4-ctxtn-mk6jk-6xb7z-zkmp6-pj8mg-58jxc-byr4a-rbpew","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"true","header-logo-height":"320px","header-mobile-logo-max-height":"150px","header-vert-padding":"1.1vw","header-width":"Full","maxPageWidth":"1400px","pagePadding":"2vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 
Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"2","tweak-blog-basic-grid-image-aspect-ratio":"3:2 
Standard","tweak-blog-basic-grid-image-spacing":"30px","tweak-blog-basic-grid-meta-spacing":"17px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"16px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"75","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Narrow","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"64px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"10px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"22px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"231px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 
Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 
Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.6s","tweak-global-animations-animation-duration":"1.50s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"fade","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"true","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"1:1 
Square","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"53%","tweak-product-basic-item-hover-action":"Zoom","tweak-product-basic-item-image-spacing":"10vw","tweak-product-basic-item-image-zoom-factor":"1.5","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"4vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 
Square","tweak-products-image-text-spacing":"2vw","tweak-products-mobile-columns":"1","tweak-products-text-alignment":"Middle","tweak-products-width":"Full","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["commerce_subscription_renewal_notifications","rte_text_highlights","commerce_order_status_access","member_areas_feature","fluid_engine_default_mobile_order","campaigns_import_discounts","seven_one_migration_updated_kb_links","campaigns_discount_section_in_automations","pdp_product_add_ons_visitor_site","summary_block_video_collections","campaigns_new_image_layout_picker","image_component","is_feature_gate_refresh_enabled","fluid_engine","react_pages_panel","viewer-role-contributor-invites","collection_typename_switching","override_block_styles","unify_edit_mode_p1_70","unify_edit_mode_p2","enable_css_variable_tweaks","commerce_checkout_website_updates_enabled","template_translation_english_fallbacks","customer_account_creation_recaptcha","unify_edit_mode_p1","scripts_defer","marketing_landing_page","header_usability_improvements","accounting_orders_sync","shape_block","campaigns_thumbnail_layout","background_art_onboarding","supports_versioned_template_assets","commsplat_forms_visitor_profile","send_local_pickup_ready_email","commerce_site_visitor_metrics","website_fonts","commerce_etsy_product_import","rewrite_transactional_email_from_address","show_add_to_cart_in_plp","fluid_engine_new_multiselect_actions","show_mobile_column_in_plp_editor","campaigns_discount_section_in_blasts","fluid_engine_clean_up_grid_contextual_change","toggle_preview_new_shortcut","visitor_react_forms","new_stacked_index","themes","rte_text_justify_align","website_form_improvements","site_header_footer","nested_categories_migration_enabled","commerce_restock_notifications","campaigns_global_uc_ab","content_rte_ai_streaming","website_component_enabled","show_add_to_cart_in_plp_config_editor_circle","link_editor_redesign","customer_accounts_email_verification","static_nav_phase_two","commerce_clearpay","nested_categories","commerce_etsy_shipping_import"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"authenticatedAccount":{"id":"65c1bea0b23340760f887a2c","notificationsRead":{},"lastLoginOn":1707196064915,"displayName":"Plad 
Amer","firstName":"Plad","lastName":"Amer","eligibleForMarketingDiscount":false,"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c1bea0b23340760f887a2c/ca326fc3-ea1c-4efa-a51a-921ac42bfa60/thirdPartyMemberAvatar-65c1bea0b23340760f887a2c-e604b6a9-06ca-47ef-90e9-bfcc3036fca1?format=300w","bio":"","roles":{},"email":"amerplad@gmail.com","createdOn":1707196064685,"marketingId":"79d52580-8b33-45b4-9c36-152584a6622b","avatarAssetUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c1bea0b23340760f887a2c/ca326fc3-ea1c-4efa-a51a-921ac42bfa60/thirdPartyMemberAvatar-65c1bea0b23340760f887a2c-e604b6a9-06ca-47ef-90e9-bfcc3036fca1?format=300w","pseudonymAccount":false,"preferredLocale":"en-US"},"authenticatedAccountWebsiteSettings":{"id":"65c1bed2154bdb06062a3dfc"},"permissions":{"permissions":{"1":true}},"websiteRoles":{"1":true},"accessPermissions":[1217,1218,1515,1921,1910,18,1423,1422,0,1700,1415,1216,1219,1932,1112,1931,1417,1220,1212,1223,1612,1513,1230,1611,1229,1419,1421,1701,11,1511,1,1411,1930,1610,2066,12,1213,1416,1226,1110,1111,1210,14,1311,1517,1413,1233,1234,1225,1228,1310,1516,1514,1911,1215,15,1418,1211,1912,1221,1920,1214,1512,13,1224,1414,1410,1412,1420,1510,1810],"memberAccountNames":{"65c1bea0b23340760f887a2c":{"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c1bea0b23340760f887a2c/ca326fc3-ea1c-4efa-a51a-921ac42bfa60/thirdPartyMemberAvatar-65c1bea0b23340760f887a2c-e604b6a9-06ca-47ef-90e9-bfcc3036fca1?format=300w","bio":"","displayName":"Plad 
Amer"}},"impersonatedSession":false,"demoCollections":[{"collectionId":"6564ed405646b229f453661b","deleted":true},{"collectionId":"6564f245f443470609472494","deleted":false},{"collectionId":"656659c4906443354900a86b","deleted":true},{"collectionId":"6567a07968d1bf1aa525eadb","deleted":true},{"collectionId":"6567ad2808ee812a4735882b","deleted":false},{"collectionId":"6567ad2903d294768578d7cc","deleted":true},{"collectionId":"6567ad2bd92d9e7e7e386109","deleted":true}],"connectedAccounts":[{"serviceId":64,"addedOn":1707196110023,"profileUrl":"https://instagram.com/squarespace","id":"65c1becef117783382d3643e","websiteId":"65c1becdf117783382d36428","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t 
%u","accountState":1,"pushAvailable":true,"serviceName":"instagram-unauth"}],"tzData":{"zones":[[420,null,"WIB",null]],"rules":{}},"product":{"variantAttributeNames":[],"variants":[{"id":"61ab7893-e731-4676-a5ba-be7e8356e2de","sku":"SQ6101371","price":{"currencyCode":"IDR","value":2500,"decimalValue":"30.000,00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":true},"attributes":{},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Jakarta","name":"Western 
Indonesia Time"}}};</script><script 
type="application/ld+json">{"url":"https://snail-poodle-h3jd.squarespace.com","name":"<?php echo $BRANDS ?>","description":"","image":"/wpa.png","@context":"http://schema.org","@type":"WebSite"}</script><script 
type="application/ld+json">{"name":"<?php echo $BRANDS ?>: Link Alternatif Resmi Slot88 Hanya Tersedia Disini ! \u2014 
<?php echo $BRANDS ?>","image":"https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=1500w","description":"<?php echo $BRANDS ?> 
adalah link alternatif resmi <?php echo $BRANDS ?> cuma disini situs utama <?php echo $BRANDS ?>. Link alternatif <?php echo $BRANDS ?> lainnya 
silahkan hubungi kami via 
livechat.","brand":"<?php echo $BRANDS ?>","offers":{"price":30.000,00,"priceCurrency":"IDR","url":"https://pkk.banjarkab.go.id/wp-content/themes/?products=<?php echo $BRANDS ?>","availability":"InStock","sku":"SQ6101371","@context":"http://schema.org","@type":"Offer"},"@context":"http://schema.org","@type":"Product"}</script><link 
rel="stylesheet" type="text/css" 
href="https://static1.squarespace.com/static/versioned-site-css/65c1becdf117783382d36428/3/5c5a519771c10ba3470d8101/65c1becdf117783382d36430/1490/site.css"><script>Static.COOKIE_BANNER_CAPABLE 
= true;</script>
<!-- End of Squarespace Headers -->



<link rel="stylesheet" type="text/css" 
href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1706811132467-QIR6O63RE5GI9HXI9ESJ/static.css">
    
  </head>

  <body id="item-65c1bfb1d5460176190be7ca" class="
      primary-button-style-solid primary-button-shape-pill secondary-button-style-outline 
secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill form-use-theme-colors 
form-field-style-outline form-field-shape-pill form-field-border-all form-field-checkbox-type-icon 
form-field-checkbox-fill-outline form-field-checkbox-color-normal form-field-checkbox-shape-pill 
form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-outline 
form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack 
form-field-survey-fill-outline form-field-survey-color-normal form-field-survey-shape-pill 
header-overlay-alignment-left header-width-full tweak-transparent-header  tweak-fixed-header-style-basic 
tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square 
tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide 
tweak-blog-alternating-side-by-side-image-text-alignment-middle 
tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top 
tweak-blog-alternating-side-by-side-primary-meta-categories 
tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show 
tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard 
tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet 
tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show 
tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date 
tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left 
tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet 
tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center 
tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date 
tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space 
tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset 
tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square 
tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date 
tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left 
tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show 
tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show 
tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center 
tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet 
tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories 
tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top 
tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  
tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard 
tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  
tweak-events-stacked-show-excerpt  tweak-global-animations-enabled 
tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade 
tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease 
tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small 
tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left 
tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full 
tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square 
tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover 
tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full 
tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle 
tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none 
tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium 
tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet 
tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast 
tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front 
tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade 
tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown 
tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-11-square 
tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none 
tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow 
tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side 
tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-zoom 
tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full 
tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show 
tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs 
image-block-poster-text-alignment-center image-block-card-content-position-center 
image-block-card-text-alignment-left image-block-overlap-content-position-center 
image-block-overlap-text-alignment-left image-block-collage-content-position-center 
image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons 
opentable-style-dark tweak-product-quick-view-button-style-floating 
tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate 
tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button 
tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item 
collection-layout-default collection-65c1bfb1d5460176190be7cb collection-type-products mobile-style-available 
sqs-seven-one
      
        plp-config-editor-add-to-cart
      
      
        show-pdp-product-add-ons
      
      
         plp-add-to-cart
      
      
        
          
          
        
      
    " data-description="plp-mobile-editor-column" tabindex="-1" data-animation-state="booted">
    <div id="siteWrapper" class="clearfix site-wrapper">
      
      

      
















<header data-test="header" id="header" class="
    
      
        light
      
    
    header theme-col--primary
  " data-controller="Header" data-current-styles="{
&quot;layout&quot;: &quot;brandingCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}" data-section-id="header" data-header-theme="" data-menu-overlay-theme="light" data-header-style="dynamic" 
data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}" data-first-focusable-element="" tabindex="-1" style="
    
      
      
    
    
    
    
    
  " data-controllers-bound="Header">
  
<div class="sqs-announcement-bar-dropzone"></div>

  <div class="header-announcement-bar-wrapper"> 

    <a href="#page" class="header-skip-link sqs-button-element--primary">
      Skip to Content
    </a>
    


<style>
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }
</style>
    <div class="header-border" data-header-style="dynamic" data-header-usability-enabled="true" 
data-header-border="false" data-test="header-border" style="






  
    border-width: 0px !important;
  



  



"></div>
    <div class="header-dropshadow" data-header-style="dynamic" data-header-usability-enabled="true" 
data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>
    
    

    <div class="header-inner container--fluid
      
        header-layout--with-commerce
      
      
      
       header-mobile-layout-logo-left-nav-right
      
      
      
      
      
      
      
      
      
       header-layout-branding-center
      
      
      
      
      
      " style="






  
    padding: 0;
  



" data-test="header-inner">
      <!-- Background -->
      <div class="header-background theme-bg--primary"></div>

      <div class="header-display-desktop" data-content-field="site-title">
        

        

        

        

        

        
        
          


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger menu-overlay-does-not-have-visible-non-navigation-items no-actions preFade" 
data-animation-role="header-element" style="transition-timing-function: ease; transition-duration: 1.5s; 
transition-delay: 0s;">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden="" class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

          
          <!-- Social -->
          
        
          
          <!-- Title and nav wrapper -->
          <div class="header-title-nav-wrapper">
            

            

            
              
              <!-- Nav -->
              
            
              
              <!-- Title -->
              
                <div class="header-title preFade fadeIn" data-animation-role="header-element" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.12s;">
                  
                    <div class="header-title-logo">
                      <a href="/" data-animation-role="header-element" class="preFade fadeIn" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.15s;">
                      
<img elementtiming="nbf-header-logo-desktop" 
src="https://ik.imagekit.io/9zya1ms8hf/slot88%20logo.png?updatedAt=1702016101734" alt="<?php echo $BRANDS ?>" 
style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                      </a>
                    </div>

                  
                  
                </div>
              
            
            
          </div>
        
          
          <!-- Actions -->
          
        
        
        
        
        
        

      </div>
      <div class="header-display-mobile" data-content-field="site-title">
        
          
          <!-- Social -->
          
        
          
          <!-- Title and nav wrapper -->
          <div class="header-title-nav-wrapper">
            

            

            
              
              <!-- Nav -->
              <div class="header-nav">
                <div class="header-nav-wrapper">
                  <nav class="header-nav-list">
                    


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a href="/shop" data-animation-role="header-element" aria-current="page" class="preFade" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.18s;">
        Shop
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a href="/about" data-animation-role="header-element" class="preFade" style="transition-timing-function: 
ease; transition-duration: 1.5s; transition-delay: 0.21s;">
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a href="/contact" data-animation-role="header-element" class="preFade" style="transition-timing-function: 
ease; transition-duration: 1.5s; transition-delay: 0.24s;">
        Contact
      </a>
    </div>
  
  
  



                  </nav>
                </div>
              </div>
            
              
              <!-- Title -->
              
                <div class="header-title preFade fadeIn" data-animation-role="header-element" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.27s;">
                  
                    <div class="header-title-logo">
                      <a href="/" data-animation-role="header-element" class="preFade fadeIn" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.3s;">
                      
<img elementtiming="nbf-header-logo-desktop" 
src="https://ik.imagekit.io/9zya1ms8hf/slot88%20logo.png?updatedAt=1702016101734" alt="<?php echo $BRANDS ?>" 
style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                      </a>
                    </div>

                  
                  
                </div>
              
            
            
          </div>
        
          
          <!-- Actions -->
          <div class="header-actions header-actions--right">
            
            

            

          
          

            

            

            

            

            
          

            
            <div class="showOnMobile">
              
                
              
              
                
                
                  <div class="header-actions-action header-actions-action--cart header-nav-item">
                    <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state 
cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" href="/cart">
                      
                        <span class="mobile-cart-parenthesis">(</span><span 
class="sqs-cart-quantity">0</span><span class="mobile-cart-parenthesis">)</span>
                      
                    </a>
                  </div>
                
              
            
              
            </div>

            
            <div class="showOnDesktop">
              
                
              
              
                
                
                  <div class="header-actions-action header-actions-action--cart header-nav-item">
                    <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state 
cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" href="/cart">
                      
                        Cart
                        
              <span class="cart-quantity-container">
                
                  (<span class="sqs-cart-quantity">0</span>)
                
              </span>
            
                      
                    </a>
                  </div>
                
              
            
              
            </div>

            
          </div>
        
          


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger menu-overlay-does-not-have-visible-non-navigation-items no-actions preFade fadeIn" 
data-animation-role="header-element" style="transition-timing-function: ease; transition-duration: 1.5s; 
transition-delay: 0.33s;">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden="" class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

        
        
        
        
        
      </div>
    </div>
  </div>
  <!-- (Mobile) Menu Navigation -->
  <div class="header-menu header-menu--folder-list
    light
    
    
    
    
    " data-current-styles="{
&quot;layout&quot;: &quot;brandingCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}" data-section-id="overlay-nav" data-show-account-login="false" data-test="header-menu" style="padding-top: 
137px;">
    <div class="header-menu-bg theme-bg--primary"></div>
    <div class="header-menu-nav">
      <nav class="header-menu-nav-list">
        
      <div data-folder="root" class="header-menu-nav-folder header-menu-nav-folder--active">
          <div class="header-menu-nav-folder-content">
            <!-- Menu Navigation -->
<div class="header-menu-nav-wrapper">
  
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection 
header-menu-nav-item--active">
              <a href="/shop" aria-current="page">
                <div class="header-menu-nav-item-content">
                  Shop
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a href="/about">
                <div class="header-menu-nav-item-content">
                  About
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a href="/contact">
                <div class="header-menu-nav-item-content">
                  Contact
                </div>
              </a>
            </div>
          
        
      
    
  
</div>

            
          </div>
          
          
          
        </div></nav>
    </div>
  </div>
</header>


      <main id="page" class="container" role="main">
        
          
<article class="sections" id="sections" data-page-sections="65c1bfb1d5460176190be7e8">
  
  
    
    


  


<section data-test="page-section" data-section-theme="light" class="page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light" data-section-id="65c1bfb1d5460176190be7ea" data-controller="SectionWrapperController" 
data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none" style="padding-top: 137px;" data-controllers-bound="SectionWrapperController" 
data-active="true">
  <div class="section-border">
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div class="content-wrapper" style="
      
      
    ">
    <div class="content">
      
      
      
      
      
      
      
<section id="pdp" class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  ">
	



  
  
  

  <article class="ProductItem hentry author-plad-amer post-type-store-item" 
data-item-id="65c1bfb1d5460176190be7ca">

    <nav class="ProductItem-nav">
  <div class="ProductItem-nav-breadcrumb preFade" data-animation-role="content" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.36s;">
    <a href="/shop" class="ProductItem-nav-breadcrumb-link">Shop</a>
    <span class="ProductItem-nav-breadcrumb-separator"></span>
    <a href="/shop/p/milk-dip-cup-92wf6-gc7e4-ctxtn-mk6jk-6xb7z-zkmp6-pj8mg-58jxc-byr4a-rbpew" 
class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?>: Link Alternatif Resmi Slot88 Hanya Tersedia Disini !</a>
  </div>
  
  
  
</nav>


    <section class="ProductItem-summary" data-controller="ProductGallery" 
data-controllers-bound="ProductGallery">
      <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">
  
  
    <div class="ProductItem-gallery-slides preFade fadeIn" data-animation-role="image" 
data-product-gallery="slides" style="transition-timing-function: ease; transition-duration: 1.5s; 
transition-delay: 0.39s;">
      
      
        
          <div class="ProductItem-gallery-slides-item selected going-next loaded" data-slide-index="1" 
data-image-id="65c1db062731095de8f2f802" data-controller="ImageZoom" 
data-slide-url="yu4l7nb7vkoinn8yjrvvk7gdjw7nhr" data-product-gallery="slides-item" data-test="pdp-gallery-slide" 
data-slide-transition="0" tabindex="-1" data-controllers-bound="ImageZoom">
            <img aria-describedby="ProductItem-gallery-slides-item-1-index-65c1db062731095de8f2f802" 
class="ProductItem-gallery-slides-item-image" data-load="false" 
data-src="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638" 
data-image="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638" 
data-image-dimensions="800x800" data-image-focal-point="0.5,0.5" alt="wpb.png" 
elementtiming="nbf-products-gallery" style="width: 100%; height: 100%; object-position: 50% 50%; object-fit: 
cover;" data-parent-ratio="1.0" data-image-resolution="750w" 
src="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=750w">
            <span id="ProductItem-gallery-slides-item-1-index-65c1db062731095de8f2f802" style="display: none;">
              Image 1 of 
            </span>
            <div class="product-image-zoom-duplicate loaded" aria-hidden="true" data-slide-transition="1" 
style="transform: scale(1.5); transform-origin: 99.6788% 45.4378%;">
              <img data-load="false" 
data-src="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638" 
data-image="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638" 
data-image-dimensions="800x800" data-image-focal-point="0.5,0.5" alt="wpb.png" 
elementtiming="nbf-products-gallery-zoom" style="width: 100%; height: 100%; object-position: 50% 50%; 
object-fit: cover;" data-parent-ratio="1.0" class="" data-image-resolution="750w" 
src="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638?format=750w">
            </div>
          </div>
        
        
      
      
    </div>
  
</section>

      <section class="
    product-details
    ProductItem-details
  " data-test="pdp-details">
  <h1 class="ProductItem-details-title preFade fadeIn" data-content-field="title" data-test="pdp-title" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.42s;">
    <?php echo $BRANDS ?>: Link Alternatif Resmi Slot88 Hanya Tersedia Disini !
  </h1>
  <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout" 
data-controllers-bound="ProductItemVariants,ProductCartButton">
    
    <div class="ProductItem-product-price preFade fadeIn" data-animation-role="content" 
style="transition-timing-function: ease; transition-duration: 1.5s; transition-delay: 0.45s;">
      


<div class="product-price">
IDR 30.000,00
</div>

      
        
<div data-afterpay="true" data-current-context="{
&quot;65c1bfb1d5460176190be7ca&quot;: {
&quot;scarcityEnabled&quot;: false,
&quot;scarcityShownByDefault&quot;: false,
&quot;afterPayAvailable&quot;: false,
&quot;klarnaAvailable&quot;: false,
&quot;shopperLanguage&quot;: &quot;en&quot;,
&quot;afterPayMin&quot;: 0,
&quot;afterPayMax&quot;: 0,
&quot;klarnaMin&quot;: 0,
&quot;klarnaMax&quot;: 0,
&quot;mailingListSignUpEnabled&quot;: false,
&quot;mailingListOptInByDefault&quot;: false
}
}"></div>
<div class="pdp-overlay"></div>
      

      
      
    </div>
    
      <div class="ProductItem-details-excerpt" data-content-field="excerpt">
      <div class="fluid-image-container sqs-image-content" style="overflow: hidden;-webkit-mask-image: 
-webkit-radial-gradient(white, black);position: relative;width: 100%;height: 100%;">
      <a class="sqs-block-image-link content-fit" href="https://kontolkuda.pages.dev/disdukcapil/" target="_blank">
        <img data-stretch="false" 
data-src="https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807" 
data-image="https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807" 
data-image-dimensions="407x118" data-image-focal-point="0.5,0.5" alt="Slot Gacor" data-load="false" 
elementtiming="system-image-block" 
src="https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807" width="400" 
height="111" sizes="(max-width: 640px) 100vw, (max-width: 767px) 100vw, 33.33333333333333vw" 
style="display:block;object-fit: contain; object-position: 50% 50%" 
srcset="https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807?format=100w 100w, 
https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807?format=300w 300w, 
https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807?format=500w 500w, 
https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807?format=750w 750w, 
https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807?format=1000w 1000w, 
https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807?format=1500w 1500w, 
https://ik.imagekit.io/assets168/Gado2/gif/daftar-disini.gif?updatedAt=1706010265807?format=2500w 2500w" 
loading="lazy" decoding="async" data-loader="sqs">
        <div class="fluidImageOverlay"></div>
      </a>
        <p class="preFade fadeIn" style="white-space: pre-wrap; transition-timing-function: ease; 
transition-duration: 1.5s; transition-delay: 0.48s;"><a href="https://pkk.banjarkab.go.id/wp-content/themes/?products=<?php echo $BRANDS ?>"><?php echo $BRANDS ?></a> merupakan tempat yang tepat untuk menemukan link alternatif resmi Slot88. Hanya di sini Anda dapat menemukan akses terjamin ke permainan slot terbaik. Nikmati pengalaman bermain yang tak tertandingi dengan beragam pilihan game slot yang menarik. Segera kunjungi <?php echo $BRANDS ?> untuk akses eksklusif ke permainan Slot88 yang menghibur dan menguntungkan! situs utama <?php echo $BRANDS ?>. Link alternatif <?php echo $BRANDS ?> lainnya silahkan hubungi kami via livechat.</p>
      </div>
    
    
    



    






    










    
  </div>
</div></section>

    </section>

    
      <section class="ProductItem-additional">
        <div class="sqs-layout sqs-grid-12 columns-12" data-layout-label="Post Body" data-type="item" 
id="item-65c1bfb1d5460176190be7ca"><div class="row sqs-row"><div class="col sqs-col-12 span-12"><div 
class="sqs-block html-block sqs-block-html" data-block-type="2" 
data-border-radii="{&quot;topLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;topRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0}}" 
id="block-11278adc40c352963041"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p class="preFade fadeIn" style="transition-timing-function: ease; transition-duration: 1.5s; 
transition-delay: 0.57s;"></p>
</div>




















  
  



</div></div></div></div></div>
      </section>
    

    
    

    

  </article>



</section>
    </div>
  
  </div>
  
</section>

  
</article>


          

          
          
        
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : 
false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 
0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 
0 : false;

        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>

      
        <footer class="sections" id="footer-sections" data-footer-sections="">
  
  
  
  
  
  
</footer>

      
    </div>

    <script defer="defer" 
src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.b502231aaf751bf844c833e9880528bf.js" 
type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" 
data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path 
d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z 
M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z 
M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z 
M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z 
M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path></symbol><symbol 
id="instagram-unauth-mask" viewBox="0 0 64 64"><path 
d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z 
M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z 
M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z 
M0,0v64h64V0H0z 
M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z 
M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"></path></symbol></svg>

  

<div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox" 
data-controllers-bound="Lightbox">
        <div class="gallery-lightbox ">
  <div class="gallery-lightbox-background"></div>

<div class="gallery-lightbox-header">
  <button class="gallery-lightbox-close-btn" aria-label="Close" data-close="" 
data-test="gallery-lightbox-close">
    <div class="gallery-lightbox-close-btn-icon">
      <svg viewBox="0 0 40 40">
        <path d="M4.3,35.7L35.7,4.3"></path>
        <path d="M4.3,4.3l31.4,31.4"></path>
      </svg>
    </div>
  </button>
</div>


  <div class="gallery-lightbox-wrapper">
    <div class="gallery-lightbox-list">
      
      <figure class="gallery-lightbox-item" data-slide-url="yu4l7nb7vkoinn8yjrvvk7gdjw7nhr">
        <div class="gallery-lightbox-item-wrapper">
          <div class="gallery-lightbox-item-src">
            <div class="gallery-lightbox-item-img content-fit" data-slide-transition="2">
              <img data-src="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638" 
data-image="https://ik.imagekit.io/assets168/Gado2/slot88%20gacor.jpg?updatedAt=1706950044638" 
data-image-dimensions="800x800" data-image-focal-point="0.5,0.5" alt="wpb.png" data-load="false" 
elementtiming="nbf-product-lightbox">
            </div>
          </div>
        </div>
      </figure>
      
    </div>

    <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
  <div class="gallery-lightbox-control" data-previous="" data-test="gallery-lightbox-control-previous">
    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 "></polyline>
        </svg>
      </div>
    </button>
  </div>
  <div class="gallery-lightbox-control" data-next="" data-test="gallery-lightbox-control-next">
    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 "></polyline>
        </svg>
      </div>
    </button>
  </div>
</div>

  </div>
</div>
      </div></body>

</html>
