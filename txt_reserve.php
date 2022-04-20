<?php
define("RESERVE_INPUTS_AM", '
<div class="modalBody">
<h4 class="modal-title">Մուտքագրրեք Ձեր տվյալները</h4>
<div class="inpCaption">
    Անուն, ազգանուն
</div>
<input type="text" class="form-control" id="inpName">
<div class="reserve_error errorName"></div>
<div class="inpCaption">
    Հեռախոսահամար
</div>
<input type="text" class="form-control" id="inpTel">
<div class="reserve_error errorTel"></div>
<div class="inpCaption">
    Էլ.փոստի հասցե
</div>
<input type="text" class="form-control" id="inpMail">
<div class="reserve_error errorMail"></div>
<div class="flex_mod d-flex justify-content-between">
    <div class=flex_mod_item1>
        <div class="inpCaption">
            Ժամանման ամսաթիվ
        </div>
        <input type="date" class="form-control" id="inpArrival">
    </div>
    <div class=flex_mod_item2>    
        <div class="inpCaption">
            Մեկնելու ամսաթիվ
        </div>
        <input type="date" class="form-control" id="inpDeparture">
    </div>
</div> 

<div class="flex_mod d-flex justify-content-between">
    <div class=flex_mod_item1>
        <div class="inpCaption">
            Այցելու
        </div>
        <input type="number" class="form-control" max="100" id="inpVisitor">
    </div>    
    <div class=flex_mod_item2>    
        <div class="inpCaption">
            Սենյակ
        </div>
        <input type="number" class="form-control" max="8" id="inpRoom">
    </div>    
</div>    
<div class="inpCaption">
    Ներառել
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="breakfast_checked">
    <label class="custom-control-label" for="breakfast_checked"> Նախաճաշ</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="dinner_checked">
    <label class="custom-control-label" for="dinner_checked"> Ճաշ</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="supper_checked">
    <label class="custom-control-label" for="supper_checked"> Ընթրիք</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="lanchbox_checked">
    <label class="custom-control-label" for="lanchbox_checked"> Նախաճաշի տուփ(Lunchbox)</label>
</div>
<div class="inpCaption">
    Այլ նշումներ
</div>
<textarea class="form-control" id="inpNotes" rows="3"></textarea>

</div>
<div class="closeRight">
<div class="reserve_error error_below"></div>
<button type="button" class="reserve_submit">Ամրագրել</button>
<button type="button" class="btn btn-default go_back" data-dismiss="modal">Փակել</button>

</div>
');

define("RESERVE_INPUTS_EN", '
<div class="modalBody">
<h4 class="modal-title">Submit your details</h4>
<div class="inpCaption">
    Name Surname
</div>
<input type="text" class="form-control" id="inpName">
<div class="reserve_error errorName"></div>
<div class="inpCaption">
    Phone number
</div>
<input type="text" class="form-control" id="inpTel">
<div class="reserve_error errorTel"></div>
<div class="inpCaption">
    Email Address
</div>
<input type="text" class="form-control" id="inpMail">
<div class="reserve_error errorMail"></div>

<div class="flex_mod d-flex justify-content-between">
    <div class=flex_mod_item1>
        <div class="inpCaption">
            Date of arrival
        </div>
        <input type="date" class="form-control" id="inpArrival">
    </div>
    <div class=flex_mod_item2>
        <div class="inpCaption">
            Date of departure
        </div>
        <input type="date" class="form-control" id="inpDeparture">
    </div>    
</div>    
<div class="flex_mod d-flex justify-content-between">
    <div class=flex_mod_item1>
        <div class="inpCaption">
            Visitor
        </div>
        <input type="number" class="form-control" max="100" id="inpVisitor">
    </div> 
    <div class=flex_mod_item2>   
        <div class="inpCaption">
            Room
        </div>
        <input type="number" class="form-control" max="8" id="inpRoom">
    </div>
</div>        

<div class="inpCaption">
    Include:
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="breakfast_checked">
    <label class="custom-control-label" for="breakfast_checked"> Breakfast</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="dinner_checked">
    <label class="custom-control-label" for="dinner_checked"> Dinner</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="supper_checked">
    <label class="custom-control-label" for="supper_checked"> Supper</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="lanchbox_checked">
    <label class="custom-control-label" for="lanchbox_checked">Lunchbox</label>
</div>
<div class="inpCaption">
    Other notes
</div>
<textarea class="form-control" id="inpNotes" rows="3"></textarea>

</div>
<div class="closeRight">
<div class="reserve_error error_below"></div>
<button type="button" class="reserve_submit">Reserve</button>
<button type="button" class="btn btn-default go_back" data-dismiss="modal">Close</button>

</div>

');

define("RESERVE_INPUTS_RU", '
<div class="modalBody">
<h4 class="modal-title">Введите свои данные</h4>
<div class="inpCaption">
    Имя Фамилия
</div>
<input type="text" class="form-control" id="inpName">
<div class="reserve_error errorName"></div>
<div class="inpCaption">
    Телефонный номер
</div>
<input type="text" class="form-control" id="inpTel">
<div class="reserve_error errorTel"></div>
<div class="inpCaption">
    Адрес электронной почты
</div>
<input type="text" class="form-control" id="inpMail">
<div class="reserve_error errorMail"></div>

<div class="flex_mod d-flex justify-content-between">
    <div class=flex_mod_item1>
        <div class="inpCaption">
            Дата прибытия
        </div>
        <input type="date" class="form-control" id="inpArrival">
    </div>
    <div class=flex_mod_item1>

        <div class="inpCaption">
            Дата отбытия
        </div>
        <input type="date" class="form-control" id="inpDeparture">
    </div>
</div>
<div class="flex_mod d-flex justify-content-between">
    <div class=flex_mod_item1>        
        <div class="inpCaption">
            Посетитель
        </div>
        <input type="number" class="form-control" max="100" id="inpVisitor">
    </div>
    <div class=flex_mod_item2>
        <div class="inpCaption">
        Комната
        </div>
        <input type="number" class="form-control" max="8" id="inpRoom">
    </div>
</div>        
<div class="inpCaption">
Включить
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="breakfast_checked">
    <label class="custom-control-label" for="breakfast_checked"> Завтрак</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="dinner_checked">
    <label class="custom-control-label" for="dinner_checked"> Обед</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="supper_checked">
    <label class="custom-control-label" for="supper_checked"> Ужин</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="lanchbox_checked">
    <label class="custom-control-label" for="lanchbox_checked"> Коробка для завтрака(Lunchbox)</label>
</div>
<div class="inpCaption">
Заметки
</div>
<textarea class="form-control" id="inpNotes" rows="3"></textarea>

</div>
<div class="closeRight">
<div class="reserve_error error_below"></div>
<button type="button" class="reserve_submit">Зарезервировать </button>
<button type="button" class="btn btn-default go_back" data-dismiss="modal">Закрыть</button>

</div>

');



?>