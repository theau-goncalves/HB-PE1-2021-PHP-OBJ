# HB-PE1-2021-PHP-OBJ
Human Booster PE1 2021 Clermont-Ferrand php object lesson

## Program

### Theory


- [x] Object on PHP
- [x] Simple explanation  of composer
- [x] PHP DateTime
  - https://www.php.net/manual/fr/function.date.php
- [x] Create a php Class (base folder)
- [x] Attributes
- [x] Methods
- [x] Constructor
- [x] Visibility (public private protected)
- [x] Heritage
- [ ] __invoke
- [x] __toString
- [ ] Exceptions
- [ ] Static
- [x] Abstract
- [ ] Trait
- [ ] Interface
- [ ] ReflectionClass
- [ ] [Composer -> HB Lesson](https://github.com/theau-goncalves/composer-autoloader)

### Exercises
- Date (date folder)
- Contact and user -> heritage and class basics (base folder)
- Simple RPG game

## Usefull links
- [Get composer](https://getcomposer.org/download/)
- [PSR-2: Coding Style Guide](https://www.php-fig.org/psr/psr-2/)
- [PHP DOC](https://docs.phpdoc.org/3.0/guide/references/phpdoc/tags/index.html#tag-reference)
- [PHP DOC examples](https://docs.phpdoc.org/3.0/guide/guides/docblocks.html)
- [DateInterval Format](https://www.php.net/manual/en/dateinterval.format.php)
- [DateTime format](https://www.php.net/manual/en/datetime.format)

## Requirements

- Composer 1 or 2
- PHP > 8.0

## RPG
### Class
- Classe Hero (Abstract)
- Classe enfant Warrior/ Bard / CoffeeThrower
- Class Mob (V2)

### Hero attributes
- name 
- favorite quote (Citation favorite)
- maxHp (Point de vie max)
- maxMp (Point de magie max)
- hp (Point vie / Health Point)
- mp (Point de magie / Mana pool) 
- atk (Point d'attaque physique)
- magicAtk (Point d'attaque magic)
- armor (Point d'armure)
- magicArmor (Point d'armure magique)
- speed (V2) (Vitesse -> défini l'ordre d'attaque)
- xp (V2) (Point d'expérience)

### Items Class
- Classe Item (V2)
- Class enfant Armor (V2)
- Classe enfant Potion (V2)

### Other Class

- Class de display message (vu du static) 
