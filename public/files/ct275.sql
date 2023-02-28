-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2022 lúc 12:25 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct275`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngu_phap`
--

CREATE TABLE `ngu_phap` (
  `id` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `ngu_phap` varchar(10000) NOT NULL,
  `nghia` varchar(5000) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ngu_phap`
--

INSERT INTO `ngu_phap` (`id`, `brand`, `ngu_phap`, `nghia`, `hinh`, `name`, `created_at`, `updated_at`) VALUES
(1000, 'Ngữ pháp', '<h3><b>1. Khái niệm:</b></h3>\r\n<br>\r\nTính từ (adjective, viết tắt là adj) là có vai trò giúp bổ trợ cho danh từ hoặc đại từ, nó giúp miêu tả các đặc tính của sự vật, hiện tượng mà danh từ đó đại diện.\r\n<br><br>\r\nTính từ giúp trả lời cho các câu hỏi:\r\n<br><br>\r\n“Which?”: Cái nào?<br>\r\n“What kind?”: Loại gì?<br>\r\n“How many?”: Bao nhiêu?<br>\r\nVí dụ:<br><br>\r\nShe is a beautiful girl.<br><br>\r\n“Beautiful” – xinh đẹp (adj) ám chỉ cô gái mà người viết muốn nói đến và trả lời cho câu hỏi “Which girl?”<br></br>\r\n<h3><b>2. Phân loại tính từ:</h3></b>\r\n- Tính từ riêng: Là tên riêng để gọi của của sự vật, hiện tượng | VD:  My name is Lan (Từ Lan là tên riêng hay được gọi là danh từ riêng chỉ tên của bạn Lan.)\r\n- Tính từ miêu tả: Tính từ miêu tả tính chất sự vật | VD: A beautiful girl, A bad boy\r\n<br><br>\r\nCác tính từ miêu tả thường được sắp xếp như sau: sự miêu tả tổng quát (bao gồm những tính từ chỉ cá tính và sự xúc cảm) – kích thước – hình dáng – màu sắc – nguồn gốc – chất liệu – mục đích (những từ này là danh động từ được dùng để hình thành danh từ kép: fishing rod (cần câu cá), sleeping bag (túi ngủ)...) | VD:  a small house: một căn nhà nhỏ\r\n<br><br>\r\nTính từ sở hữu: dùng để chỉ danh từ đó thuộc về ai | VD:  my Mother, our pens\r\n<br><br>\r\nNgôi thứ nhất\r\nMy: của tôi\r\nOur: của chúng tôi\r\nNgôi thứ hai\r\nYour: của anh\r\nYour: của các anh\r\nNgôi thứ ba\r\nHis: của ông / anh ta\r\nHer: của bà / chị ta\r\nIts: của nó\r\nTheir: của họ / chúng\r\n<br><br>\r\nLưu ý: khi chủ sở hữu là một đại từ bất định: one có hình thức sở hữu tính từ là one’s. Chủ sở hữu là những từ như “everyone” hay những danh từ tập hợp thì tính từ sở hữu ở hình thức ngôi thứ ba số nhiều “their”\r\n<br><br>\r\nTính từ số mục: từ chỉ số đếm hoặc số thứ tự | VD:  one, two, three…: một, hai, ba\r\n<br><br>\r\nTính từ chung: từ không chỉ rõ các vật. <br>\r\nVD:<br>\r\nall: tất cả<br>\r\nevery: mọi<br>\r\nsome: một vài, ít nhiều<br> \r\nmany, much: nhiều<br>\r\nEach và every: đều đi với động từ ở ngôi số ít. Every chỉ một tập thể, Each chỉ cá thể.  \r\nTính từ chỉ thị: từ đi với danh từ để chỉ cái này, cái kia Đây là loại tính từ duy nhất thay đối theo số của danh từ. This, That thay đổi thành These, Those khi đi trước danh từ số nhiều. This, và These được dùng cho các đối tượng, vật và người ở gần trong khi That và Those dùng cho các đối tượng ở xa hơn.<br><br>\r\nVD:<br><br>\r\nThis chair: cái ghế này;<br>\r\nThese chairs: những cái ghế này<br>\r\nThat child: đứa trẻ đó; those children: những đứa trẻ đó<br>\r\nTính từ liên hệ: từ có hình thức như đại từ liên hệ | VD: whichever, whatever<br><br>\r\nTính từ nghi vấn: từ dùng để hỏi | VD: Which kind of products do you more believe in: the one that comes to you by word-of-mouth or the one that you see through advertisements?<br></br>\r\nTính từ nghi vấn chỉ có hai hình thức:<br></br>\r\n- What (gì, nào) (nói chung) đi với danh từ chỉ người cũng như chỉ vật, ở số ít cũng như ở số nhiều, làm bổ túc từ cũng như chủ từ | VD: What boy beats you? (đứa trẻ nào đánh bạn?) - What books have you read? (những cuốn sách nào bạn đã đọc?)<br><br>\r\n- Which (gì, nào) (ngụ ý lựa chọn) đi với danh từ chỉ người cũng như chỉ vật ở số ít cũng như ở số nhiều, làm bổ túc từ cũng như chủ từ | VD:  Which book do you like best? (cuốn sách nào bạn thích nhất?) - Which friend do you prefer? (người bạn nào anh ưa hơn?)', '<h5><b>3. Vị trí thường gặp của tính từ trong tiếng Anh:</b></h5>\r\nA. Đứng trước danh từ: bổ nghĩa, cung cấp nhiều chi tiết hơn cho danh từ.\r\n<br></br>\r\nVD: “I ate a meal.” Trong đó “meal” – bữa ăn là danh từ, người đọc không thể biết được bữa ăn đó là gì, như thế nào?<br></br>\r\nKhi thêm tính từ: “I ate an enormous meal.” Thì ở đây “enormous”-  khổng lồ, to lớn là tính từ bổ nghĩa cho danh từ “meal” để thể hiện được đây là một bữa tiệc rất lớn, hoành tráng. Vậy khi sử dụng tính từ, người viết muốn làm cho người đọc hiểu được rõ và sâu hơn những sự vật, sự việc  mà họ muốn nói đến.<br></br>\r\nB. Đứng Sau động từ liên kết\r\nTobe: thì, là, ở <br></br>\r\nHe is so cool. <br></br>\r\nSeem: có vẻ, dường như. <br></br>\r\nYou seem determined.<br></br>\r\nAppear: trông có vẻ <br></br>\r\nThe streets appear deserted.<br></br>\r\nFeel: cảm thấy<br></br>\r\nI feel full<br></br>\r\nTaste: nếm trải, thưởng thức<br></br>\r\nKisses taste sweet.<br></br>\r\n Look: thấy, trông<br></br>\r\nThe woman looked angry to us.<br></br>\r\nSound : nghe thấy<br></br>\r\nthat sounds great !<br></br>\r\nSmell: ngửi, cảm thấy<br></br>\r\nRoses smell sweet<br></br>\r\nDấu hiệu nhận biết tính từ trong tiếng Anh\r\nCăn cứ vào các hậu tố sau, các bạn có thể nhận biết được tính từ\r\n<h5><b>4. Vị trí thường gặp của tính từ trong tiếng Anh:</b></h5>\r\nA. Đứng trước danh từ: bổ nghĩa, cung cấp nhiều chi tiết hơn cho danh từ.\r\n<br></br>\r\nVD: “I ate a meal.” Trong đó “meal” – bữa ăn là danh từ, người đọc không thể biết được bữa ăn đó là gì, như thế nào?<br></br>\r\nHậu tố thường gặp<br></br>\r\n– al: national, cultural…\r\n– ful: beautiful, careful, useful,peaceful…\r\n– ive: active, attractive ,impressive…\r\n– able: comfortable, miserable…\r\n– ous: dangerous, serious, humorous, famous…\r\n– cult: difficult…\r\n– ish: selfish, childish…\r\n– ed: bored, interested, excited…\r\n– ing: interesting, relaxing, exciting, boring,…\r\n– ly: daily, monthly, friendly, healthy, lovely,…\r\n<h5><b>5. Một số tính từ thông dụng</b></h5>\r\nDưới đây là 1 vài tính từ thông dụng thường được sử dụng thường ngày bạn có thể tham khảo.\r\n<br></br>\r\nDifferent: khác biệt\r\nBeautiful: xinh đẹp\r\nUseful: hữu ích\r\nable: có thể \r\nPopular: phổ biến \r\nDifficult: khó khăn \r\nMental: tinh thần \r\nSimilar: tương tự \r\nEmotional: xúc động\r\nStrong: mạnh mẽ\r\nActual: thực tế\r\nIntelligent: thông minh\r\nPoor: nghèo\r\nRich: giàu\r\nHappy: hạnh phúc\r\nSuccessful: thành công\r\nExperienced: có kinh nghiệm\r\nCheap: rẻ\r\nHelpful: giúp đỡ\r\nImpossible: không thể thực hiện\r\nSerious: nghiêm trọng\r\nWonderful: kỳ diệu\r\nTraditional: truyền thống\r\nScared: sợ hãi\r\nSplendid: tráng lệ\r\nColorful: đầy màu sắc\r\nDramatic: kịch tính\r\nAngry:giận dữ\r\nActive: chủ động\r\nAutomatic: tự động\r\nCertain: chắc chắn\r\nClever: khéo léo\r\nComplex: phức tạp\r\nCruel: độc ác\r\nDark: tối\r\nDependent: phụ thuộc\r\nDirty: dơ bẩn\r\nFeeble: yếu đuối\r\nFoolish: ngu ngốc\r\nGlad: vui mừng\r\nImportant: quan trọng\r\nHollow: rỗng\r\nLazy: lười biếng\r\nLate: trễ\r\nNecessary: cần thiết\r\nOpposite: đối ngược\r\n<br></br>\r\n<h5><b>5. Cấu trúc của tính từ ghép</b></h5>\r\nCác dạng hình thành tính từ ghép:\r\nKhi các từ được kết hợp với nhau để tạo thành tính từ kép, chúng có thể được viết theo 1 số dạng dưới đây.\r\n* thành một từ duy nhất:\r\n<br></br>\r\nlife + long = lifelong\r\n<br></br>\r\ncar + sick = carsick\r\n<br></br>\r\n* thành hai từ có dấu nối (-) ở giữa\r\n<br></br>\r\nworld + famous = world-famous\r\n<br></br><br></br>', 'images/tt.jpg', 'Tính từ', '2022-10-26 19:23:23', '2022-10-26 19:24:22'),
(1010, 'Ngữ pháp', '<h3><b>1. Động từ là gì?</b></h3>\r\nĐộng từ là một trong những thành phần chính của một câu hoặc câu hỏi trong tiếng Anh.\r\nTrong thực tế, chúng ta không thể thành lập một câu mà thiếu đi động từ trong câu. Động từ là những từ biểu thị cho một hành động, một sự xuất hiện, hay một trạng thái nào đó. Dưới đây là một số loại động từ trong tiếng Anh và cách sử dụng.\r\n<h3><b>2. Công thức</b></h3>\r\nS + V + O\r\nGần như tất cả các câu trong tiếng Anh đều chứa một chủ ngữ (Subject – S) và một động từ (Verb – V). Đằng sau động từ có thể có hoặc không có tân ngữ (Object – O), tuỳ thuộc vào loại động từ dưới đây.\r\n<br></br>\r\n<h3><b>3. Các hình thức của động từ trong tiếng Anh\r\n<br>a) Intransitive verb (Nội động từ)\r\n</b></h3>\r\nNội động từ diễn tả hành động dừng lại với người nói hay người thực hiện nó. Nội động từ không có tân ngữ trực tiếp đi kèm theo. Nếu có tân ngữ thì phải có giới từ đi trước, tân ngữ này được gọi là tân ngữ của giới từ (prepositional object), không phải là tân ngữ trực tiếp.\r\nVí dụ: Children are playing in the garden. (Những đứa trẻ đang chơi trong vườn)\r\n<br></br>\r\n<h5><b>b) Transitive verbs (Ngoại động từ)</b></h5>\r\nNgoại động từ diễn tả hành động tác động trực tiếp lên một người khác hoặc một sự vật và được theo sau bởi một tân ngữ.\r\nNgoại động từ luôn luôn cần một danh từ hoặc đại từ theo sau để làm nghĩa của câu trở nên đầy đủ.\r\nVí dụ: I ate an apple. (Tôi đã ăn một quả táo)\r\nTrong câu trên, chúng ta không thể nói “I ate” rồi ngưng lại vì câu sẽ tối nghĩa. Danh từ đi theo ngay sau ngoại động từ được gọi là tân ngữ trực tiếp (“an apple” là tân ngữ trực tiếp của “ate”).\r\n<br></br>\r\n<h5><b>\r\nc) Các động từ vừa là ngoại động từ, vừa là nội động từ</b></h5>\r\nCó một số động từ vừa được xem là nội động từ, vừa được xem là ngoại động từ như learn, study, write, sing, leave…\r\n<br></br>', '<b>4. Vị trí<br></br>\r\na) Động từ thường đứng sau chủ ngữ</b>\r\n<br></br>\r\nVí dụ: She worked hard. (Mẹ tôi làm việc vất vả.)\r\n<br></br>\r\n<b>b) Động từ thường đứng sau trạng từ chỉ tần suất (Adverb of Frequency) nếu là động từ thường.</b><br></br>\r\nVí dụ: He always gets up early\r\nCác trạng từ chỉ tần suất thường gặp:\r\nAlways: luôn luôn\r\nUsually: thường thường\r\nOften : thường\r\nSometimes: Đôi khi\r\nSeldom: Hiếm khi\r\nNever: Không bao giờ\r\n<br></br>\r\n<b>c) Động từ “Tobe” sẽ đứng trước trạng từ chỉ tần suất.</b>\r\nVí dụ: It’s usually hot in summer. (Mùa hè trời thường nóng.)\r\n<br></br>\r\n<b>5. Cách chia đông từ trong tiếng Anh\r\n<br></br>a) Thêm đuôi V-ed</b><br></br>\r\nNhững cách thức thêm – ED sau đây được dùng để thành lập thì Quá khứ đơn (Simple Past) và Quá khứ phân từ (Past Participle):\r\nThông thường: Thêm ED vào động từ nguyên mẫu.<br></br>\r\nVí dụ: to talk –> She talked about her family last night.\r\nĐộng từ tận cùng bằng E –> chỉ thêm D.<br></br>\r\n\r\nVí dụ: to live –> He lived in Hanoi for 2 years.\r\nĐộng từ tận cùng bằng phụ âm + Y –> Đổi Y thành IED.<br></br>\r\n\r\nVí dụ: to study –> They studied in the library last weekends.\r\nĐộng từ một âm tiết tận cùng bằng 1 nguyên âm + 1 phụ âm và động từ được nhấn mạnh (stressed) ở âm tiết cuối –> Gấp đôi phụ âm cuối trước khi thêm ED.\r\n<br></br>\r\nVí dụ: to stop –> stopped\r\nMột số động từ 2 âm tiết, tận cùng bằng L, được nhấn mạnh (stressed) ở âm tiết thứ nhất cũng gấp đôi phụ âm cuối trước khi thêm ED.\r\n<br></br>\r\nVí dụ:\r\nto travel –> travelled\r\nto kidnap –> kidnapped\r\nto worship –> worshipped\r\n<br></br>\r\n<h5><b>b) Cách phát âm V-ed</b></h5><br></br>\r\nCó tới 3 cách để phát âm từ có -ed tận cùng:\r\n<br></br>\r\n/id/: sau các âm /t/ và /d/\r\nto want –> wanted\r\nto decide –> decided\r\n<br></br>\r\n/t/: sau các phụ âm câm (voiceless consonant sounds)\r\nto ask –> asked\r\nto finish –> finished\r\n<br></br>\r\n/d/: sau các nguyên âm (vowel sounds) và phụ âm tỏ (voiced consonant sounds)\r\nto answer –> answered\r\nto open –> opened\r\n<br></br>\r\n<h5><b>c) Cách thêm -ing sau động từ</b></h5>\r\nV-ing được hình thành để tạo nên hiện tại phân từ (present participle), trong các thì tiếp diễn (Continuous Tenses) và để tạo thành động danh từ (Gerund). Có 6 trường hợp thêm ING:\r\n<br></br>\r\nThông thường: thêm -ING và cuối động từ nguyên mẫu.\r\nto walk –> walking\r\nto do –> doing\r\n<br></br>\r\nĐộng từ tận cùng bằng E –> bỏ E trước khi thêm -ING\r\nto live –> living\r\nto love –> loving\r\n<br></br>\r\nĐộng từ tận cùng bằng -IE –> đổi thành -Y trước khi thêm -ING.\r\nto die –> dying\r\nto lie –> lying\r\n<br></br>\r\nĐộng từ một âm tiết tận cùng bằng 1 nguyên âm + 1 phụ âm và động từ được nhấn mạnh (stressed) ở âm tiết cuối –> Gấp đôi phụ âm cuối trước khi thêm -ING.\r\nto run –> running\r\nto cut –> cutting\r\n<br></br>\r\nMột số động từ 2 âm tiết, tận cùng bằng L, được nhấn mạnh (stressed) ở âm tiết thứ nhất cũng gấp đôi phụ âm cuối trước khi thêm -ING.\r\nto travel –> travelling\r\nto worship → to worshipping\r\n<br></br>\r\nMột số động từ có các thêm -ING đặc biệt để tránh nhầm lẫn:\r\nto dye (nhuộm) –> dyeing khác với to die (chết) –> dying\r\nto singe (cháy xém) –> singeing khác với to sing (hát) –> singing', 'images/dt.jpg', 'Động từ', '2022-11-05 06:05:32', '2022-11-05 06:05:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `truyen` varchar(5000) NOT NULL,
  `nghia` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `brand`, `truyen`, `nghia`, `name`, `hinh`, `created_at`, `updated_at`) VALUES
(6000, 'Truyện', 'A store owner was tacking a sign above his door that read “Puppies for Sale”. Signs have a way of attracting children, and soon a little boy appeared at the store and asked, “How much are you gonna sell those puppies for?” The store owner replied, “Anywhere from $30 to $50.” The little boy reached into his pocket and pulled out some change. “I have $2.37, can I look at them?” The store owner smiled and whistled. Out of the back of the store came his dog running down the aisle followed by five little puppies. One puppy was lagging considerably behind. Immediately the little boy singled out the lagging, limping puppy.\r\n\r\n“What’s wrong with that little dog?” he asked. The man explained that when the puppy was born the vet said it had a bad hip socket and would limp for the rest of it’s life. The little boy got really excited and said “That’s the puppy I want to buy!” The man replied “No, you don’t want to buy that little dog. If you really want him, I’ll give him to you.” The little boy got upset. He looked straight into the man’s eyes and said, “I don’t want you to give him to me. He is worth every bit as much as the other dogs and I’ll pay the full price. In fact, I will give you $2.37 now and 50 cents every month until I have him paid for.”\r\n\r\nThe man countered, “You really don’t want to buy this puppy, son. He’s never gonna be able to run, jump and play like other puppies.” The little boy reached down and rolled up his pant leg to reveal a badly twisted, crippled left leg supported by a big metal brace. He looked up at the man and said, “Well, I don’t run so well myself and the little puppy will need someone who understands.” The man was now biting his bottom lip. Tears welled up in his eyes… He smiled and said, “Son, I hope and pray that each and every one of these puppies will have an owner such as you.”', 'Chủ một cửa hàng bách hóa đính kèm trên bảng hiệu ở cửa hàng dòng chữ “Bán chó con”. Bảng hiệu liền thu hút trẻ nhỏ ngay, và đúng như vậy, một cậu bé đã đến dưới bảng hiệu của chủ cửa hàng bách hóa. “Ông định bán những con chó nhỏ với giá bao nhiêu?”, cậu bé hỏi. Chủ cửa hàng bách hóa trả lời: “Bất cứ giá nào từ 30 đô la đến 50 đô la”.\r\n\r\nCậu bé lấy trong túi và đặt ra ngoài một ít tiền lẻ. “Cháu có 2 đô la 37 xu”, cậu bé nói. “Làm ơn cho cháu nhìn chúng được không?”.\r\n\r\nChủ cửa hàng bách hóa mỉm cười, huýt gió và đi xuống chuồng chó. Ở đằng sau là một con chó đang bị cách ly. Ngay lập tức cậu bé phát hiện ra con chó khập khiễng, đi chậm phía sau và nói: “Có điều gì không bình thường với con chó nhỏ này à?”.\r\n\r\nChủ cửa hàng bách hóa giải thích rằng bác sĩ thú y đã khám bệnh cho con chó nhỏ này và phát hiện ra nó không có cái hông. Nó sẽ luôn luôn đi khập khiễng và luôn luôn bị tật.\r\n\r\nCậu bé cảm thấy bị kích động và nói: “Đó là con chó nhỏ mà cháu muốn mua”.\r\n\r\n“Không, cháu không nên mua con chó nhỏ đó. Nếu cháu thật muốn nó, chú sẽ tặng nó cho cháu”, chủ cửa hàng bách hóa nói.\r\n\r\nCậu bé nhận được kết quả hết sức bất ngờ. Cậu nhìn thẳng vào trong đôi mắt của ông chủ cửa hàng bách hóa, chỉ ngón tay về phía con chó và nói: “Cháu không muốn chú tặng con chó cho cháu. Con chó nhỏ đó trị giá nhiều như tất cả con chó khác và cháu sẽ trả giá đầy đủ. Nói tóm lại, cháu sẽ đưa cho chú 2 đô la 37 xu bây giờ, và 50 xu mỗi tháng cho đến khi cháu trả hết cho chú”.\r\n\r\nChủ cửa hàng bách hóa lưỡng lự và khuyên: “Thật ra cháu không nên mua con chó nhỏ này. Nó không thể nhảy và chơi với cháu như những con chó khác”.\r\n\r\nĐến đây, cậu bé cúi xuống và ôm con chó đang thở hổn hển, cái chân bị xoắn rất xấu, chân trái bị tật được chống giữ bởi một thanh chống kim loại lớn. Cậu bé nhìn chủ cửa hàng bách hóa và trả lời một cách nhẹ nhàng: “Tốt, cháu không đi dạo một mình, và con chó nhỏ sẽ cần một người nào đó quan tâm đến!”.\r\n', 'Bán chó con', 'images/bancho.jpg', '2022-11-05 06:30:54', '2022-11-05 06:40:38'),
(6001, 'Truyện', 'The Woodman was in despair. The axe was all he possessed with which to make a living, and he had not money enough to buy a new one. As he stood wringing his hands and weeping, the god Mercury suddenly appeared and asked what the trouble was. The Woodman told what had happened, and straightway the kind Mercury dived into the pool.\r\n\r\nWhen he came up again he held a wonderful golden axe.\r\n\r\n“Is this your axe?” Mercury asked the Woodman.\r\n\r\n“No,” answered the honest Woodman, “that is not my axe.”\r\n\r\nMercury laid the golden axe on the bank and sprang back into the pool. This time he brought up an axe of silver, but the Woodman declared again that his axe was just an ordinary one with a wooden handle. Mercury dived down for the third time, and when he came up again he had the very axe that had been lost.\r\n\r\nThe poor Woodman was very glad that his axe had been found and could not thank the kind god enough. Mercury was greatly pleased with the Woodman’s honesty.\r\n\r\n“I admire your honesty,” he said, “and as a reward you may have all three axes, the gold and the silver as well as your own.”\r\n\r\nThe happy Woodman returned to his home with his treasures, and soon the story of his good fortune was known to everybody in the village. Now there were several Woodmen in the village who believed that they could easily win the same good fortune.\r\n\r\nThey hurried out into the woods, one here, one there, and hiding their axes in the bushes, pretended they had lost them. Then they wept and wailed and called on Mercury to help them.\r\n\r\nAnd indeed, Mercury did appear, first to this one, then to that. To each one he showed an axe of gold, and each one eagerly claimed it to be the one he had lost. But Mercury did not give them the golden axe. Oh no!\r\n\r\nInstead he gave them each a hard whack over the head with it and sent them home.\r\n\r\nAnd when they returned next day to look for their own axes, they were nowhere to be found.', 'Có một gã tiều phu đang tuyệt vọng. Có một cái rìu là tất cả tài sản có được để kiếm sống, anh ấy không có đủ tiền để mua một cái mới. Anh ấy đứng khóc ướt sũng quần áo, vua thủy tề bất ngờ xuất hiện và hỏi tại sao lại khóc. Người tiều phu nói chuyện đã xảy ra và ngay lập tức thủy tề biến xuống hồ.\r\n\r\nKhi ông ấy trở lại đem theo một cái rìu vàng đẹp tuyệt.\r\n\r\nThủy tề hỏi người tiều phu “Có phải rìu của con không?”\r\n\r\nNgười tiều phu trung thực trả lời “Không, đó không phải cái rìu của con”\r\n\r\nThủy tề ném cái rìu xuống hồ và biến mất xuống hồ. Sau đó ông ấy mang lên một cái rìu bạc, nhưng người tiều phu vẫn thừa nhận cái rìu của anh ấy rất bình thường có cán bằng gỗ.\r\n\r\nThủy tề lặn xuống lần thứ ba, và khi trở lên ông ấy cầm cái rìu đã bị mất trước đó.\r\n\r\nNgười tiều phu nghèo khó rất vui vì tìm lại cái rìu và không biết cám ơn ông ấy sao cho đủ. Thủy tề rất hài lòng với lòng trung thực của người tiều phu.\r\n\r\nÔng ấy nói “Ta rất ngưỡng mộ lòng trung thực của con và phần thưởng là cả ba cây rìu, rìu vàng rìu bạc đều là của con”\r\n\r\nNgười tiều phu rất vui trở về nhà với những báu vật của mình, và câu chuyện về vận may của anh ấy trong làng ai cũng biết. Có một vài người tiều phu khác trong làng tin rằng họ có thể dễ dàng có được may mắn giống như vậy.\r\n\r\nHọ vội vàng đi vào rừng, một người chỗ này, một người chỗ kia và giấu rìu của họ trong các bụi rậm, giả vờ họ làm mất chúng. Sau đó họ khóc và than vãn cầu xin Vua Thủy tề giúp họ.\r\n\r\nVà thực vậy, thủy tề xuất hiện, đầu tiên cái này, sau đó cái kia, cứ mỗi lần ông ấy đưa một cái rìu vàng ra là họ tha thiết xác nhận nó là cái họ đã mất. Nhưng thủy tề không đưa cho họ cái rìu vàng. Oh Không! Thay vào đó ông ấy đánh mỗi người cái mạnh vào đầu và đuổi họ về nhà.\r\n\r\nHôm sau họ quay lại tìm cái rìu của họ nhưng họ không biết tìm ở đâu.', 'Thuỷ tề và tiều phu', 'images/thuyte_tieuphu.jpg', '2022-11-05 06:36:22', '2022-11-05 06:40:38'),
(6002, 'Truyện', 'One day a countryman going to the nest of his Goose found there an egg all yellow and glittering. When he took it up it was as heavy as lead and he was going to throw it away, because\r\nhe thought a trick had been played upon him. But he took it home on second thoughts, and soon found to his delight that it was an egg of pure gold. Every morning the same thing occurred, and he soon becam rich by selling his eggs. As he grew rich he grew greedy; and thinking to get at once all the gold the Goose could give, he killed it and opened it only to find, nothing. Greed often overreaches itself.', 'Một ngày nọ, một người nông dân tìm\r\nđến ổ của con ngỗng và thấy một quả\r\ntrứng vàng sáng bóng. Ông cầm quả trứng lên xem thì thấy nó nặng như chì và quẳng nó đi vì ông nghĩ đây là một trò đùa dành cho mình. Nhưng nghĩ lại ông bèn mang nó về nhà và vui sướng khi nhận ra rằng đây là quả trứng bằng vàng nguyên chất. Mỗi sáng điều tương tự này đều xảy ra và ông ta sớm trở nên giàu có bằng việc bán những quả trứng vàng. Khi càng giàu có thì lòng tham cũng lớn dần lên, ông nghĩ cách để có tất cả trứng vàng của con ngỗng trong một lần, ông giết con ngỗng, mổ bụng nó để tìm trứng vàng nhưng không có gì trong đó cả. Tham quá thì thâm', 'Ngỗng đẻ trứng vàng', 'images/ngong.jpg', '2022-11-05 06:42:57', '2022-11-05 06:42:57'),
(6003, 'Truyện', 'Long ago, the mice had a general council to consider what measures they\r\ncould take to outwit their common enemy, the Cat. Some said this, and some\r\nsaid that; but at last a young mouse got up and said he had a proposal to\r\nmake, which he thought would meet the case. “You will all agree,” said he, “that\r\nour chief danger consists in the sly and treacherous manner in which the enemy\r\napproaches us. Now, if we could receive some signal of her approach, we\r\ncould easily escape from her.” “I venture, therefore, to propose that a small bell\r\nbe procured, and attached by a ribbon round the neck of the Cat. By this means\r\nwe should always know when she was about, and could easily retire while she\r\nwas in the neighbourhood. “This proposal met with general applause, until an\r\nold mouse got up and said: “That is all very well, but who is to bell the Cat?”\r\nThe mice looked at one another and nobody spoke. Then the old mouse said:\r\n“IT IS EASY TO PROPOSE IMPOSSIBLE REMEDIES”.\r\n', 'Đã từ lâu lắm, loài chuột đã tổ chức một hội nghị chung để tính toán xem ở\r\ngiới hạn nào chúng có thể đối phó với kẻ thù chung, loài mèo. Một số con nói\r\nthế này, một số thì bảo thế nọ, cuối cùng có một con chuột nhỏ đứng dậy và\r\nhắn đã đưa ra một đề xuất cần làm, mà theo nó đề nghị cần được đáp ứng.\r\n“Mọi người đều đồng ý thế này”, nó nói, “nguy hiểm lớn nhất của chúng ta\r\nchính là yếu tố ranh mãnh và xảo trá khi kẻ thù tiếp cận chúng ta. Giờ đây, giá\r\nnhư chúng ta có thể nắm bắt được tín hiệu tiếp cận của kẻ thù, chúng ta có thể\r\ndễ dàng tẩu thoát.” “Chính vì vậy, tôi xin mạo muội đề nghị kiếm một cái lục\r\nlạc nhỏ, và đính với một cái nơ quanh cổ của con mèo. Bằng giải pháp này, lúc\r\nnào chúng ta cũng biết được kẻ thù ở đâu và dễ dàng rút lui khi hắn đang ở\r\ngần.” Lời đề nghị này được mọi người tán thán, đến khi một con chuột già\r\nđứng dậy và nói: “Đề nghị đấy tốt thôi, nhưng ai sẽ đeo lục lạc cho mèo?” Bọn\r\nchuột nhìn nhau từng con một và không ai nói lời nào. Rồi lão chuột nói:\r\n“THẬT DỄ DÀNG KHI ĐƯA RA GIẢI PHÁP BẤT KHẢ THI”.\r\n', 'Đeo lục lạc cho mèo', 'images/deoluclac.jpg', '2022-11-05 06:45:10', '2022-11-05 06:45:10'),
(6004, 'Truyện', '“Away with you, vile insect!” said a Lion angrily to a Gnat that was buzzing around his head. But the Gnat was not in the least disturbed. “Do you think,” he said spitefully to the Lion, “that I am afraid of you because they call you king?” The next instant he flew at the Lion and stung him sharply on the nose. Mad with rage, the Lion struck fiercely at the Gnat, but only succeeded in tearing himself with his claws. Again and again the Gnat stung the Lion, who now was roaring terribly. At last, worn out with rage and covered with wounds that his own teeth and claws had made, the Lion gave up the fight. The Gnat buzzed away to tell the whole world about his victory, but instead he flew straight into a spider’s web. And there, he who had defeated the King of beasts came to a miserable end, the prey of a little spider. The least of our enemies is often the most to be feared. Pride over a success should not throw us off our guard.', '“Hãy cút khỏi đây đi, đồ côn trùng thấp hèn kia!” Con sư tử giận dữ nói với con muỗi đang bay vo ve quanh đầu nó nhưng muỗi ta không hề cảm thấy nao núng trước lời nói miệt thị ấy của con sư tử. Chú muỗi hằn học đáp lại: “Ông nghĩ là tôi sợ ông vì ông được người ta tôn vinh là vua à?” Sau đó, con côn trùng đậu trên con sư tử và cắn ngày vào mũi của nó. Con sư tử nổi trận lôi đình, dập một cái thật mạnh vào con muỗi nhưng lại trúng ngay mặt mình. Cứ thế, con muỗi cắn con sư tử nhiều lần trong khi con sư tử đang gầm rú lên một cách thảm thiết. Cuối cùng, con sư tử kiệt sức với đầy viết thương trên mặt mà nó tự gây ra cho mình, nó đành phải chịu thua. Con muỗi bay đi định khoe với mọi người về chiến thắng của mình nhưng sau đó nó lại bay ngay vào ổ nhện. Và ở đó, kẻ vừa mới đánh bại chúa tể cúa sơn lâm đã gặp một kết cục thảm hại đó là trở thành con mồi của một con nhện nhỏ xíu Kẻ thù của chúng ta chưa hẳn là những kẻ đáng sợ nhất. Đừng bao giờ ngủ quên trên hào quang của chiến thắng mà đánh mất sự cảnh giác của mình.', 'Sư tử và con muỗi', 'images/sutu_muoi.jpg', '2022-11-05 06:47:54', '2022-11-05 06:47:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hinh` varchar(50) DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'user',
  `lich_su` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `mail`, `username`, `password`, `hinh`, `type`, `lich_su`, `created_at`, `updated_at`, `image`) VALUES
