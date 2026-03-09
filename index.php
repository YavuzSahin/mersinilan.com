<?php
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

    $seoText = 'Mersinde yaşayanlar ve güzel şehrimizin değerli konukları!<br>
        En kaliteli ve en özel Mersin escort bayanlarını listelemek için büyük bir emekle mersinilan sitesini hazırladık.<br>
        Mersin şehrimizin güzrl enerjisini hissederken, unutulmaz anlar yaşamanız için en doğru adres mersinilan.com!
        Mersinilan.com, sizin için sadece en seçkin ve profesyonel Mersin escort hizmetlerini sunmakla kalmıyor, aynı zamanda yüksek memnuniyet garantisi ile hareket ediyor.<br>
        <strong>Neden bekliyorsunuz?</strong><br>Hemen şimdi, zaman kaybetmeden Mersin eskort dünyasının kapılarını aralamak için sitemizde ki escort kız profillerini ziyaret edin!<br>
        Sitemizdeki geniş seçenekler arasından size en uygun olanı kolayca bulabilir, benzersiz bir deneyim yaşayabilirsiniz. Her bir mersin escort ilanı, sizin konforunuz ve beklentileriniz göz önünde bulundurularak hazırlanmıştır. Mersin’in hareketli atmosferine renk katacak, her anınızı özel hissettirecek deneyimler için doğru yerdesiniz.<br>
        <strong>Mersin escort bayan dünyasının sunduğu ayrıcalıklardan yararlanın!</strong>';
?>
<!DOCTYPE html>
<html lang="tr" >
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover" />
    <meta name="googlebot" content="index,follow">
    <meta name="bingbot" content="index,follow">


    <title><?=$city?> Escort | <?=$city?> Escort Bayan | <?=$city?> Escort Kız</title>
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
        nav .wrap { max-width: 1100px; margin: 0 auto; display: flex; justify-content: center; flex-wrap: wrap; gap: 6px 28px; }
        nav a { color: var(--text-soft); text-decoration: none; font-size: 0.9rem; font-weight: 500; transition: color 0.2s; }
        a { color: var(--text-soft); text-decoration: none; font-size: 0.9rem; font-weight: 500; transition: color 0.2s; }
        nav a:hover { color: var(--red); }

        .section {
            max-width: 1100px;
            margin: 0 auto 10px;
            padding: 20px 24px;
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
            transition: border-color 0.2s, transform 0.2s, box-shadow 0.2s;
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
        .profile-card .body { padding: 22px; }
        .profile-card .body h3 { font-size: 1.15rem; font-weight: 600; margin-bottom: 6px; }
        .profile-card .body .meta { font-size: 0.85rem; color: var(--red); margin-bottom: 10px; }
        .profile-card .body p { color: var(--text-soft); font-size: 0.9rem; margin-bottom: 16px; line-height: 1.55; }
        .profile-card .body a {
            display: inline-block;
            padding: 10px 18px;
            background: var(--accent-dim);
            color: var(--red);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 600;
            border-radius: 8px;
            transition: background 0.2s, color 0.2s;
        }
        .profile-card .body a:hover { background: var(--red); color: var(--white); }

        .articles { display: flex; flex-direction: column; gap: 28px; }
        .article {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 32px 36px;
            transition: border-color 0.2s;
        }
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
            .hero { padding: 70px 20px 56px; }
            .section { padding: 48px 20px; }
            .article { padding: 24px 22px; }
        }
    </style>
</head>
<body>

<header class="hero">
    <span class="badge"><?=$city?> Escort • <?=$city?> Escort Bayan</span>
    <h1 class="font-display"><?=$city?> Escort</h1>
</header>

<nav>
    <div class="wrap">
        <?php
        foreach ($districts as $district) {
            $slug = seo($district."-escort");
        ?>
        <a href="/ilce/<?=$slug;?>" title="<?=$district;?> Escort"><?=$district;?> Escort</a>
        <?php } ?>
    </div>
</nav>
<section class="section" id="mersin-escort">
    <p class="section-desc" style="text-align: left;"><?=$seoText;?></p>
</section>

