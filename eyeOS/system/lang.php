<?PHP
/*                              eyeOS project
                     Internet Based Operating System
                               Version 0.9
                     www.eyeOS.org - www.eyeOS.info
       -----------------------------------------------------------------
                  Pau Garcia-Mila Pujol - Hans B. Pufal
       -----------------------------------------------------------------
          eyeOS is released under the GNU General Public License - GPL
               provided with this release in DOCS/gpl-license.txt
                   or via web at www.gnu.org/licenses/gpl.txt

         Copyright 2005-2006 Pau Garcia-Mila Pujol (team@eyeos.org)

          To help continued development please consider a donation at
            http://sourceforge.net/donate/index.php?group_id=145027         */
/* PHP core system language file.
  
   Holds all core system translation tables, one per language supported
   Builds an array of supported languages
   Loads the current language table into the system 
   */
   
$Languages = array (
'english' => array (),
'bulgarian' => array (
	'Your username/password cannot be found' => "Вашите потребител/парола не са открити",
	'Please specify a username and password' => "Моля укажете потребител/парола", 
	'User:' => "Потребител",
	'Password:' => "Парола",
	'Language: ' => "Език",
	'Default'  => "По подр.",
	'Waste bin' => 'Кошче',
	'Submit' => 'Изпращане',
	'Error' => "Грешка",
	'File succesfully saved' => "Файлът е записан успешно",
	'File succesfully removed' => "Файлът е изтрит успешно",
	'to' => "за",
	'at' => "на",
	'Back' => "Назад",
	'New' => "Нов",
	'Edit' => "Редакция",
	'Open' => "Отваряне",
	'Save' => "Запис",
	'Saved' => "Записан",
	'Download' => "Сваляне",
	'View' => "Преглед",
	'Delete' => "Изтриване",
	'File will be permanently deleted. Continue?' => "Файлът ще бъде изтрит. Сигурни ли сте?",
	'Close session' => "Затваряне на сесията",
	),
'catalan' => array (
	'Your username/password cannot be found' => "No s'ha trobat el vostre nom d'usuari/contrasenya",
	'Please specify a username and password' => "Si us plau, especifiqui un nom d'usuari i una contrasenya", 
	'User:' => "Nom d'usuari : ",
	'Password:' => "Contrasenya: ",
	'Language: ' => "Idioma: ",
	'Default'  => 'Per defecte',
	'Waste bin' => 'Paperera',
	'Submit' => 'Enviar',
	'Error' => "Error",
	'File succesfully saved' => "Arxiu desat amb èxit",
	'File succesfully removed' => "Arxiu esborrat amb èxit",
	'to' => "a",
	'at' => "el",
	'Back' => "Tornar",
	'New' => "Nou",
	'Edit' => "Editar",
	'Open' => "Obrir",
	'Save' => "Desar",
	'Saved' => "Desat",
	'Download' => "Descarregar",
	'View' => "Veure",
	'Delete' => "Esborrar",
	'File will be permanently deleted. Continue?' => "Aquest arxiu serà esborrat permanentment. Continuar?",
	'Close session' => "Tancar la sessió",
   ),
'chinese' => array (
	'Your username/password cannot be found' => "用户名或密码错误",
	'Please specify a username and password' => "请核实用户名与密码", 
	'User:' => "用户名",
	'Password:' => "密码",
	'Language: ' => "语言",
	'Default'  => "默认",
	'Waste bin' => '',
	'Submit' => '登录',
	'Error' => "错误",
	'File succesfully saved' => "文件保存成功",
	'File succesfully removed' => "文件删除成功",
	'to' => "到",
	'at' => "在",
	'Back' => "返回",
	'New' => "新建",
	'Edit' => "编辑",
	'Open' => "打开",
	'Save' => "保存",
	'Saved' => "已保存",
	'Download' => "下载",
	'View' => "察看",
	'Delete' => "删除",
	'File will be permanently deleted. Continue?' => "文件将被永久删除，确定吗？",
),
'danish' => array (
	'Your username/password cannot be found' => "Dit brugernavn eller adgangskode er ikke korrekt",
	'Please specify a username and password' => "Skriv dit brugernavn og adgangskode", 
	'User:' => "Brugernavn:",
	'Password:' => "Adgangskode:",
	'Language: ' => "Sprog: ",
	'Default'  => "Default",
	'Waste bin' => 'Affaldspand',
	'Submit' => 'Send',
	'Error' => "Fejl",
	'File succesfully saved' => "Filen blev gemt!",
	'File succesfully removed' => "Filen blev slettet",
	'to' => "til",
	'at' => "vec",
	'Back' => "Tilbage",
	'New' => "Ny",
	'Edit' => "Rediger",
	'Open' => "Åbne",
	'Save' => "Gem",
	'Saved' => "Gemt",
	'Download' => "Download",
	'View' => "Vis",
	'Delete' => "Slet",
	'File will be permanently deleted. Continue?' => "Filen vil blive permanent slettet, ønsker du at fortsætte?",
),
'dutch' => array (
	'Your username/password cannot be found' => "Je naam/wachtwoord is niet gevonden",
	'Please specify a username and password' => "Vul je loginnaam en wachtwoord in", 
	'User:' => "Gebruiker:",
	'Password:' => "Wachtwoord:",
	'Language: ' => "Taal:",
	'Default'  => "Standaard",
	'Waste bin' => 'Prullenbak',
	'Submit' => 'Verstuur',
	'Error' => "Fout",
	'File succesfully saved' => "Bestand is opgeslagen",
	'File succesfully removed' => "Bestand is verwijderd",
	'to' => "aan",
	'at' => "om",
	'Back' => "Terug",
	'New' => "Nieuw",
	'Edit' => "Bewerk",
	'Open' => "Open",
	'Save' => "Bewaar",
	'Saved' => "Bewaard",
	'Download' => "Downloaden",
	'View' => "Bekijken",
	'Delete' => "Verwijderen",
	'File will be permanently deleted. Continue?' => "Bestand wordt voorgoed verwijderd. Doorgaan?"
),
'finnish' => array (
	'Your username/password cannot be found' => "Käytäjänimeä tai salasanaa ei löydy",
	'Please specify a username and password' => "Anna käyttjänimi ja salasana", 
	'User:' => "Käyttäjä",
	'Password:' => "Salasana",
	'Language: ' => "Kieli",
	'Default'  => "Oletus",
	'Waste bin' => 'Roskakori',
	'Submit' => 'Lähetä',
	'Error' => "Virhe",
	'File succesfully saved' => "Tiedosto tallennettiin",
	'File succesfully removed' => "Tiedosto poistettiin",
	'to' => "",
	'at' => "",
	'Back' => "Takaisin",
	'New' => "Uusi",
	'Edit' => "Muokkaa",
	'Open' => "Avaa",
	'Save' => "Tallenna",
	'Saved' => "Tallennetu",
	'Download' => "Lataa",
	'View' => "Katso",
	'Delete' => "Poista",
	'File will be permanently deleted. Continue?' => "tiedosto poistetaan pysyvästi. Jatkatko?",
),
'french' => array (
	'Your username/password cannot be found' => "Votre nom d'utilisateur et mot de passe est introuvable",
	'Please specify a username and password' => "Veuillez specifier un nom d'utilisateur et un mot de passe", 
	'User:' => "Utilisateur",
	'Password:' => "Mots de passe",
	'Language: ' => "Language",
	'Default'  => "Défault",
	'Waste bin' => 'Poubelle',
	'Submit' => 'Soumettre',
	'Error' => "Erreur",
	'File succesfully saved' => "Fichier Sauvegardé avec succès",
	'File succesfully removed' => "Fichier Supprimé avec succès",
	'to' => "vers",
	'at' => "a",
	'Back' => "Arrière",
	'New' => "Nouveaux",
	'Edit' => "Éditer",
	'Open' => "Ouvrir",
	'Save' => "Sauvegarder",
	'Saved' => "Sauvegardé",
	'Download' => "Télécharger",
	'View' => "Visionner",
	'Delete' => "Supprimer",
	'File will be permanently deleted. Continue?' => "Le fichier sera supprimé de facon permanente. Continuer? ",
	'Close session' => "Fermer la session",
),
'german' => array (
	'Your username/password cannot be found' => "Ihr Benutzername/Passwort konnten nicht gefunden werden",
	'Please specify a username and password' => "Bitte geben Sie Benutzernamen und Passwort an", 
	'User:' => "Benutzer:",
	'Password:' => "Passwort:",
	'Language: ' => "Sprache:",
	'Default'  => "Standard",
	'Waste bin' => 'Papierkorb',
	'Submit' => 'Absenden',
	'Error' => "Fehler",
	'File succesfully saved' => "Datei erfolgreich gespeichert",
	'File succesfully removed' => "Datei erfolgreich gelöscht",
	'to' => "an",
	'at' => "um",
	'Back' => "Zurück",
	'New' => "Neu",
	'Edit' => "Bearbeiten",
	'Open' => "Öffnen",
	'Save' => "Speichern",
	'Saved' => "Gespeichert",
	'Download' => "Herunterladen",
	'View' => "Anzeigen",
	'Delete' => "Löschen",
	'File will be permanently deleted. Continue?' => "Datei wird unwiederruflich gelöscht. Trotzdem fortfahren?",
),
'hungarian' => array (
	'Your username/password cannot be found' => "A felhasználóneved/jelszavad nem található",
	'Please specify a username and password' => "Kérlek, adj meg egy felhasználónevet és jelszót", 
	'User:' => "Felhasználó:",
	'Password:' => "Jelszó:",
	'Language: ' => "Nyelv:",
	'Default'  => "Alap",
	'Waste bin' => 'Lomtár',
	'Submit' => 'Állít',
	'Error' => "Hiba",
	'File succesfully saved' => "Fájl sikeresen elmentve",
	'File succesfully removed' => "Fájl sikeresen eltávolítva",
	'to' => "Ide:",
	'at' => "Itt:",
	'Back' => "Vissza",
	'New' => "Új",
	'Edit' => "Szerkeszt",
	'Open' => "Megnyit",
	'Save' => "Elment",
	'Saved' => "Elmentve",
	'Download' => "Letölt",
	'View' => "Megnéz",
	'Delete' => "Törlés",
	'File will be permanently deleted. Continue?' => "A fájl véglegsen törölve lesz. Folytatod?",
),
'italian' => array (
	'Your username/password cannot be found' => "Nome/Password non trovati",
	'Please specify a username and password' => "Specificare Nome e Password", 
	'User:' => "Utente",
	'Password:' => "Password",
	'Language: ' => "Linguaggio",
	'Default'  => "Default",
	'Waste bin' => 'Cestino',
	'Submit' => 'Invia',
	'Error' => "Errore",
	'File succesfully saved' => "File salvato",
	'File succesfully removed' => "File rimosso",
	'to' => "to",
	'at' => "at",
	'Back' => "Indietro",
	'New' => "Nuovo",
	'Edit' => "Edita",
	'Open' => "Apri",
	'Save' => "Salva",
	'Saved' => "Salvato",
	'Download' => "Scarica",
	'View' => "Vedi",
	'Delete' => "Cancella",
	'File will be permanently deleted. Continue?' => "Il file sarà cancellato. Continuo?",
),
'polish' => array (
	'Your username/password cannot be found' => "Twoja nazwa użytkownika lub hasło nie zostało znalezione",
	'Please specify a username and password' => "Proszę wpisać nazwę użytkownika i hasło", 
	'User:' => "Użytkownik",
	'Password:' => "Hasło",
	'Language: ' => "Język",
	'Default'  => "Domyślny",
	'Waste bin' => "Kosz",
	'Submit' => "Wyślij",
	'Error' => "Błąd",
	'File succesfully saved' => "Plik został zachowany",
	'File succesfully removed' => "Plik został usunięty",
	'to' => "do",
	'at' => "w",
	'Back' => "Wstecz",
	'New' => "Nowy",
	'Edit' => "Edytuj",
	'Open' => "Otwórz",
	'Save' => "Zapisz",
	'Saved' => "Zapisane",
	'Download' => "Ściągnij",
	'View' => "Pokaż",
	'Delete' => "Usuń",
	'File will be permanently deleted. Continue?' => "Plik zostanie usuniety na stałe. Kontynuować",
	'Close session' => "Zamknij sesję",
	),
'portuguese' => array (
	'Your username/password cannot be found' => "Não é possível encontrar o seu nome de usuário/senha",
	'Please specify a username and password' => "Por favor especifique o nome de usuário e a senha", 
	'User:' => "Usuário",
	'Password:' => "Senha",
	'Language: ' => "Idioma",
	'Default'  => "Padrão",
	'Waste bin' => "Lixeira",
	'Submit' => 'Enviar',
	'Error' => "Erro",
	'File succesfully saved' => "Documento salvo com sucesso",
	'File succesfully removed' => "Documento removido com sucesso",
	'to' => "para",
	'at' => "em",
	'Back' => "Voltar",
	'New' => "Novo",
	'Edit' => "Editar",
	'Open' => "Abrir",
	'Save' => "Salvar",
	'Saved' => "Salvo",
	'Download' => "Download",
	'View' => "Ver",
	'Delete' => "Eliminar",
	'File will be permanently deleted. Continue?' => "O documento irá ser eliminado. Continuar?",
),
'romanian' => array (
	'Your username/password cannot be found' => "Userul sau parola ta nu sunt corecte",
	'Please specify a username and password' => 'Te rog introdu userul si parola ta' , 
	'User:' => "User",
	'Password:' => "Parola",
	'Language: ' => "Limba",
	'Default'  => "Default",
	'Waste bin' => 'Waste bin',
	'Submit' => 'Intra',
	'Error' => "Eroare",
	'File succesfully saved' =>'Fisierul a fost salvat'  ,
	'File succesfully removed' => 'Fisierul a fost sters' ,
	'to' => "la",
	'at' => "la",
	'Back' => "Inapoi",
	'New' => "Nou",
	'Edit' => "Editeaza",
	'Open' => "Deschide",
	'Save' => "Salveaza",
	'Saved' => "Salvat",
	'Download' => "Descarca",
	'View' => "Vezi",
	'Delete' => "Sterge",
	'File will be permanently deleted. Continue?' => 'Fisierul va fi sters definitiv. Esti sigur ca vrei sa continui?',
	'Close session' => "Inchide sesiunea",
),


'russian' => array (
	'Your username/password cannot be found' => "Нет пользователя с такими данными",
	'Please specify a username and password' => "Укажите имя пользователя и пароль", 
	'User:' => "Пользователь:",
	'Password:' => "Пароль:",
	'Language: ' => "Язык",
	'Default'  => "По умолчанию",
	'Waste bin' => 'Мусорник',
	'Submit' => 'Подтвердить',
	'Error' => "Ошибка",
	'File succesfully saved' => "Файл сохранен",
	'File succesfully removed' => "Файл удален",
	'to' => "кому",
	'at' => "на",
	'Back' => "Назад",
	'New' => "Новый",
	'Edit' => "Редактировать",
	'Open' => "Открыть",
	'Save' => "Сохранить",
	'Saved' => "Сохранено",
	'Download' => "Скачать",
	'View' => "Просмотр",
	'Delete' => "Удалить",
	'File will be permanently deleted. Continue?' => "Файл будет БЕЗВОЗРАТНО удален! Продолжить?",
),
'spanish' => array (
	'Your username/password cannot be found' => "Su nombre de usuario / contraseña no son correctos",
	'Please specify a username and password' => "Por favor, especifique un nombre de usuario y contraseña", 
	'User:' => "Usuario: ",
	'Password:' => "Contraseña: ",
	'Language: ' => "Idioma: ",
	'Default'  => "Por defecto",
	'Waste bin' => 'Papelera',
	'Submit' => 'Enviar',
	'Error' => "Error",
	'File succesfully saved' => "Archivo guardado correctamente",
	'File succesfully removed' => "Archivo borrado correctamente",
	'to' => "para",
	'at' => "a las",
	'Back' => "Atrás",
	'New' => "Nuevo",
	'Edit' => "Editar",
	'Open' => "Abrir",
	'Save' => "Guardar",
	'Saved' => "Guardado",
	'Download' => "Descargar",
	'View' => "Ver",
	'Delete' => "Borrar",
	'File will be permanently deleted. Continue?' => "El archivo será borrado permanentemente. Continuar?",
	'Close session' => "Cerrar la sessión",
	),
'swedish' => array (
	'Your username/password cannot be found' => "Ditt användarnamn/lösenord hittades inte",
	'Please specify a username and password' => "Ange användarnamn och lösenord", 
	'User:' => "Användare:",
	'Password:' => "Lösenord:",
	'Language: ' => "Språk:",
	'Default'  => "Standard",
	'Waste bin' => 'Papperskorg',
	'Submit' => 'Skicka',
	'Error' => "Fel",
	'File succesfully saved' => "Filen sparades",
	'File succesfully removed' => "Filen raderades",
	'to' => "till",
	'at' => "på",
	'Back' => "Tillbaka",
	'New' => "Ny",
	'Edit' => "Redigera",
	'Open' => "Öppna",
	'Save' => "Spara",
	'Saved' => "Sparad",
	'Download' => "Ladda ner",
	'View' => "Visa",
	'Delete' => "Radera",
	'File will be permanently deleted. Continue?' => "Filen kommer att raderas permanent. Vill du fortsätta?",
),
'turkish' => array (
	'Your username/password cannot be found' => "Kullanıcı Adınız/Parolanız bulunamadı",
	'Please specify a username and password' => "Lütfen bir Kullanıcı Adı ve Parola belirleyiniz", 
	'User:' => "Kullanıcı Adı:",
	'Password:' => "Parola:",
	'Language: ' => "Lisan:",
	'Default'  => "Öntanımlı",
	'Waste bin' => 'Çöp Kutusu',
	'Submit' => 'Gönder',
	'Error' => "Hata",
	'File succesfully saved' => "Dosya başarılı bir şekilde kayıt edildi",
	'File succesfully removed' => "Dosya başarılı bir şekilde silindi",
	'to' => "",
	'at' => "",
	'Back' => "Geri",
	'New' => "Yeni",
	'Edit' => "Düzenle",
	'Open' => "Aç",
	'Save' => "Kaydet",
	'Saved' => "Kaydedildi",
	'Download' => "İndir",
	'View' => "Göster",
	'Delete' => "Sil",
	'File will be permanently deleted. Continue?' => "Dosya geri getirilemeyecek şekilde silinecektir. Devam ?",
	),
);

   global $Translations;
   if (isset ($Languages[$select = !empty ($_SESSION['lang']) ? $_SESSION['lang'] : DEFAULTLANG])) {
      $Translations = $Languages[$select];   
   } else
      $Translations = array ();
      
   $Languages = array_keys ($Languages); 
?>
