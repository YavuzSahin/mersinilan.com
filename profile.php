<?php
$site           = "https://mersinilan.com";
$city           = "Mersin";
$districts      = array("Akdeniz", "Mezitli", "Erdemli", "Tarsus", "Toroslar", "Yenişehir", "Anamur", "Silifke");

$id             = $_GET["id"];
$profiles       = file_get_contents("db/json/profiles.json");
$profile_details=json_decode($profiles,true);
print_r($profile_details);

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


$arrayVar = [
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarına Nasıl Ulaşırım?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort İlanlarına ulaşmak için ana sayfamızdaki güncel ilanlar bölümünü ziyaret edebilirsiniz. ".$city." Escort platformumuz, kullanıcı dostu bir arayüzle tasarlanmıştır ve ".$city." Escort Bayan profillerini kolayca filtreleyerek size en uygun seçenekleri sunar. Her bir ilan, detaylı bilgiler, fotoğraflar ve iletişim seçenekleriyle donatılmıştır, böylece hızlı ve güvenli bir şekilde iletişim kurabilirsiniz.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Bayan Profilleri Ne Kadar Güncel?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort Bayan profilleri, platformumuzda günlük olarak güncellenir. Yeni profiller eklenir, mevcut ilanlar düzenli olarak kontrol edilir ve eski bilgiler yenilenir. ".$city." Escort İlanları, kullanıcıların en güncel ve doğru bilgilere erişmesini sağlamak için sürekli moderasyon altındadır. Böylece her zaman en yeni ve güvenilir ".$city." Escort Bayan seçeneklerine ulaşabilirsiniz.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Randevu Sistemi Nasıl Çalışır?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort Randevu sistemi, hızlı ve kullanıcı odaklı bir deneyim sunar. ".$city." Escort İlanları üzerinden seçtiğiniz profile tıklayarak iletişim bilgilerine ulaşabilirsiniz. Profil detaylarında yer alan iletişim kanalları aracılığıyla doğrudan bağlantı kurabilir ve randevu talebinizi iletebilirsiniz. Platformumuz, mobil uyumlu yapısıyla her yerden kolay erişim sağlar ve ".$city." Escort Bayanlarla hızlıca randevu ayarlamanıza olanak tanır.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Hizmetleri Güvenli mi?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort platformu, kullanıcı güvenliğini en üst düzeyde tutar. Tüm iletişim kanalları SSL şifreleme teknolojisiyle korunur ve kullanıcı verileri asla üçüncü taraflarla paylaşılmaz. ".$city." Escort Bayan profilleri, sahte profillerin önüne geçmek için düzenli olarak doğrulanır. Ayrıca, platformumuzdaki ".$city." Escort İlanları moderasyon ekibimiz tarafından titizlikle incelenir, böylece güvenli ve güvenilir bir deneyim sunar.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Güncel Adresini Nasıl Bulurum?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort hizmetlerimize kesintisiz erişim için güncel adresimizi sosyal medya hesaplarımızdan veya güvenilir platformlardan takip edebilirsiniz. Türkiye’deki erişim engellemeleri nedeniyle adreslerimiz zaman zaman değişebilir, ancak ".$city." Escort İlanları ve ".$city." Escort Bayan profillerine erişimde herhangi bir veri kaybı yaşanmaz. Güncel adres duyuruları anında paylaşılır, böylece hizmetlerimize her zaman ulaşabilirsiniz.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Bayan Seçimi Nasıl Yapılır?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort Bayan seçimi, platformumuzun kullanıcı dostu arayüzüyle oldukça kolaydır. ".$city." Escort İlanları bölümünde, her profil detaylı açıklamalar, hizmet türleri ve fotoğraflarla birlikte sunulur. Kullanıcılar, tercihlerine göre filtreleme yaparak kendilerine en uygun ".$city." Escort Bayan profilini seçebilir. İletişim bilgileri doğrudan ilanda yer alır, böylece hızlıca bağlantı kurabilirsiniz.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarında Hangi Bilgiler Yer Alır?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort İlanları, kullanıcıların bilinçli seçim yapabilmesi için kapsamlı bilgiler içerir. Her ilanda, ".$city." Escort Bayan profiline ait fotoğraflar, hizmet detayları, müsaitlik durumu ve iletişim bilgileri bulunur. Ayrıca, kullanıcıların tercihlerine göre hizmet türleri ve özel talepler de açıklanır. ".$city." Escort platformu, şeffaf ve güvenilir bir deneyim sunmak için tüm ilanları düzenli olarak günceller.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Hizmetleri Neler Sunar?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort hizmetleri, farklı kullanıcı ihtiyaçlarına hitap eden geniş bir yelpazede sunulur. ".$city." Escort Bayan profilleri, özel randevular, sosyal etkinlikler veya kişiselleştirilmiş deneyimler gibi çeşitli hizmetler içerir. ".$city." Escort İlanları, her bir hizmetin detaylarını açıklar ve kullanıcıların ihtiyaçlarına en uygun seçeneği bulmalarına yardımcı olur. Platformumuz, her zevke uygun premium hizmetler sunmayı hedefler.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Platformunda Mobil Erişim Var mı?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => "Evet, ".$city." Escort platformu tamamen mobil uyumludur. Telefon veya tablet üzerinden ".$city." Escort İlanları ve ".$city." Escort Bayan profillerine kolayca erişebilirsiniz. Mobil arayüzümüz, hızlı gezinme ve anlık randevu talepleri için optimize edilmiştir. Bu sayede, nerede olursanız olun ".$city." Escort hizmetlerine kesintisiz ulaşabilir ve keyifli bir deneyim yaşayabilirsiniz.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarını Görüntülemek Ücretli mi?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort İlanlarını görüntülemek tamamen ücretsizdir. Platformumuz, kullanıcıların ".$city." Escort Bayan profillerini ve hizmet detaylarını hiçbir ücret ödemeden incelemesine olanak tanır. İletişim kurmak veya randevu almak için ise ilanlarda belirtilen iletişim kanallarını kullanabilirsiniz. ".$city." Escort platformu, şeffaf ve erişilebilir bir deneyim sunar.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Müşteri Desteği Nasıl Sağlanır?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort platformu, kullanıcılarına 24/7 müşteri desteği sunar. Canlı sohbet, e-posta veya sosyal medya üzerinden destek ekibimize ulaşabilirsiniz. ".$city." Escort İlanları veya ".$city." Escort Bayan profilleri hakkında sorularınız varsa, destek ekibimiz hızlı ve etkili çözümler sunar. Kullanıcı memnuniyeti bizim için önceliklidir.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Adresi Neden Değişiyor?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort platformu, Türkiye’deki internet erişim engellemeleri nedeniyle zaman zaman adres değişikliği yapar. Bu değişiklikler, kullanıcıların ".$city." Escort İlanları ve ".$city." Escort Bayan hizmetlerine kesintisiz erişimini sağlamak içindir. Yeni adreslerimiz sosyal medya hesaplarımızda ve güvenilir platformlarda anında duyurulur, böylece hizmetlerimizden kopmadan devam edebilirsiniz.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanları Ne Sıklıkla Güncelleniyor?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort İlanları, kullanıcıların en güncel bilgilere erişmesi için günlük ve haftalık olarak yenilenir. Yeni".$city." Escort Bayan profilleri eklenir, mevcut ilanlar kontrol edilir ve eski bilgiler güncellenir. Bu sayede, platformumuzda her zaman en yeni ve doğru ".$city." Escort hizmetlerine ulaşabilirsiniz.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarında Sahte Profil Önleniyor mu?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort platformu, sahte profillerin önüne geçmek için sıkı bir doğrulama ve moderasyon süreci uygular. ".$city." Escort Bayan profilleri, gerçeklik ve doğruluk açısından düzenli olarak kontrol edilir. Kullanıcı güvenliğini sağlamak için tüm ".$city." Escort İlanları titizlikle incelenir ve yalnızca onaylı profiller yayınlanır.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarına Başvuru Nasıl Yapılır?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort İlanlarına başvuru yapmak için ana sayfamızdaki başvuru formunu doldurabilirsiniz. Formda gerekli bilgileri sağlayarak veya destek ekibimizle iletişime geçerek başvuru sürecini başlatabilirsiniz. ".$city." Escort platformu, başvuru işlemlerini hızlı ve kolay hale getirmek için kullanıcı dostu bir sistem sunar.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarında Gizlilik Nasıl Korunur?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort platformu, kullanıcı gizliliğini en üst düzeyde korur. ".$city." Escort Bayan profilleri ve iletişim bilgileri, üçüncü taraflarla asla paylaşılmaz. Tüm veriler SSL şifreleme ile korunur ve platformumuz, ".$city." Escort İlanları üzerinden yapılan işlemlerin güvenliğini garanti eder. Kullanıcıların kişisel bilgileri gizli tutulur.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Hizmetlerinde Yaş Sınırı Nedir?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort hizmetleri, yalnızca 18 yaş ve üzeri kullanıcılar için sunulur. ".$city." Escort İlanları oluşturmak veya hizmetlerden faydalanmak için yaş sınırı kuralına uyulması zorunludur. Platformumuz, bu kurala sıkı sıkıya bağlıdır ve tüm kullanıcıların yaş doğrulamasını yapar.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarında Fotoğraf Zorunlu mu?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort İlanları için fotoğraf eklemek, kullanıcıların dikkatini çekmek ve güven oluşturmak açısından tavsiye edilir, ancak zorunlu değildir. ".$city." Escort Bayan profilleri, detaylı açıklamalar ve hizmet bilgileriyle desteklenir, böylece kullanıcılar fotoğraf olmadan da doğru seçim yapabilir.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarıyla İletişim Nasıl Kurulur?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort İlanları üzerinden iletişim kurmak oldukça basittir. Her ilanda yer alan iletişim bilgileri aracılığıyla, ".$city." Escort Bayan profilleriyle doğrudan bağlantı kurabilirsiniz. Platformumuz, hızlı ve güvenli iletişim kanalları sunar, böylece kullanıcılar anında randevu taleplerini iletebilir.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Hizmet Ücretleri Nasıl Belirlenir?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort hizmet ücretleri, her <?=$city?> Escort Bayan profilinin kendi tercihlerine göre belirlenir. <?=$city?> Escort İlanları, ücretlendirme detaylarını açıkça belirtir ve kullanıcıların şeffaf bir şekilde bilgi almasını sağlar. Hizmet türüne ve süresine bağlı olarak ücretler değişiklik gösterebilir.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort İlanlarına Yorum Yapılabilir mi?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => "Evet, <?=$city?> Escort platformu, kullanıcıların deneyimlerini paylaşmasına olanak tanır. <?=$city?> Escort İlanları altında yorum bırakabilir, hizmetler hakkında geri bildirimde bulunabilirsiniz. Bu özellik, diğer kullanıcıların doğru seçim yapmasına yardımcı olur ve platformun şeffaflığını artırır.",
        ],
    ],
    [
        "type" => "Question",
        "name" => $city."  Escort Hizmetlerinde Hangi Seçenekler Sunuluyor?",
        "acceptedAnswer" => [
            "type" => "Answer",
            "text" => $city." Escort hizmetleri, kullanıcıların farklı tercihlerine hitap eden geniş bir yelpazede sunulur. <?=$city?> Escort Bayan profilleri, sosyal etkinliklerden özel buluşmalara kadar çeşitli hizmetler sunar. <?=$city?> Escort İlanları, her bir hizmetin detaylarını açıklayarak kullanıcıların ihtiyaçlarına uygun seçenekleri kolayca bulmasını sağlar.",
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="tr" >
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover" />
    <meta name="googlebot" content="index,follow">
    <meta name="bingbot" content="index,follow">


    <meta name="language" content="tr">
    <meta name="distribution" content="global">
    <meta name="description" content="<?=$city?> Escort hizmetleri ile unutulmaz ve kaliteli deneyimler yaşayın. <?=$city?> Escort Bayan profilleri ve <?=$city?> Escort İlanları ile hızlı randevu fırsatları." />
    <link rel="canonical" href="<?=$site;?>/profil/<?=$id;?>" />
    <meta name="keywords" content="<?=$city?> Escort, <?=$city?> Escort Bayan, <?=$city?> Escort İlanları, <?=$city?> Vip Escort, <?=$city?> Escort Randevu, <?=$city?> Premium Escort Hizmetleri, <?=$city?> Eskort, <?=$city?> Eskort Bayan, <?=$city?> Üniversiteli Escort, <?=$city?> Üniversiteli Eskort" />
    <meta property="og:title" content="<?=$city?> Escort - <?=date('Y');?> Güncel Escort Bayanlar - Randevu ve İlanlar" />
    <meta property="og:description" content="<?=$city?> Escort hizmetleri ile unutulmaz ve kaliteli deneyimler yaşayın. <?=$city?> Escort Bayan profilleri ve <?=$city?> Escort İlanları ile hızlı randevu fırsatları." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sachsepoolservice.com/" />
    <meta property="og:image" content="/vip-escort-logo.png" />
    <meta property="og:locale" content="tr_TR" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$city?> Escort - <?=date('Y');?> Güncel Escort Bayanlar - Randevu ve İlanlar"" />
    <meta name="twitter:description" content="<?=$city?> Escort hizmetleri ile unutulmaz ve kaliteli deneyimler yaşayın. <?=$city?> Escort Bayan profilleri ve <?=$city?> Escort İlanları ile hızlı randevu fırsatları." />
    <meta name="twitter:image" content="/vip-escort-logo.png" />
    <meta name="twitter:site" content="@MersinIlancom" />

    <meta name="author" content="<?=$city?>  Escort Platformu" />


    <title><?=$city?> Escort | <?=$city?> Escort Bayan | <?=$city?> Escort Kız  - <?=date('Y');?> Güncel Escort Bayanlar</title>
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
            .hero { padding: 70px 20px 56px; }
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
        .accordion {
            color: var(--theme);
            border: 2px solid;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .tab__label,
        .tab__close {
            display: flex;
            color: white;
            background: transparent;
            border-bottom: 2px solid var(--border);
            cursor: pointer;
        }
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
        .tab__close {
            justify-content: flex-end;
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
        }
        .accordion--radio {
            --theme: var(--secondary);
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
            "type": "FAQPage",
            "mainEntity": [
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarına Nasıl Ulaşırım?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort İlanlarına ulaşmak için ana sayfamızdaki güncel ilanlar bölümünü ziyaret edebilirsiniz. <?=$city?> Escort platformumuz, kullanıcı dostu bir arayüzle tasarlanmıştır ve <?=$city?> Escort Bayan profillerini kolayca filtreleyerek size en uygun seçenekleri sunar. Her bir ilan, detaylı bilgiler, fotoğraflar ve iletişim seçenekleriyle donatılmıştır, böylece hızlı ve güvenli bir şekilde iletişim kurabilirsiniz."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Bayan Profilleri Ne Kadar Güncel?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort Bayan profilleri, platformumuzda günlük olarak güncellenir. Yeni profiller eklenir, mevcut ilanlar düzenli olarak kontrol edilir ve eski bilgiler yenilenir. <?=$city?> Escort İlanları, kullanıcıların en güncel ve doğru bilgilere erişmesini sağlamak için sürekli moderasyon altındadır. Böylece her zaman en yeni ve güvenilir <?=$city?> Escort Bayan seçeneklerine ulaşabilirsiniz."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Randevu Sistemi Nasıl Çalışır?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort Randevu sistemi, hızlı ve kullanıcı odaklı bir deneyim sunar. <?=$city?> Escort İlanları üzerinden seçtiğiniz profile tıklayarak iletişim bilgilerine ulaşabilirsiniz. Profil detaylarında yer alan iletişim kanalları aracılığıyla doğrudan bağlantı kurabilir ve randevu talebinizi iletebilirsiniz. Platformumuz, mobil uyumlu yapısıyla her yerden kolay erişim sağlar ve <?=$city?> Escort Bayanlarla hızlıca randevu ayarlamanıza olanak tanır."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Hizmetleri Güvenli mi?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort platformu, kullanıcı güvenliğini en üst düzeyde tutar. Tüm iletişim kanalları SSL şifreleme teknolojisiyle korunur ve kullanıcı verileri asla üçüncü taraflarla paylaşılmaz. <?=$city?> Escort Bayan profilleri, sahte profillerin önüne geçmek için düzenli olarak doğrulanır. Ayrıca, platformumuzdaki <?=$city?> Escort İlanları moderasyon ekibimiz tarafından titizlikle incelenir, böylece güvenli ve güvenilir bir deneyim sunar."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Güncel Adresini Nasıl Bulurum?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort hizmetlerimize kesintisiz erişim için güncel adresimizi sosyal medya hesaplarımızdan veya güvenilir platformlardan takip edebilirsiniz. Türkiye’deki erişim engellemeleri nedeniyle adreslerimiz zaman zaman değişebilir, ancak <?=$city?> Escort İlanları ve <?=$city?> Escort Bayan profillerine erişimde herhangi bir veri kaybı yaşanmaz. Güncel adres duyuruları anında paylaşılır, böylece hizmetlerimize her zaman ulaşabilirsiniz."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Bayan Seçimi Nasıl Yapılır?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort Bayan seçimi, platformumuzun kullanıcı dostu arayüzüyle oldukça kolaydır. <?=$city?> Escort İlanları bölümünde, her profil detaylı açıklamalar, hizmet türleri ve fotoğraflarla birlikte sunulur. Kullanıcılar, tercihlerine göre filtreleme yaparak kendilerine en uygun <?=$city?> Escort Bayan profilini seçebilir. İletişim bilgileri doğrudan ilanda yer alır, böylece hızlıca bağlantı kurabilirsiniz."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarında Hangi Bilgiler Yer Alır?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort İlanları, kullanıcıların bilinçli seçim yapabilmesi için kapsamlı bilgiler içerir. Her ilanda, <?=$city?> Escort Bayan profiline ait fotoğraflar, hizmet detayları, müsaitlik durumu ve iletişim bilgileri bulunur. Ayrıca, kullanıcıların tercihlerine göre hizmet türleri ve özel talepler de açıklanır. <?=$city?> Escort platformu, şeffaf ve güvenilir bir deneyim sunmak için tüm ilanları düzenli olarak günceller."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Hizmetleri Neler Sunar?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort hizmetleri, farklı kullanıcı ihtiyaçlarına hitap eden geniş bir yelpazede sunulur. <?=$city?> Escort Bayan profilleri, özel randevular, sosyal etkinlikler veya kişiselleştirilmiş deneyimler gibi çeşitli hizmetler içerir. <?=$city?> Escort İlanları, her bir hizmetin detaylarını açıklar ve kullanıcıların ihtiyaçlarına en uygun seçeneği bulmalarına yardımcı olur. Platformumuz, her zevke uygun premium hizmetler sunmayı hedefler."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Platformunda Mobil Erişim Var mı?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "Evet, <?=$city?> Escort platformu tamamen mobil uyumludur. Telefon veya tablet üzerinden <?=$city?> Escort İlanları ve <?=$city?> Escort Bayan profillerine kolayca erişebilirsiniz. Mobil arayüzümüz, hızlı gezinme ve anlık randevu talepleri için optimize edilmiştir. Bu sayede, nerede olursanız olun <?=$city?> Escort hizmetlerine kesintisiz ulaşabilir ve keyifli bir deneyim yaşayabilirsiniz."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarını Görüntülemek Ücretli mi?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort İlanlarını görüntülemek tamamen ücretsizdir. Platformumuz, kullanıcıların <?=$city?> Escort Bayan profillerini ve hizmet detaylarını hiçbir ücret ödemeden incelemesine olanak tanır. İletişim kurmak veya randevu almak için ise ilanlarda belirtilen iletişim kanallarını kullanabilirsiniz. <?=$city?> Escort platformu, şeffaf ve erişilebilir bir deneyim sunar."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Müşteri Desteği Nasıl Sağlanır?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort platformu, kullanıcılarına 24/7 müşteri desteği sunar. Canlı sohbet, e-posta veya sosyal medya üzerinden destek ekibimize ulaşabilirsiniz. <?=$city?> Escort İlanları veya <?=$city?> Escort Bayan profilleri hakkında sorularınız varsa, destek ekibimiz hızlı ve etkili çözümler sunar. Kullanıcı memnuniyeti bizim için önceliklidir."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Adresi Neden Değişiyor?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort platformu, Türkiye’deki internet erişim engellemeleri nedeniyle zaman zaman adres değişikliği yapar. Bu değişiklikler, kullanıcıların <?=$city?> Escort İlanları ve <?=$city?> Escort Bayan hizmetlerine kesintisiz erişimini sağlamak içindir. Yeni adreslerimiz sosyal medya hesaplarımızda ve güvenilir platformlarda anında duyurulur, böylece hizmetlerimizden kopmadan devam edebilirsiniz."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanları Ne Sıklıkla Güncelleniyor?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort İlanları, kullanıcıların en güncel bilgilere erişmesi için günlük ve haftalık olarak yenilenir. Yeni <?=$city?> Escort Bayan profilleri eklenir, mevcut ilanlar kontrol edilir ve eski bilgiler güncellenir. Bu sayede, platformumuzda her zaman en yeni ve doğru <?=$city?> Escort hizmetlerine ulaşabilirsiniz."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarında Sahte Profil Önleniyor mu?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort platformu, sahte profillerin önüne geçmek için sıkı bir doğrulama ve moderasyon süreci uygular. <?=$city?> Escort Bayan profilleri, gerçeklik ve doğruluk açısından düzenli olarak kontrol edilir. Kullanıcı güvenliğini sağlamak için tüm <?=$city?> Escort İlanları titizlikle incelenir ve yalnızca onaylı profiller yayınlanır."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarına Başvuru Nasıl Yapılır?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort İlanlarına başvuru yapmak için ana sayfamızdaki başvuru formunu doldurabilirsiniz. Formda gerekli bilgileri sağlayarak veya destek ekibimizle iletişime geçerek başvuru sürecini başlatabilirsiniz. <?=$city?> Escort platformu, başvuru işlemlerini hızlı ve kolay hale getirmek için kullanıcı dostu bir sistem sunar."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarında Gizlilik Nasıl Korunur?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort platformu, kullanıcı gizliliğini en üst düzeyde korur. <?=$city?> Escort Bayan profilleri ve iletişim bilgileri, üçüncü taraflarla asla paylaşılmaz. Tüm veriler SSL şifreleme ile korunur ve platformumuz, <?=$city?> Escort İlanları üzerinden yapılan işlemlerin güvenliğini garanti eder. Kullanıcıların kişisel bilgileri gizli tutulur."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Hizmetlerinde Yaş Sınırı Nedir?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort hizmetleri, yalnızca 18 yaş ve üzeri kullanıcılar için sunulur. <?=$city?> Escort İlanları oluşturmak veya hizmetlerden faydalanmak için yaş sınırı kuralına uyulması zorunludur. Platformumuz, bu kurala sıkı sıkıya bağlıdır ve tüm kullanıcıların yaş doğrulamasını yapar."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarında Fotoğraf Zorunlu mu?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort İlanları için fotoğraf eklemek, kullanıcıların dikkatini çekmek ve güven oluşturmak açısından tavsiye edilir, ancak zorunlu değildir. <?=$city?> Escort Bayan profilleri, detaylı açıklamalar ve hizmet bilgileriyle desteklenir, böylece kullanıcılar fotoğraf olmadan da doğru seçim yapabilir."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarıyla İletişim Nasıl Kurulur?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort İlanları üzerinden iletişim kurmak oldukça basittir. Her ilanda yer alan iletişim bilgileri aracılığıyla, <?=$city?> Escort Bayan profilleriyle doğrudan bağlantı kurabilirsiniz. Platformumuz, hızlı ve güvenli iletişim kanalları sunar, böylece kullanıcılar anında randevu taleplerini iletebilir."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Hizmet Ücretleri Nasıl Belirlenir?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort hizmet ücretleri, her <?=$city?> Escort Bayan profilinin kendi tercihlerine göre belirlenir. <?=$city?> Escort İlanları, ücretlendirme detaylarını açıkça belirtir ve kullanıcıların şeffaf bir şekilde bilgi almasını sağlar. Hizmet türüne ve süresine bağlı olarak ücretler değişiklik gösterebilir."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort İlanlarına Yorum Yapılabilir mi?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "Evet, <?=$city?> Escort platformu, kullanıcıların deneyimlerini paylaşmasına olanak tanır. <?=$city?> Escort İlanları altında yorum bırakabilir, hizmetler hakkında geri bildirimde bulunabilirsiniz. Bu özellik, diğer kullanıcıların doğru seçim yapmasına yardımcı olur ve platformun şeffaflığını artırır."
                    }
                },
                {
                    "type": "Question",
                    "name": "<?=$city?> Escort Hizmetlerinde Hangi Seçenekler Sunuluyor?",
                    "acceptedAnswer": {
                        "type": "Answer",
                        "text": "<?=$city?> Escort hizmetleri, kullanıcıların farklı tercihlerine hitap eden geniş bir yelpazede sunulur. <?=$city?> Escort Bayan profilleri, sosyal etkinliklerden özel buluşmalara kadar çeşitli hizmetler sunar. <?=$city?> Escort İlanları, her bir hizmetin detaylarını açıklayarak kullanıcıların ihtiyaçlarına uygun seçenekleri kolayca bulmasını sağlar."
                    }
                }
            ]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "type": "Organization",
            "name": "<?=$city?> Escort Platformu",
            "alternateName": ["<?=$city?> Escort", "<?=$city?> Escort Bayan", "<?=$city?> Escort İlanları"],
            "url": "<?=$site?>",
            "logo": {
                "type": "ImageObject",
                "url": "<?=$site;?>/vip-logo.png",
                "width": 250,
                "height": 250
            },
            "description": "<?=$city?> Escort ile kaliteli ve güvenilir hizmetler. <?=$city?> Escort Bayan profilleri ve <?=$city?> Escort İlanları ile en seçkin randevu fırsatları.",
            "potentialAction": {
                "type": "SearchAction",
                "target": "<?=$site;?>/search?q={search_term}",
                "query-input": "required name=search_term"
            },
            "sameAs": [
                "https://facebook.com/MersinIlancom",
                "https://twitter.com/MersinIlancom",
                "https://instagram.com/MersinIlancom"
            ],
            "address": {
                "type": "PostalAddress",
                "addressCountry": "TR"
            },
            "contactPoint": {
                "type": "ContactPoint",
                "contactType": "support",
                "url": "<?=$site;?>/support"
            }
        }
    </script>
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

<section class="section" id="<?=$id;?>"


<section class="section" id="mersin-escort">
    <p class="section-desc" style="text-align: left;"><?=$seoText;?></p>
</section>
</body>
</html>