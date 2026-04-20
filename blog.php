<?php
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
    <meta name="keywords" content="<?=$content['keywords'];?>" />
    <meta property="og:title" content="<?=$content['title'];?>" />
    <meta property="og:description" content="<?=$content['description'];?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$content['canonical'];?>" />
    <meta property="og:image" content="<?=$content['image'][0];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$content['title'];?>" />
    <meta name="twitter:description" content="<?=$content['description'];?>" />
    <meta name="twitter:image" content="<?=$content['image'][0];?>" />
    <meta name="twitter:site" content="@MersinIlancom" />

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BlogPosting",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://www.siteniz.com/blog/gastric-sleeve-nedir"
            },
            "headline": "Gastric Sleeve Nedir? Tüm Süreç Detaylarıyla",
            "description": "Gastric sleeve ameliyatı hakkında detaylı bilgiler, süreç, avantajlar ve iyileşme dönemi.",
            "image": [
                "https://www.siteniz.com/images/blog/gastric-sleeve-1.jpg",
                "https://www.siteniz.com/images/blog/gastric-sleeve-2.jpg"
            ],
            "author": {
                "@type": "Person",
                "name": "Dr. Hakan Uzunoğlu"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Bariatric Istanbul",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://www.siteniz.com/images/logo.png"
                }
            },
            "datePublished": "2026-04-20T09:00:00+03:00",
            "dateModified": "2026-04-20T09:00:00+03:00",
            "articleSection": "Bariatric Surgery",
            "keywords": [
                "gastric sleeve",
                "obezite cerrahisi",
                "tüp mide ameliyatı"
            ],
            "wordCount": 1200,
            "inLanguage": "tr-TR",
            "isAccessibleForFree": true,
            "articleBody": "Bu yazıda gastric sleeve ameliyatının tüm detaylarını ele alıyoruz..."
        }
    </script>

</head>
<body>

<?=$content['content'];?>

</body>
</html>
