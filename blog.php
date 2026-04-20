<?php
$site           = "https://mersinilan.com";
$page           = $_GET['id'];
$fileContent    = file_get_contents('db/blogs/'.$page.'.json');
$content        = json_decode($fileContent, true);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover" />
    <meta name="googlebot" content="index,follow">
    <meta name="bingbot" content="index,follow">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <meta name="language" content="tr">
    <meta name="distribution" content="global">
    <title><?=$content['title'];?></title>
    <meta name="description" content="<?=$content['description'];?>">
    <link rel="canonical" href="<?=$content['canonical'];?>" />
    <meta name="keywords" content="<?php foreach ($content['keywords'] as $keyword){echo $keyword.", ";}?>" />
    <meta property="og:title" content="<?=$content['title'];?>" />
    <meta property="og:description" content="<?=$content['description'];?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$content['canonical'];?>" />
    <meta property="og:image" content="<?=$site;?>/<?=$content['image'][0];?>" />
    <meta property="og:image:alt" content="<?=$content['title'];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$content['title'];?>" />
    <meta name="twitter:description" content="<?=$content['description'];?>" />
    <meta name="twitter:image" content="<?=$site;?>/<?=$content['image'][0];?>" />
    <meta name="twitter:site" content="@MersinIlancom" />

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BlogPosting",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?=$content['canonical'];?>"
            },
            "headline": "<?=$content['title'];?>",
            "description": "<?=$content['description'];?>",
            "image": [<?php foreach ($content['image'] as $image){echo '"'.$site.'/'.$image.'", ';}?>],
            "author": {
                "@type": "Person",
                "name": "Mersin Ilancom"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Mersin Ilan",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?=$site;?>/images/logo.png"
                }
            },
            "datePublished": "<?=$content['datePublished'];?>",
            "dateModified": "<?=$content['dateModified'];?>",
            "articleSection": "Lifestyle",
            "keywords": [<?php foreach ($content['keywords'] as $keyword){echo '"'.$keyword.'", ';}?>],
            "wordCount": <?=strlen($content['content']);?>,
            "inLanguage": "tr-TR",
            "isAccessibleForFree": true,
            "articleBody": "<?=strip_tags($content['content']);?>"
        }
    </script>
</head>
<body>
<?=$content['content'];?>
</body>
</html>
