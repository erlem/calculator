Calculator
==========

Cloner le projet
----------------------------------

Bienvenue sur le projet "Calculator". Ce projet a un but pédagogique, il permet de comprendre les tests unitaires, la génération de documentation et permet de s'interfacer avec Jenkins et Sonar pour la construction d'usine logicielle.

```
sudo git clone https://github.com/erlem/calculator.git
```


Installer PEAR
----------------------------------

PEAR est l'abbréviation de " PHP Extension and Application Repository " et se prononce 'père' (NDT : pear veut dire poire en Anglais).

```
sudo apt-get install php-pear
```

Installer PHPUnit
----------------------------------

PHPUnit est un framework de tests unitaires open source dédié au langage de programmation PHP. Crée par Sebastian Bergmann,il intègre les concepts communs aux bibliothèques de tests unitaires xUnit.

```
sudo apt-get install phpunit
```

Installer phpDocumentor
----------------------------------

phpDocumentor est un outil de génération de documentation écrit en PHP semblable à l'outil Javadoc en analysant le code source des fichiers PHP et en générant la documentation au format HTML, PDF, CHM ou Docbook.

```
sudo pear channel-discover pear.phpdoc.org
sudo pear install phpdoc/phpDocumentor
```

Lancer PHPUnit, phpDocumentor
----------------------------------

###Changer les droits et aller dans le répertoire calculator
```
sudo chmod 777 -R calculator
cd calculator
```

###PHPUnit

```
phpunit -c . --coverage-html doc/coverage
```

###phpDocumentor


```
phpdoc -t doc/api -d .
```