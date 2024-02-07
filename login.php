<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <title>Formularz</title>
  <style>
    body {
      background-color: #f8f9fa;
    }

    form {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      margin-bottom: 0.5rem;
      display: block;
    }

    input,
    select {
      width: 100%;
      padding: 0.375rem;
      margin-bottom: 1rem;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .error-message {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>

<form id="formularz" action="skrypt.php" method="post">
    <label for="imie">Imię:</label>
    <input type="text" id="imie" name="imie" class="form-control">
    <br>

    <label for="nazwisko">Nazwisko:</label>
    <input type="text" id="nazwisko" name="nazwisko" class="form-control">
    <br>

    <label for="data_urodzenia">Data urodzenia:</label>
    <input type="date" id="data_urodzenia" name="data_urodzenia" class="form-control">
    <br>

    <label for="email">Adres email:</label>
    <input type="email" id="email" name="email" class="form-control">
    <br>

    <label for="telefon">Telefon:</label>
    <input type="tel" id="telefon" name="telefon" class="form-control">
    <br>

    <label for="wojewodztwo">Województwo:</label>
    <select id="wojewodztwo" name="wojewodztwo" class="form-control">
    <option value="dolnośląskie">Dolnośląskie</option>
  <option value="kujawsko-pomorskie">Kujawsko-Pomorskie</option>
  <option value="lubelskie">Lubelskie</option>
  <option value="lubuskie">Lubuskie</option>
  <option value="łódzkie">Łódzkie</option>
  <option value="małopolskie">Małopolskie</option>
  <option value="mazowieckie">Mazowieckie</option>
  <option value="opolskie">Opolskie</option>
  <option value="podkarpackie">Podkarpackie</option>
  <option value="podlaskie">Podlaskie</option>
  <option value="pomorskie">Pomorskie</option>
  <option value="śląskie">Śląskie</option>
  <option value="świętokrzyskie">Świętokrzyskie</option>
  <option value="warmińsko-mazurskie">Warmińsko-Mazurskie</option>
  <option value="wielkopolskie">Wielkopolskie</option>
  <option value="zachodniopomorskie">Zachodniopomorskie</option>

    </select>
    <br>

    <label>Płeć:</label>
    <div class="custom-control custom-radio">
      <input type="radio" id="mezczyzna" name="plec" value="mezczyzna" class="custom-control-input">
      <label class="custom-control-label" for="mezczyzna">Mężczyzna</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="kobieta" name="plec" value="kobieta" class="custom-control-input">
      <label class="custom-control-label" for="kobieta">Kobieta</label>
    </div>
    <br>

    <div class="custom-control custom-checkbox">
      <input type="checkbox" id="newsletter" name="newsletter" class="custom-control-input">
      <label class="custom-control-label" for="newsletter">Zgoda na newsletter</label>
    </div>
    <br>

    <input type="submit" name="submit" value="Wyślij" class="btn btn-primary">
</form>

<script>
 $(document).ready(function(){
  $("#formularz").validate({
    rules: {
      imie: {
        required: true
      },
      nazwisko: {
        required: true
      },
      data_urodzenia: {
        required: true,
        date: true
      },
      email: {
        required: true,
        email: true
      },
      telefon: {
        required: true,
      digits: true,
      minlength: 9,
      maxlength: 9
      },
      wojewodztwo: {
        required: true
      },
      plec: {
        required: true
      }
    },
    messages: {
      imie: "Proszę podać imię",
      nazwisko: "Proszę podać nazwisko",
      data_urodzenia: {
        required: "Proszę podać datę urodzenia",
        date: "Proszę podać poprawną datę"
      },
      email: {
        required: "Proszę podać adres email",
        email: "Proszę podać poprawny adres email"
      },
      telefon: {
        required: "Proszę podać numer telefonu",
        digits: "Proszę podać tylko cyfry",
        minlength: "Numer telefonu musi zawierać dokładnie 9 cyfr",
      maxlength: "Numer telefonu musi zawierać dokładnie 9 cyfr"

      },
      wojewodztwo: "Proszę wybrać województwo",
      plec: "Proszę wybrać płeć"
    },
      errorElement: "div",
      errorPlacement: function(error, element) {
        error.addClass("error-message");
        error.insertAfter(element);
      },
    });
  });
</script>

</body>
</html>
