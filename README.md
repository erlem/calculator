Calculator
==========

Cloner le projet
----------------------------------

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

###PHPUnit

```
phpunit -c . --coverage-html doc/coverage
```

###phpDocumentor


```
phpdoc -t doc/api
```
