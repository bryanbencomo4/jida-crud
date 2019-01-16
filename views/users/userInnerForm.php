<div class="container">
<form
    action="<?php URL_BASE.action.'/user' ?>"
    method="POST"
    id="user-form"
>
    <div class="form-group">
        <label for="inputName">Nombre</label>
        <input
            type="text"
            class="form-control"
            id="inputName"
            name="inputName"
            aria-describedby="nameHelp"
            value="<?= $name ?>"
            required
        />
    </div>
    <div class="form-group">
        <label for="inputEmail">Correo Electrónico</label>
        <input
            type="email"
            class="form-control"
            id="inputEmail"
            name="inputEmail"
            aria-describedby="emailHelp"
            value="<?= $email ?>"
            required
        />
    </div>
    <div class="form-group">
        <label for="inputPhoneNumber">Número de Teléfono</label>
        <input
            type="text"
            class="form-control"
            id="inputPhoneNumber"
            name="inputPhoneNumber"
            aria-describedby="phoneNumberHelp"
            value="<?= $phone_number ?>"
            required
        />
    </div>
    <input type="hidden" name="event" id="event">
    <button type="submit" id="submit" class="btn btn-primary">Enviar</button>
</form>
</div>