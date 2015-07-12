Test Extension for the TYPO3 "extender"
=======================================

## Motivation

> As it is not possible to extend domain models in extbase directly its sometimes not possible to add properties and methods to a model. This is valid for all cases where the domain model is given as an type hint to an action.
>
> Arguments of an action are mapped from the request to the concret domain model by the argument mapper. The argument mapper does not take typoscript object className mapping into account as the property mapper. Due to this its not possible to just extend the domain model and have the extends available.

## Prinzip
> The extender registers a custom spl class loader. This kicks in for every configured domain model and required a compiled domain model from the class cache.
>
> The class cache gets generated on every hit where an configured compilation is not available and after every clear system cache. In both cases the class cache manager rebuilds the complete class cache.

## Konfiguration
<pre><code>$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['EXTKEY1']['extender']['CLASSNAME']['EXTKEY2'] =
        'EXT:EXTKEY2/Classes/Domain/Model/CLASSNAME.php';
</code></pre>
## Vorteil
* Universal mit jeder Extbase Extension Nutzbar

## Nachteil
* Keine überladen/überschreiben von gettern/settern möglich
* Overhead durch zusätzlichen autoloader
* Bei Änderungen am Code muss der System Cache geleert werden

## Alternatives
* https://github.com/bnf/extender_test/tree/subclass
* http://docs.typo3.org/typo3cms/extensions/news/DeveloperManual/ExtendNews/ProxyClassGenerator/Index.html
  Kopie der Mechanismen (und Code) von EXT:extender -> Nicht zu empfehlen, da Insellösung

## Resources
http://typo3.org/extensions/repository/view/extender
http://docs.typo3.org/typo3cms/extensions/extender/Introduction/Index.html
