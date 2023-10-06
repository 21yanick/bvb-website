# Borussia Dortmund Fan-Webseite

Dieses Projekt wurde im Rahmen des Kurses "Grundlagen der Webprogrammierung" erstellt und dient als Beispiel für eine Fan-Webseite des Fußballclubs Borussia Dortmund.

## Voraussetzungen

- XAMPP oder eine ähnliche lokale Serverumgebung
- PHP
- MySQL
- Ein Webbrowser

## Installation

1. **Klonen oder Herunterladen des Projekts:**  
   Laden Sie das Projekt von GitHub herunter oder klonen Sie es in ein Verzeichnis Ihrer Wahl.

2. **Verschieben Sie das Projekt in das `htdocs`-Verzeichnis von XAMPP:**  
   Wenn Sie XAMPP verwenden, verschieben Sie das Projektverzeichnis in den `htdocs`-Ordner von XAMPP.

3. **Datenbank-Setup:**

   - **Öffnen Sie phpMyAdmin:** Starten Sie XAMPP und klicken Sie im XAMPP-Control-Panel auf den Button "Admin" neben MySQL.
   - **Erstellen Sie eine neue Datenbank:** Geben Sie der Datenbank den folgenden Namen: "bvb_products".
   - **Importieren Sie die .sql-Datei:** Klicken Sie auf den Tab "Importieren" und wählen Sie die .sql-Datei aus, die im Hauptverzeichnis des Projekts bereitgestellt wurde. Klicken Sie auf "OK" oder "Start", um den Import zu starten.

4. **Konfigurieren Sie die Datenbankverbindung:**  
   Öffnen Sie die Datei `db_connect.php` und aktualisieren Sie die Datenbankverbindungsinformationen (falls erforderlich) entsprechend Ihrer lokalen Umgebung.

5. **Starten Sie den lokalen Server:**  
   Starten Sie Apache und MySQL über das XAMPP-Control-Panel.

6. **Öffnen Sie das Projekt im Browser:**  
   Geben Sie in Ihrem Webbrowser `http://localhost/[Projektverzeichnisname]/shop.php` ein, wobei `[Projektverzeichnisname]` der Name des Verzeichnisses ist, in das Sie das Projekt kopiert haben.

## Nutzung

Navigieren Sie durch die Webseite, um die verschiedenen Abschnitte und Features zu erkunden. Auf der Shop-Seite können Sie die Produktliste anzeigen und auf den "Kaufen"-Button klicken, um eine Bestätigungsnachricht zu erhalten.

## Hinweis
Getestet mit Firefox und Chrome Browser.
Dies ist ein Testprojekt und nicht für den tatsächlichen Gebrauch oder den Verkauf von Produkten vorgesehen.
