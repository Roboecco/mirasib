<?php
	use yii\helpers\Html;
	use app\models\Page;
			
	$this->title = $title;
	
	Page::setMetaTags([
			'title'       => $title,
			'description' => 'Новосибирская региональная общественная организация по защите прав и законных интересов инвалидов "МиРа"',
			//'section'     => 'Контакты',
			'image'       => '/web/images/nroo-mira.jpg',
		]);
?>

<article class="post">                    
	<div class="post-content">
		<header class="entry-header text-center text-uppercase">                            
			<h1 class="entry-title"><?= $this->title; ?></h1>
		</header>
		<div class="entry-content">			
			<p>mirasib.ru уважает конфиденциальность информации своих клиентов и обязуется защищать любую персональную информацию, предоставляемую пользователями через интернет-сайт. Приведенные ниже сведения помогают пользователям понять, какую информацию mira-sib.ru собирает через веб-сайт и каким образом эта информация используется.</p>

			<p>mira-sib.ru также рекомендует ознакомиться с Согласие на обработку персональных данных и Пользовательским соглашением.</p>

			<p>Посещая и используя веб-сайт mira-sib.ru, пользователь признает, без каких-либо ограничений и оговорок, что прочел, понял и согласен с правилами и условиями данного Положения и, соответственно, согласен на использование файлов cookie в соответствии с данной Политикой.</p>

			<p>Пользователи могут посещать сайт mira-sib.ru, в своих интересах. На сайте mira-sib.ru используются сбор cookie для обеспечения пользователям максимального удобства. Cookie — это небольшие текстовые файлы, расположенные на устройстве пользователя и предназначенные для обеспечения удобства пользования сайта и экономии времени. Файлы cookie, собираемые mira-sib.ru, не содержат информацию, которая может служить для идентификации лиц.</p>

			<p>Cookie могут быть постоянными или сессионными.</p>

			<p>Постоянные cookie-файлы сохраняются браузером и остаются действующими до момента истечения условий срока хранения:<br/>
			- в конце сеанса (например, когда браузер закрывается)<br/>
			- дата истечения была указана, и срок хранения вышел;<br/>
			- браузер удалил Cookie по запросу пользователя.</p>
			
			<p>Сессионные cookie-файлы становятся недействительными по истечению срока их действия. mira-sib.ru использует как сессионные, так и постоянные cookie-файлы на сайте mira-sib.ru и всех его поддоменов.</p>

			<p>Назначения cookie-файлов и тегов, используемых mira-sib.ru</p>
						
			<p>Анонимные файлы «cookie», которые позволяют пользователям осуществлять навигацию по веб-сайту, использовать его функции и получать доступ к защищенным разделам.</p>
			
			<p>Они также облегчают навигацию по сайту и используются для обеспечение надлежащей работы веб-сайта.</p>
			
			<p>Информация, собранная данными файлами «cookie», не предназначена для использования в маркетинговых целях.<p>

			<p>Если использование этого типа файлов «cookie» запрещено пользователем, некоторые разделы веб-сайта будут недоступны для пользователя, либо их функциональность не будет использоваться полностью.</p>
			
			<p>Вы можете либо настроить ваш браузер для получения наших файлов cookies, либо пользоваться веб-сайтом mira-sib.ru без этих функциональных возможностей. В последнем случае функциональность сайта будет снижена.</p>

			<p>Данное Положение может обновляться с течением времени — например, в случаях изменений применимого законодательства или применяемых online-технологий. mira-sib.ru рекомендует клиентам регулярно проверять наш сайт на наличие актуальной информации о нашей политике использования cookie.</p>
		</div>
		
	</div>
</article>