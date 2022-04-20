<?php
define("CONTACT_INPUTS_AM", "
<h3 class='special-offers-caption title_contact'>Կապ</h3>
<div class='contact_us d-flex'>
    <div class='contact_inputs'>
        <div class='inputs_contact'>
            <label for='cont_name'>Անուն, Ազգանուն</label><span class='conNameError contError'>* Այս դաշտը պարտադիր է լրացման համար:</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_name' placeholder='Ձեր անուն, ազգանունը'>

            <label for='cont_phone'>Հեռախոսահամար</label>
            <span class='conPhoneError contError contError1'>* Այս դաշտը պարտադիր է լրացման համար:</span>
            <span class='conPhoneValid contError contError1'>* Մուտքագրեք վավեր հեռախոսահամար:</span>

            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_phone' placeholder='Ձեր հեռախոսահամարը'>

            <label for='cont_mail'>Էլ.փոստի հասցե</label>
            <span class='conMailError contError'>* Այս դաշտը պարտադիր է լրացման համար:</span>
            <span class='conMailValid contError'>* Մուտքագրեք վավեր էլ. փոստի հասցե:</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_mail' placeholder='Ձեր Էլ.փոստի հասցեն'>

            <label for='cont_title'>Վերնագիր</label><span class='conTitleError contError'>* Այս դաշտը պարտադիր է լրացման համար:</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_title' placeholder='Վերնագիր'>

            <label for='cont_notes'>Այլ նշումներ</label><span class='conNotesError contError'>* Այս դաշտը պարտադիր է լրացման համար:</span>
            <textarea rows='4' class='form-control inputs_contact_input' id='cont_notes' placeholder='Այլ նշումներ'></textarea>

");

define("CONTACT_INPUTS_EN", "
<h3 class='special-offers-caption title_contact'>Contact</h3>
<div class='contact_us d-flex'>
    <div class='contact_inputs'>
        <div class='inputs_contact'>
            <label for='cont_name'>Name, Surname</label><span class='conNameError contError'>* This field is required.</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_name' placeholder='Your Name, Surname'>

            <label for='cont_phone'>Phone number</label>
            <span class='conPhoneError contError contError1'>* This field is required.</span>
            <span class='conPhoneValid contError contError1'>* Enter a valid phone number.</span>

            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_phone' placeholder='Your Phone Number'>

            <label for='cont_mail'>Your Email Address</label>
            <span class='conMailError contError'>* This field is required.</span>
            <span class='conMailValid contError'>* Enter a valid email address.</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_mail' placeholder='Your Email Address'>

            <label for='cont_title'>Title</label><span class='conTitleError contError'>* This field is required.</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_title' placeholder='Title'>

            <label for='cont_notes'>Notes</label><span class='conNotesError contError'>* This field is required.</span>
            <textarea rows='4' class='form-control inputs_contact_input' id='cont_notes' placeholder='Notes'></textarea>
");
define("CONTACT_INPUTS_RU", "
<h3 class='special-offers-caption title_contact'>Контакт</h3>
<div class='contact_us d-flex'>
    <div class='contact_inputs'>
        <div class='inputs_contact'>
            <label for='cont_name'>Имя, Фамилия</label><span class='conNameError contError'>* Это поле обязательно к заполнению.</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_name' placeholder='Ваше имя, фамилия'>

            <label for='cont_phone'>Телефонный номер</label>
            <span class='conPhoneError contError contError1'>* Это поле обязательно к заполнению.</span>
            <span class='conPhoneValid contError contError1'>* Введите действующий номер телефона.</span>

            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_phone' placeholder='Ваш номер телефона'>

            <label for='cont_mail'>Электронная почта</label>
            <span class='conMailError contError'>* Это поле обязательно к заполнению.</span>
            <span class='conMailValid contError'>* Введите действующий адрес электронной почты</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_mail' placeholder='Ваша электронная почта'>

            <label for='cont_title'>Заголовок</label><span class='conTitleError contError'>* Это поле обязательно к заполнению.</span>
            <input type='text' class='form-control inputs_contact_input mb-3' id='cont_title' placeholder='Заголовок'>

            <label for='cont_notes'>Заметки</label><span class='conNotesError contError'>* Это поле обязательно к заполнению.</span>
            <textarea rows='4' class='form-control inputs_contact_input' id='cont_notes' placeholder='Заметки'></textarea>
");


define("SUBS_INPUTS_AM", "
        <div class='subscribe-caption'>Տեղեկացեք կենտրոնի հատուկ առաջարկներին առաջինը</div>
        <input type='text' class='subs-inp' placeholder='Անուն Ազգանուն' id='subs_name'>
        <input type='text' class='subs-inp' placeholder='Հեռախոսահամար' id='subs_tel'>
        <input type='text' class='subs-inp' placeholder='էլ. փոստի հասցե' id='subs_email'>
        <input type='button' value='Ուղարկել' class='bookButton' id='sub-subscribe'>
        <div class='subsPhoneError'>
            * Մուտքագրեք վավեր հեռախոսահամար։
        </div>
        <div class='subsEmailError'>
            * Մուտքագրեք վավեր էլ. փոստի հասցե:
        </div>
");
define("SUBS_INPUTS_EN", "
    <div class='subscribe-caption'>Be the first to know about the special offers of the center</div>

    <input type='text' class='subs-inp' placeholder='Name Surname' id='subs_name'>
    <input type='text' class='subs-inp' placeholder='Phone Number' id='subs_tel'>
    <input type='text' class='subs-inp' placeholder='Email address' id='subs_email'>
    <input type='button' value='Send' class='bookButton' id='sub-subscribe'>
    <div class='subsPhoneError'>
        * Enter a valid phone number.
    </div>
    <div class='subsEmailError'>
        * Enter a valid Email address:
    </div>
");
define("SUBS_INPUTS_RU", "
    <div class='subscribe-caption'>Узнавайте первым о специальных предложениях центра</div>
    <input type='text' class='subs-inp' placeholder='Имя Фамилия' id='subs_name'>
    <input type='text' class='subs-inp' placeholder='Телефонный номер' id='subs_tel'>
    <input type='text' class='subs-inp' placeholder='Адрес эл. почты' id='subs_email'>
    <input type='button' value='Отправить' class='bookButton' id='sub-subscribe'>
    <div class='subsPhoneError'>
        * Введите действующий номер телефона.
    </div>
    <div class='subsEmailError'>
        * Введите действующий адрес электронной почты.
    </div>
");
