<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Balio hau faltsua izan beharko litzateke.',
    'This value should be true.' => 'Balio hau egia izan beharko litzateke.',
    'This value should be of type {{ type }}.' => 'Balio hau {{ type }} motakoa izan beharko litzateke.',
    'This value should be blank.' => 'Balio hau hutsik egon beharko litzateke.',
    'The value you selected is not a valid choice.' => 'Hautatu duzun balioa ez da aukera egoki bat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Gutxienez aukera {{ limit }} hautatu behar duzu.|Gutxienez {{ limit }} aukera hautatu behar dituzu.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Gehienez aukera {{ limit }} hautatu behar duzu.|Gehienez {{ limit }} aukera hautatu behar dituzu.',
    'One or more of the given values is invalid.' => 'Emandako balioetatik gutxienez bat ez da egokia.',
    'This field was not expected.' => 'Eremu hau ez zen espero.',
    'This field is missing.' => 'Eremu hau falta da.',
    'This value is not a valid date.' => 'Balio hau ez da data egoki bat.',
    'This value is not a valid datetime.' => 'Balio hau ez da data-ordu egoki bat.',
    'This value is not a valid email address.' => 'Balio hau ez da posta elektroniko egoki bat.',
    'The file could not be found.' => 'Ezin izan da fitxategia aurkitu.',
    'The file is not readable.' => 'Fitxategia ez da irakurgarria.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da ({{ size }} {{ suffix }}). Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Fitxategiaren mime mota ez da egokia ({{ type }}). Hauek dira baimendutako mime motak: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Balio hau gehienez {{ limit }} izan beharko litzateke.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Balio hau luzeegia da. Gehienez karaktere {{ limit }} eduki beharko luke.|Balio hau luzeegia da. Gehienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should be {{ limit }} or more.' => 'Balio hau gutxienez {{ limit }} izan beharko litzateke.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Balio hau motzegia da. Karaktere {{ limit }} gutxienez eduki beharko luke.|Balio hau motzegia da. Gutxienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should not be blank.' => 'Balio hau ez litzateke hutsik egon behar.',
    'This value should not be null.' => 'Balio hau ez litzateke nulua izan behar.',
    'This value should be null.' => 'Balio hau nulua izan beharko litzateke.',
    'This value is not valid.' => 'Balio hau ez da egokia.',
    'This value is not a valid time.' => 'Balio hau ez da ordu egoki bat.',
    'This value is not a valid URL.' => 'Balio hau ez da baliabideen kokatzaile uniforme (URL) egoki bat.',
    'The two values should be equal.' => 'Bi balioak berdinak izan beharko lirateke.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da. Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The file is too large.' => 'Fitxategia handiegia da.',
    'The file could not be uploaded.' => 'Ezin izan da fitxategia igo.',
    'This value should be a valid number.' => 'Balio hau zenbaki egoki bat izan beharko litzateke.',
    'This file is not a valid image.' => 'Fitxategi hau ez da irudi egoki bat.',
    'This is not a valid IP address.' => 'Honako hau ez da IP helbide egoki bat.',
    'This value is not a valid language.' => 'Balio hau ez da hizkuntza egoki bat.',
    'This value is not a valid locale.' => 'Balio hau ez da kokapen egoki bat.',
    'This value is not a valid country.' => 'Balio hau ez da herrialde egoki bat.',
    'This value is already used.' => 'Balio hau jadanik erabilia izan da.',
    'The size of the image could not be detected.' => 'Ezin izan da irudiaren tamaina detektatu.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Irudiaren zabalera handiegia da ({{ width }}px). Onartutako gehienezko zabalera {{ max_width }}px dira.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Irudiaren zabalera txikiegia da ({{ width }}px). Onartutako gutxieneko zabalera {{ min_width }}px dira.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Irudiaren altuera handiegia da ({{ height }}px). Onartutako gehienezko altuera {{ max_height }}px dira.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Irudiaren altuera txikiegia da ({{ height }}px). Onartutako gutxieneko altuera {{ min_height }}px dira.',
    'This value should be the user\'s current password.' => 'Balio hau uneko erabiltzailearen pasahitza izan beharko litzateke.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Balio honek zehazki karaktere {{ limit }} izan beharko luke.|Balio honek zehazki {{ limit }} karaktere izan beharko lituzke.',
    'The file was only partially uploaded.' => 'Fitxategiaren zati bat bakarrik igo da.',
    'No file was uploaded.' => 'Ez da fitxategirik igo.',
    'No temporary folder was configured in php.ini.' => 'Ez da aldi baterako karpetarik konfiguratu php.ini fitxategian.',
    'Cannot write temporary file to disk.' => 'Ezin izan da aldi baterako fitxategia diskoan idatzi.',
    'A PHP extension caused the upload to fail.' => 'PHP luzapen batek igoeraren hutsa eragin du.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bilduma honek gutxienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gutxienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bilduma honek gehienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gehienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bilduma honek zehazki elementu {{ limit }} eduki beharko luke.|Bilduma honek zehazki {{ limit }} elementu eduki beharko lituzke.',
    'Invalid card number.' => 'Txartel zenbaki baliogabea.',
    'Unsupported card type or invalid card number.' => 'Txartel mota onartezina edo txartel zenbaki baliogabea.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Hau ez da baliozko banku internazionaleko kontu zenbaki (IBAN) bat.',
    'This value is not a valid ISBN-10.' => 'Balio hau ez da onartutako ISBN-10 bat.',
    'This value is not a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-13 bat.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-10 edo ISBN-13 bat.',
    'This value is not a valid ISSN.' => 'Balio hau ez da onartutako ISSN bat.',
    'This value is not a valid currency.' => 'Balio hau ez da baliozko moneta bat.',
    'This value should be equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be greater than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino handiagoa izan beharko litzateke.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota handiagoa izan beharko litzateke.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be less than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino txikiagoa izan beharko litzateke.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota txikiagoa izan beharko litzateke.',
    'This value should not be equal to {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value }}-(r)en berdina izan behar.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan behar.',
    'Error' => 'Errore',
    'This is not a valid UUID.' => 'Balio hau ez da onartutako UUID bat.',
    'This form should not contain extra fields.' => 'Formulario honek ez luke aparteko eremurik eduki behar.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Igotako fitxategia handiegia da. Mesedez saiatu fitxategi txikiago bat igotzen.',
    'The CSRF token is invalid.' => 'CSRF tokena ez da egokia.',
  ),
));

