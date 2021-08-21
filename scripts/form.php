<div class="inputWrap">
    <input name="Name" id="Name" placeholder="Jméno a příjmení" type="text" onInput="NameValidation(), ButtonValidation()" required>
</div>
<div class="inputWrap">
    <input name="Contact" id="Contact" placeholder="Telefonní číslo / email" type="text" onInput="ContactValidation(), ButtonValidation()" required>
</div>
<p>
    Odešlete nám kontakt na Vás. Číslo, nebo email? <br/>
    Jak je libo. My se Vám obratem ozveme. <br/>
    Vyberte si formu, která Vám vyhovuje.
</p>
<button name="Button" id="Button" class="trx-pointer" onClick="sendContact()">Odeslat <img src="./images/group02.svg"></button>