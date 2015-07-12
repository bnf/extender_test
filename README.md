Test Extension for TYPO3: Testing DataMapper based Model Extension
==================================================================

## Prinzip:
* Nutzung des Extbase DataMappers
* Ableiten einer eigenen Klasse (Qbus\ExtenderTestSubclass\Domain\Model) von
  der News Klasse \GeorgRinger\News\Domain\Model\NewsDefault

## Nachteile
* Nur nutzbar, wenn der DataMapper genutzt wird
  GeneratUtlity::makeInstance('Original\Class\Name') wird das mapping nicht beachten

## Vorteile
* Funktion können überschrieben werden
* Keine Abhängigkeit zu anderen Extensions
* Kein Overhead (Der DataMapper wird ohnehin ausgeführt)

  
## Resources:
http://keinerweiss.de/525-die-extbase-extension-news-um-ein-feld-erweitern.html