$catalogueLt = new MessageCatalogue('lt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Reikšmė turi būti neigiama.',
    'This value should be true.' => 'Reikšmė turi būti teigiama.',
    'This value should be of type {{ type }}.' => 'Šios reikšmės tipas turi būti {{ type }}.',
    'This value should be blank.' => 'Ši reikšmė turi būti tuščia.',
    'The value you selected is not a valid choice.' => 'Neteisingas pasirinkimas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Turite pasirinkti bent {{ limit }} variantą.|Turite pasirinkti bent {{ limit }} variantus.|Turite pasirinkti bent {{ limit }} variantų.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Turite pasirinkti ne daugiau kaip {{ limit }} variantą.|Turite pasirinkti ne daugiau kaip {{ limit }} variantus.|Turite pasirinkti ne daugiau kaip {{ limit }} variantų.',
    'One or more of the given values is invalid.' => 'Viena ar daugiau įvestų reikšmių yra netinkamos.',
    'This field was not expected.' => 'Nebuvo tikimasi Šis laukas.',
    'This field is missing.' => 'Šiame lauke yra dingęs.',
    'This value is not a valid date.' => 'Ši reikšmė nėra data.',
    'This value is not a valid datetime.' => 'Ši reikšmė nera data ir laikas.',
    'This value is not a valid email address.' => 'Ši reikšmė nėra tinkamas el. pašto adresas.',
    'The file could not be found.' => 'Byla nerasta.',
    'The file is not readable.' => 'Negalima nuskaityti bylos.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė ({{ size }} {{ suffix }}). Maksimalus dydis {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Netinkamas bylos tipas (mime type) ({{ type }}). Galimi bylų tipai {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Reikšmė turi būti {{ limit }} arba mažiau.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.',
    'This value should be {{ limit }} or more.' => 'Reikšmė turi būti {{ limit }} arba daugiau.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.',
    'This value should not be blank.' => 'Ši reikšmė negali būti tuščia.',
    'This value should not be null.' => 'Ši reikšmė negali būti null.',
    'This value should be null.' => 'Ši reikšmė turi būti null.',
    'This value is not valid.' => 'Netinkama reikšmė.',
    'This value is not a valid time.' => 'Ši reikšmė nėra laikas.',
    'This value is not a valid URL.' => 'Ši reikšmė nėra tinkamas interneto adresas.',
    'The two values should be equal.' => 'Abi reikšmės turi būti identiškos.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė. Maksimalus dydis yra {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Byla per didelė.',
    'The file could not be uploaded.' => 'Byla negali būti įkelta.',
    'This value should be a valid number.' => 'Ši reikšmė turi būti skaičius.',
    'This value is not a valid country.' => 'Ši reikšmė nėra tinkama šalis.',
    'This file is not a valid image.' => 'Byla nėra paveikslėlis.',
    'This is not a valid IP address.' => 'Ši reikšmė nėra tinkamas IP adresas.',
    'This value is not a valid language.' => 'Ši reikšmė nėra tinkama kalba.',
    'This value is not a valid locale.' => 'Ši reikšmė nėra tinkama lokalė.',
    'This value is already used.' => 'Ši reikšmė jau yra naudojama.',
    'The size of the image could not be detected.' => 'Nepavyko nustatyti nuotraukos dydžio.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Nuotraukos plotis per didelis ({{ width }}px). Maksimalus leidžiamas plotis yra {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Nuotraukos plotis per mažas ({{ width }}px). Minimalus leidžiamas plotis yra {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Nuotraukos aukštis per didelis ({{ height }}px). Maksimalus leidžiamas aukštis yra {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Nuotraukos aukštis per mažas ({{ height }}px). Minimalus leidžiamas aukštis yra {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ši reikšmė turi sutapti su dabartiniu naudotojo slaptažodžiu.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ši reikšmė turi turėti lygiai {{ limit }} simbolį.|Ši reikšmė turi turėti lygiai {{ limit }} simbolius.|Ši reikšmė turi turėti lygiai {{ limit }} simbolių.',
    'The file was only partially uploaded.' => 'Failas buvo tik dalinai įkeltas.',
    'No file was uploaded.' => 'Nebuvo įkelta jokių failų.',
    'No temporary folder was configured in php.ini.' => 'Nėra sukonfiguruoto jokio laikino katalogo php.ini faile.',
    'Cannot write temporary file to disk.' => 'Nepavyko išsaugoti laikino failo.',
    'A PHP extension caused the upload to fail.' => 'PHP plėtinys sutrukdė failo įkėlimą ir jis nepavyko.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Sąraše turi būti lygiai {{ limit }} įrašas.|Sąraše turi būti lygiai {{ limit }} įrašai.|Sąraše turi būti lygiai {{ limit }} įrašų.',
    'Invalid card number.' => 'Klaidingas kortelės numeris.',
    'Unsupported card type or invalid card number.' => 'Kortelės tipas nepalaikomas arba klaidingas kortelės numeris.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ši reišmė neatitinka tarptautinio banko sąskaitos numerio formato (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ši reikšmė neatitinka ISBN-10 formato.',
    'This value is not a valid ISBN-13.' => 'Ši reikšmė neatitinka ISBN-13 formato.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ši reikšmė neatitinka nei ISBN-10, nei ISBN-13 formato.',
    'This value is not a valid ISSN.' => 'Ši reišmė neatitinka ISSN formato.',
    'This value is not a valid currency.' => 'Netinkamas valiutos formatas.',
    'This value should be equal to {{ compared_value }}.' => 'Ši reikšmė turi būti lygi {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už arba lygi {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė turi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už arba lygi {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ši reikšmė neturi būti lygi {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė neturi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Nuotraukos santykis yra per didelis ({{ ratio }}). Didžiausias leistinas santykis yra {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Nuotraukos santykis yra per mažas ({{ ratio }}). Mažiausias leistinas santykis yra {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Nuotrauka yra kvadratinė ({{ width }}x{{ height }}px). Kvadratinės nuotraukos nėra leistinos.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Nuotrauka orientuota į plotį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į plotį nėra leistinos.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Nuotrauka orientuota į aukštį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į aukštį nėra leistinos.',
    'An empty file is not allowed.' => 'Failas negali būti tuščias.',
    'Error' => 'Klaida',
    'This form should not contain extra fields.' => 'Forma negali turėti papildomų laukų.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Įkelta byla yra per didelė. bandykite įkelti mažesnę.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF kodas nepriimtinas. Bandykite siųsti formos užklausą dar kartą.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Įvyko autentifikacijos klaida.',
    'Authentication credentials could not be found.' => 'Nepavyko rasti autentifikacijos duomenų.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijos užklausos nepavyko įvykdyti dėl sistemos klaidų.',
    'Invalid credentials.' => 'Klaidingi duomenys.',
    'Cookie has already been used by someone else.' => 'Slapukas buvo panaudotas kažkam kitam.',
    'Not privileged to request the resource.' => 'Neturite teisių pasiektį resursą.',
    'Invalid CSRF token.' => 'Neteisingas CSRF raktas.',
    'No authentication provider found to support the authentication token.' => 'Nerastas autentifikacijos tiekėjas, kuris palaikytų autentifikacijos raktą.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija yra nepasiekiama, pasibaigė galiojimo laikas arba slapukai yra išjungti.',
    'No token could be found.' => 'Nepavyko rasti rakto.',
    'Username could not be found.' => 'Tokio naudotojo vardo nepavyko rasti.',
    'Account has expired.' => 'Paskyros galiojimo laikas baigėsi.',
    'Credentials have expired.' => 'Autentifikacijos duomenų galiojimo laikas baigėsi.',
    'Account is disabled.' => 'Paskyra yra išjungta.',
    'Account is locked.' => 'Paskyra yra užblokuota.',
  ),
  'messages' => 
  array (
    'actions' => 'Operacijos',
    'open' => 'Atviras',
    'one' => 'Vieno pasirinkimo',
    'multi' => 'Kelių pasirinkimų',
    'presentation' => 'Pateikties',
    'main' => 'Apklausos vykdymas',
    'password_change' => 'Slaptažodžio keitimas',
    'account_confirmed' => 'Naudotojo paskyra patvirtinta',
    'account_password_reset_title' => 'Slaptažodžio keitimas',
    'account_password_reset_email' => 'Jūsų elektroninio pašto adresas',
    'account_password_reset_email_placeholder' => 'Pvz.: jonas.baranauskas@paštas.com',
    'account_password_reset_error' => 'Nerastas naudotojas pagal įvestą elektroninio pašto adresą',
    'account_password_reset_success' => 'Informacija kaip pakeisti slaptažodį išsiųsta į jūsų elektroninio pašto dėžutę',
    'account_password_reset_success_confirm' => 'Slaptažodis sėkmingai pakeistas',
    'change' => 'Keisti',
    'settings' => 'Parinktys',
    'groups' => 'Grupė',
    'answers' => 'Atsakymai',
    'general' => 'Bendra informacija',
    'activation' => 'Aktyvacija',
    'questions' => 'Klausimai',
    'blank' => 'Tuščia',
    'empty' => 'Įrašų nerasta',
    'empty_attributes' => 'Savybių nerasta',
    'requied' => 'Yra privalomų laukelių',
    'required_input' => 'Privalote atsakyti į šį klausimą',
    'not_required_input' => 'Klausimas neprivalomas',
    'backgroundcolor' => 'Fono spalva',
    'buttoncolor' => 'Mygtuko spalva',
    'displaytime' => 'Rodymo trukmė',
    'picture' => 'Paveikslėlis',
    'time' => 'Laiko skaičiavimas',
    'file' => 'Nuotrauka',
    'IE' => 'Naršyklė "Internet Explorer" nepalaikoma. Prašome prie sistemos prisijungti su kita naršykle',
    'login.email' => 'Elektroninis paštas',
    'login.password' => 'Slaptažodis',
    'login.remember_me' => 'Prisiminti mane',
    'login.forgot_pass' => 'Pamiršote slaptažodį?',
    'login.validation.email' => 'Neteisingai įvestas elektroninis paštas',
    'login.validation.password' => 'Neteisingai įvestas slaptažodis',
    'test.form.test_name_label' => 'Pavadinimas',
    'test.form.test_input_placeholder' => 'Įveskite apklausos pavadinimą',
    'test.form.description_label' => 'Aprašas',
    'test.form.description_input_placeholder' => 'Įveskite trumpą aprašą apie apklausą',
    'test.form.code' => 'Kodas',
    'test.form.code_test_start' => 'Kodo pvz.: T-123456',
    'test.form.created_at_label' => 'Sukūrimo data',
    'test.form.last_activated_label' => 'Paskutinio akyvavimo data',
    'test.form.is_active_label' => 'Apklausos aktyvumas',
    'test.form.is_active_description' => 'Įjunkite šį jungiklį, kad aktyvuotumėte apklausą',
    'test.form.prev_button_label' => 'Apklausos navigacija',
    'test.form.prev_button_description' => 'Įjunkite šį jungiklį, kad apklausos vykdymo metu būtų rodomas mygtukas grįžti į ankstesnį klausimą',
    'test.form.test_start_label' => 'Apklausos pradžia',
    'test.form.test_end_label' => 'Apklausos pabaiga',
    'test.form.date_placeholder' => 'yyyy-mm-dd hh:mm:ss',
    'test.form.test_question_label' => 'Klausimas',
    'test.form.test_count' => 'Klausimų skaičius',
    'test.form.test_question_input_placeholder' => 'Pasirinkite klausimą...',
    'test.form.participation_count' => 'Vykdymų skaičius',
    'test.form.time_label' => 'Laiko savybė',
    'test.form.time_description' => 'Įjunkite šį jungiklį, kad būtų fiksuoja kiek laiko dalyvis užtruko atsakyti į apklausoje pateiktus klausimus.',
    'test.active' => 'Apklausa aktyvi',
    'test.inactive' => 'Apklausa neaktyvi',
    'test.validation.name' => 'Privaloma užpildyti apklausos pavadinimo laukelį',
    'test.validation.date' => 'Privaloma pasirinkti apklausos pradžios datą',
    'test.validation.code_test_start' => 'Kodas privalo būti 8 simbolių ilgio',
    'test.title.index' => 'Apklausų sąrašas',
    'test.title.show' => 'Apklausos peržiūra',
    'test.title.edit' => 'Apklausos redagavimas',
    'test.title.new' => 'Apklausos kūrimas',
    'test.title.delete' => 'Apklausos trynimas',
    'test.title.test' => 'Apklausa',
    'test.title.example' => 'Apklausos pavyzdys',
    'test.flash_message.test' => 'Norėdami peržiūrėti ar redaguoti apklausą, pasirinkite apklausą iš sąrašo ir paspauskite šalia jos esančią piktogramą, kurios aprašas atitinka jūsų pasirinktą operaciją.',
    'test.flash_message.warning' => 'Netinkamai įvestas kodas',
    'test.flash_message.expired' => 'Apklausos kodas nebegalioja',
    'test.flash_message.not_started' => 'Apklausą galėsite vykdyti nuo: ',
    'test.flash_message.created' => 'Apklausa sėkmingai sukurta',
    'test.flash_message.edited' => 'Apklausa sėkmingai pakeista',
    'test.flash_message.deleted' => 'Apklausa ištrinta',
    'test.flash_message.copy' => 'Apklausos kopija sėkmingai sukurta',
    'test.flash_message.time_over' => 'Laikas skirtas apklausos vykdymui pasibaigė',
    'test.delete_message' => 'Tikrai norite ištrinti šią apklausą?',
    'test.delete_helper' => 'Prieš ištrindami apklausą, įsitikinkite, kad visos apklausoje nustatytos savybės yra ištrintos (pašalintos).',
    'test.test_start_code' => 'Įveskite apklausos kodą',
    'test.test_end' => 'Apklausa baigta.',
    'test.finish_message' => 'Ačiū, kad skyrėtę laiko užpildyti apklausą!',
    'test.button.new' => 'Sukurti apklausą',
    'test.button.delete' => 'Ištrinti apklausą',
    'question.form.question_name_label' => 'Pavadinimas',
    'question.form.question_input_placeholder' => 'Įveskite klausimo pavadinimą',
    'question.form.question_wording_label' => 'Formuluotė',
    'question.form.question_wording_input_placeholder' => 'Įveskite klausimo formuluotę',
    'question.form.description_label' => 'Aprašas',
    'question.form.description_input_placeholder' => 'Įveskite trumpą aprašą apie klausimą',
    'question.form.type_label' => 'Tipas',
    'question.form.type_input_placeholder' => 'Pasirinkite klausimo tipą...',
    'question.form.fk_group_label' => 'Grupė',
    'question.form.fk_group_input_placeholder' => 'Pasirinkite grupę...',
    'question.form.answeroptions_label' => 'Atsakymas',
    'question.form.answeroptions_input_placeholder' => 'Įveskite atsakymo variantą',
    'question.form.required_label' => 'Privalomas',
    'question.form.required_description' => 'Įjunkite šį jungiklį, kad klausimas būtų privalomas.',
    'question.form.time_label' => 'Laiko savybė',
    'question.form.time_description' => 'Įjunkite šį jungiklį, kad būtų fiksuoja kiek laiko dalyvis užtruko atsakyti į apklausoje pateiktą klausimą.',
    'question.required_true' => 'Klausimas privalomas',
    'question.required_false' => 'Klausimas neprivalomas',
    'question.type.open' => 'Atviras',
    'question.type.one' => 'Vieno pasirinkimo',
    'question.type.multi' => 'Kelių pasirinkimų',
    'question.type.presentation' => 'Pateikties',
    'question.title.index' => 'Klausimų sąrašas',
    'question.title.show' => 'Klausimo peržiūra',
    'question.title.edit' => 'Klausimo redagavimas',
    'question.title.new' => 'Klausimo kūrimas',
    'question.title.delete' => 'Klausimo trynimas',
    'question.title.example' => 'Klausimo pavyzdys',
    'question.flash_message.question' => 'Norėdami peržiūrėti ar redaguoti klausimą, pasirinkite klausimą iš sąrašo ir paspauskite šalia jo esančią piktogramą, kurios aprašas atitinka jūsų pasirinktą operaciją.',
    'question.flash_message.created' => 'Klausimas sėkmingai sukurtas',
    'question.flash_message.edited' => 'Klausimas sėkmingai pakeistas',
    'question.flash_message.deleted' => 'Klausimas ištrintas',
    'question.flash_message.copy' => 'Klausimo kopija sėkmingai sukurta',
    'question.validation.question_name' => 'Privaloma užpildyti klausimo pavadinimo laukelį',
    'question.validation.question_wording' => 'Privaloma užpildyti klausimo formuluotės laukelį',
    'question.validation.type' => 'Privaloma pasirinkti ir išsaugoti klausimo tipą',
    'question.validation.input_required' => 'Privalo būti pasirinktas bent vienas atsakymo variantas',
    'question.validation.textarea_required' => 'Atsakymas privalo būti užpildytas',
    'question.delete_message' => 'Tikrai norite ištrinti šį klausimą?',
    'question.delete_helper' => 'Prieš ištrindami klausimą, įsitikinkite, kad visos klausime nustatytos savybės yra ištrintos (pašalintos).',
    'question.button.new' => 'Sukurti klausimą',
    'question.button.delete' => 'Ištrinti klausimą',
    'question.time' => 'Laikas',
    'question.count' => 'Klausimas',
    'question.count_out_of' => 'iš',
    'group.form.name_label' => 'Pavadinimas',
    'group.form.name_input_placeholder' => 'Įveskite grupės pavadinimą',
    'group.form.description_label' => 'Aprašas',
    'group.form.description_input_placeholder' => 'Įveskite trumpą aprašą apie grupę',
    'group.validation.name' => 'Grupės pavadinimas gali būti 2-50 simbolių ilgio',
    'group.title.show' => 'Grupės peržiūra',
    'group.title.edit' => 'Grupės redagavimas',
    'group.title.new' => 'Grupės kūrimas',
    'group.title.index' => 'Grupių sąrašas',
    'group.button.filter_remove' => 'Pašalinti filtrą',
    'group.button.new' => 'Sukurti grupę',
    'group.delete_message' => 'Tikrai norite ištrinti šią grupę?',
    'group.flash_message.created' => 'Grupė sėkmingai sukurta',
    'group.flash_message.edited' => 'Grupė sėkmingai pakeista',
    'group.flash_message.deleted' => 'Grupė ištrinta',
    'attribute.question_attributes' => 'Klausimo savybės',
    'attribute.test_attributes' => 'Apklausos savybės',
    'attribute.background_color' => 'Fono spalva',
    'attribute.background_color_placeholder' => 'Pasirinkite fono spalvą',
    'attribute.button_color' => 'Mygtuko spalva',
    'attribute.button_color_placeholder' => 'Pasirinkite mygtuko spalvą',
    'attribute.picture' => 'Paveikslėlis',
    'attribute.display_time' => 'Rodymo trukmė',
    'attribute.display_time_placeholder_skip' => 'Peršokimas: 0-1',
    'attribute.display_time_placeholder_type' => 'Tipas: 0-1',
    'attribute.display_time_placeholder_time' => 'Trukmė: 0-99999',
    'attribute.display_time_placeholder_vis' => 'Matomumas: 0-1',
    'attribute.time' => 'Laiko skaičiavimas',
    'attribute.file' => 'Paveikslėlis',
    'attribute.files' => 'Paveikslėliai',
    'attribute.empty' => 'Sabybių nėra',
    'attribute.colors' => 'Spalvų sabybės',
    'attribute.time_attributes' => 'Laiko sabybės',
    'attribute.timer' => 'Laikmatis',
    'attribute.chronometer' => 'Chronometras',
    'attribute.seconds' => 'sek.',
    'attribute.next_hidden' => 'Mygtukas paslėptas',
    'attribute.next_off' => 'Mygtukas neveiksnus',
    'attribute.next_forced' => '(Peršoka klausimą)',
    'attribute.next_stay' => '(Neperšoka klausimo)',
    'attribute.validation.unique' => 'Laukelių reikšmės privalo būti unikalios',
    'attribute.validation.file' => 'Nuotrauka privalo būti ne didesnis nei 500KB. Dimensijos turi būti tarp 1500x1500',
    'attribute.validation.required' => 'Paveikslėlis privalo būti ne didesnis nei 500KB. Dimensijos turi būti tarp 1500x1500 ir laukelis negali būti tuščias',
    'attribute.file_missing' => 'Nuotrauka nenustatyta',
    'attribute.file_choose' => 'Pasirinkite nuotrauką...',
    'attribute.file_help' => 'Nuotraukos formatas privalo būti .jpeg, .png arba .jpg',
    'attribute.form.description_label' => 'Aprašas',
    'attribute.form.description_input_placeholder' => 'Įveskite trumpą aprašą apie savybę',
    'attribute.form.name_label' => 'Pavadinimas',
    'attribute.form.name_input_placeholder' => 'Pasirinkite savybę...',
    'attribute.name.backgroundcolor' => 'Fono spalva',
    'attribute.name.buttoncolor' => 'Mygtuko spalva',
    'attribute.name.displaytime' => 'Rodymo trukmė',
    'attribute.name.picture' => 'Paveikslėlis',
    'attribute.name.time' => 'Laiko skaičiavimas',
    'attribute.title.show' => 'Savybės peržiūra',
    'attribute.title.edit' => 'Savybės redagavimas',
    'attribute.title.new' => 'Savybės kūrimas',
    'attribute.title.index' => 'Savybių sąrašas',
    'attribute.button.new' => 'Sukurti savybę',
    'attribute.button.delete' => 'Ištrinti savybę',
    'attribute.delete_message' => 'Tikrai norite ištrinti šią savybę?',
    'attribute.flash_message.created' => 'Savybė sėkmingai sukurta',
    'attribute.flash_message.edited' => 'Savybė sėkmingai pakeista',
    'attribute.flash_message.deleted' => 'Savybė ištrinta',
    'user.title.index' => 'Naudotojų sąrašas',
    'user.title.new' => 'Naudotojo registracija',
    'user.title.edit' => 'Redaguoti profilį',
    'user.form.email_type' => 'Elektroninis paštas',
    'user.form.email_type_placeholder' => 'Įveskite elektroninio pašto adresą. Pvz.: jonas.baranauskas@paštas.com',
    'user.form.name_label' => 'Naudotojo vardas',
    'user.form.name_label_placeholder' => 'Įveskite naudotojo vardą. Pvz.: Jonas',
    'user.form.last_name_label' => 'Naudotojo pavardė',
    'user.form.last_name_label_placeholder' => 'Įveskite naudotojo pavardę. Pvz.: Baranauskas',
    'user.form.phone_label' => 'Telefono numeris',
    'user.form.phone_placeholder' => 'Įveskite naudotojo telefono numerį. Pvz.: +37061236789',
    'user.form.password' => 'Slaptažodis',
    'user.form.repeated_password' => 'Pakartoti slaptažodį',
    'user.form.password_placeholder' => 'Įveskite naudotojo slaptažodį',
    'user.form.password_help' => 'Spaltažodis turi būti bent 6 simbolių ilgio.',
    'user.delete_message' => 'Tikrai norite ištrinti šį naudotoją?',
    'user.validation.email' => 'Privaloma užpildyti elektroninio pašto adreso laukelį',
    'user.validation.name' => 'Privalote užpildyti vardo laukelį',
    'user.validation.last_name' => 'Privalote užpildyti pavardės laukelį',
    'user.validation.phone' => 'Privalote užpildyti telefono numerio laukelį.',
    'user.validation.password' => 'Privalote įvesti slaptažodį. Abu slaptažodžių laukeliai turi sutapti',
    'user.flash_message.created' => 'Naudotojas sėkmingai sukurtas',
    'user.flash_message.edited' => 'Naudotojas sėkmingai pakeistas',
    'user.flash_message.deleted' => 'Naudotojas ištrintas',
    'user.button.delete' => 'Ištrinti naudotoją',
    'answer.placeholder' => 'Atsakymą įveskite į šį laukelį...',
    'answer.next_question' => 'Kitas >',
    'answer.prev_question' => '< Ankstesnis',
    'side_nav.navigation' => 'Navigacija',
    'button.question.new' => 'Klausimo kūrimas',
    'button.question.index' => 'Klausimų sąrašas',
    'button.question.show' => 'Klausimo peržiūra',
    'button.question.edit' => 'Klausimo redagavimas',
    'button.question.title' => 'Klausimai',
    'button.attribute.new' => 'Savybės kūrimas',
    'button.attribute.index' => 'Savybių sąrašas',
    'button.attribute.show' => 'Savybės peržiūra',
    'button.attribute.edit' => 'Savybės redagavimas',
    'button.attribute.title' => 'Savybės',
    'button.user.new' => 'Naudotojo registravimas',
    'button.user.index' => 'Naudotojų sąrašas',
    'button.user.title' => 'Naudotojai',
    'button.user.edit' => 'Redaguoti profilį',
    'button.test.new' => 'Apklausos kūrimas',
    'button.test.index' => 'Apklausų sąrašas',
    'button.test.show' => 'Apklausos peržiūra',
    'button.test.edit' => 'Apklausos redagavimas',
    'button.test.title' => 'Apklausa',
    'button.test.test_start_active' => 'Pradėti apklausą',
    'button.confirm' => 'Patvirtinti',
    'button.login' => 'Prisijungti',
    'button.logout' => 'Atsijungti',
    'button.edit' => 'Redaguoti',
    'button.show' => 'Peržiūrėti',
    'button.delete' => 'Ištrinti',
    'button.save' => 'Išsaugoti',
    'button.new' => 'Sukurti',
    'button.remove' => 'Pašalinti',
    'button.cancel' => 'Atšaukti',
    'poppers.show' => 'Peržiūrėti',
    'poppers.edit' => 'Redaguoti',
    'poppers.example' => 'Peržiūrėti pavyzdį',
    'poppers.delete' => 'Ištrinti',
    'poppers.copy' => 'Kopijuoti',
    'poppers.export' => 'Generuoti rezultatų ataskaitą',
    'poppers.test.activation_desc' => 'Prieš aktyvuodami apklausą privalote nustatyti apklausos pradažios datą',
    'poppers.answer.disabled_option' => 'Išsaugojus "Vieno pasirinkimo" arba "Kelių pasirinkimų" klausimo tipą, suteikiama prieiga pridėti atsakymų variantus',
    'poppers.answer.disabled_option_presentation' => 'Išsaugojus "Pateikties" klausimo tipą, suteikiama prieiga priskirti rodymo trukmės parametrus',
    'poppers.answer.remove_disclaimer' => 'Išsaugojus "Pateiktis" arba "Atviras" klausimo tipą, visi darbartiniai atsakymai (jeigu yra nustatytų) bus ištrinti',
    'poppers.group.add' => 'Sukurti naują grupę',
    'poppers.sort.name' => 'Rūšiuoti pagal pavadinimą',
    'poppers.sort.type' => 'Rūšiuoti pagal tipą',
    'poppers.sort.group' => 'Rūšiuoti pagal grupę',
    'poppers.sort.created_at' => 'Rūšiuoti pagal sukūrimo datą',
    'poppers.sort.start' => 'Rūšiuoti pagal pradžios datą',
    'poppers.sort.end' => 'Rūšiuoti pagal pabaigos datą',
    'poppers.filter.group' => 'Filtruoti pagal grupę',
    'error.title' => 404,
    'error.header' => 'Puslapis nerastas',
    'error.content' => 'Nepavyko rasti pageidaujamo puslapio. Patikrinkite ar įvestame URL nėra klaidų, neatitikimų.',
    'error.go_back' => 'Grįžti į pagrindinį puslapį',
  ),
));
$catalogue->addFallbackCatalogue($catalogueLt);

return $catalogue;
