<?php
$page = $_GET['id'];
echo $page;

$fileContent    = file_get_contents('db/blogs/'.$page.'json');
$content        = json_decode($fileContent, true);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?=$content['title'];?></title>
    <meta name="description" content="Gastric sleeve ameliyatı hakkında tüm detaylar.">

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

<h1>Gastric Sleeve Nedir?</h1>
<p>Blog içeriğin burada yer alacak...</p>

</body>
</html>