<section class="section" id="mersin">
    <h2 class="section-title">Mersin Escort</h2>
    <p class="section-desc">Akdeniz'in incisi Mersin'de refakat ve escort hizmeti; sosyal davetler, iş yemekleri ve özel anlar için güvenilir eşlik sunar.</p>
    <div class="zones">
        <div class="zone-card">
            <h3>Mersin Merkez</h3>
            <p>Güvenevler, Batıkent, Eğriçam, Barbaros, 50. Yıl bölgelerinde refakat ve escort hizmetleri. Özel davetler, gala ve iş etkinlikleri için zarif eşlik. Gizlilik ve güven ön planda.</p>
        </div>
        <div class="zone-card">
            <h3>Mezitli Escort</h3>
            <p>Viranşehir, Akdeniz, Kuyuluk bölgelerinde üniversite ve iş merkezi çevresinde refakat ve escort hizmetleri. Konferans, davet ve akşam organizasyonları. Esnek saatler, profesyonel hizmet.</p>
        </div>
        <div class="zone-card">
            <h3>Mersin Yenişehir Escort</h3>
            <p>Mersin Yenişehir çevresinde dinamik refakat ve escort hizmetleri. İş yemekleri, özel davetler ve sosyal etkinliklere eşlik. Ulaşım kolay, güvenilir escort profilleri.</p>
        </div>
    </div>
</section>

<section class="section" id="bornova">
    <h2 class="section-title">Bornova Escort</h2>
    <p class="section-desc">Bornova, Ege Üniversitesi ve iş merkezleriyle İzmir'in en hareketli ilçelerinden biri. Refakat talebi hem gündüz hem akşam yoğundur.</p>
    <p style="color: var(--text-soft); font-size: 0.98rem;">Bornova AVM, Forum ve çevresindeki restoranlar sık buluşma noktalarıdır. İş yemekleri, konferans eşliği ve özel davetler için deneyimli refakatçılar tercih edilir. Gizlilik ve net iletişim temel prensiplerdir.</p>
</section>

<section class="section" id="buca">
    <h2 class="section-title">Buca Escort</h2>
    <p class="section-desc">Buca, yoğun nüfusu ve ulaşım imkânlarıyla refakat hizmeti arayanlar için uygun bir bölgedir.</p>
    <p style="color: var(--text-soft); font-size: 0.98rem;">İlçe merkezi, Şirinyer ve Evka-1 çevresinde birçok buluşma noktası bulunur. Metro ve otobüs hatları ulaşımı kolaylaştırır. Buca escort profilleri genellikle esnek çalışma saatleri sunar; güvenilir kanallardan iletişim kurulması önerilir.</p>
</section>

<section class="section" id="profiller">
    <h2 class="section-title"><?=$city?> Escort Bayan Profilleri</h2>
    <p class="section-desc">İzmir, Bornova ve Buca bölgelerinde hizmet veren escort profilleri.</p>
    <div class="profile-grid">
        <div class="profile-card">
            <div class="avatar">👩</div>
            <div class="body">
                <h3>Defne</h3>
                <p class="meta">26 · İzmir Merkez</p>
                <p>Alsancak ve Kordon'da refakat. Sosyal etkinlikler ve özel davetler. Gizlilik öncelikli.</p>
                <a href="#iletisim">İletişim</a>
            </div>
        </div>
        <div class="profile-card">
            <div class="avatar">👩</div>
            <div class="body">
                <h3>Zeynep</h3>
                <p class="meta">28 · Buca</p>
                <p>Buca'da dinamik refakat. İş yemekleri ve akşam organizasyonları. Deneyimli ve güvenilir.</p>
                <a href="#iletisim">İletişim</a>
            </div>
        </div>
        <div class="profile-card">
            <div class="avatar">👩</div>
            <div class="body">
                <h3>Melis</h3>
                <p class="meta">25 · Bornova</p>
                <p>Bornova ve üniversite çevresinde refakat. Konferans ve davetlere uyumlu. Esnek saatler.</p>
                <a href="#iletisim">İletişim</a>
            </div>
        </div>
        <div class="profile-card">
            <div class="avatar">👩</div>
            <div class="body">
                <h3>Selin</h3>
                <p class="meta">29 · İzmir / Bornova</p>
                <p>İzmir genelinde refakat. Özel davetler ve iş etkinlikleri. Çok dilli, profesyonel.</p>
                <a href="#iletisim">İletişim</a>
            </div>
        </div>
        <div class="profile-card">
            <div class="avatar">👩</div>
            <div class="body">
                <h3>Ece</h3>
                <p class="meta">24 · Buca</p>
                <p>Buca'da genç ve sosyal refakat. Özel davetler ve partiler. Güvenilir hizmet.</p>
                <a href="#iletisim">İletişim</a>
            </div>
        </div>
        <div class="profile-card">
            <div class="avatar">👩</div>
            <div class="body">
                <h3>Ada</h3>
                <p class="meta">27 · Bornova / İzmir</p>
                <p>Bornova ve merkez bölgede refakat. İş yemekleri ve sosyal davetler. İngilizce bilir.</p>
                <a href="#iletisim">İletişim</a>
            </div>
        </div>
    </div>
</section>

