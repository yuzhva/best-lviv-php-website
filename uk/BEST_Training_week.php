<?php
$lang = isset($_GET["lang"])? $_GET["lang"]: "uk";
$array = parse_ini_file($lang.".ini");
require"../resources/tpl/body_on.php";
require"../resources/tpl/header.php"
?>

<table>
<tr>
<td width="100%" style="background-color:#ededed">
<br/>
<br/>
<img src="../resources/img/news/BEST_Training_week.jpg" alt="European BEST Engineering Competition" align="right" />
<h1>BEST Training week</h1>
<h3>Знайомтесь - це наш новий проект!</h3><br/>
<br/>
<p><strong>BEST Training Week</strong> – перший в історії осередку «BEST Lviv» тиждень відкритих тренінгів, спрямований на розвиток та навчання студентів у найрізноманітніших сферах життя та науки у формі тренінгів та майстер-класів(практичної діяльності).</p><br/>
<p>Метою цього заходу є набуття та вдосконалення особистих навичок публічни виступів, вміння переконувати, організовувати свій час,а також розгляд актуальних проблем сучасності та заохочення і залучення молоді до їх вирішення.</p><br/>
<p>BEST Training Week відбувається для студентів усіх вищих навчальних закладів Львова. Програма тижня тренінгів передбачає 5 днів та близько 10 тренінгів та майстер класів.</p><br/>
<p>Тренінги проводитимуться на тематику саморозвитку (публічний виступ та ін.), самоосвіти (суть і методи ефективного навчання,основи швидкого читання), секрети «теорії брехні», самоорганізації(тайм-менеджмент), ефективної комунікації з людьми і т.п. висококваліфікованими та досвідченими тренерами України. Після проходження тренінгового тижня учасники отримають офіційні сертифікати.</p><br/>
<p>Якщо Ви зацікавились в цьому проекті - слідкуйте за новинами на сайті чи в соц. мережах. Інформація щодо розкладу тренінгів та реєстраційної заяви буде доступна найближчим часом.</p><br/>
<br/>
<br/>
</td>
</tr>
</table>

<?php
require"../resources/tpl/footer.php";
require"../resources/tpl/body_off.html";
?>