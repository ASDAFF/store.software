<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Напишите нам");
?> 
<p><b>Уважаемые покупатели!</b> 
  <br />
 
  <br />
 Если у вас есть вопросы по покупке программного обеспечения вы можете воспользоваться формой обратной связи предложенной ниже и наш менеджер свяжется с вами в ближайшее время для решения вопроса. 
  <br />
 
  <br />
 Прежде чем задать свой вопрос, обратите внимание на раздел <a href="#SITE_DIR#help/" title="Помощь" >Помощь покупателю</a>. Возможно, там уже есть исчерпывающая информация по решению вашей проблемы. 
  <br />
 
  <br />
 </p>
 
<p><b>Он-лайн заявка</b> 
  <br />
 
  <br />
 </p>
 
<div class="content"> <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "Back_call", Array(
	"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	"OK_TEXT" => "Спасибо за заявку - наш менеджер скоро свяжется с вами.",	// Сообщение, выводимое пользователю после отправки
	"EMAIL_TO" => "info@softeffect.ru",	// E-mail, на который будет отправлено письмо
	"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
	"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
	),
	false
);?> </div>
 
<br />
 
<br />
 
<br />
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>