(1, 'tienb1910461@student.ctu.edu.vn', 'Admin', '1234', 'girl.png', 'admin', '', '2022-11-04 16:10:32', '2022-11-05 16:08:59', 'cdev'),
(2, 'camtienhoconline247@gmail.com', 'Cam Tien', '1234', 'images/woman.png', 'user', '', '2022-11-04 16:10:32', '2022-11-06 09:08:48', ''),
(7, 'tien@gmail.com', 'B1910461', '1234', 'images/man.png', 'user', '', '2022-11-05 15:47:05', '2022-11-05 16:11:32', ''),
(23, 'dongthu1512@gmail.com', 'Dong Thu', '1234', NULL, 'user', '', '2022-11-12 18:31:53', '2022-11-12 18:31:53', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `words`
--

CREATE TABLE `words` (
  `id` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `word` varchar(5000) NOT NULL,
  `phien_am` varchar(50) DEFAULT NULL,
  `nghia` varchar(5000) DEFAULT NULL,
  `phat_am` varchar(50) DEFAULT NULL,
  `hinh` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `words`
--

INSERT INTO `words` (`id`, `brand`, `name`, `word`, `phien_am`, `nghia`, `phat_am`, `hinh`, `created_at`, `updated_at`) VALUES
(1, 'Từ vựng', 'Bảng chữ cái', 'a', '/ei:/', 'A', 'images/A.mp3', 'images/a.jpg', '2022-10-24 06:01:40', '2022-11-05 06:59:40'),
(2, 'Từ vựng', 'Bảng chữ cái', 'b', '/bi:/', 'B', 'images/B.mp3', 'images/b.jpg', '2022-10-24 06:02:05', '2022-11-03 05:36:17'),
(3, 'Từ vựng', 'Bảng chữ cái', 'c', '/si:/', 'C', 'images/C.mp3', 'images/c.jpg', '2022-10-24 06:09:26', '2022-10-24 06:09:50'),
(4, 'Từ vựng', 'Bảng chữ cái', 'd', '/di:/', 'D', 'images/D.mp3', 'images/d.jpg', '2022-10-24 06:03:56', '2022-10-24 06:05:05'),
(5, 'Từ vựng', 'Bảng chữ cái', 'e', '/i:/', 'E', 'images/E.mp3', 'images/e.jpg', '2022-10-24 06:10:43', '2022-10-24 06:10:43'),
(6, 'Từ vựng', 'Bảng chữ cái', 'f', '/ɛf/', 'F', 'images/F.mp3', 'images/f.jpg', '2022-10-24 06:11:00', '2022-10-24 06:11:00'),
(7, 'Từ vựng', 'Bảng chữ cái', 'g', '/dʒiː/', 'G', 'images/G.mp3', 'images/g.jpg', '2022-10-24 06:32:08', '2022-10-24 06:32:08'),
(8, 'Từ vựng', 'Bảng chữ cái', 'h', '/heɪtʃ/', 'H', 'images/H.mp3', 'images/h.jpg', '2022-10-24 06:32:31', '2022-10-24 06:32:31'),
(9, 'Từ vựng', 'Bảng chữ cái', 'i', '/aɪ/', 'I', 'images/I.mp3', 'images/i.jpg', '2022-10-24 06:32:43', '2022-10-24 06:32:43'),
(10, 'Từ vựng', 'Bảng chữ cái', 'j', '/dʒeɪ/', 'J', 'images/J.mp3', 'images/j.jpg', '2022-10-24 06:32:56', '2022-10-24 06:32:56'),
(11, 'Từ vựng', 'Bảng chữ cái', 'k', '/keɪ/', 'K', 'images/K.mp3', 'images/k.jpg', '2022-10-24 06:33:13', '2022-10-24 06:33:13'),
(12, 'Từ vựng', 'Bảng chữ cái', 'l', ' /ɛl/', 'L', 'images/L.mp3', 'images/l.jpg', '2022-10-24 17:01:16', '2022-10-24 17:01:16'),
(13, 'Từ vựng', 'Bảng chữ cái', 'm', '/ɛm/', 'M', 'images/M.mp3', 'images/m.jpg', '2022-10-24 17:02:08', '2022-10-24 17:02:08'),
(14, 'Từ vựng', 'Bảng chữ cái', 'n', '/n/', 'N', 'images/N.mp3', 'images/n.jpg', '2022-10-24 17:02:08', '2022-10-24 17:02:08'),
(15, 'Từ vựng', 'Bảng chữ cái', 'o', '/oʊ/', 'O', 'images/O.mp3', 'images/o.jpg', '2022-10-24 17:04:38', '2022-10-24 17:04:38'),
(16, 'Từ vựng', 'Bảng chữ cái', 'p', '/piː/', 'P', 'images/P.mp3', 'images/p.jpg', '2022-10-24 17:05:04', '2022-10-24 17:05:04'),
(17, 'Từ vựng', 'Bảng chữ cái', 'q', '/kjuː/', 'Q\r\n', 'images/Q.mp3', 'images/q.jpg', '2022-10-24 17:05:32', '2022-10-24 17:05:32'),
(18, 'Từ vựng', 'Bảng chữ cái', 'r', '/ɑr/', 'R', 'images/R.mp3', 'images/r.jpg', '2022-10-24 17:06:52', '2022-10-24 17:06:52'),
(19, 'Từ vựng', 'Bảng chữ cái', 's', '/ɛs/', 'S', 'images/S.mp3', 'images/s.jpg', '2022-10-24 17:07:17', '2022-10-24 17:07:17'),
(20, 'Từ vựng', 'Bảng chữ cái', 't', '/tiː/', 'T', 'images/T.mp3', 'images/t.jpg', '2022-10-24 17:07:44', '2022-10-24 17:07:44'),
(21, 'Từ vựng', 'Bảng chữ cái', 'u', '/juː/', 'U', 'images/U.mp3', 'images/u.jpg', '2022-10-24 17:08:14', '2022-10-24 17:08:14'),
(22, 'Từ vựng', 'Bảng chữ cái', 'v', '/viː/', 'V', 'images/V.mp3', 'images/v.jpg', '2022-10-24 17:08:38', '2022-10-24 17:08:38'),
(23, 'Từ vựng', 'Bảng chữ cái', 'w', '/ˈdʌbəl.juː/', 'W', 'images/W.mp3', 'images/w.jpg', '2022-10-24 17:11:33', '2022-10-24 17:11:33'),
(24, 'Từ vựng', 'Bảng chữ cái', 'x', '/ɛks/', 'X', 'images/X.mp3', 'images/x.jpg', '2022-10-24 17:12:37', '2022-10-24 17:12:37'),
(25, 'Từ vựng', 'Bảng chữ cái', 'y', '/waɪ/', 'Y', 'images/Y.mp3', 'images/y.jpg', '2022-10-24 17:13:04', '2022-10-24 17:13:04'),
(26, 'Từ vựng', 'Bảng chữ cái', 'z', '/zɛd/', 'Z', 'images/Z.mp3', 'images/z.jpg', '2022-10-24 17:13:57', '2022-10-24 17:13:57'),
(30, 'Từ vựng', 'Số đếm', 'Zero', '/ˈziːroʊ/', '0', 'images/0.mp3', 'images/0.png', '2022-10-24 17:40:51', '2022-10-24 17:40:51'),
(31, 'Từ vựng', 'Số đếm', 'One ', '/wʌn/', '1', 'images/1.mp3', 'images/1.png', '2022-10-24 17:42:51', '2022-10-24 17:42:51'),
(32, 'Từ vựng', 'Số đếm', 'Two', ' /tuː/', '2', 'images/2.mp3', 'images/2.png', '2022-10-24 17:43:27', '2022-10-24 17:43:27'),
(33, 'Từ vựng', 'Số đếm', 'Three', '/θri:/', '3', 'images/3.mp3', 'images/3.png', '2022-10-24 17:44:56', '2022-10-24 17:44:56'),
(34, 'Từ vựng', 'Số đếm', 'Four', '/fɔːr/', '4', 'images/4.mp3', 'images/4.png', '2022-10-24 17:45:43', '2022-10-24 17:45:43'),
(35, 'Từ vựng', 'Số đếm', 'Five', '/faɪv/', '5', 'images/5.mp3', 'images/5.png', '2022-10-24 17:48:14', '2022-10-24 17:48:14'),
(36, 'Từ vựng', 'Số đếm', 'Six', '/sɪks/', '6', 'images/6.mp3', 'images/6.png', '2022-10-24 17:48:43', '2022-10-24 17:48:43'),
(37, 'Từ vựng', 'Số đếm', 'Seven', '/ˈsevn/', '7', 'images/7.mp3', 'images/7.png', '2022-10-24 17:49:10', '2022-10-24 17:49:10'),
(38, 'Từ vựng', 'Số đếm', 'Eight', '/eɪt/', '8', 'images/8.mp3', 'images/8.png', '2022-10-24 17:49:36', '2022-10-24 17:49:36'),
(39, 'Từ vựng', 'Số đếm', 'Nine', '/naɪn/', '9', 'images/9.mp3', 'images/9.png', '2022-10-24 17:50:43', '2022-10-24 17:50:43'),
(40, 'Từ vựng', 'Số đếm', 'Ten', '/ten/', '10', 'images/10.mp3', 'images/10.png', '2022-10-24 17:51:06', '2022-10-24 17:51:06'),
(41, 'Từ vựng', 'Số đếm', 'Eleven', '/ɪˈlevn/', '11', 'images/11.mp3', 'images/11.png', '2022-10-24 17:51:33', '2022-10-24 17:51:33'),
(42, 'Từ vựng', 'Số đếm', 'Twelve', '/twelv/', '12', 'images/12.mp3', 'images/12.png', '2022-10-24 17:52:02', '2022-10-24 17:52:02'),
(43, 'Từ vựng', 'Số đếm', 'Thirteen', '/ˌθɜːrˈtiːn/', '13', 'images/13.mp3', 'images/13.png', '2022-10-24 17:52:27', '2022-10-24 17:52:27'),
(44, 'Từ vựng', 'Số đếm', 'Fourteen', '/ˌfɔːrˈtiːn/', '14', 'images/14.mp3', 'images/14.png', '2022-10-24 17:52:52', '2022-10-24 17:52:52'),
(45, 'Từ vựng', 'Số đếm', 'Fiffteen', '/ˌfɪfˈtiːn/', '15', 'images/15.mp3', 'images/15.png', '2022-10-24 17:53:23', '2022-10-24 17:53:23'),
(46, 'Từ vựng', 'Số đếm', 'Sixteen', '/ˌsɪksˈtiːn/', '16', 'images/16.mp3', 'images/16.png', '2022-10-24 17:53:49', '2022-10-24 17:53:49'),
(47, 'Từ vựng', 'Số đếm', 'Seventeen', '/ˌsevnˈtiːn/', '17', 'images/17.mp3', 'images/17.png', '2022-10-24 17:54:16', '2022-10-24 17:54:16'),
(48, 'Từ vựng', 'Số đếm', 'Eighteen', '/ˌeɪˈtiːn/', '18', 'images/18.mp3', 'images/18.png', '2022-10-24 17:54:44', '2022-10-24 17:54:44'),
(49, 'Từ vựng', 'Số đếm', 'Nineteen', '/ˌnaɪnˈtiːn/', '19', 'images/16.mp3', 'images/19.png', '2022-10-24 17:55:10', '2022-10-24 17:55:10'),
(50, 'Từ vựng', 'Số đếm', 'Twenty', '/ˈtwenti/', '20', 'images/20.mp3', 'images/20.png', '2022-10-24 17:56:08', '2022-10-24 17:56:08'),
(51, 'Từ vựng', 'Số đếm', 'Twenty-one', ' /ˈtwenti wʌn/', '21', 'images/21.mp3', 'images/21.png', '2022-10-24 17:56:34', '2022-10-24 17:56:34'),
(53, 'Từ vựng', 'Số đếm', 'Thirty', '/ˈθɜːrti/', '30', 'images/30.mp3', 'images/30.png', '2022-10-24 17:58:53', '2022-10-24 17:58:53'),
(54, 'Từ vựng', 'Số đếm', 'Forty', '/ˈfɔːrti/', '40', 'images/40.mp3', 'images/40.png', '2022-10-24 17:59:49', '2022-10-24 17:59:49'),
(55, 'Từ vựng', 'Số đếm', 'Fiffty', ' /ˌfɪfˈti/', '50', 'images/50.mp3', 'images/50.png', '2022-10-24 18:03:18', '2022-10-24 18:03:18'),
(56, 'Từ vựng', 'Số đếm', 'Sixty', '/ˌsɪksˈtiːn/', '60', 'images/60.mp3', 'images/60.png', '2022-10-24 18:04:46', '2022-10-24 18:04:46'),
(57, 'Từ vựng', 'Số đếm', 'Seventy', '/ˌsevnˈti/', '70', 'images/70.mp3', 'images/70.png', '2022-10-24 18:06:00', '2022-10-24 18:06:00'),
(58, 'Từ vựng', 'Số đếm', 'Eighty', '/ˌeɪˈtiːn/', '80', 'images/80.mp3', 'images/80.png', '2022-10-24 18:06:54', '2022-10-24 18:06:54'),
(59, 'Từ vựng', 'Số đếm', 'Ninety', '/ˌnaɪnˈtiːn/', '90', 'images/90.mp3', 'images/80.png', '2022-10-24 18:09:48', '2022-10-24 18:09:48'),
(60, 'Từ vựng', 'Số đếm', 'One hundred', '/wʌn ˈhʌndrəd/', '100', 'images/100.mp3', 'images/100.png', '2022-10-24 18:10:29', '2022-10-24 18:10:29'),
(61, 'Từ vựng', 'Số đếm', 'one hundred and one', '/wʌn ˈhʌndrəd and  wʌn/', '101', 'images/101.mp3', 'images/101.png', '2022-10-25 15:28:15', '2022-10-25 15:28:15'),
(62, 'Từ vựng', 'Số đếm', 'One thousand', '/wʌn ˈθaʊznd/', '1000', 'images/1000.mp3', 'images/1000.png', '2022-10-24 18:12:09', '2022-10-24 18:12:09'),
(63, 'Từ vựng', 'Số đếm', 'ten thousand', '/ten ˈθaʊznd/', '10000', 'images/10000.mp3', 'images/10000.png', '2022-10-25 15:32:52', '2022-10-25 15:32:52'),
(64, 'Từ vựng', 'Số đếm', 'One million', '/ˈmɪljən/', '1 triệu', 'images/1000000.mp3', 'images/1tr.png', '2022-10-24 18:14:44', '2022-10-24 18:14:44'),
(65, 'Từ vựng', 'Số đếm', 'One billion', '/ˈbɪljən/', '1 tỷ', 'images/1000000000.mp3', 'images/1ty.png', '2022-10-24 18:15:27', '2022-10-24 18:15:27'),
(100, 'Từ vựng', 'Màu sắc', 'Brown', ' /braʊn/', 'màu nâu', 'images/Brown.mp3', 'images/nau.png', '2022-10-24 18:19:14', '2022-10-24 18:19:14'),
(101, 'Từ vựng', 'Màu sắc', 'Gray ', '/greɪ/', 'màu xám', 'images/Gray.mp3', 'images/xam.jpg', '2022-10-24 18:20:23', '2022-10-24 18:20:23'),
(102, 'Từ vựng', 'Màu sắc', 'Pink ', '/pɪŋk/', 'màu hồng', 'images/Pink.mp3', 'images/hong.jpg', '2022-10-24 18:20:52', '2022-10-24 18:20:52'),
(103, 'Từ vựng', 'Màu sắc', 'Green ', '/griːn/', 'màu xanh lá cây', 'images/Green.mp3', 'images/xanhla.jpg', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(104, 'Từ vựng', 'Màu sắc', 'Red ', '/red/', 'màu đỏ', 'images/Red.mp3', 'images/red.jpg', '2022-10-24 18:23:19', '2022-10-24 18:23:19'),
(105, 'Từ vựng', 'Màu sắc', 'Orange ', '/ˈɒr.ɪndʒ/', ' màu cam', 'images/Orange.mp3', 'images/cam.jpg', '2022-10-24 18:24:07', '2022-10-24 18:24:07'),
(106, 'Từ vựng', 'Màu sắc', 'Black ', '/blæk/', 'màu đen', 'images/Black.mp3', 'images/den.jpg', '2022-10-24 18:24:33', '2022-10-24 18:24:33'),
(107, 'Từ vựng', 'Màu sắc', 'White ', ' /waɪt/', 'màu trắng', 'images/White.mp3', 'images/trang.jpg', '2022-10-24 18:25:04', '2022-10-24 18:25:04'),
(108, 'Từ vựng', 'Màu sắc', 'Yellow ', '/ˈjel.əʊ/', 'màu vàng', 'images/Yellow.mp3', 'images/vang.jpg', '2022-10-24 18:25:28', '2022-10-24 18:25:28'),
(109, 'Từ vựng', 'Màu sắc', 'Blue ', '/bluː/', 'màu xanh da trời', 'images/Blue.mp3', 'images/datroi.jpg', '2022-10-24 18:27:25', '2022-10-24 18:27:25'),
(110, 'Từ vựng', 'Màu sắc', 'Purple ', '/ˈpɜː(ɹ).pəl/', 'màu tím', 'images/Purple.mp3', 'images/tim.jpg', '2022-10-24 18:27:47', '2022-10-24 18:27:47'),
(150, 'Từ vựng', 'Phòng khách', 'chair', '/tʃeə/', 'Ghế', 'images/chair.mp3', 'images/chair.jpg', '2022-10-24 18:31:35', '2022-10-24 18:31:35'),
(151, 'Từ vựng', 'Phòng khách', 'cushion', '/´kuʃən/', 'Cái gối', 'images/cushion.mp3', 'images/cushion.jpg', '2022-10-24 18:32:38', '2022-10-24 18:32:38'),
(152, 'Từ vựng', 'Phòng khách', 'rug', '/rʌg/', 'Thảm trải sàn', 'images/rug.mp3', 'images/rug.jpg', '2022-10-24 18:33:15', '2022-10-24 18:33:15'),
(153, 'Từ vựng', 'Phòng khách', 'Clock', '/klɒk/', 'đồng hồ', 'images/Clock.mp3', 'images/clock.jpg', '2022-10-24 18:35:01', '2022-10-24 18:35:01'),
(154, 'Từ vựng', 'Phòng khách', 'Television', '/ˈtelɪvɪʒn/', 'ti vi', 'images/Television.mp3', 'images/tivi.png', '2022-10-24 18:35:56', '2022-10-24 18:35:56'),
(155, 'Từ vựng', 'Phòng khách', 'Fireplace', '/ˈfaɪəpleɪs/', 'lò sưởi', 'images/Fireplace.mp3', 'images/fireplace.jpg', '2022-10-24 18:37:41', '2022-10-24 18:37:41'),
(156, 'Từ vựng', 'Phòng khách', 'Lampshade', '/ˈlæmpʃeɪd/', 'chụp đèn', 'images/Lampshade.mp3', 'images/lampshade.jpg', '2022-10-24 18:38:52', '2022-10-24 18:38:52'),
(157, 'Từ vựng', 'Phòng khách', 'Desk', ' /desk/', 'cái bàn', 'images/Desk.mp3', 'images/desk.jpg', '2022-10-24 18:39:28', '2022-10-24 18:39:28'),
(158, 'Từ vựng', 'Phòng khách', 'Vase', ' /veɪs/', 'lọ hoa', 'images/Vase.mp3', 'images/vase.jpg', '2022-10-24 18:40:43', '2022-10-24 18:40:43'),
(200, 'Từ vựng', 'Động vật', 'bear', '/bɛr/ ', 'Con gấu', 'images/bear.mp3', 'images/gau.jpg', '2022-11-09 04:12:25', '2022-11-09 04:12:25'),
(5009, 'Từ vựng', 'Động vật', 'Donkey', '/ˈdɑŋki/', 'Con lừa', 'images/Donkey.mp3', 'images/lua.jpg', '2022-11-09 04:13:11', '2022-11-09 04:13:11'),
(5010, 'Từ vựng', 'Động vật', 'Goat', '/goʊt/', 'Con dê', 'images/Goat.mp3', 'images/de.jpg', '2022-11-09 04:13:50', '2022-11-09 04:13:50'),
(5011, 'Từ vựng', 'Động vật', 'Rabbit', '/ˈræbət/', 'Con thỏ', 'images/Rabbit.mp3', 'images/tho.jpg', '2022-11-09 04:14:27', '2022-11-09 04:14:27'),
(5012, 'Từ vựng', 'Động vật', 'Sheep', '/ʃip/', 'Con cừu', 'images/Sheep.mp3', 'images/cuu.jpg', '2022-11-09 04:14:58', '2022-11-09 04:14:58'),
(5013, 'Từ vựng', 'Động vật', 'Eagle', '/ˈiː.gl/', 'Đại bàng', 'images/Eagle.mp3', 'images/daibang.jpg', '2022-11-09 04:15:59', '2022-11-09 04:15:59'),
(5014, 'Từ vựng', 'Động vật', 'Swan', '/swɒn/', 'Thiên nga', 'images/Swan.mp3', 'images/thiennga.jpg', '2022-11-09 04:16:33', '2022-11-09 04:16:33'),
(5015, 'Từ vựng', 'Động vật', 'Ostrich', '/ˈɒs.trɪtʃ/', 'Đà điểu', 'images/Ostrich.mp3', 'images/dadieu.jpg', '2022-11-09 04:17:04', '2022-11-09 04:17:04'),
(5016, 'Từ vựng', 'Động vật', 'Lobster', '/ˈlɒb.stəʳ/', 'Tôm hùm', 'images/Lobster.mp3', 'images/tomhum.jpg', '2022-11-09 04:17:58', '2022-11-09 04:17:58'),
(5017, 'Từ vựng', 'Động vật', 'Jellyfish', '/ˈdʒel.i.fɪʃ/', 'Con sứa', 'images/Jellyfish.mp3', 'images/sua.jpg', '2022-11-09 04:18:41', '2022-11-09 04:18:41'),
(5018, 'Từ vựng', 'Động vật', 'Stingray', '/ˈstɪŋreɪ/', 'cá đuối', 'images/Stingray.mp3', 'images/caduoi.jpg', '2022-11-09 04:19:30', '2022-11-09 04:19:30'),
(5019, 'Từ vựng', 'Động vật', 'Squirrel', ' /ˈskwɜːrəl/', 'con sóc', 'images/Squirrel.mp3', 'images/soc.jpg', '2022-11-09 04:20:27', '2022-11-09 04:20:27'),
(5020, 'Từ vựng', 'Động vật', 'Cricket', '/ˈkrɪkɪt/', 'con dế', 'images/Cricket.mp3', 'images/demen.jpg', '2022-11-09 04:21:31', '2022-11-09 04:21:31'),
(5021, 'Từ vựng', 'Động vật', 'Frog', '/frɒg/', 'Con ếch', 'images/Frog.mp3', 'images/ech.jpg', '2022-11-09 04:22:14', '2022-11-09 04:22:14'),
(5022, 'Từ vựng', 'Mua sắm', 'Trolley', '/\'trɔli/', 'xe đẩy hàng', 'images/Trolley.mp3', 'images/Xeday.jpg', '2022-11-09 08:46:35', '2022-11-09 08:46:35'),
(5023, 'Từ vựng', 'Mua sắm', 'Counter', ' /\'kauntə/', 'quầy', 'images/Counter.mp3', 'images/quay.jpg', '2022-11-09 08:47:15', '2022-11-09 08:47:15'),
(5024, 'Từ vựng', 'Mua sắm', 'Leaflet', '/\'li:flit/', 'tờ rơi', 'images/Leaflet.mp3', 'images/toroi.jpg', '2022-11-09 08:48:19', '2022-11-09 08:48:19'),
(5025, 'Từ vựng', 'Mua sắm', 'Wallet', '/\'wɔlit/', 'ví tiền', 'images/Wallet.mp3', 'images/vi.jpg', '2022-11-09 08:49:33', '2022-11-09 08:49:33'),
(5026, 'Từ vựng', 'Mua sắm', 'Cash', '/kæʃ/', 'tiền mặt', 'images/Cash.mp3', 'images/tienmat.jpg', '2022-11-09 08:50:04', '2022-11-09 08:50:04'),
(5027, 'Từ vựng', 'Mua sắm', 'Stockroom', '/\'stɔkrum/', 'kho chứa hàng', 'images/Stockroom.mp3', 'images/kho.jpg', '2022-11-09 08:51:20', '2022-11-09 08:51:20'),
(5028, 'Từ vựng', 'Mua sắm', 'Bid', '/bid/', 'sự trả giá', 'images/Bid.mp3', 'images/tragia.jpg', '2022-11-09 08:53:07', '2022-11-09 08:53:07'),
(5029, 'Từ vựng', 'Mua sắm', 'Cheque', '/tʃek/', 'tấm séc', 'images/Cheque.mp3', 'images/sec.jpg', '2022-11-09 08:54:16', '2022-11-09 08:54:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ngu_phap`
--
ALTER TABLE `ngu_phap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ngu_phap`
--
ALTER TABLE `ngu_phap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6007;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `words`
--
ALTER TABLE `words`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5031;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
