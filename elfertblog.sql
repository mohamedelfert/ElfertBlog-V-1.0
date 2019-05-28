-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 10:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elfertblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subject`, `created_at`) VALUES
(1, '  خلق آدم عليه السلام', 'أخبر الله سبحانه وتعالى ملائكة بأنه سيخلق بشرا خليفة في الأرض - وخليفة هنا تعني على رأس ذرية يخلف بعضها بعضا. فقال الملائكة: (أَتَجْعَلُ فِيهَا مَن يُفْسِدُ فِيهَا وَيَسْفِكُ الدِّمَاء وَنَحْنُ نُسَبِّحُ بِحَمْدِكَ وَنُقَدِّسُ لَكَ).\r\n\r\nويوحي قول الملائكة هذا بأنه كان لديهم تجارب سابقة في الأرض , أو إلهام وبصيرة , يكشف لهم عن شيء من فطرة هذا المخلوق , ما يجعلهم يتوقعون أنه سيفسد في الأرض , وأنه سيسفك الدماء . . ثم هم - بفطرة الملائكة البريئة التي لا تتصور إلا الخير المطلق - يرون التسبيح بحمد الله والتقديس له , هو وحده الغاية للوجود . . وهو متحقق بوجودهم هم , يسبحون بحمد الله ويقدسون له, ويعبدونه ولا يفترون عن عبادته !\r\n\r\nهذه الحيرة والدهشة التي ثارت في نفوس الملائكة بعد معرفة خبر خلق آدم.. أمر جائز على الملائكة، ولا ينقص من أقدارهم شيئا، لأنهم، رغم قربهم من الله، وعبادتهم له، وتكريمه لهم، لا يزيدون على كونهم عبيدا لله، لا يشتركون معه في علمه، ولا يعرفون حكمته الخافية، ولا يعلمون الغيب . لقد خفيت عليهم حكمة الله تعالى , في بناء هذه الأرض وعمارتها , وفي تنمية الحياة , وفي تحقيق إرادة الخالق في تطويرها وترقيتها وتعديلها , على يد خليفة الله في أرضه . هذا الذي قد يفسد أحيانا , وقد يسفك الدماء أحيانا . عندئذ جاءهم القرار من العليم بكل شيء , والخبير بمصائر الأمور: (إِنِّي أَعْلَمُ مَا لاَ تَعْلَمُونَ).\r\n\r\nوما ندري نحن كيف قال الله أو كيف يقول للملائكة . وما ندري كذلك كيف يتلقى الملائكة عن الله ، فلا نعلم عنهم سوى ما بلغنا من صفاتهم في كتاب الله . ولا حاجة بنا إلى الخوض في شيء من هذا الذي لا طائل وراء الخوض فيه . إنما نمضي إلى مغزى القصة ودلالتها كما يقصها القرآن .\r\n\r\nأدركت الملائكة أن الله سيجعل في الأرض خليفة.. وأصدر الله سبحانه وتعالى أمره إليهم تفصيلا، فقال إنه سيخلق بشرا من طين، فإذا سواه ونفخ فيه من روحه فيجب على الملائكة أن تسجد له، والمفهوم أن هذا سجود تكريم لا سجود عبادة، لأن سجود العبادة لا يكون إلا لله وحده.\r\n\r\nجمع الله سبحانه وتعالى قبضة من تراب الأرض، فيها الأبيض والأسود والأصفر والأحمر - ولهذا يجيء الناس ألوانا مختلفة - ومزج الله تعالى التراب بالماء فصار صلصالا من حمأ مسنون. تعفن الطين وانبعثت له رائحة.. وكان إبليس يمر عليه فيعجب أي شيء يصير هذا الطين؟', '2017-03-07'),
(2, 'ذو الكفل عليه السلام', 'قال أهل التاريخ ذو الكفل هو ابن أيوب عليه السلام وأسمه في الأصل (بشر) وقد بعثه الله بعد أيوب وسماه ذا الكفل لأنه تكفل ببعض الطاعات فوقي بها، وكان مقامه في الشام وأهل دمشق يتناقلون أن له قبرا في جبل هناك يشرف على دمشق يسمى قاسيون. إلا أن بعض العلماء يرون أنه ليس بنبي وإنما هو رجل من الصالحين من بني إسرائيل. وقد رجح ابن كثير نبوته لأن الله تعالى قرنه مع الأنبياء فقال عز وجل:\r\n\r\nوَإِسْمَاعِيلَ وَإِدْرِيسَ وَذَا الْكِفْلِ كُلٌّ مِّنَ الصَّابِرِينَ (85) وَأَدْخَلْنَاهُمْ فِي رَحْمَتِنَا إِنَّهُم مِّنَ الصَّالِحِينَ (85) (الأنبياء)\r\n\r\nقال ابن كثير : فالظاهر من ذكره في القرآن العظيم بالثناء عليه مقرونا مع هؤلاء السادة الأنبياء أنه نبي عليه من ربه الصلاة والسلام وهذا هو المشهور.\r\n\r\nوالقرآن الكريم لم يزد على ذكر اسمه في عداد الأنبياء أما دعوته ورسالته والقوم الذين أرسل إليهم فلم يتعرض لشيء من ذلك لا بالإجمال ولا بالتفصيل لذلك نمسك عن الخوض في موضوع دعوته حيث أن كثيرا من المؤرخين لم يوردوا عنه إلا الشيء اليسير. ومما ينبغي التنبه له أن (ذا الكفل) الذي ذكره القرآن هو غير (الكفل) الذي ذكر في الحديث الشريف ونص الحديث كما رواه الأمام أحمد عن ابن عمر رضي الله عنهما قال: (كان الكفل من بني إسرائيل لا يتورع عن ذنب عمله فأتته امرأة فأعطاها ستين دينار على أن يطأها فلما قعد منها مقعد الرجل من امرأته أرعدت وبكت فقال لها ما يبكيك ؟ أكرهتك ؟ قالت : لا ولكن هذا عمل لم أعمله قط وإنما حملتني عليه الحاجة ..قال : فتفعلين هذا ولم تفعليه قط ؟ ثم نزل فقال أذهبي بالدنانير لك ، ثم قال : والله لا يعصي الله الكفل أبدا فمات من ليلته فأصبح مكتوبا على بابه : قد غفر الله للكفل). رواه الترمذي وقال: حديث حسن وروي موقوفا على ابن عمر وفي إسناده نظر. فإن كان محفوظا فليس هو ذا الكفل وإنما لفظ الحديث الكفل من غير إضافة فهو إذا رجل آخر غير المذكور في القرآن.\r\n\r\nويذكر بعض المؤرخين أن ذا الكفل تكفل لبني قومه أن يكفيهم أمرهم ويقضي بينهم بالعدل فسمي ذا الكفل وذكروا بعض القصص في ذلك ولكنها قصص تحتاج إلى تثبت وإلى تمحيص وتدقيق.\r\n\r\nالرجل الصالح:\r\n\r\nأما من يقول أن ذو الكفل لم يكن نبيا وإنما كان رجلا صالحا من بني إسرائيل فيروي أنه كان في عهد نبي الله اليسع عليه السلام. وقد روي أنه لما كبر اليسع قال لو أني استخلفت رجلاً على الناس يعمل عليهم في حياتي حتى أنظر كيف يعمل؟ فجمع الناس فقال: من يتقبل لي بثلاث استخلفه: يصوم النهار، ويقوم الليل، ولا يغضب. فقام رجل تزدريه العين، فقال: أنا، فقال: أنت تصوم النهار، وتقوم الليل، ولا تغضب؟ قال: نعم. لكن اليسع -عليه السلام- ردّ الناس ذلك اليوم دون أن يستخلف أحدا. وفي اليوم التالي خرج اليسع -عليه السلام- على قومه وقال مثل ما قال اليوم الأول، فسكت الناس وقام ذلك الرجل فقال أنا. فاستخلف اليسع ذلك الرجل.\r\n\r\nفجعل إبليس يقول للشياطين: عليكم بفلان، فأعياهم ذلك. فقال دعوني وإياه فأتاه في صورة شيخ كبير فقير، وأتاه حين أخذ مضجعه للقائلة، وكان لا ينام الليل والنهار، إلا تلك النّومة فدقّ الباب. فقال ذو الكفل: من هذا؟ قال: شيخ كبير مظلوم. فقام ذو الكفل ففتح الباب. فبدأ الشيخ يحدّثه عن خصومة بينه وبين قومه، وما فعلوه به، وكيف ظلموه، وأخذ يطوّل في الحديث حتى حضر موعد مجلس ذو الكفل بين الناس، وذهبت القائلة. فقال ذو الكفل: إذا رحت للمجلس فإنني آخذ لك بحقّك.\r\n\r\nفخرج الشيخ وخرج ذو الكفل لمجلسه دون أن ينام. لكن الشيخ لم يحضر للمجلس. وانفض المجلس دون أن يحضر الشيخ. وعقد المجلس في اليوم التالي، لكن الشيخ لم يحضر أيضا. ولما رجع ذو الكفل لمنزله عند القائلة ليضطجع أتاه الشيخ فدق الباب، فقال: من هذا؟ فقال الشيخ الكبير المظلوم. ففتح له فقال: ألم أقل لك إذا قعدت فاتني؟ فقال الشيخ: إنهم اخبث قوم إذا عرفوا أنك قاعد قالوا لي نحن نعطيك حقك، وإذا قمت جحدوني. فقال ذو الكفل: انطلق الآن فإذا رحت مجلسي فأتني.\r\n\r\nففاتته القائلة، فراح مجلسه وانتظر الشيخ فلا يراه وشق عليه النعاس، فقال لبعض أهله: لا تدعنَّ أحداً يقرب هذا الباب حتى أنام، فإني قد شق عليّ النوم. فقدم الشيخ، فمنعوه من الدخول، فقال: قد أتيته أمس، فذكرت لذي الكفل أمري، فقالوا: لا والله لقد أمرنا أن لا ندع أحداً يقربه. فقام الشيخ وتسوّر الحائط ودخل البيت ودق الباب من الداخل، فاستيقظ ذو الكفل، وقال لأهله: ألم آمركم ألا يدخل علي أحد؟ فقالوا: لم ندع أحدا يقترب، فانظر من أين دخل. فقام ذو الكفل إلى الباب فإذا هو مغلق كما أغلقه؟ وإذا الرجل معه في البيت، فعرفه فقال: أَعَدُوَّ اللهِ؟ قال: نعم أعييتني في كل شيء ففعلت كل ما ترى لأغضبك.\r\n\r\nفسماه الله ذا الكفل لأنه تكفل بأمر فوفى به!', '2017-03-07'),
(3, 'قصة الديك الشجاع', 'خرج الدّيك مع أولاده الكتاكيت الصّغار للبحث عن طعام، فرح الصّغار بالنّزهة الجميلة بصحبة الدّيك، فالدّيك شكله جميل ويلفت النّظر، والحيوانات تحبّه لأنّه مسالم. قام الذّئب شرشر بتتبع الدّيك والكتاكيت، وهو يترقّب فرصةً لخطف كتكوت صغير، كان الذّئب شرشر يخاف من الدّيك. قال الديك: يا أولادي، لا تذهبوا بعيداً عنّي حتى لا تتعرضوا للخطر، لكنّ الكتكوت فوفو لم يسمع كلام أبيه، ذهب بعيداً ولم ينتبه له الدّيك، فانتهز الذّئب شرشر هذه الفرصة، وانقضّ على الكتكوت ليأكله، لكنّ الدّيك شعر بأنّ خطراً ما يداهم ابنه، فبحث عنه، وجده بين يدي الذّئب، الدّيك لم يتكلم، لكنّه هجم على الذّئب، واستخدم منقاره ومخالبه، الذّئب شرشر خاف وهرب، ثمّ عاد الكتكوت فوفو إلى إخوته فخوراً بأبيه الدّيك. قام الدّيك بتحذير ابنه من الابتعاد عنه مرّةً ثانيةً، فخجل الكتكوت من نفسه، ووعد بأن يسمع كلام أبيه، والذّئب علم بوعد الكتكوت لأبيه، فقرّر ألا يهاجمه مرةً أخرى، والكتاكيت الصّغيرة أصبحت عندما تخرج لا تبتعد عن بعضها، والذّئب شرشر كان حزيناً جدّاً، فقد علم أنّ وحدة الكتاكيت ستمنعها منه، فقرّر مغادرة الغابة للبحث عن كتاكيت جديدة لا تسمع كلمة أبيها.', '2017-03-08'),
(4, 'قصة القارب العجيب', 'تحدى أحد الملحدين- الذين لا يؤمنون بالله- علماء المسلمين في أحد البلاد، فاختاروا أذكاهم ليرد عليه، وحددوا لذلك موعدا.وفي الموعد المحدد ترقب الجميع وصول العالم، لكنه تأخر. فقال الملحد للحاضرين: لقد هرب عالمكم وخاف، لأنه علم أني سأنتصر عليه، وأثبت لكم أن الكون ليس له إله !وأثناء كلامه حضر العالم المسلم واعتذر عن تأخره، تم قال: وأنا في الطريق إلى هنا، لم أجد قاربا أعبر به النهر، وانتظرت على الشاطئ، وفجأة ظهرت في النهر ألواح من الخشب، وتجمعت مع بعضها بسرعة ونظام حتى أصبحت قاربا، ثم اقترب القارب مني، فركبته وجئت إليكم. فقال الملحد: إن هذا الرجل مجنون، فكيف يتجمح الخشب ويصبح قاربا دون أن يصنعه أحد، وكيف يتحرك بدون وجود من يحركه؟!فتبسم العالم، وقال: فماذا تقول عن نفسك وأنت تقول: إن هذا الكون العظيم الكبير بلا إله؟!', '2017-03-10'),
(5, 'قصة ورقة التوت', 'ذات يوم جاء بعض الناس إلى الإمام الشافعي، وطلبوا منه أن يذكر لهم دليلاً على وجود الله عز وجل.ففكر لحظة، ثم قال لهم: الدليل هو ورقة التوت.فتعجب الناس من هذه الإجابة، وتساءلوا: كيف تكون ورقة التوت دليلاً على وجود الله؟! فقال الإمام الشافعى: &#34;ورقة التوت طعمها واحد؛ لكن إذا أكلها دود القز أخرج حريرا، وإذا أكلها النحل أخرج عسلاً، وإذا أكلها الظبي أخرج المسك ذا الرائحة الطيبة.. فمن الذي وحد الأصل وعدد المخارج؟! &#34;.إنه الله- سبحانه وتعالى- خالق الكون العظيم! ', '2017-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'mohamed', 'm@m.com', 123456),
(2, 'osama', 'o@o.com', 159),
(3, 'medo', 'medo@medo.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;