<section class="section no-bottom" id="makaleler">
    <h2 class="section-title">Makaleler</h2>
    <p class="section-desc">İzmir Escort, Bornova Escort ve Buca Escort hakkında rehber yazıları.</p>
    <div class="articles">

        <article class="article">
            <h3>İzmir Escort Hizmeti Nedir?</h3>
            <p class="meta">İzmir Escort · Genel</p>
            <p>İzmir escort hizmeti, sosyal ve profesyonel ortamlarda zarif eşlik sunan refakat hizmetidir. İş yemekleri, özel davetler, düğünler veya şehir turu gibi senaryolarda talep edilir. Müşteri ve refakatçı önceden buluşma yeri, süre ve ücreti netleştirir; gizlilik ve karşılıklı saygı temel prensiplerdir. İzmir merkez, Bornova ve Buca'da güvenilir profiller bulunmaktadır.</p>
        </article>

        <article class="article">
            <h3>Bornova Escort: Bölge ve Talepler</h3>
            <p class="meta">Bornova Escort · Rehber</p>
            <p>Bornova, Ege Üniversitesi kampüsü ve iş merkezleriyle dinamik bir ilçedir. Bornova escort talebi; iş yemekleri, konferans eşliği, özel davetler ve şehir içi aktivitelerden oluşur. Bornova AVM ve Forum çevresi sık buluşma noktalarıdır. Profil seçerken deneyimli ve iletişim becerisi yüksek refakatçıları tercih etmek, gizliliği ön planda tutmak önemlidir.</p>
        </article>

        <article class="article">
            <h3>Buca Escort Seçerken Dikkat Edilecekler</h3>
            <p class="meta">Buca Escort · Güvenlik</p>
            <p>Buca escort seçerken profilin gerçek ve güncel olmasına, iletişim dilinin profesyonel olmasına dikkat edilmelidir. Buluşma yeri olarak ulaşımı kolay ve güvenli mekânlar tercih edilmeli; süre, ücret ve ek hizmetler randevudan önce netleştirilmelidir. Güvenilir kanallar üzerinden iletişim kurmak riski azaltır. Karşılıklı saygı ve net sınırlar rahat bir deneyim sağlar.</p>
        </article>

        <article class="article">
            <h3>İzmir, Bornova ve Buca'da Gizlilik</h3>
            <p class="meta">Gizlilik · Güvenlik</p>
            <p>Escort ve refakat hizmetinde gizlilik hem müşteri hem hizmet veren için kritiktir. Kimlik bilgileri ve randevu detayları korunmalıdır. Güvenilir profiller müşteri bilgilerini üçüncü kişilerle paylaşmaz. İlk iletişimde aşırı kişisel bilgi paylaşmaktan kaçınmak, randevu yerini kalabalık ve güvenli tutmak önerilir. İzmir, Bornova ve Buca'da ciddi refakatçılar gizlilik prensibine bağlıdır.</p>
        </article>

        <article class="article">
            <h3>Buluşma Mekânları: İzmir, Bornova, Buca</h3>
            <p class="meta">Buluşma · Mekânlar</p>
            <p>İzmir merkezde Alsancak, Kordon, Konak; Bornova'da AVM ve Forum çevresi; Buca'da ilçe merkezi ve Şirinyer sık tercih edilen bölgelerdir. İlk randevularda otel lobisi veya merkezi restoranlar güvenli seçeneklerdir. Her iki tarafın da ulaşım açısından rahat edeceği nokta seçilmeli; özel mekân için güvenilir oteller tercih edilmelidir.</p>
        </article>

        <article class="article">
            <h3>İzmir Escort, Bornova Escort, Buca Escort: Özet</h3>
            <p class="meta">Rehber · Özet</p>
            <p>İzmir escort hizmeti merkez ilçeler ve Bornova, Buca'da yoğun talep görür. Her bölgede güvenilir profil seçimi, net buluşma-ödeme-süre koşulları ve gizlilik prensibi geçerlidir. Doğru iletişim kanalları kullanıldığında İzmir, Bornova ve Buca'da kaliteli ve güvenli refakat deneyimi yaşanabilir.</p>
        </article>

    </div>
</section>

<section id="iletisim" class="cta">
    <h2 class="section-title">İletişim</h2>
    <p><?=$city?> Escort Bayan hizmetleri hakkında bilgi almak için iletişime geçebilirsiniz. Gizlilik ve güvenlik önceliklidir.</p>
    <a href="#" class="btn">Mesaj Gönder</a>
</section>

<footer>
    © 2026 <?=$city?> Escort — Tüm Hakları Saklıdır.
    <br>
    <a href="/sitemap.xml">Sitemap</a>
</footer>
</body>
</html>
