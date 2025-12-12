**System zur Studentenverwaltung (PHP & MySQL)**
Eine einfache Webanwendung zur Verwaltung von Studentendaten, Noten und akademischem Status in einer Bildungseinrichtung.
**Überblick**
Dieses Projekt dient als praktische Übung in der Webtechnologie (PHP) und konzentriert sich auf Kernkonzepte wie Datenbankinteraktion, Benutzerauthentifizierung und Datenanzeige. Es modelliert ein vereinfachtes Verwaltungssystem für Studentendaten, Noten und die Berechnung akademischer Leistungen.
**Technologie-Stack**
Kategorie,Technologie,Anmerkungen
Serverseitig,PHP,"Verwaltet die gesamte Geschäftslogik, Datenbankabfragen und die Sitzungsverwaltung."
Datenbank,MySQL / MariaDB,Wird zur Speicherung persistenter Daten für Konten und Studenten verwendet.
Umgebung,Localhost (XAMPP/WAMP/MAMP),Standardmäßige lokale Entwicklungsumgebung.
Clientseitig,"HTML, CSS",Wird für das Layout der Benutzeroberfläche und das Styling verwendet.

**Datenbankschema**
Comptes (Konten)
Das System stützt sich auf eine Datenbank namens Examen, die folgende Tabellen enthält:
Feld,Typ,Beschreibung
login,VARCHAR(50),Benutzeranmelde-ID.
password,VARCHAR(50),Benutzerpasswort.
Etudiants (Studenten)
Feld,Typ,Beschreibung
Id,INT,"Primärschlüssel, automatisch inkrementierende ID."
Nom,VARCHAR(50),Vollständiger Name des Studenten.
Email,VARCHAR(50),E-Mail-Adresse des Studenten.
Contrôle,FLOAT,Note für 'Contrôle'.
Projet,FLOAT,Note für 'Projet'.
Examen,FLOAT,Note für 'Examen'.
**Berechnung des Gesamtdurchschnitts**
Die akademische Leistung wird mit gewichteten Durchschnitten berechnet:$$Moyenne = \frac{(25 \times Contrôle) + (15 \times Projet) + (60 \times Examen)}{100}$$
**Schlüsselfunktionen & Seiten**
Die Anwendung ist modularisiert in mehrere zentrale PHP-Dateien, von denen jede für eine spezifische Funktion verantwortlich ist:
Datei,Typ,Beschreibung
Connexion.php,Konfiguration,Behandelt die wesentlichen Verbindungsparameter für die MySQL-Datenbank.
Index.php,Authentifizierung,Anmeldeseite (Abbildung 1). Sichert den Zugriff über Benutzeranmeldung und Passwort.
Menu.php,Navigation,"Bietet die Hauptnavigationslinks: Consultation (Konsultation), Saisie (Eingabe) und Déconnexion (Abmeldung)."
frmConsultation.php,Datenabruf,"Konsultationsseite (Abbildung 2). Zeigt die vollständige Studentenliste, Noten und berechnete Durchschnitte an."
frmSaisie.php,Dateneinfügung,Eingabeseite (Abbildung 3). Formular zur Eingabe der Details und Noten eines neuen Studenten in die Datenbank.
**Konsultationslogik (frmConsultation.php)**
Die Hauptanzeigeseite beinhaltet erweiterte Funktionen zur Datenverwaltung:
**Filterung:** Benutzer können Alle Studenten, Zugelassene Studenten (Durchschnitt $\ge 10$) oder Studenten mit Nachprüfung (Durchschnitt $< 10$) anzeigen.
**Sortierung:** Die Liste wird automatisch nach Leistung (höchster Durchschnitt zuerst) sortiert.
**Interaktivität:** Der Name des Studenten wird als Hyperlink gerendert, um eine E-Mail an den entsprechenden Studenten zu initiieren.
**Installation und Einrichtung**
**Umgebungseinrichtung:** Stellen Sie sicher, dass eine lokale Serverumgebung (XAMPP/WAMP/MAMP) läuft.
**Datenbankerstellung:** Erstellen Sie die Datenbank Examen und führen Sie die notwendigen SQL-Skripte zur Erstellung der Tabellen Comptes und Etudiants aus.
**Dateiplatzierung:** Legen Sie alle PHP-Projektdateien im Dokumentenstamm Ihres lokalen Servers ab (z. B. htdocs/Examen/).
**Zugriff**: Öffnen Sie Ihren Webbrowser und navigieren Sie zum Einstiegspunkt: http://localhost/Examen/index.php.
