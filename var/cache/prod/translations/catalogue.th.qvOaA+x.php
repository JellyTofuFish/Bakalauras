<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th', array (
  'validators' => 
  array (
    'This value should be false.' => 'ค่านี้ควรจะเป็น false',
    'This value should be true.' => 'ค่านี้ควรจะเป็น true',
    'This value should be of type {{ type }}.' => 'ค่านี้ควรจะเป็นชนิด {{ type }}',
    'This value should be blank.' => 'ควรจะเป็นค่าว่าง',
    'The value you selected is not a valid choice.' => 'คุณเลือกค่าที่ไม่ตรงกับตัวเลือก',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'คุณต้องเลือกอย่างน้อย {{ limit }} ตัวเลือก',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'คุณเลือกได้มากที่สุด {{ limit }} ตัวเลือก',
    'One or more of the given values is invalid.' => 'มีบางค่าที่ส่งมาไม่ถูกต้อง',
    'This field was not expected.' => 'ฟิลด์นี้ที่ไม่ได้คาดหวัง',
    'This field is missing.' => 'ฟิลด์นี้จะหายไป',
    'This value is not a valid date.' => 'ค่าของวันที่ไม่ถูกต้อง',
    'This value is not a valid datetime.' => 'ค่าของวันที่และเวลาไม่ถูกต้อง',
    'This value is not a valid email address.' => 'ค่าของอีเมล์ไม่ถูกต้อง',
    'The file could not be found.' => 'ไม่พบไฟล์',
    'The file is not readable.' => 'ไฟล์ไม่อยู่ในสถานะที่สามารถอ่านได้',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ไฟล์ใหญ่เกิน ({{ size }} {{ suffix }}) อนุญาตให้ใหญ่ที่สุดได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime type ของไฟล์ไม่ถูกต้อง ({{ type }}) Mime types ที่อนุญาตคือ {{ types }}',
    'This value should be {{ limit }} or less.' => 'ค่านี้ควรจะเป็น {{ limit }} หรือน้อยกว่านั้น',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ค่านี้ยาวเกินไป ควรจะมีแค่ {{ limit }} ตัวอักษรหรือน้อยกว่านั้น',
    'This value should be {{ limit }} or more.' => 'ค่านี้ควรจะมี {{ limit }} หรือมากกว่านั้น',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ค่านี้สั้นเกินไป ควรจะมี {{ limit }} ตัวอักษรหรือมากกว่านั้น',
    'This value should not be blank.' => 'ค่านี้ไม่ควรเป็นค่าว่าง',
    'This value should not be null.' => 'ค่านี้ไม่ควรเป็นค่า null',
    'This value should be null.' => 'ค่านี้ควรเป็นค่า null',
    'This value is not valid.' => 'ค่านี้ไม่ถูกต้อง',
    'This value is not a valid time.' => 'ค่าของเวลาไม่ถูกต้อง',
    'This value is not a valid URL.' => 'ค่าของ URL ไม่ถูกต้อง',
    'The two values should be equal.' => 'ค่าทั้งสองค่าควรจะเหมือนกัน',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ขนาดไฟล์ใหญ่เกินไป อนุญาตให้ไฟล์ขนาดใหญ่ได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The file is too large.' => 'ขนาดไฟล์ใหญ่เกินไป',
    'The file could not be uploaded.' => 'ไม่สามารถอัปโหลดไฟล์ได้',
    'This value should be a valid number.' => 'ค่าของตัวเลขไม่ถูกต้อง',
    'This file is not a valid image.' => 'ไฟล์นี้ไม่ใช่ไฟล์รูปภาพ',
    'This is not a valid IP address.' => 'ค่าของ IP ไม่ถูกต้อง',
    'This value is not a valid language.' => 'ค่าของภาษาไม่ถูกต้อง',
    'This value is not a valid locale.' => 'ค่าของภูมิภาค (Locale) ไม่ถูกต้อง',
    'This value is not a valid country.' => 'ค่าของประเทศไม่ถูกต้อง',
    'This value is already used.' => 'Tค่านี้ถูกใช้งานไปแล้ว',
    'The size of the image could not be detected.' => 'ไม่สามารถตรวจสอบขนาดไฟล์ของภาพได้',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ความกว้างของภาพเกินขนาด ({{ width }}px) อนุญาตให้กว้างได้มากที่สุด {{ max_width }}px',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ความกว้างของภาพไม่ได้ขนาด ({{ width }}px) อนุญาตให้สั้นที่สุด {{ min_width }}px',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ความสูงของภาพเกินขนาด ({{ height }}px) อนุญาตให้สูงได้มากที่สุด {{ max_height }}px',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ความสูงของภาพไม่ได้ขนาด ({{ height }}px) อนุญาตให้สูงอย่างน้อยที่สุด {{ min_height }}px',
    'This value should be the user\'s current password.' => 'ค่านี้ควรจะเป็นรหัสผ่านปัจจุบันของผู้ใช้',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ค่านี้ควรจะมีความยาว {{ limit }} ตัวอักษร',
    'The file was only partially uploaded.' => 'อัปโหลดไฟล์ได้เพียงบางส่วนเท่านั้น',
    'No file was uploaded.' => 'ไม่มีไฟล์ใดถูกอัปโหลด',
    'No temporary folder was configured in php.ini.' => 'ไม่พบไฟล์ temp ควรจะกำหนดใน php.ini',
    'Cannot write temporary file to disk.' => 'ไม่สามารถเขียน temp ไฟล์ลงดิสก์ได้',
    'A PHP extension caused the upload to fail.' => 'PHP extension เกี่ยวกับการอัปโหลดมีปัญหา',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'คอเล็กชั่นนี้ควรจะประกอบไปด้วยอ่างน้อย {{ limit }} สมาชิก',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'คอเล็กชั่นนี้ไม่ควรมีสมาชิกเกิน {{ limit }}',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'คอเล็กชั่นนี้ควรจะมีสมาชิก {{ limit }} เท่านั้น',
    'Invalid card number.' => 'หมายเลขบัตรไม่ถูกต้อง',
    'Unsupported card type or invalid card number.' => 'ไม่รู้จักประเภทของบัตร หรือหมายเลขบัตรไม่ถูกต้อง',
    'This is not a valid International Bank Account Number (IBAN).' => 'นี่ไม่ถูกต้องตาม International Bank Account Number (IBAN)',
    'This value is not a valid ISBN-10.' => 'ค่านี้ไม่ถูกต้องตาม ISBN-10',
    'This value is not a valid ISBN-13.' => 'ค่านี้ไม่ถูกต้องตาม ISBN-13',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ค่านี้ไม่ถูกต้องตามทั้ง ISBN-10 และ ISBN-13',
    'This value is not a valid ISSN.' => 'ค่านี้ไม่ถุกต้องตาม ISSN',
    'This value is not a valid currency.' => 'ค่านี้ไม่ถูกต้องตามสกุลเงิน',
    'This value should be equal to {{ compared_value }}.' => 'ค่านี้ไม่ตรงกับ {{ compared_value }}',
    'This value should be greater than {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่า {{ compared_value }}',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่าหรือตรงกับ {{ compared_value }}',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ควรจะเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'This value should be less than {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่า {{ compared_value }}',
    'This value should be less than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่าหรือเท่ากับ {{ compared_value }}',
    'This value should not be equal to {{ compared_value }}.' => 'ค่านี้ไม่ควรเท่ากันกับ {{ compared_value }}',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ไม่ควรเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'สัดส่วนของภาพใหญ่เกิน ({{ ratio }}) สามารถมีขนาดใหญ่ที่สุดได้ {{ max_ratio }}',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'สัดส่วนของภาพเล็กเกิน ({{ ratio }}) สามารถมีขนาดเล็กที่สุดได้ {{ min_ratio }}',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'รูปภาพเป็นจุตรัส ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นสี่เหลี่ยมจตุรัส',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ภาพนี้เป็นแนวนอน ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวนอน',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ภาพนี้เป็นแนวตั้ง ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวตั้ง',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'พบความผิดพลาดในการรับรองตัวตน',
    'Authentication credentials could not be found.' => 'ไม่พบข้อมูลในการรับรองตัวตน (credentials) ',
    'Authentication request could not be processed due to a system problem.' => 'คำร้องในการรับรองตัวตนไม่สามารถดำเนินการได้ เนื่องมาจากปัญหาของระบบ',
    'Invalid credentials.' => 'ข้อมูลการรับรองตัวตนไม่ถูกต้อง',
    'Cookie has already been used by someone else.' => 'Cookie ถูกใช้งานไปแล้วด้วยผู้อื่น',
    'Not privileged to request the resource.' => 'ไม่ได้รับสิทธิ์ให้ใช้งานส่วนนี้ได้',
    'Invalid CSRF token.' => 'CSRF token ไม่ถูกต้อง',
    'No authentication provider found to support the authentication token.' => 'ไม่พบ authentication provider ที่รองรับสำหรับ authentication token',
    'No session available, it either timed out or cookies are not enabled.' => 'ไม่มี session ที่พร้อมใช้งาน, Session หมดอายุไปแล้วหรือ cookies ไม่ถูกเปิดใช้งาน',
    'No token could be found.' => 'ไม่พบ token',
    'Username could not be found.' => 'ไม่พบ Username',
    'Account has expired.' => 'บัญชีหมดอายุไปแล้ว',
    'Credentials have expired.' => 'ข้อมูลการระบุตัวตนหมดอายุแล้ว',
    'Account is disabled.' => 'บัญชีถูกระงับแล้ว',
    'Account is locked.' => 'บัญชีถูกล็อกแล้ว',
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
    'open' => 'Atviras',
    'one' => 'Vieno pasirinkimo',
    'multi' => 'Kelių pasirinkimų',
    'presentation' => 'Pateikties',
    'button.question.new' => 'Sukurti klausimą',
    'button.question.back' => 'Atgal į sąrašą',
    'button.edit' => 'Redaguoti',
    'button.show' => 'Peržiūrėti',
    'button.question.show.nav' => 'Klausimai',
    'button.question.show.sidenav' => 'Klausimų sąrašas',
    'button.delete' => 'Ištrinti',
    'question.id' => 'Numeracija',
    'question.question.label' => 'Klausimas',
    'question.description.label' => 'Aprašas',
    'question.type.label' => 'Tipas',
    'question.type.placeholder' => 'Pasirinkite tipą',
    'question.type.open' => 'Atviras',
    'question.type.one' => 'Vieno pasirinkimo',
    'question.type.multi' => 'Kelių pasirinkimų',
    'question.type.presentation' => 'Pateikties',
    'question.fk_test.label' => 'Testas',
    'question.fk_test.placeholder' => 'Pasirinkite testą',
    'question.fk_group.label' => 'Grupė',
    'question.fk_group.placeholder' => 'Pasirinkite grupę',
    'question.active' => 'Veiksmai',
  ),
));
$catalogue->addFallbackCatalogue($catalogueLt);

return $catalogue;
