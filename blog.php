<?php
$site           = "https://mersinilan.com";
$page           = $_GET['id'];
$fileContent    = file_get_contents('db/blogs/'.$page.'.json');
$content        = json_decode($fileContent, true);

$city           = "Mersin";
$districts      = array("Akdeniz", "Mezitli", "Erdemli", "Tarsus", "Toroslar", "Yenişehir", "Anamur", "Silifke");
function seo($text) {
    // Türkçe karakter dönüşümü
    $search  = ['ç','Ç','ğ','Ğ','ı','İ','ö','Ö','ş','Ş','ü','Ü'];
    $replace = ['c','c','g','g','i','i','o','o','s','s','u','u'];

    $text = str_replace($search, $replace, $text);

    // Küçük harfe çevir
    $text = mb_strtolower($text, 'UTF-8');

    // HTML entity temizleme
    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

    // Harf ve sayı dışındaki karakterleri sil
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);

    // Boşlukları tire yap
    $text = preg_replace('/[\s-]+/', '-', $text);

    // Baştaki ve sondaki tireleri sil
    $text = trim($text, '-');

    return $text;
}
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #0c0c0f;
            --surface: #16161a;
            --surface-hover: #1e1e24;
            --text: #fafafa;
            --text-soft: #a1a1aa;
            --accent: #22d3ee;
            --red: #f44336;
            --accent-dim: rgba(34, 211, 238, 0.12);
            --border: #27272a;
            --white:#ffffff;

            --primary: #0c0c0f;
            --secondary: #ff5252;
            --background: #eee;
            --highlight: #ffda79;
            /* Theme color */
            --theme: var(--primary);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Sora', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.65;
            font-weight: 400;
        }
        .font-display { font-family: 'Sora', sans-serif; }

        .hero {
            padding: 20px 24px 0;
            text-align: center;
            background:
                    radial-gradient(ellipse 70% 60% at 50% 0%, var(--accent-dim) 0%, transparent 60%),
                    var(--bg);
            border-bottom: 1px solid var(--border);
        }
        .hero .badge {
            display: inline-block;
            padding: 6px 14px;
            background: var(--accent-dim);
            color: var(--red);
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            border-radius: 100px;
            margin-bottom: 24px;
        }
        .hero h1 {
            font-family: 'Sora', sans-serif;
            font-size: clamp(2rem, 4.5vw, 3rem);
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 16px;
            letter-spacing: -0.02em;
        }
        .hero p {
            color: var(--text-soft);
            font-size: 1.05rem;
            max-width: 75%;
            margin: 0 auto 32px;
        }
        .hero .btn {
            display: inline-block;
            padding: 14px 28px;
            background: var(--red);
            color: var(--bg);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            border-radius: 10px;
            transition: opacity 0.2s, transform 0.2s;
        }
        .hero .btn:hover { opacity: 0.9; transform: translateY(-1px); }

        nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(12,12,15,0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            padding: 14px 24px;
        }
        nav .wrap { max-width: 1100px; margin: 0 auto; display: flex; justify-content: start; flex-wrap: inherit; overflow: auto; gap: 6px 0; }
        nav a { color: var(--text-soft); text-decoration: none; font-size: 0.9rem; font-weight: 500; transition: color 0.2s; min-width: 125px;margin: 5px 0;}
        a { color: var(--text-soft); text-decoration: none; font-size: 0.9rem; font-weight: 500; transition: color 0.2s; }
        nav a:hover { color: var(--red); }

        .section {
            max-width: 1100px;
            margin: 0 auto 10px;
            padding: 20px 0;
            border-bottom: 1px solid var(--border);
        }
        .section.no-bottom { border-bottom: none; }
        .section-title { font-family: 'Sora', sans-serif; font-size: 1.75rem; font-weight: 600; margin-bottom: 8px; letter-spacing: -0.02em; }
        .section-desc { color: var(--text-soft); font-size: 0.98rem; margin-bottom: 10px; }

        .zones {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }
        .zone-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 28px;
            transition: border-color 0.2s, background 0.2s;
        }
        .zone-card:hover { border-color: var(--red); background: var(--surface-hover); }
        .zone-card h3 { font-size: 1.15rem; font-weight: 600; margin-bottom: 8px; color: var(--red); }
        .zone-card p { color: var(--text-soft); font-size: 0.92rem; line-height: 1.6; }

        .profile-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 22px;
        }
        .profile-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            position: relative;
            transition: border-color 0.2s, transform 0.2s, box-shadow 0.2s;
            min-height: 440px !important;
        }
        .profile-card:hover {
            border-color: var(--red);
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(0,0,0,0.25);
        }
        .profile-card .avatar {
            height: 200px;
            background: linear-gradient(160deg, var(--surface-hover) 0%, var(--surface) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 52px;
            color: var(--red);
        }
        .profile-card .avatar img{width: 100%;height: auto;position: absolute;top: 0;z-index: 9;border-radius: 14px;}
        .profile-card .body { padding: 22px; width: 100%; z-index: 11;position: absolute;bottom: 0; background: #000000;background: linear-gradient(0deg,rgba(0, 0, 0, 1) 0%, rgba(0, 156, 175, 0) 100%);border-radius: 14px;}
        .profile-card .body h3 { font-size: 1.15rem; font-weight: 600; margin-bottom: 6px; }
        .profile-card .body a h3{color: var(--white);}
        .profile-card .body .meta { font-size: 0.85rem; color: var(--white); margin-bottom: 5px; }

        .profile-card .body p { color: var(--text-soft); font-size: 0.9rem; margin-bottom: 16px; line-height: 1.55; }
        .profile-card .body p.none{ display: none;}
        .profile-card .body a.contact {
            display: inline-block;
            padding: 10px 18px;
            background: var(--accent-dim);
            color: var(--white);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 600;
            border-radius: 8px;
            transition: background 0.2s, color 0.2s;
        }
        .profile-card .body a:hover { background: var(--red); color: var(--white); }
        .profile-card .body a.contact.foto { background: var(--red)!important;color: var(--white);}

        .articles { display: flex; flex-direction: column; gap: 28px; }
        .article {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 32px 36px;
            transition: border-color 0.2s;
        }
        .article a{color: var(--white);}
        .article:hover { border-color: rgba(34, 211, 238, 0.35); }
        .article h3 { font-family: 'Sora', sans-serif; font-size: 1.35rem; font-weight: 600; margin-bottom: 8px; line-height: 1.3; }
        .article .meta { font-size: 0.85rem; color: var(--text-soft); margin-bottom: 16px; opacity: 0.9; }
        .article p { color: var(--text-soft); font-size: 0.95rem; margin-bottom: 14px; text-align: justify; }

        .cta {
            text-align: center;
            padding: 80px 24px;
            border-top: 1px solid var(--border);
        }
        .cta .section-title { margin-bottom: 12px; }
        .cta p { color: var(--text-soft); margin-bottom: 24px; max-width: 460px; margin-left: auto; margin-right: auto; }
        .cta .btn { display: inline-block; padding: 14px 28px; background: var(--red); color: var(--white); text-decoration: none; font-weight: 600; border-radius: 10px; transition: opacity 0.2s; }
        .cta .btn:hover { opacity: 0.9; }

        footer { text-align: center; padding: 28px 24px; font-size: 0.88rem; color: var(--text-soft); border-top: 1px solid var(--border); }

        @media (max-width: 768px) {
            .hero { padding: 10px 20px; }
            .section { padding: 48px 20px; }
            .article { padding: 24px 22px; }
        }

        /* Core styles/functionality */
        .tab {
            position: relative;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 10px 15px;
            transition: border-color 0.2s;
            margin-bottom: 5px;
        }
        .tab input {
            position: absolute;
            opacity: 0;
            z-index: -1;
        }
        .tab__content {
            max-height: 0;
            overflow: hidden;
            transition: all 0.35s;
        }
        .tab input:checked ~ .tab__content {
            max-height: 35rem;
        }

        /* Visual styles */

        .tab__label,

        .tab__label {
            justify-content: space-between;
            padding: 1rem;
        }
        .tab__label::after {
            content: "\276F";
            width: 1em;
            height: 1em;
            text-align: center;
            transform: rotate(90deg);
            transition: all 0.35s;
            top: 5px;
            position: relative;
        }
        .tab input:checked + .tab__label::after {
            transform: rotate(270deg);
            left: -10px;
        }
        .tab__content p {
            margin: 0;
            padding: 1rem;
        }


        /* Arrow animation */
        .tab input:not(:checked) + .tab__label:hover::after {
            animation: bounce .5s infinite;
        }
        @keyframes bounce {
            25% {
                transform: rotate(90deg) translate(.25rem);
            }
            75% {
                transform: rotate(90deg) translate(-.25rem);
            }
        }

    </style>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "type": "BreadcrumbList",
            "itemListElement": [
                {
                    "type": "ListItem",
                    "position": 1,
                    "item": {
                        "type": "WebPage",
                        "@id": "<?=$site;?>/",
                        "name": "<?=$city?> Escort Anasayfa"
                    }
                },
                {
                    "type": "ListItem",
                    "position": 2,
                    "item": {
                        "type": "WebPage",
                        "@id": "<?=$site;?>/ilceler",
                        "name": "<?=$city?> Escort Hizmetleri"
                    }
                }
            ]
        }
    </script>
</head>
<body>
<header class="hero">
    <span class="badge"><?=$city?> Escort • <?=$city?> Escort Bayan</span>
    <a href="<?=$site;?>" title="<?=$city?> Escort"><h1 class="font-display"><?=$city?> Escort</h1></a>
</header>
<section class="section  no-bottom" id="<?=seo($content['title']);?>">
<?=$content['content'];?>
</section>
<section id="iletisim" class="cta">
    <h2 class="section-title">İletişim</h2>
    <p><?=$city?> Escort Bayan hizmetleri hakkında bilgi almak için iletişime geçebilirsiniz. Gizlilik ve güvenlik önceliklidir.</p>
    <a href="#" class="btn">Mesaj Gönder</a>
</section>

<section id="iletisim" class="cta">
    <?php foreach ($content['keywords'] as $keyword){echo '<a href="'.$site.'/etiket/'.seo($keyword).' title="'.$keyword.'">'.$keyword.'</a>';}?>
</section>

<footer>
    © 2026 <?=$city?> Escort — Tüm Hakları Saklıdır.
    <br>
    <a href="/sitemap.xml">Sitemap</a>
</footer>
</body>
</html>
