Orice cauza nobila are nevoie de un ONG. Si orice ONG are nevoie de un loc in care membrii sai (si nu numai) sa isi publice activitatea. Din aceasta cauza, avem nevoie de o aplicatie online sub forma unui blog!

Obiective:

1. Proiectul va utiliza o baza de date MySQL si va fi programat în PHP. *- (da)*

2. Prin intermediul aplicatiei se vor efectua operatii de stergere, adaugare, citire asupra bazei de date. *- (da, se observa CRUD in app/models/Post.php)*

3. Va exista o pagina de autentificare/înregistrare de utilizatori. *- (da, app/views/login_form.php si app/views/register_form.php)*

4. Vor exista mai multe categorii de utilizatori. Fiecare categorie va avea anumite actiuni specifice. *- (da, guests nelogati, readers, writers, admins)*

5. Aplicatia va contine mai multe pagini dinamice cu legaturi între ele. *- (da, public/index.php)*

6. Va exista posibilitatea de generare si vizualizare de rapoarte (nu doar HTML/PHP/CSV). *- (da, app/libs/fpdf.php)*

7. Elemente statistice ale site-ului (website analytics): vizitatori, accesari etc. *- (da, app/models/AnalyticsModel.php)*

8. Formular de contact cu posibilitatea de a transmite email-uri. *- (da, app/libs/PHPMailer.php)*

9. Integrarea de informatii (nu pagini, elemente ale acestora – parsare continut) din surse externe. *- (da, app/controllers/PageController.php)*

10. Terminarea sesiunii. *- (sa speram)*
