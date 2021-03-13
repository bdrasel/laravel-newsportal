-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 02:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `link`, `ads`, `type`, `created_at`, `updated_at`) VALUES
(1, 'https://web.facebook.com/', 'image/ads/60464818069c6.jpg', 2, NULL, NULL),
(2, 'https://www.jagonews24.com/lifestyle/article/645516', 'image/ads/6046487d80109.jpg', 2, NULL, NULL),
(3, 'https://www.fiverr.com/', 'image/ads/604648bd06115.jpg', 1, NULL, NULL),
(4, 'https://www.webtalk.co/o/home', 'image/ads/604648cf705fe.jpg', 1, NULL, NULL),
(5, 'https://www.upwork.com/signup/home', 'image/ads/60464a7de388c.jpg', 2, NULL, NULL),
(6, 'https://translate.google.com/', 'image/ads/60464b01dec5c.jpg', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_hindi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_en`, `category_hindi`, `soft_delete`, `created_at`, `updated_at`) VALUES
(1, 'Entertainment', 'मनोरंजन', '0', NULL, NULL),
(2, 'International', 'अंतरराष्ट्रीय', '0', NULL, NULL),
(3, 'Sports', 'खेल', '0', NULL, NULL),
(4, 'Business', 'व्यापार', '0', NULL, NULL),
(6, 'Lifestyle', 'बॉलीवुड', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `distracts`
--

CREATE TABLE `distracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_hindi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distracts`
--

INSERT INTO `distracts` (`id`, `district_en`, `district_hindi`, `created_at`, `updated_at`) VALUES
(1, 'Bihar', 'बिहार', NULL, NULL),
(2, 'Dhaka', 'ढाका', NULL, NULL),
(3, 'Rajshahi', 'राजशाही', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livetvs`
--

CREATE TABLE `livetvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livetvs`
--

INSERT INTO `livetvs` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PwkI1RXc4Fs\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_11_132223_create_sessions_table', 1),
(7, '2021_02_12_104331_create_categories_table', 1),
(8, '2021_02_12_104613_create_subcategories_table', 1),
(9, '2021_02_17_062700_create_distracts_table', 2),
(10, '2021_02_17_062801_create_subdistracts_table', 2),
(11, '2021_02_18_084724_create_posts_table', 3),
(12, '2021_02_23_155301_create_social_table', 4),
(13, '2021_02_23_162755_create_seos_table', 5),
(14, '2021_02_23_170204_create_prayers_table', 6),
(15, '2021_02_24_083546_create_livetvs_table', 7),
(16, '2021_02_24_092722_create_notices_table', 8),
(17, '2021_02_24_152932_create_websites_table', 9),
(18, '2021_02_25_050009_create_photos_table', 10),
(19, '2021_02_25_083433_create_videos_table', 11),
(20, '2021_03_08_090300_create_ads_table', 12),
(21, '2021_03_10_033302_create_websitesettings_table', 13),
(22, '2021_03_10_040025_create_websitesettings_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to our website', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'image/photogallery/60373b5155434.jpg', 'Casting of Israeli actress as Cleopatra sparks anger', '0', NULL, NULL),
(2, 'image/photogallery/60373b8f0be77.jpg', 'Both education and life must be saved', '0', NULL, NULL),
(3, 'image/photogallery/60373c47a4a98.jpg', 'Casting of Israeli actress as Cleopatra sparks anger', '0', NULL, NULL),
(4, 'image/photogallery/60373d57d7297.jpg', 'Why do we use it?', '1', NULL, NULL),
(7, 'image/photogallery/603741d7ddffb.jpg', 'Welcome to Company', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `subdistrict_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_hindi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_hindi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_hindi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heeadline` int(11) DEFAULT NULL,
  `first_section` int(11) DEFAULT NULL,
  `first_section_thumbnail` int(11) DEFAULT NULL,
  `bigthumbnail` int(11) DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `subcategory_id`, `district_id`, `subdistrict_id`, `user_id`, `title_en`, `title_hindi`, `image`, `details_en`, `details_hindi`, `tags_en`, `tags_hindi`, `heeadline`, `first_section`, `first_section_thumbnail`, `bigthumbnail`, `post_date`, `post_month`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 1, 1, 1, 'Nation set to pay homage to language martyrs', 'राष्ट्र ने भाषा शहीदों को बाधा देने के लिए निर्धारित किया', 'image/post/603284d1273de.jpg', '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">The cultural affairs ministry has drawn up an elaborate programme to observe the ‘Shaheed Dibash’ (Language Martyrs Day) and the International Mother Language Day-2021 with solemn dignity.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">The programme was taken at an inter-ministerial meeting on 18 January last with state minister for cultural affairs KM Khalid in the chair.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">Bangabandhu’s special contribution to the language movement will be presented in various programmes on Martyrs’ Day and International Mother Language Day in line with the birth centenary of Father of the Nation Bangabandhu Sheikh Mujibur Rahman,</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">National flags will be kept half-mast in a proper manner having accurate size at all the government, semi-government, autonomous and private organisations and educational institutions.</p>', '<p>सांस्कृतिक मामलों के मंत्रालय ने ed शहीद दिबाश ’(भाषा शहीद दिवस) और अंतर्राष्ट्रीय मातृ भाषा दिवस -2021 का सम्मान करने के लिए एक विस्तृत कार्यक्रम तैयार किया है।</p><p><br></p><p>यह कार्यक्रम 18 जनवरी को एक अंतर-मंत्रिस्तरीय बैठक में लिया गया था, जिसमें राज्य के सांस्कृतिक मामलों के मंत्री केएम खालिद के साथ कुर्सी पर थे।</p><p><br></p><p>भाषा आंदोलन में बंगबंधु के विशेष योगदान को शहीद दिवस और अंतर्राष्ट्रीय मातृभाषा दिवस पर विभिन्न कार्यक्रमों में राष्ट्रपिता बंगबंधु शेख मुजीबुर रहमान के जन्म शताब्दी के अनुरूप प्रस्तुत किया जाएगा।</p><p><br></p><p>सभी सरकारी, अर्ध-सरकारी, स्वायत्त और निजी संगठनों और शैक्षणिक संस्थानों में सही आकार वाले राष्ट्रीय झंडे को उचित तरीके से रखा जाएगा।</p>', NULL, NULL, NULL, 1, 1, NULL, '21-02-2021', 'February', NULL, NULL),
(3, 3, 8, 1, 3, 1, 'Everton savour first win at Liverpool since 1999, Chelsea held', 'एवर्टन ने 1999 के बाद से लिवरपूल में पहली जीत हासिल की, चेल्सी आयोजित की', 'image/post/603287e26c105.jpg', '<p>Everton earned their first win at Liverpool since 1999 as the troubled Premier League champions crashed to a 2-0 defeat in the Merseyside derby, while Chelsea\'s revival under Thomas Tuchel stalled in a 1-1 draw against Southampton on Saturday.</p><p><br></p><p>Richarlison\'s early opener and Gylfi Sigurdsson\'s late penalty gave the Toffees a first win on any ground over Liverpool in 24 attempts dating back to 2010.</p><p><br></p><p>After a run of 68 league games unbeaten at Anfield, injury-ravaged Liverpool have lost their last four on home turf for the first time since 1923.</p><p><br></p><p>\"I\'m very pleased for the club and the supporters. I hope for sure that they are going to celebrate tonight,\" said Everton boss Carlo Ancelotti.</p><p><br></p><p>Liverpool have won just two of their last 11 league games to leave them in grave danger of missing out on Champions League football for the first time since Jurgen Klopp\'s first season in charge five years ago.</p>', '<p>एवर्टन ने 1999 के बाद लिवरपूल में अपनी पहली जीत हासिल की क्योंकि परेशान प्रीमियर लीग चैंपियन मर्सिडीज डर्बी में 2-0 से हार गए, जबकि थॉमस ट्यूशेल के तहत चेल्सी का पुनरुद्धार शनिवार को साउथेम्प्टन के खिलाफ 1-1 से ड्रॉ में रुक गया।</p><p><br></p><p>रिचर्डसन के शुरुआती सलामी बल्लेबाज और गेल्फी सिगुरड्सन की देर से सजा ने टॉफी को 2010 में वापस डेटिंग के 24 प्रयासों में लिवरपूल के किसी भी मैदान पर पहली जीत दिलाई।</p><p><br></p><p>Anfield में नाबाद 68 लीग खेलों के बाद, चोट-ग्रस्त लिवरपूल ने 1923 के बाद पहली बार घरेलू मैदान पर अपने अंतिम चार को खो दिया है।</p><p><br></p><p>\"मैं क्लब और समर्थकों के लिए बहुत प्रसन्न हूं। मुझे यकीन है कि वे आज रात जश्न मनाने जा रहे हैं,\" एवर्टन बॉस कार्लो एंसेलोटी ने कहा।</p><p><br></p><p>लिवरपूल ने अपने पिछले 11 लीग गेमों में से सिर्फ दो में जीत हासिल की है, ताकि उन्हें चैंपियंस लीग फुटबॉल में पांच साल पहले जेर्गन क्लोप के पहले सीज़न प्रभारी के गायब होने के गंभीर खतरे से बाहर निकाला जा सके।</p>', 'English Premier League', 'इंग्लिश प्रीमियर लीग', 1, 1, 1, NULL, '21-02-2021', 'February', NULL, NULL),
(4, 6, 16, 2, 6, 1, '‘Military diet’ to lose weight in 3 days', '3 दिनों में वजन कम करने के लिए \'सैन्य आहार\'', 'image/post/6039e4ed2003e.jpg', '<p>Many people are running in the race to lose weight! However, you are not getting the desired results! Because if you do not diet properly, you will not lose weight easily.</p><p>Therefore, you need to know how ready your body is for dieting. As well as understanding the body to diet.</p><p>Many people may lose weight, how to lose weight in a short time? He wants to know about different diet charts! One such diet plan is the \'military diet\'.</p><p>If you follow this diet, you can easily lose 3-4 kg weight in 3-6 days. Let\'s find out about this diet-</p><p><br></p><p>What is the military diet?</p><p>Nutritionists have created a military diet. It is also called Military Diet, Navy Diet, Army Diet, or Ice Cream Diet. This diet can be done through simple food, at a low cost.</p><p>This diet chart given by nutritionists is followed by army members from different countries to maintain proper weight. In this diet, you have to eat low calorie healthy food 3 days a week. There is no need to follow a diet for the remaining 4 days of the week.</p>', '<p>कई लोग वजन कम करने की दौड़ में शामिल हैं! हालाँकि, आपको वांछित परिणाम नहीं मिल रहे हैं! क्योंकि अगर आप सही तरीके से आहार नहीं लेते हैं, तो आप आसानी से अपना वजन कम नहीं करेंगे।</p><p><br></p><p>इसलिए, आपको यह जानना होगा कि आपका शरीर आहार के लिए कितना तैयार है। साथ ही शरीर को आहार के बारे में समझा।</p><p>बहुत से लोग अपना वजन कम कर सकते हैं, थोड़े समय में वजन कैसे कम करें? वह विभिन्न आहार चार्ट के बारे में जानना चाहता है! ऐसी ही एक आहार योजना है \'सैन्य आहार\'।</p><p><br></p><p>यदि आप इस आहार का पालन करते हैं, तो आप आसानी से 3-6 दिनों में 3-4 किलो वजन कम कर सकते हैं। आइए जानें इस आहार के बारे में-</p><p><br></p><p>सैन्य आहार क्या है?</p><p><br></p><p>पोषण विशेषज्ञों ने एक सैन्य आहार बनाया है। इसे सैन्य आहार, नौसेना आहार, सेना आहार या आइसक्रीम आहार भी कहा जाता है। यह आहार साधारण भोजन के माध्यम से, कम लागत पर किया जा सकता है।</p><p><br></p><p>पोषण विशेषज्ञों द्वारा दिए गए इस डाइट चार्ट के बाद विभिन्न देशों के सेना के सदस्यों द्वारा उचित वजन बनाए रखा जाता है। इस डाइट में आपको हफ्ते में 3 दिन कम कैलोरी वाला हेल्दी खाना खाना होता है। सप्ताह के शेष 4 दिनों के लिए आहार का पालन करने की आवश्यकता नहीं है।</p>', 'Health-tips', 'स्वास्थ्य सुझाव', 1, 1, 1, NULL, '27-02-2021', 'February', NULL, NULL),
(5, 6, 16, 3, 8, 1, 'How to eat corn to lose weight fast', 'तेजी से वजन कम करने के लिए मकई कैसे खाएं', 'image/post/6039e610ed392.jpg', '<p>Those who are thinking of losing weight should eat calorie measured food. This is why people at high doses are on a regular diet or exercise; They should eat foods that are high in fiber but low in fat.</p><p><br></p><p>One such food is corn. It has many health benefits. It also has a role in weight loss and even weight gain. It contains enough fiber to keep the stomach full for a long time. In addition, it contains good carbohydrates.</p><p>There is also lutein in the cornea, jaxanthin. Which is very beneficial for the eyes. Corn is also rich in fiber, minerals, anti-oxidants and vitamins. Which keeps the body healthy and increases digestive energy.</p><p><br></p><p>But you must cook corn in a healthy way. Then in a week you will see your weight has started to decrease. Learn how to eat corn to lose weight-</p><p><br></p><p>Cottonseed can be boiled and mixed with salt, pepper and lemon juice to make chaat. You can eat it as dinner. This will keep the stomach light, increase digestion and reduce weight.</p><p>Corn salad can be eaten either way. In this case, you can mix corn in the salad. You can make a healthy salad by mixing different fruits, cucumbers, tomatoes, capsicum, nuts and corn.</p><div><br></div>', '<p>जो लोग वजन कम करने के बारे में सोच रहे हैं, उन्हें कैलोरी मापा भोजन खाना चाहिए। यही कारण है कि उच्च खुराक पर लोग नियमित आहार या व्यायाम पर हैं; उन्हें ऐसे खाद्य पदार्थ खाने चाहिए जो फाइबर में उच्च लेकिन वसा में कम हों।</p><p><br></p><p>ऐसा ही एक भोजन है मकई। इसके कई स्वास्थ्य लाभ हैं। वजन कम करने और वजन बढ़ाने में भी इसकी भूमिका होती है। इसमें पेट को लंबे समय तक भरा रखने के लिए पर्याप्त फाइबर होता है। इसके अलावा, इसमें अच्छे कार्बोहाइड्रेट होते हैं।</p><p>कॉर्निया, जैक्सैन्थिन में ल्यूटिन भी होता है। जो आंखों के लिए बहुत फायदेमंद है। मकई फाइबर, खनिज, एंटी-ऑक्सीडेंट और विटामिन से भी समृद्ध है। जो शरीर को स्वस्थ रखता है और पाचन ऊर्जा को बढ़ाता है।</p><p><br></p><p>लेकिन आपको मक्के को स्वस्थ तरीके से पकाना चाहिए। फिर एक हफ्ते में आप देखेंगे कि आपका वजन घटने लगा है। जानिए वजन कम करने के लिए मकई कैसे खाएं-</p><p><br></p><p>चाट बनाने के लिए नमक, काली मिर्च और नींबू के रस के साथ उबला हुआ और उबला हुआ मिलाया जा सकता है। आप इसे रात के खाने के रूप में खा सकते हैं। इससे पेट हल्का रहेगा, पाचनशक्ति बढ़ेगी और वजन कम होगा।</p><p>कॉर्न सलाद को दोनों तरह से खाया जा सकता है। इस मामले में, आप सलाद में मकई को मिला सकते हैं। आप विभिन्न फलों, खीरे, टमाटर, शिमला मिर्च, नट्स और मकई को मिलाकर एक स्वस्थ सलाद बना सकते हैं।</p>', 'Health-tips', 'स्वास्थ्य सुझाव', 1, 1, 1, NULL, '27-02-2021', 'February', NULL, NULL),
(6, 3, 7, 1, 3, 1, 'Unsold at auction, Sodhi in IPL with new responsibilities', 'नीलामी में अनसोल्ड, नई जिम्मेदारियों के साथ आईपीएल में सोढ़ी', 'image/post/6039e6bb73585.webp', '<p>New Zealand leg-spinner Ish Sodhi will have to sit outside and play organizational duties when his teammates play for their respective teams in the IPL. Because no one bought him from the IPL auction, he remained unsold in the auction on February 18.</p><p><br></p><p>Although unsold at auction, Sodhi will be present in the IPL. But not as a player. Sodhi has been appointed as the liaison officer of their team by Rajasthan Royals, the champions of the first edition of the tournament. Sodhi played for the team in 2016 and 2019.</p><p><br></p><p>This time, Sodhi will work closely with Kumar Sangakkara, the new Director of Cricket in Rajasthan, and Jack Lash McCrum, the Chief Operating Officer. The Rajasthan Royals franchise has given the responsibility to Kiwi legspinner as part of the restructuring of their team.</p><p><br></p><p>\"Rajasthan Royals are a fancy and dynamic franchise,\" Sodhi said in a press statement issued after the new appointment. What a great connection between entertainment and cricket. I am very happy to be able to connect with my IPL family again.</p><p><br></p><p>Sodhir was to serve as Rajasthan\'s spin bowling consultant and operations executive in the 2020 IPL. But he could not join the IPL as he moved back to September instead of April-May. Because then he was waiting to be the father of the first child.</p><p><br></p><p>However, this time the responsibility is going to be completely different. \"Last year I was interested in working on the organizational side of the franchise and the Royals franchise was very supportive,\" Sodhi said. So that I can start my journey off the field. This work will increase my cricketing and organizational skills.</p>', '<p>न्यूजीलैंड के लेग स्पिनर ईश सोढ़ी को बाहर बैठना होगा और संगठनात्मक कर्तव्यों को निभाना होगा जब उनके साथी आईपीएल में अपनी-अपनी टीमों के लिए खेलेंगे। क्योंकि किसी ने उन्हें आईपीएल नीलामी से नहीं खरीदा था, वह 18 फरवरी को नीलामी में अनसोल्ड रहे।</p><p><br></p><p>हालांकि नीलामी में बिना बिके, सोढ़ी आईपीएल में मौजूद रहेंगे। लेकिन एक खिलाड़ी के रूप में नहीं। टूर्नामेंट के पहले संस्करण के चैंपियन राजस्थान रॉयल्स द्वारा सोढ़ी को अपनी टीम का संपर्क अधिकारी नियुक्त किया गया है। सोढ़ी ने 2016 और 2019 में टीम के लिए खेला।</p><p><br></p><p>इस बार, सोढ़ी राजस्थान में क्रिकेट के नए निदेशक कुमार संगकारा और मुख्य परिचालन अधिकारी जैक लैश मैक्रम के साथ मिलकर काम करेंगे। राजस्थान रॉयल्स फ्रेंचाइजी ने अपनी टीम के पुनर्गठन के हिस्से के रूप में कीवी लेगस्पिनर को जिम्मेदारी दी है।</p><p><br></p><p>सोढ़ी ने नई नियुक्ति के बाद जारी एक बयान में कहा, \"राजस्थान रॉयल्स एक फैंसी और गतिशील फ्रेंचाइजी है।\" मनोरंजन और क्रिकेट के बीच क्या शानदार संबंध है। मैं अपने आईपीएल परिवार के साथ फिर से जुड़ने में सक्षम होने के लिए बहुत खुश हूं।</p><p><br></p><p>सोढीर को 2020 के आईपीएल में राजस्थान के स्पिन गेंदबाजी सलाहकार और संचालन कार्यकारी के रूप में काम करना था। लेकिन वह अप्रैल-मई के बजाय सितंबर में वापस जाने के कारण आईपीएल में शामिल नहीं हो सके। क्योंकि तब वह पहले बच्चे के पिता बनने की प्रतीक्षा कर रहा था।</p><p><br></p><p>हालांकि, इस बार जिम्मेदारी पूरी तरह से अलग होने वाली है। सोढ़ी ने कहा, \"पिछले साल मुझे फ्रैंचाइज़ी के संगठनात्मक पक्ष और रॉयल्स के फ्रैंचाइज़ी में काम करने में दिलचस्पी थी।\" ताकि मैं मैदान से अपनी यात्रा शुरू कर सकूं। यह काम मेरे क्रिकेट और संगठनात्मक कौशल को बढ़ाएगा।</p>', 'New Zealand-cricket', 'न्यूजीलैंड-क्रिकेट', NULL, 1, 1, NULL, '27-02-2021', 'February', NULL, NULL),
(7, 3, 7, 1, 2, 1, 'Kohli\'s \'change of shoes\' advice from the former captain', 'पूर्व कप्तान से कोहली की \'जूते बदलने की सलाह\'', 'image/post/6039e7ac81690.webp', '<p>Hosts India took a 2-1 lead in the third match of the ongoing series against England. India won the first match by 10 wickets at the world\'s largest cricket stadium in Motera, Ahmedabad. However, their victory has been overshadowed by various discussions around the pitch.</p><p><br></p><p>From the first hour of the first day of the match on the Ahmedabad Test pitch, all the big turns started at one end. Neither team could cope with those turns on soft clay wickets. England were bowled out for 112 and 61 in their two innings, while India were bowled out for 145 in the first innings.</p><p><br></p><p>In the four innings of the match, there have been only two personal fifties. Jack Crowley for England and Rohit Sharma for India. No matter how difficult the wicket is, former India captain Mohammad Azharuddin cannot accept the failure of the batsmen.</p><p><br></p><p>According to him, batsmen can\'t get through with the fault of the pitch alone. Because they have made mistakes in exercising their intellect. Azharuddin, who has played 99 Tests for India, thinks batting would have been easier if he had worn rubber soles instead of sneakers with spikes on a spinning wicket.</p><p><br></p><p>\"I am disappointed to see the batsmen fail in the Ahmedabad Test,\" he wrote on Twitter. Where the ball is spinning on such a knocking pitch, the road to success is shot selection and foot use. On such a pitch, I was surprised to see why the batsmen are going to bat after wearing spiked boots. In this case, cricketers do not have a problem if they bat after wearing rubber sole shoes.</p><p><br></p><p>\'I have seen many batsmen get great success after wearing rubber sole shoes on hard pitches. For the sake of argument, many can say that in this case, the batsmen may slip and fall while taking runs. The answer is that all tennis players at Wimbledon play only after wearing rubber soles.</p>', '<p>मेजबान भारत ने इंग्लैंड के खिलाफ चल रही श्रृंखला के तीसरे मैच में 2-1 की बढ़त ले ली। भारत ने अहमदाबाद के मोटेरा में दुनिया के सबसे बड़े क्रिकेट स्टेडियम में पहला मैच 10 विकेट से जीता। हालांकि, पिच के चारों ओर विभिन्न चर्चाओं के द्वारा उनकी जीत की देखरेख की गई है।</p><p><br></p><p>अहमदाबाद टेस्ट पिच पर मैच के पहले दिन के पहले घंटे से, सभी बड़े मोड़ एक छोर पर शुरू हुए। नरम मिट्टी के विकेटों पर न तो टीम उन मोर्चों का सामना कर सकी। इंग्लैंड अपनी दो पारियों में 112 और 61 रन पर आउट हो गया, जबकि भारत पहली पारी में 145 रन पर आउट हो गया।</p><p><br></p><p>मैच की चार पारियों में, केवल दो व्यक्तिगत अर्द्धशतक रहे हैं। इंग्लैंड के लिए जैक क्रॉली और भारत के लिए रोहित शर्मा। विकेट कितना भी मुश्किल क्यों न हो, भारत के पूर्व कप्तान मोहम्मद अजहरुद्दीन बल्लेबाजों की विफलता को स्वीकार नहीं कर सकते।</p><p><br></p><p>उनके अनुसार, बल्लेबाज अकेले पिच की गलती से नहीं मिल सकते। क्योंकि उन्होंने अपनी बुद्धि का प्रयोग करने में गलतियाँ की हैं। अजहरुद्दीन, जिन्होंने भारत के लिए 99 टेस्ट खेले हैं, सोचता है कि अगर वह स्पिनिंग विकेट पर स्पाइक्स के साथ स्नीकर्स के बजाय रबर के तलवे पहनते तो बल्लेबाजी आसान हो जाती।</p><p><br></p><p>उन्होंने कहा, \"मैं अहमदाबाद टेस्ट में बल्लेबाजों को देखकर निराश हूं।\" जहां गेंद इस तरह की खटखटाने वाली पिच पर घूम रही है, वहां सफलता की राह शॉट चयन और फुट उपयोग है। ऐसी पिच पर, मैं यह देखकर हैरान था कि बल्लेबाज स्पाइक वाले जूते पहनकर बल्लेबाजी करने क्यों जा रहे हैं। इस मामले में, क्रिकेटरों को समस्या नहीं है अगर वे रबर एकमात्र जूते पहनने के बाद बल्लेबाजी करते हैं।</p><p><br></p><p>\'मैंने देखा है कि कई बल्लेबाजों को कड़ी पिचों पर रबर के एकमात्र जूते पहनने के बाद बड़ी सफलता मिलती है। तर्क के लिए, कई लोग कह सकते हैं कि इस मामले में, बल्लेबाज रन लेने के दौरान फिसल और गिर सकते हैं। इसका उत्तर यह है कि विंबलडन में सभी टेनिस खिलाड़ी रबर के तलवे पहनने के बाद ही खेलते हैं।</p>', 'Indian-cricket', 'भारतीय-क्रिकेट', 1, NULL, 1, 1, '27-02-2021', 'February', NULL, NULL),
(8, 1, 12, 1, 4, 1, 'Salman kept talking about the king of Bollywood', 'सलमान बॉलीवुड के बादशाह की बात करते रहे', 'image/post/6039e94f79704.webp', '<p>Finally, Salman Khan has joined Bollywood king Shah Rukh Khan in Siddharth Anand\'s \"Pathan\" movie. After shooting in Dubai, the Pathan team started shooting at Yashraj\'s Mumbai studio on Thursday (February 25).</p><p><br></p><p>&nbsp;All in all, Salman will give 10-12 days.</p><p><br></p><p>Recently, Bollywood Hangama revealed in a report that \"Salman is working very hard at Corona. He is always extra careful for himself and his family as Corona has not left yet.&nbsp;</p><p><br></p><p>That\'s why Dabangg wanted to start shooting this guest character of Pathan later. This actor. And Shah Rukh himself had accepted it from the beginning.&nbsp;</p><p><br></p><p>But after the shooting of the movie in Dubai, Salman doesn\'t want to wait any longer. As promised to Shah Rukh, he started working on another part in the movie.</p>', '<p>आखिरकार, सलमान खान बॉलीवुड के बादशाह शाहरुख खान के साथ सिद्धार्थ आनंद की \"पठान\" फिल्म में शामिल हो गए हैं। दुबई में शूटिंग के बाद, पठान टीम ने गुरुवार (25 फरवरी) को यशराज के मुंबई स्टूडियो में शूटिंग शुरू की।</p><p><br></p><p>&nbsp; सब मिलाकर, सलमान 10-12 दिन देंगे।</p><p><br></p><p>हाल ही में, बॉलीवुड हंगामा ने एक रिपोर्ट में बताया कि \"सलमान कोरोना में बहुत मेहनत कर रहे हैं। वह हमेशा अपने और अपने परिवार के लिए अतिरिक्त सावधानी बरतते हैं क्योंकि कोरोना अभी तक नहीं छोड़ा है।</p><p><br></p><p>यही कारण है कि दबंग बाद में पठान के इस अतिथि चरित्र की शूटिंग शुरू करना चाहते थे। यह अभिनेता। और खुद शाहरुख ने शुरुआत से ही इसे स्वीकार कर लिया था।</p><p><br></p><p>लेकिन दुबई में फिल्म की शूटिंग के बाद, सलमान अब और इंतजार नहीं करना चाहते हैं। जैसा कि शाहरुख को वादा किया गया था, उन्होंने फिल्म में दूसरे भाग पर काम करना शुरू कर दिया।</p>', 'Bollywood', 'बॉलीवुड', NULL, 1, 1, NULL, '27-02-2021', 'February', NULL, NULL),
(9, 1, 12, 1, 2, 1, 'A remake of the superhit movie \'Rangila\', said Urmila', 'उर्मिला ने कहा कि सुपरहिट फिल्म \'रंगीला\' का रीमेक है', 'image/post/6039ea21b8e75.jpg', '<p>\'Rangila\' is a super hit movie of the nineties. Directed by Ram Gopal Burma, the film was released in 1995. The movie won the hearts of the audience with its stories, songs and star performances. Even today, many people find satisfaction in watching movies.</p><p><br></p><p>Urmila Matandkar starred in this movie with Aamir Khan. It is said that this film changed the course of the heroine\'s career. Unlike Urmila, Aamir was accompanied by Jackie Shroff.</p><p><br></p><p>How about a new movie? That question was answered by \'Mili\' i.e. Urmila herself. He said there could be no fixed rules on whether a picture should be recreated in a new way. While some remakes may not impress in the same way, he also thinks that some remakes are quite good again.</p><p><br></p><p>The actress told an all-India media, \'It would be unfair to think that the same rule applies in all cases. Some remakes are really very good. Some can\'t meet expectations again, because people can\'t forget the real picture. \'</p><p><br></p><p>The actress thinks that \'Rangila\' was successful because it was able to take place in people\'s minds. Urmila thinks it will be difficult for any other actor or director to recreate it.</p>', '<p>\'रंगीला\' नब्बे के दशक की सुपरहिट फिल्म है। राम गोपाल बर्मा के निर्देशन में बनी यह फिल्म 1995 में रिलीज हुई थी। इस फिल्म ने अपनी कहानियों, गीतों और सितारों की प्रस्तुतियों से दर्शकों का दिल जीता। आज भी कई लोगों को फिल्में देखने में संतुष्टि मिलती है।</p><p><br></p><p>इस फिल्म में आमिर खान के साथ उर्मिला मातोंडकर ने अभिनय किया था। ऐसा कहा जाता है कि इस फिल्म ने नायिका के करियर के पाठ्यक्रम को बदल दिया। उर्मिला के विपरीत, आमिर के साथ जैकी श्रॉफ भी थे।</p><p><br></p><p>नई फिल्म के बारे में कैसे? उस सवाल का जवाब \'मिली\' यानी उर्मिला ने खुद दिया। उन्होंने कहा कि इस बात पर कोई निश्चित नियम नहीं हो सकते हैं कि क्या किसी तस्वीर को नए तरीके से बनाया जाना चाहिए। जबकि कुछ रीमेक उसी तरह से प्रभावित नहीं कर सकते हैं, वह यह भी सोचता है कि कुछ रीमेक फिर से काफी अच्छे हैं।</p><p><br></p><p>अभिनेत्री ने एक अखिल भारतीय मीडिया से कहा, \'यह सोचना अनुचित होगा कि सभी मामलों में एक ही नियम लागू होता है। कुछ रीमेक वास्तव में बहुत अच्छे हैं। कुछ फिर से उम्मीदों पर खरे नहीं उतर सकते, क्योंकि लोग असली तस्वीर को नहीं भूल सकते। \'</p><p><br></p><p>अभिनेत्री को लगता है कि \'रंगीला\' सफल रही क्योंकि यह लोगों के दिमाग में जगह बनाने में सक्षम थी। उर्मिला को लगता है कि किसी भी अन्य अभिनेता या निर्देशक के लिए इसे फिर से बनाना मुश्किल होगा।</p>', 'Bollywood', 'बॉलीवुड', 1, 1, NULL, 1, '27-02-2021', 'February', NULL, NULL),
(10, 4, 10, 1, 1, 1, 'This time BTS\'s song in Korean movie', 'इस बार जापानी बैंड के साथ कोरियाई फिल्म में बीटीएस का गीत', 'image/post/603a08a174f57.jpg', '<p>South Korean popular rock band BTS. However, their popularity is not limited to Korea or Asia, they are spreading worldwide. The band started the journey this year with new surprises for the fans. They performed a song titled \"Film Out\" in the Korean movie \"Signal\" with the Japanese rock band \"Back Number\".</p><p><br></p><p>This BTS-backed song is awaiting release very soon. But even before that, back number vocalist Ivory Shimizur has worked with BTS member Jankuk.</p><p>They have also worked on the melody of this song. Naturally, the song lovers are quite excited about the song.</p><p><br></p><p>The South Korean pop band has already uploaded a brief comment on the song on February 18 (Tuesday).</p><p><br></p><p>Incidentally, the \'back number\' was formed in 2004 in the Yuri Simiju Gunama region of Japan. The band currently consists of Yiri Simiju, Kazua Kozimakjuma, Hisiasi Kurihara. In 2016, they started working with BTS for the first time with their album \'Map of the Soul Seven\'.</p>', '<p>दक्षिण कोरियाई लोकप्रिय रॉक बैंड बीटीएस। हालांकि, उनकी लोकप्रियता कोरिया या एशिया तक सीमित नहीं है, वे दुनिया भर में फैल रहे हैं। बैंड ने प्रशंसकों के लिए नए आश्चर्य के साथ इस वर्ष यात्रा शुरू की। उन्होंने जापानी रॉक बैंड \"बैक नंबर\" के साथ कोरियाई फिल्म \"सिग्नल\" नामक \"फिल्म आउट\" नामक एक गीत का प्रदर्शन किया।</p><p><br></p><p>इस BTS- समर्थित गीत को बहुत जल्द रिलीज होने का इंतजार है। लेकिन इससे पहले भी, बैक नंबर गायक आइवरी शिमिजुर ने बीटीएस सदस्य जनकुक के साथ काम किया है।</p><p>उन्होंने इस गाने की धुन पर भी काम किया है। स्वाभाविक रूप से, गीत प्रेमी गीत को लेकर काफी उत्साहित हैं।</p><p><br></p><p>दक्षिण कोरियाई पॉप बैंड ने पहले ही गाने पर 18 फरवरी (मंगलवार) को एक संक्षिप्त टिप्पणी अपलोड कर दी है।</p><p><br></p><p>संयोग से, \'बैक नंबर\' का गठन 2004 में जापान के यूरी सिमीजू गुनमा क्षेत्र में हुआ था। बैंड में वर्तमान में यरी सिमीजू, काज़ुआ कोज़िमाकुमा, हियासी कुरीहारा शामिल हैं। 2016 में, उन्होंने बीटीएस के साथ पहली बार अपने एल्बम \'सोल ऑफ सेवेन सेवन\' के साथ काम करना शुरू किया।</p>', 'Hollywood', 'हॉलीवुड', NULL, NULL, 1, 1, '27-02-2021', 'February', NULL, NULL),
(11, 2, 3, 2, 5, 1, '7 Saudi nationals, Salman\'s \'leader\' protected by US sanctions', '7 सऊदी नागरिक, अमेरिकी प्रतिबंधों द्वारा संरक्षित सलमान के \'नेता\'', 'image/post/6039ec39508e3.webp', '<p>The United States has imposed sanctions and visa bans on six Saudi nationals involved in the assassination of journalist Jamal Khashoggi. However, the list does not include Saudi Crown Prince Mohammed bin Salman. The United States has said no sanctions will be imposed on Saudi Arabia for being a \"top leader.\" News Reuters.</p><p><br></p><p>In the first few weeks after entering the White House, the Biden administration made it clear that they were re-evaluating the close ties that developed during the Donald Trump era with Saudi Arabia, especially with Prince Salman.</p><p><br></p><p>An official from the Biden administration told Reuters on condition of anonymity that their goal was to strengthen ties from a new angle without breaking ties with Saudi Arabia.</p><p><br></p><p>The war in Yemen and the assassination of journalist Khashoggi have called into question the US\'s close ties with Saudi Arabia for several years.</p>', '<p>अमेरिका ने पत्रकार जमाल खलोगी की हत्या में शामिल छह सऊदी नागरिकों पर प्रतिबंध और वीजा प्रतिबंध लगा दिया है। हालांकि, सूची में सऊदी क्राउन प्रिंस मोहम्मद बिन सलमान शामिल नहीं हैं। अमेरिका ने कहा है कि \"शीर्ष नेता\" होने के लिए सऊदी अरब पर कोई प्रतिबंध नहीं लगाया जाएगा। न्यूज़ रायटर।</p><p><br></p><p>व्हाइट हाउस में प्रवेश करने के बाद पहले कुछ हफ्तों में, बिडेन प्रशासन ने यह स्पष्ट किया कि वे सऊदी अरब के साथ, विशेष रूप से प्रिंस सलमान के साथ डोनाल्ड ट्रम्प युग के दौरान विकसित हुए करीबी संबंधों का पुनर्मूल्यांकन कर रहे थे।</p><p><br></p><p>बिडेन प्रशासन के एक अधिकारी ने नाम न छापने की शर्त पर रॉयटर्स को बताया कि उनका लक्ष्य सऊदी अरब से नाता तोड़कर एक नए कोण से संबंधों को मजबूत करना था।</p><p><br></p><p>यमन में युद्ध और पत्रकार खशोगी की हत्या ने कई वर्षों से सऊदी अरब के साथ अमेरिका के करीबी संबंधों पर सवाल उठाया है।</p>', 'Saudi Arabia', 'सऊदी अरब', NULL, 1, NULL, 1, '27-02-2021', 'February', NULL, NULL),
(12, 2, 2, 3, 9, 1, 'Corona\'s recovery is about 9 crore', 'कोरोना की रिकवरी लगभग 9 करोड़ है', 'image/post/6039ed1e51d71.webp', '<p>The number of deaths and diagnoses of coronavirus is increasing day by day. 25 lakh 26 thousand 332 people have died so far worldwide. And 11 crore 39 lakh 6 thousand 6 people have been identified. Meanwhile, 6 crores 95 lakh 25 thousand 228 people have been cured of coronavirus worldwide so far.</p><p><br></p><p>This information is available from the international statistics-based website World Meter till 8 am Bangladesh time on Saturday (February 27).</p><p><br></p><p>According to the latest data from the World Meter, the United States has the highest number of deaths due to corona in the world. So far 5 lakh 23 thousand 72 people have died in Corona in the country. The country also has the highest number of identities in the world. So far, 2 crore 91 lakh 37 thousand 912 corona patients have been identified in the United States. 1 crore 95 lakh 34 thousand 6 people have recovered from corona in the country.</p>', '<p>कोरोनावायरस की मृत्यु और निदान की संख्या दिन-प्रतिदिन बढ़ रही है। दुनिया भर में अब तक 25 लाख 26 हजार 332 लोगों की मौत हो चुकी है। और 11 करोड़ 39 लाख 6 हजार 6 लोगों की पहचान की गई है। इस बीच, 6 करोड़ 95 लाख 25 हजार 228 लोग दुनिया भर में अब तक कोरोनावायरस से ठीक हो चुके हैं।</p><p><br></p><p>यह जानकारी शनिवार (27 फरवरी) को अंतरराष्ट्रीय सांख्यिकी आधारित वेबसाइट वर्ल्ड मीटर से सुबह 8 बजे तक बांग्लादेश के समय पर उपलब्ध है।</p><p><br></p><p>विश्व मीटर के नवीनतम आंकड़ों के अनुसार, संयुक्त राज्य अमेरिका में दुनिया में कोरोना के कारण सबसे अधिक मौतें होती हैं। देश में कोरोना में अब तक 5 लाख 23 हजार 72 लोगों की मौत हो चुकी है। देश में भी दुनिया में सबसे अधिक पहचान है। अब तक संयुक्त राज्य में 2 करोड़ 91 लाख 37 हजार 912 कोरोना रोगियों की पहचान की जा चुकी है। देश में कोरोना से 1 करोड़ 95 लाख 34 हजार 6 लोग बरामद हुए हैं।</p>', 'Coronavirus', 'कोरोनावाइरस', NULL, 1, NULL, NULL, '27-02-2021', 'February', NULL, NULL),
(13, 4, 11, 2, 6, 1, 'This time BTS\'s song in Korean movie test', 'इस बार जापानी बैंड के साथ कोरियाई फिल्म में बीटीएस का गीत', 'image/post/603bc0d4563f4.jpg', '<p>South Korean popular rock band BTS. However, their popularity is not limited to Korea or Asia, they are spreading worldwide. The band started the journey this year with new surprises for the fans. They performed a song titled \"Film Out\" in the Korean movie \"Signal\" with the Japanese rock band \"Back Number\".</p><p><br></p><p>This BTS-backed song is awaiting release very soon. But even before that, back number vocalist Ivory Shimizur has worked with BTS member Jankuk.</p><p>They have also worked on the melody of this song. Naturally, the song lovers are quite excited about the song.</p><p><br></p><p>The South Korean pop band has already uploaded a brief comment on the song on February 18 (Tuesday).</p><p><br></p><p>Incidentally, the \'back number\' was formed in 2004 in the Yuri Simiju Gunama region of Japan. The band currently consists of Yiri Simiju, Kazua Kozimakjuma, Hisiasi Kurihara. In 2016, they started working with BTS for the first time with their album \'Map of the Soul Seven\'.</p>', '<p>दक्षिण कोरियाई लोकप्रिय रॉक बैंड बीटीएस। हालांकि, उनकी लोकप्रियता कोरिया या एशिया तक सीमित नहीं है, वे दुनिया भर में फैल रहे हैं। बैंड ने प्रशंसकों के लिए नए आश्चर्य के साथ इस वर्ष यात्रा शुरू की। उन्होंने जापानी रॉक बैंड \"बैक नंबर\" के साथ कोरियाई फिल्म \"सिग्नल\" नामक \"फिल्म आउट\" नामक एक गीत का प्रदर्शन किया।</p><p><br></p><p>इस BTS- समर्थित गीत को बहुत जल्द रिलीज होने का इंतजार है। लेकिन इससे पहले भी, बैक नंबर गायक आइवरी शिमिजुर ने बीटीएस सदस्य जनकुक के साथ काम किया है।</p><p>उन्होंने इस गाने की धुन पर भी काम किया है। स्वाभाविक रूप से, गीत प्रेमी गीत को लेकर काफी उत्साहित हैं।</p><p><br></p><p>दक्षिण कोरियाई पॉप बैंड ने पहले ही गाने पर 18 फरवरी (मंगलवार) को एक संक्षिप्त टिप्पणी अपलोड कर दी है।</p><p><br></p><p>संयोग से, \'बैक नंबर\' का गठन 2004 में जापान के यूरी सिमीजू गुनमा क्षेत्र में हुआ था। बैंड में वर्तमान में यरी सिमीजू, काज़ुआ कोज़िमाकुमा, हियासी कुरीहारा शामिल हैं। 2016 में, उन्होंने बीटीएस के साथ पहली बार अपने एल्बम \'सोल ऑफ सेवेन सेवन\' के साथ काम करना शुरू किया।</p>', 'Hollywood', 'हॉलीवुड', NULL, NULL, NULL, NULL, '28-02-2021', 'February', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prayers`
--

CREATE TABLE `prayers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fajar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jahor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magrib` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zummah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prayers`
--

INSERT INTO `prayers` (`id`, `fajar`, `jahor`, `asar`, `magrib`, `esha`, `zummah`, `created_at`, `updated_at`) VALUES
(1, '5.30 AM', '12.45 PM', '3.30 PM', '6.02 PM', '7.45 PM', '12.15 PM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `meta_description`, `google_analytics`, `google_verification`, `alexa_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Rasel Hossain', 'Online News Site', 'Online News Site', '<p>Online News SiteOnline News SiteOnline News SiteOnline News SiteOnline News SiteOnline News SiteOnline News SiteOnline News SiteOnline News SiteOnline News Site</p>', 'Online News SiteOnline News SiteOnline News SiteOnline News Site', 'Google Verificationfsfs te etrtrdfffffsdferjuuterewrw', 'Online News SiteOnline News Site', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dlReC2bLifRvPaPM4uSrQ0BJr2RMQaUSXFXpzCzs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDJPcHFRQVp3UHV2WHd2V0E0S01BVUdaZ1ExVVJUa0t4Y3RHQ2phcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1615450668),
('Syu5fsFoHM7FUx6a78FJUSZvdNawgI4G5zWhRl8t', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJDdFB4c0U2TVpLVzlFdktGWFFXRUlyQW04WjlGODNTd2FMbEVBSmt3IjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFhVUVppcDhpQWxsT3p1Z0NWeHFudU9FUDQwai52Ti5lNXBSOXJOc2JXd2NOZzUxLlFSWnMyIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRYVVFaaXA4aUFsbE96dWdDVnhxbnVPRVA0MGoudk4uZTVwUjlyTnNiV3djTmc1MS5RUlpzMiI7fQ==', 1615452501);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebook`, `twitter`, `youtube`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'https://web.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_hindi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_en`, `subcategory_hindi`, `created_at`, `updated_at`) VALUES
(1, '2', 'Asia', 'एशिया', NULL, NULL),
(2, '2', 'Europe', 'यूरोप', NULL, NULL),
(3, '2', 'Americas', 'अमेरिका की', NULL, NULL),
(4, '2', 'India', 'भारत', NULL, NULL),
(5, '2', 'Middle East', 'मध्य पूर्व', NULL, NULL),
(6, '2', 'China', 'चीन', NULL, NULL),
(7, '3', 'Cricket', 'क्रिकेट', NULL, NULL),
(8, '3', 'FootBall', 'फुटबॉल', NULL, NULL),
(9, '3', 'Local sports', 'स्थानीय खेल', NULL, NULL),
(10, '4', 'Local', 'स्थानीय', NULL, NULL),
(11, '4', 'Global', 'वैश्विक', NULL, NULL),
(12, '1', 'Bollywood', 'बॉलीवुड', NULL, NULL),
(13, '1', 'Dhallywood', 'धालीवुड', NULL, NULL),
(14, '1', 'Hollywood', 'हॉलीवुड', NULL, NULL),
(15, '6', 'Fashion', 'फैशन', NULL, NULL),
(16, '6', 'Health', 'स्वास्थ्य', NULL, NULL),
(17, '6', 'Travel', 'यात्रा', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subdistracts`
--

CREATE TABLE `subdistracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_hindi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subdistracts`
--

INSERT INTO `subdistracts` (`id`, `district_id`, `subdistrict_en`, `subdistrict_hindi`, `created_at`, `updated_at`) VALUES
(1, '1', 'Banaka', 'बानका', NULL, NULL),
(2, '1', 'Ballia', 'बलिया', NULL, NULL),
(3, '1', 'Manjhaul', 'मंझौल', NULL, NULL),
(4, '1', 'Begusarai', 'बेगूसराय', NULL, NULL),
(5, '2', 'Dhanmondi', 'ढाका', NULL, NULL),
(6, '2', 'Gulshan', 'गुलशन', NULL, NULL),
(7, '2', 'Motijheel', 'मोतीझील', NULL, NULL),
(8, '3', 'Pabna', 'पाब्ना', NULL, NULL),
(9, '3', 'Natore', 'नैतोर', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `setting` int(11) DEFAULT NULL,
  `website` int(11) DEFAULT NULL,
  `gallery` int(11) DEFAULT NULL,
  `ads` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `image`, `gender`, `position`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `type`, `category`, `district`, `post`, `setting`, `website`, `gallery`, `ads`, `role`) VALUES
(1, 'Rasel', 'admin@gmail.com', NULL, '$2y$10$XUQZip8iAllOzugCVxqnuOEP40j.vN.e5pR9rNsbWwcNg51.QRZs2', '01786343465', 'Charbangabaria,Hemayetpur', '20210310041770536244_210598346592408_3956044958451892224_o-removebg-preview.png', 'male', 'CEO', NULL, NULL, NULL, NULL, NULL, '2021-02-12 04:56:39', '2021-03-11 02:38:45', 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Ismail Hossen', 'ismail@gmail.com', NULL, '$2y$10$ewRgPt1uCJe.WOhmuChm4OVe3tAdpVxfRaQ7m3Q0oAOPQfC5.56ke', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, 1, NULL, 1, NULL, 1),
(3, 'Yeasin Hossain', 'coderyeasin@gmail.com', NULL, '$2y$10$ewRgPt1uCJe.WOhmuChm4OVe3tAdpVxfRaQ7m3Q0oAOPQfC5.56ke', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `embed_code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'React JS Crash Course 2021', 'w7ejDZ8SWv8', '0', NULL, NULL),
(2, 'Vue JS Crash Course 2021', 'qZXt1Aom3Cs', '0', NULL, NULL),
(4, 'Maulana Abdur Rahim Al Madani new bangla waz 2021', 'LdqkssPLxig', '0', NULL, NULL),
(5, 'New wedding Urdu Nasheed ᴴᴰ | Abdullah Us Sakib Official', 'ufhVys_PC6I', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_name`, `website_link`, `created_at`, `updated_at`) VALUES
(3, 'youtube', 'https://youtube.com/', NULL, NULL),
(4, 'upwork', 'https://www.upwork.com/', NULL, NULL),
(5, 'Google Translate', 'https://translate.google.com/', NULL, NULL),
(6, 'Fiverr', 'https://www.fiverr.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websitesettings`
--

CREATE TABLE `websitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_hindi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_hindi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websitesettings`
--

INSERT INTO `websitesettings` (`id`, `logo`, `address_en`, `address_hindi`, `phone_en`, `phone_hindi`, `email`, `created_at`, `updated_at`) VALUES
(1, 'image/logo/60485a7c258fb.png', '<p>House No. TA 110/1, Gulshan Link Road<br></p>', '<p>मकान नंबर । टीए 110/1, गुलशन लिंक रोड<br></p>', '01786343465', '01786343465', 'bdraseltech@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distracts`
--
ALTER TABLE `distracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `livetvs`
--
ALTER TABLE `livetvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayers`
--
ALTER TABLE `prayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdistracts`
--
ALTER TABLE `subdistracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitesettings`
--
ALTER TABLE `websitesettings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `distracts`
--
ALTER TABLE `distracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livetvs`
--
ALTER TABLE `livetvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prayers`
--
ALTER TABLE `prayers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subdistracts`
--
ALTER TABLE `subdistracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `websitesettings`
--
ALTER TABLE `websitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
